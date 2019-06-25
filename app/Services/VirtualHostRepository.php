<?php

namespace App\Services;

use Exception;
use App\Models\VirtualHost;
use Illuminate\Console\OutputStyle;
use Illuminate\Support\Facades\Storage;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class VirtualHostRepository {

    /** @var \Illuminate\Console\OutputStyle $output */
    protected $output;

    protected function __construct($output = null) {
        if ($output) {
            $this->output = $output;
        }
    }

    public static function make($output = null) : self {
        return new self($output);
    }

    public function reload_apache() {
        $process = new Process(['systemctl', 'reload', 'apache2']);

        $this->output->writeln("Reiniciando servidor Apache...");
        $process->run();
        $this->output->writeln("... Listo.");

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
    }

    public function add_host($host_ip, $host_name) : self {

        $filesystem = Storage::disk();
        $this->output->writeln("Accediendo al sistema de archivos...");
        $this->output->writeln("\t... Listo.");

        switch (strtoupper(PHP_OS_FAMILY)) {
            case 'WINDOWS':
                $hostsfile_path = 'C:\\Windows\\System32\\drivers\\etc\\hosts';
            break;

            case 'LINUX':
                $hostsfile_path = '/etc/hosts';
            break;

            default:
                throw new Exception('Sistema operativo no compatible: "'.PHP_OS.'".');
            break;
        }

        if (!$filesystem->exists($hostsfile_path)) {
            throw new Exception('No se pudo encontrar el archivo de hosts (' . $hostsfile_path . ').');
        }

        $hostsfile_contents = $filesystem->get($hostsfile_path);
        $matches = null;
        $regex = "/.*($host_ip)\s*($host_name).*/";

        preg_match_all($regex, $hostsfile_contents, $matches);

        if ($matches[0]) { // Si el host no esta agregado...
            $this->output->writeln("El dominio ya se encontraba agregado al archivo.", OutputInterface::OUTPUT_NORMAL);
        } else {
            $hostsfile_contents .= "\n"."$host_ip $host_name"."\n"; // Agrego la linea del host
            $filesystem->put($hostsfile_path, $hostsfile_contents);

            $this->output->writeln("Agregando dominio al archivo de hosts... Listo.", OutputInterface::OUTPUT_NORMAL);
        }

        return $this;
    }

    public function add_virtual_host(VirtualHost $virtual_host) : self {
        $saved_vhost = $virtual_host->save();
        $this->output->note('Virtual Host guardado en: '.$saved_vhost);

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_project_name() : string {
        return $this->project_name;
    }

    /**
     * @param mixed $project_name
     * @return self
     */
    public function set_project_name($project_name): self {
        $this->project_name = $project_name;
        return $this;
    }

    public function enable_site(VirtualHost $virtualhost) {
        $this->output->writeln('Habilitando virtual host ('.$virtualhost->get_filename().')...');
        $this->output->note(var_export($virtualhost->get_filename(), true));

        $process = new Process(['a2ensite', $virtualhost->get_filename()], $virtualhost->get_directory());
        $process->run();
        $this->output->writeln('... Listo.');

        return $this;
    }
}
