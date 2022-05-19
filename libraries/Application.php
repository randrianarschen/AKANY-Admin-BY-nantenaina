<?php

class Application {
    public  static function process()
    {
        $controllerName = "Home";
        $task = "index";
        $param1= " ";
        $param2= " ";
        if (!empty($_GET['controller'])) {
            $controllerName = ucfirst($_GET['controller']);
        }
        if (!empty($_GET['task'])) {
            $task = $_GET['task'];
        }
        $controllerName = 'Controllers\\' . $controllerName;
        $controller = new $controllerName();
        $controller->$task();

    }
}