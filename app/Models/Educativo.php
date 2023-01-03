<?php

namespace App\Models;

use App\Tools\BaseModel;
use App\Tools\BitacoraTrait;


class Educativo extends BaseModel

{
    use BitacoraTrait;


    public $nombre;
    public $archivo;
    public $summernote;
    public $escuela_id;
    
    public $borrado;

    const FILES_PERMITED = ['jpg', 'jpeg', 'png', 'pdf', 'xlsx'];


    public function register($data)
    {

        $educativo = new Educativo();

        $educativo->load($data);
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

        $educativo->save();

        return true;

    }

    public function update($id, $data){
        $educativo = Educativo::get()->where(['id' => $id])->one();
        $educativo->load($data);

        $educativo->save();
    }


}
