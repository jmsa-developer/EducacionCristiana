<?php

namespace App\Forms;

use App\Models\Educativo;


class EducativoForm extends Model
{

    public $nombre;
    public $decripcion;
    public $archivo;

    const FILES_PERMITED = ['jpg', 'jpeg', 'png', 'pdf', 'xlsx'];


    public function register()
    {

        $educativo = new Educativo();

        $educativo->load($this->data);
        $file = $_FILES['archivo'] ?? null;

        if ($file) {
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            if (in_array($fileActualExt, self::FILES_PERMITED)) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'files' . DIRECTORY_SEPARATOR . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $educativo->archivo = $fileNameNew;
            }

        }

        //  $educativo->fecha_inicio = date('d-m-Y');


        $educativo->save();

    }

}