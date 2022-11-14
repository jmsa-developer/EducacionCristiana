<?php

namespace App;

use Exception;

class View {

    /**
     * @throws Exception
     */
    static function render(string $view, array $params = []): void {

        // Extraer los parametros
        
        extract($params, EXTR_SKIP);

        $root = dirname(__FILE__);
        // ruta de la vista
        $content = "$root/Views/$view";

        if (is_readable($content)) {

         if($view=="login.php"){
            require_once "$root/Views/layout/main_principal.php";
         }else{
            require_once "$root/Views/layout/main.php";
         }
            
        } else {
            
            throw new Exception("View $view no encontrada");
        }
        exit;
    }

    static function redirect($url){
        header("Location: /".SITE_NAME.$url);
        exit;
    }

}