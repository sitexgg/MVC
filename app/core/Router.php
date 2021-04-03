<?php

namespace app\core;

class Router {

    protected $routes = [];
    protected $params = [];

    function __construct() {
        $this->load();
    }

    public function load() {
        $arr = require_once 'app/config/routes.php';

        foreach($arr as $k => $v) {
            $this->add($k, $v);
        }
    }

    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach($this->routes as $route => $params) {
            if(preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run() {
        if($this->match()) {
            // Connect class Controller
            $pathController = 'app\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if(class_exists($pathController)) {
                // Connect method Action
                $action = $this->params['action'].'Action';
                if(method_exists($pathController, $action)) {
                    $controller = new $pathController($this->params); // Create new object of Controller class
                    $controller->$action(); // Run Action
                } else {
                    exit('Не найден action '.$action);
                }
            } else {
                exit('Класс контролера не найден: '.$pathController);
            }
        } else {
            exit('Маршрут не верный!');
        }
        
    }
}
