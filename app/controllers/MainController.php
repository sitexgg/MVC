<?php

namespace app\controllers;
use app\core\Controller;

class MainController extends Controller {

	public function __cunstruct() {
	}
    
    public function indexAction() {
        $menu = $this->model->getMenu();
		$shortDes = $this->model->getDataOfHeader();
		$company = $this->model->getCompany();
		
        $data = [
					'menu' => $menu,
				 	'shortDes' => $shortDes,
					'company' => $company
				];
				
        $this->view->render('Главная страница', $data);
    }

	public function qweAction() {
		 $this->view->render('weqffasdfas'); 
	}

    public function qqAction() {
		$menu = $this->model->getMenu();
		$shortDes = $this->model->getDataOfHeader();

        $data = [
			'menu' => $menu,
			'shortDes' => $shortDes
		];

        $this->view->render('qq', $data); 
   }
	public function qwe1Action() {
		 $this->view->render('weqffasdfas'); 
	}
	public function zxcvzxcvzxcAction() {
		 $this->view->render('12312312312312312'); 
	}
}