<?php

namespace app\core;

class View {
    
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route) {
        $this->route = $route;
        if(strripos($route['action'], "?")) {
            $route['action'] = stristr($route['action'], "?", true);
        }
        $this->path = $route['controller'].'/'.$route['action'];


    }

    public function render($title, $data = []) {
		extract($data);
        require_once 'app/views/lang/'.$_SESSION['lang'].'.php';
		extract($lang);

        $pathLayout = 'app/views/'.$this->path.'.php';
        if(file_exists($pathLayout)) {
            ob_start();
            require_once $pathLayout;
            $content = ob_get_clean();
    
            require_once 'app/views/layouts/'.$this->layout.'.php';
        } else {
            echo 'Вид не найден: '.$this->path;
        }
    }
	
	public static function errorCode($code) {
		http_response_code($code);
		$pathError = 'app/views/errors/'.$code.'.php';
		if(file_exists($pathError)) {
			require_once $pathError;
		}
		exit;
	}

    public function message($mes) {
        return '<script>modalWindow('.$mes.');</script>';
    }
}

