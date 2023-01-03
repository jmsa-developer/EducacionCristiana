<?php

namespace App\Controllers;

use App\Models\Escuela;
use App\Models\Estudiante;
use App\Models\Pago;
use App\Models\Zona;
use App\Tools\PDF;
use App\Tools\View;

class ReporteController extends BaseController
{

    public function indexAction()
    {

        if ($this->isPost()) {

            $tipo = $this->post['tipo'];

            switch ($tipo) {
                case 'estudiante':
                    $this->reporteEstudiante();
                    break;
                case 'escuela':
                    $this->reporteEscuela();
                    break;

                case 'zona':
                    $this->reporteZona();
                    break;

                case 'pago':
                    $this->reportePago();
                    break;
            }
            View::redirect('/app/index');

        }

        View::render('reporte.php');

    }

    private function reporteEstudiante()
    {
        $pdf = new PDF();
        // Títulos de las columnas
        $header = ['Nombre', 'Apellido', 'Cedula','Nombre ministerio'];
        // Carga de datos

        $estudiantes = Estudiante::get()->all();
        $data = $pdf->loadDataEstudiante($estudiantes);
        $pdf->SetFont('Arial', '', 14);
        $pdf->AddPage();
        $pdf->basicTable($header, $data);
        $pdf->Output();
        exit();
    }

    private function reporteEscuela()
    {
        $pdf = new PDF();
        // Títulos de las columnas
        $header = ['Nombre', 'Tema'];
        // Carga de datos

        $escuelas = Escuela::get()->all();
        $data = $pdf->loadDataEscuela($escuelas);
        $pdf->SetFont('Arial', '', 14);
        $pdf->AddPage();
        $pdf->basicTable($header, $data);
        $pdf->Output();
        exit();
    }

    private function reporteZona()
    {
        $pdf = new PDF();
        // Títulos de las columnas
        $header = ['Zona'];
        // Carga de datos

        $zonas = Zona::get()->all();
        $data = $pdf->loadDataZona($zonas);
        $pdf->SetFont('Arial', '', 14);
        $pdf->AddPage();
        $pdf->basicTable($header, $data);
        $pdf->Output();
        exit();
    }

    private function reportePago()
    {
        $pdf = new PDF();
        // Títulos de las columnas
        $header = ['Fecha_pago', 'Numero_referencia', 'Pago_total'];
        // Carga de datos

        $pagos = Pago::get()->all();
        $data = $pdf->loadDataPago($pagos);
        $pdf->SetFont('Arial', '', 14);
        $pdf->AddPage();
        $pdf->basicTable($header, $data);
        $pdf->Output();
        exit();
    }


}
