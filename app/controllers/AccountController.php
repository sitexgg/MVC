<?php

namespace app\controllers;

use app\core\Controller;

class AccountController extends Controller {

	public function loginAction() {
		if (!empty($_POST)) {
			$this->view->message('Errors', 'message');
		}
		$this->view->render('Авторизация');
	}

	public function registerAction() {
		$this->model->register();
		$this->view->render('Регистрация');
	}

}
