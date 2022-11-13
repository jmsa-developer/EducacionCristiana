<?php

namespace App\Controllers;

//use App\Forms\GrupoAsignacionForm;
use App\Models\Grupoasignacion;
use App\Models\Docente;
use App\Models\Zona;

use App\Session;
use App\Util;
use App\View;

// Controlador principal de la aplicacion
class GrupoasignacionController extends BaseController
{

    public function registroAction()
    {
        if ($this->post) {
            $grupoasignacion = new Grupoasignacion();
            if ($grupoasignacion->register($this->post)) {
                Session::set('message', ['type' => 'success', 'message' => 'Grupo registrado correctamente']);

                View::redirect('/grupoasignacion/registro');
            } else {
                Session::set('message', ['type' => 'danger', 'message' => 'Error al registrar el  Grupo']);

            }
        }



    $docentes = Docente::get()->all();
    $zonas = Zona::get()->all();

    $docentesOptions = Util::renderOptions($docentes, 'id', ['nombre','apellido']);
    $zonasOptions = Util::renderOptions($zonas, 'id', 'zona_nombre');

 //   $ministeriosOptions = Util::renderOptions($ministerios, 'id', ['nombre_m','lider_ministerio']);

    View::render('grupoasignacion.php',[
        'docentesOptions' => $docentesOptions,
        'zonasOptions' => $zonasOptions
    ]);

    }

    public function consultaAction()
    {
        $grupoasignaciones = grupoasignacion::get()->all();
        $docentes = Docente::get()->all();
    $zonas = Zona::get()->all();

        View::render('grupoasignacionconsulta.php', [
            'grupoasignaciones' => $grupoasignaciones,
            'docentesOptions' => $docentesOptions,
            'zonasOptions' => $zonasOptions
        ]);
    }



 
}