<?php

require_once './app/libs/dev.php';

use app\core\Router;

// Autoload classes
spl_autoload_register(function($class){
	$path = str_replace('\\', '/', $class.'.php');
	
	if(file_exists($path)) {
		require_once $path;
	}
});

session_start();

$router = new Router;
$router->run();