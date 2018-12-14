<?php

namespace app\core; // Включение в пространство имен

use app\core\View; // Изпользование класса View

abstract class Controller { // Создаем абстрактный класс

	public $route; // Публичное свойство хранящее 
	public $view;

	public function __construct($route) {
		$this->route = $route;
		$this->view = new View($route);
		$this->model = $this->loadModel($route['controller']);
	}

	// Метод автозакгрузки модели
	// Он универсален и способен принимать значение имени модели
	public function loadModel($name) {
		// Путь к модели, название начинается с верхнего регистра
		$path = 'app\models\\'.ucfirst($name);
		// Если класс модели существует, возвращаем экземпляр класса
		if(class_exists($path)) {
			return new $path;
		}
	}
}
