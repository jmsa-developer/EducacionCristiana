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
        $grupoasignaciones = Grupoasignacion::get()->all();

        View::render('grupoasignacionconsulta.php', [
            'grupoasignaciones' => $grupoasignaciones,
        ]);
    }

    public function modificarAction()
    {
        $id = $_GET['id'];

        $grupoasignacion = new Grupoasignacion();
        if ($this->post) {
            $grupoasignacion->update($id, $this->post);
            Session::set('message', ['type' => 'success', 'message' => 'Grupo actualizado correctamente']);
            View::redirect('/grupoasignacion/consulta');
        }

        $grupoasignacion = Grupoasignacion::get()->where(['id' => $id])->one();

        if ($grupoasignacion) {

            $docentes = Docente::get()->all();
            $zonas = Zona::get()->all();
            $docentesOptions = Util::renderOptions($docentes, 'id', ['nombre', 'apellido'], $grupoasignacion->docente->id);
            $zonasOptions = Util::renderOptions($zonas, 'id', ['zona_nombre'], $grupoasignacion->zona->id);

            View::render('grupoasignacionmodificar.php', [
                'grupoasignacion' => $grupoasignacion,
                'docentesOptions' => $docentesOptions,
                'zonasOptions' => $zonasOptions
            ]);
        }

        Session::set('message', ['type' => 'danger', 'message' => "El Grupo $id no existe"]);
        View::redirect('/app/index');

    }

 
}