<?php

namespace app\core;
use app\core\View;

abstract class Controller {
    
    public $route;
    public $view;

    public function __construct($route) {
        // Getting route of Class Router
        $this->route = $route;
        
        $this->view = new View($route);
        //$this->custom();
    }

    // Custom layout
    public function custom() {
        $this->view->layout = 'custom';
    }

}
