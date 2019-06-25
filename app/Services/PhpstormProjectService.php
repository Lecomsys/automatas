<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use SimpleXMLElement;

class PhpstormProjectService {

    protected $project_path;
    protected $base_project_path;

    protected function __construct($project_path, $base_project_path) {
        $this->project_path = $project_path;
        $this->base_project_path = $base_project_path;
    }

    public static function make($project_path, $base_project_path) {
        return new self($project_path, $base_project_path);
    }

    public function set_project_view_bgcolor($color) {
        /*
         * 1. Ubicar la carpeta .idea del proyecto
         * 2. Cargar en memoria el archivo workspace.xml que hay en esa carpeta
         * 3. Utilizar algun XML parser para procesar este archivo de manera correcta.
         * 4. Setear (si es que no existe) el dato que cambia el color de fondo del projecto en cuestion.
         * 5. Cerrar el archivo guardando los cambios.
         * 6. Opcionalmente, ofrecerle al usuario de reiniciar el IDE al finalizar el comando.
         */
        $filesystem = Storage::disk();
        $project_path = $this->get_project_path();

        if (!$filesystem->exists($project_path)) { throw new Exception('No existe la carpeta de proyecto especificada ('.$project_path.')'); }

        $idea_folder = sprintf("%s/.idea", $project_path);
        if (!$filesystem->exists($idea_folder)) { throw new Exception('No existe la carpeta ".idea" dentro del proyecto.'); }

        $workspace_file_path = sprintf("%s/workspace.xml", $idea_folder);
        if (!$filesystem->exists($workspace_file_path)) { throw new Exception('No se encontró el archivo "workspace.xml" dentro del proyecto.'); }

        $workspace_xml = $filesystem->get($workspace_file_path);
        $xml_document = new SimpleXMLElement($workspace_xml);

        $component_is_needed = true;
        $element_is_needed = true;

        // Recorro 1 vez el XML para verificar que necesita que le agregue...
        foreach ($xml_document->component as $component)
        {
            if ($component['name'] == 'FileColors')
            {
                if ($component->fileColor)
                {
                    if ($component->fileColor['scope'] == 'Project Files')
                    {
                        $component->fileColor['color'] = $color;
                        $element_is_needed = false;
                    }
                }
                $component_is_needed = false;
            }
        }

        if ($component_is_needed) {
            $new_component = $xml_document->addChild("component");
            $new_component->addAttribute('name', 'FileColors');
        } else {
            $new_component = $xml_document->xpath('component[@name="FileColors"]');
        }

        if ($element_is_needed) {
            $new_element = $new_component->addChild('fileColor');
            $new_element->addAttribute('scope', 'Project Files');
            $new_element->addAttribute('color', $color);
        }

        $new_xml = $xml_document->asXML();
        $filesystem->put($workspace_file_path, $new_xml);
    }

    /**
     * @return string
     */
    public function get_project_path(): string {
        return sprintf("%s/%s", $this->base_project_path, $this->project_path);
    }

    /**
     * @param mixed $project_path
     */
    public function set_project_path($project_path): void {
        $this->project_path = $project_path;
    }
}
