<?php

namespace app\controllers;
use app\core\Controller;

class MainController extends Controller {

	public function __cunstruct() {
		
	}
    
    public function indexAction() {
        $menu = $this->model->getMenu();
		$title = $this->model->getDataItexPage();
        $data = [
					'menu' => $menu,
				 	'title' => $title
				];
				
        $this->view->render($title, $data);
    }

	public function qweAction() {
		 $this->view->render('weqffasdfas'); 
	}

    public function qqAction() {
		$menu = $this->model->getMenu();
        $data = ['menu' => $menu];
        $this->view->render('qq', $data); 
   }
	public function qwe1Action() {
		 $this->view->render('weqffasdfas'); 
	}
	public function zxcvzxcvzxcAction() {
		 $this->view->render('12312312312312312'); 
	}
}