<?php

namespace app\core;
use app\core\View;
use app\libs\Db;

class Router {

    protected $routes = [];
    protected $params = [];

    function __construct() {
        $this->load();

        // Редирект на главную страницу
        if($_SERVER['REQUEST_URI'] == "/") {
            exit('<script>location.href = "/main/index"</script>');
        }
    }

    public function load() {
        $db = new Db;
		$routes = $db->row('SELECT * FROM mvc_routes;');
        
        foreach($routes as $k => $v) {
            $r = array($v['page'] => ['controller' => $v['controller'], 'action' => $v['action']]);
            
            foreach($r as $k => $v) {
                $this->add($k, $v);
            }
        }

    }
    public function add($route, $params) {
        $route = '#^'.$route.'[\?](.*)|'.$route.'$#';
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
					View::errorCode(404);
                    //exit('Не найден action '.$action);
                }
            } else {
				View::errorCode(404);
                //exit('Класс контролера не найден: '.$pathController);
            }
        } else {
			View::errorCode(404);
            //exit('Маршрут не верный!');
        }
        
    }
}
