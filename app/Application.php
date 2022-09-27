<?php

namespace App;

class Application{

    private $route;
    private $controller;
    private $action;
    private $params = [];


    public function __construct($config = [])
    {
        if($_GET['route']===''){
            $route = 'app/index';
        } else {
            $route = $_GET['route'];
        }
      
        $route = explode('/', $route);

        $this->controller = $route[0];

        $this->action = isset($route[1]) ? $route[1] : 'index';

        foreach ($route as $key => $value) {
            if($key > 1){
                $this->params[] = $value;
            }
        }
    }


    public function run(){

        $controller = 'App\Controllers\\' . ucfirst($this->controller) . 'Controller';

        if(class_exists($controller)){
            $controller = new $controller();
        } else {
            throw new \Exception("Controlador $controller no encontrado");
        }

        $action = $this->action . 'Action';

        if(method_exists($controller, $action)){
            call_user_func_array([$controller, $action], $this->params);
        } else {
            throw new \Exception("Método $action no encontrado");
        }

        
    }

}

?>