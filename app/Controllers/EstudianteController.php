<?php

namespace App\Controllers;

use App\Models\Estudiante;
use App\Models\Ministerio;
use App\Models\Pastor;
use App\Models\Usuario;
use App\Models\Zona;
use App\Session;
use App\Util;
use App\View;

// Controlador principal de la aplicacion
class EstudianteController extends BaseController
{
    public function registroAction()
    {
        if ($this->post) {
            $estudiante = new Estudiante();
            if ($estudiante->register($this->post)) {
                Session::set('message', ['type' => 'success', 'message' => 'Estudiante registrado correctamente']);

                View::redirect('/estudiante/registro');
            } else {
                Session::set('message', ['type' => 'danger', 'message' => 'Error la cedula del estudiante ya existe']);

            }
        }

        $pastores = Pastor::get()->all();
        $ministerios = Ministerio::get()->all();
        $zonas = Zona::get()->all();

        $pastoresOptions = Util::renderOptions($pastores, 'id', ['nombre','turno']);
        $ministeriosOptions = Util::renderOptions($ministerios, 'id', ['nombre_m', 'lider_ministerio']);
        $zonasOptions = Util::renderOptions($zonas, 'id', 'zona_nombre');

        View::render('estudiante.php',[
            'pastoresOptions' => $pastoresOptions,
            'ministeriosOptions'=>$ministeriosOptions,
            'zonasOptions'=>$zonasOptions
        ]);       
      }


     function consultaAction()
    {
        $estudiantes = Estudiante::get()->all();
   

         View::render('estudianteconsulta.php',[
            'estudiantes'=>$estudiantes,
         ]);
         Session::set('message', ['type' => 'danger', 'message' => "El estudiante $id no existe"]);
    }

public function modificarAction()
 {
    $id = $_GET['id'];

    $estudiante = new Estudiante();
        if ($this->post) {
            $estudiante->update($id, $this->post);
            Session::set('message', ['type' => 'success', 'message' => 'Estudiante actualizado correctamente']);
            View::redirect('/estudiante/consulta');
        }

    $estudiante = Estudiante::get()->where(['id'=>$id])->one();

    if ($estudiante) {
        
        $zonas = Zona::get()->all();
        $pastores = Pastor::get()->all();
        $ministerios = Ministerio::get()->all();

        $zonasOptions = Util::renderOptions($zonas, 'id', 'zona_nombre', $estudiante->zona->id);
        $pastoresOptions = Util::renderOptions($pastores, 'id', ['nombre', 'turno'], $estudiante->pastor->id);
        $ministeriosOptions = Util::renderOptions($ministerios, 'id', ['nombre_m', 'lider_ministerio'], $estudiante->ministerio->id);

        View::render('estudiantemodificar.php',[
            'estudiante'=>$estudiante,
            'pastoresOptions' => $pastoresOptions,
            'ministeriosOptions' => $ministeriosOptions,
            'zonasOptions'=>$zonasOptions
            ]);
        }

        Session::set('message', ['type' => 'danger', 'message' => "El estudiante $id no existe"]);
        View::redirect('/estudiante/consulta');

    }
    
public function eliminarAction  ()
{
    $id = $_GET['id'];

    $estudiante = new EstudianteForm();
      if ($estudiante->load($this->post)) {
      $estudiante->update($id);
            Session::set('message', ['type' => 'success', 'message' => 'Estudiante actualizado correctamente']);
            View::redirect('/app/index');
        }

    $estudiante = Estudiante::get()->where(['id'=>$id])->one();

    if($estudiante){
        
        $zona = Zona::get()->all();
        $pastores = Pastor::get()->all();
            $ministerios = Ministerio::get()->all();
            $pastoresOptions = Util::renderOptions($pastores, 'id', ['nombre', 'turno'], $estudiante->pastor->id);
            $ministeriosOptions = Util::renderOptions($ministerios, 'id', ['nombre_m', 'lider_ministerio'], $estudiante->ministerio->id);
             $zonasOptions = Util::renderOptions($zona, 'id', 'zona_nombre', $estudiante->zona->id);

        View::render('estudianteeliminar.php',[
            'estudiante'=>$estudiante,
            'pastoresOptions' => $pastoresOptions,
            'ministeriosOptions' => $ministeriosOptions,
            'zonasOptions'=>$zonasOptions
            ]);
       
    }

    View::redirect('/app/index');

}
 
}