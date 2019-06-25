<?php

namespace App\Models;

use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Symfony\Component\Finder\Finder;

class VirtualHost {

    protected $project_name;
    protected $project_folder;

    protected $server_name;
    protected $server_alias;
    protected $server_admin;
    protected $server_ip;

    protected $filename;
    protected $directory;

    protected function __construct() {}

    public static function make() {
        return new self;
    }

    /**
     * @return mixed
     */
    public function get_project_name() {
        return $this->project_name;
    }

    /**
     * @param mixed $project_name
     * @return VirtualHost
     */
    public function set_project_name($project_name) {
        $this->project_name = $project_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_project_folder() {
        return $this->project_folder;
    }

    /**
     * @param mixed $project_folder
     * @return VirtualHost
     */
    public function set_project_folder($project_folder) {
        $this->project_folder = $project_folder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_server_name() {
        return $this->server_name;
    }

    /**
     * @param mixed $server_name
     * @return VirtualHost
     */
    public function set_server_name($server_name) {
        $this->server_name = $server_name;
        return $this;
    }

    /**
     * @param mixed $server_alias
     * @return VirtualHost
     */
    public function set_server_alias($server_alias) {
        $this->server_alias = $server_alias;
        return $this;
    }

    /**
     * @param mixed $server_admin
     * @return VirtualHost
     */
    public function set_server_admin($server_admin) {
        $this->server_admin = $server_admin;
        return $this;
    }

    /**
     * @param mixed $server_ip
     * @return VirtualHost
     */
    public function set_server_ip($server_ip) {
        $this->server_ip = $server_ip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_server_ip() {
        return $this->server_ip;
    }

    /**
     * @return mixed
     */
    public function get_server_admin() {
        return $this->server_admin;
    }

    /**
     * @return mixed
     */
    public function get_server_alias() {
        return $this->server_alias;
    }

    /**
     * @param mixed $filename
     * @return VirtualHost
     */
    public function set_filename($filename) {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_filename() {
        return $this->filename;
    }

    public function render() {
        $view = View::make('apache2/vhost', ['virtual_host' => $this]);
        return $view->render();
    }

    public function save() {
        $filesystem = Storage::disk(); // Obtengo acceso al disco

        switch (strtoupper(PHP_OS_FAMILY)) {
            case 'LINUX':
                $folder_sep = '/';
                $apache_folder = '/etc/apache2';
                $sites_available_folder = $apache_folder.'/sites-available';
            break;

            case 'WINDOWS':
                $folder_sep = '\\';
                $apache_folder = 'C:\\xampp\\apache';
                $sites_available_folder = $apache_folder.'\\conf';
            break;

            default:
                throw new Exception(sprintf("[%s] Sistema operativo no identificado (%s).", __METHOD__, PHP_OS_FAMILY));
            break;
        }

        // patron de regex: 0XX-NombreSitio.conf
        $regex_numeric_vhosts = '/(\d{1,3})-([a-zA-Z0-9-]+)(\.conf$)/';
        $max_site_index = 0;

        foreach (( new Finder )->in($sites_available_folder)->files()->name($regex_numeric_vhosts) as $file) {
            preg_match($regex_numeric_vhosts, $file->getRelativePathname(), $matches);
            $site_index = (integer) $matches[1];
            $max_site_index = max($max_site_index, $site_index);
        } // $max_site_index contendra el maximo numero de sitio dentro de esa carpeta.

        $this->set_filename(sprintf("%s-%s.conf", sprintf("%03d", $max_site_index+1), $this->get_project_name()));
        $this->set_directory($sites_available_folder);

        $new_vhost_path = sprintf("${sites_available_folder}${folder_sep}%s", $this->get_filename());
        $rendered_vhost_file = $this->render();

        $filesystem->put($new_vhost_path, $rendered_vhost_file);

        return $new_vhost_path;
    }

    /**
     * @return mixed
     */
    public function get_directory() {
        return $this->directory;
    }

    /**
     * @param mixed $directory
     * @return self
     */
    public function set_directory($directory): self {
        $this->directory = $directory;
        return $this;
    }
}
