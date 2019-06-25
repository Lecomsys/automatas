<?php

namespace App\Http\Controllers;

use App\Services\PhpstormProjectService;

//use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        return view('welcome');
    }

    public function getPhpstorm() {
        $input = request()->input();

        try {
            dd(env('BASE_PROJECT_FOLDER'));
            $color = @$input['color'];
            $project_name = @$input['project_name'];
            $project_path = sprintf("%s/%s", env('BASE_PROJECT_FOLDER'), $project_name);

            return view('phpstorm/index', compact('color', 'project_name', 'project_path'));

        } catch (Throwable $throwable) {
            echo $throwable->getMessage();
        }
    }

    public function postPhpstorm() {
        try {
            $input = request()->except('_token', 'submit');

            $project_name = $input['project_name'];
            $color = $input['color'];

            $project_path = sprintf("%s/%s", self::PROJECTS_BASEPATH, $project_name);

//            printf("<pre>Proyecto: <strong>%s</strong></pre>", $project_name);
//            printf("<pre>Ruta: <strong>%s</strong></pre>", $project_path);
//            printf("<pre>Color: <strong>%s</strong></pre>", $color);

//            die;
//            dd($project_path);

            PhpstormProjectService
                ::make($project_path)
                ->setProjectViewBGColor($color);

            return redirect()
                ->to('phpstorm')
                ->with('message', sprintf("El color de fondo de <strong>%s</strong> ha sido modificado satisfactoriamente a <strong><i>%s</i></strong>.",
                    $project_name, $color));

        } catch (Throwable $throwable) {
            echo $throwable->getMessage();
        }
    }
}
