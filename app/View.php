<?php

namespace App;

use Exception;

class View {

    /**
     * @throws Exception
     */
    static function render(string $view, array $params = []): void {

        // Extract controller variables
        extract($params, EXTR_SKIP);

        // Page template path.
        $content = APP_ROOT . "/Views/$view";

        if (is_readable($content)) {

         if($view=="login.php"||$view=="register.php"){
            require_once APP_ROOT . "/Views/layout/main_principal.php";            
         }else{
            require_once APP_ROOT . "/Views/layout/main.php";
         }
            
        } else {
            
            throw new Exception("View $view no encontrada");
        }

    }

    static function redirect($url){
        header("Location: $url");
        exit;
    }

}