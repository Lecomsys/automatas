<?php

namespace App\Console\Commands;

use App\Models\VirtualHost;
use App\Services\VirtualHostRepository;
use Illuminate\Console\Command;
use Throwable;

class ApacheMKSiteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'apache:mksite';
    // EJEMPLO: php artisan apache:mksite ioncube
    //

    protected function defineSignature() {
        $command_pieces = [ $this->signature,
            '{project_name : Nombre del proyecto (sin espacios).}',
            '{--folder= : Nombre de la carpeta en donde reside el proyecto.}',
            '{--admin= : Dirección de correo electrónico del admin del sitio.}',
            '{--vhost= : Dominio bajo el que se accederá al sitio.}',
            '{--ip=127.0.0.1 : Dirección IP a la que estará asociado el vhost.}',
            '{--alias=* : Alias/es del dominio principal bajo el/los que se accederá al sitio. Separados con coma (,) en caso de ser varios.}',
        ];

        $this->signature = sprintf("%s", implode(' ', $command_pieces));
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Activa un nuevo website para el servidor web Apache.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->defineSignature();
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->is_running_as('root');

        $project_name = $this->argument('project_name');
        $project_folder = $this->option('folder') ? $this->option('folder') : $project_name;
        $server_name = $this->option('vhost') ? $this->option('vhost') : $project_name.'.localhost';
        $server_alias = $this->option('alias') ? implode(' ', $this->option('alias')) : ['www.'.$server_name];
        $server_admin = $this->option('admin') ? $this->option('admin') : 'webmaster@'.$server_name;
        $server_ip = $this->option('ip') ? $this->option('ip') : '127.0.0.1';

        $virtual_host = VirtualHost::make()
            ->set_project_name($project_name)
            ->set_project_folder($project_folder)
            ->set_server_name($server_name)
            ->set_server_alias($server_alias)
            ->set_server_admin($server_admin);

        try {
            VirtualHostRepository::make($this->getOutput())
                ->add_host($server_ip, $server_name)
                ->add_virtual_host($virtual_host)
                ->enable_site($virtual_host)
                ->reload_apache();

        } catch (Throwable $throwable) {
            $this->comment('EXCEPCION: '.$throwable->getMessage());
        }

    }

    /**
     * @param string $user
     */
    protected function is_running_as(string $user) {
        system("whoami"); die;
    }
}
