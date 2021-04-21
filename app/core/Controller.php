<?php

namespace app\core;
use app\core\View;

abstract class Controller {
    
    public $route;
    public $view;

    public function __construct($route) {
        if(!isset($_SESSION['lang'])) {
            $_SESSION['lang'] = 'ru';
        }

        if(isset($_GET['lang']) && !empty($_GET['lang'])) {
            $_SESSION['lang'] = $_GET['lang'];
        }

        // Getting route of Class Router
        $this->route = $route;
        
        $this->view = new View($route);

        // Подгрузка модели
        $this->model = $this->loadModel($route['controller']);
    }

    // Custom layout
    public function custom() {
        $this->view->layout = 'custom';
    }

    public function loadModel($name) {
        $path = 'app\models\\'.ucfirst($name);
        if(class_exists($path)) {
            return new $path;
        }
    }

}
