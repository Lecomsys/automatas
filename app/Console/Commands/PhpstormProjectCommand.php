<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\PhpstormProjectService;

class PhpstormProjectCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'phpstorm:project'; // Sintaxis BASE del comando, pero en el constructor la defino COMPLETA.

    protected function defineSignature() {
        $command_pieces = [ $this->signature,
            '{--bgcolor=000000 : Color de fondo para la vista de proyecto.}',
            '{--base_path=/home/leocomerci/Projects : Carpeta base donde residen los proyectos.}',
            '{project_path : Ubicación relativa del proyecto dentro de la carpeta base.}',
        ];

        $this->signature = sprintf("%s", implode(' ', $command_pieces));
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Utilidad para gestionar proyectos de PhpStorm (IDE).';

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
        $bg_color = $this->option('bgcolor');
        $project_path = $this->argument('project_path');
        $base_project_path = $this->option('base_path');

        if ($bg_color) {
            try {
                PhpstormProjectService::make($project_path, $base_project_path)
                    ->set_project_view_bgcolor($bg_color);

                $this->comment('El color de fondo del proyecto ahora es: ' . $bg_color);
            } catch (\Throwable $throwable) {
                $this->warn('Error: '.$throwable->getMessage());
            }
        }
    }
}
