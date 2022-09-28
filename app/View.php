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
            
            // Include global template
            require_once APP_ROOT . "/Views/layout/main.php";
            
        } else {
            
            throw new Exception("View $view no encontrada");
        }
    }

}