<?php

namespace app\controllers;
use app\core\Controller;

class MainController extends Controller {

	public function __cunstruct() {

	}
    
    public function indexAction() {
        $this->view->render('Главная страница', $this->model->getData());
    }

	public function qweAction() {
		$data = $this->model->getData();
		$this->view->render('weqffasdfas', $this->model->getData()); 
	}

    public function qqAction() {
        $this->view->render('qq', $this->model->getData()); 
   }
	public function qwe1Action() {
		 $this->view->render('weqffasdfas', $this->model->getData()); 
	}
	public function zxcvzxcvzxcAction() {
		 $this->view->render('12312312312312312', $this->model->getData()); 
	}
}