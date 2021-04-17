<?php

namespace app\controllers;
use app\core\Controller;

class AccountController extends Controller {
    
    public function loginAction() {

        if(isset($_POST['login']) && isset($_POST['pass'])) {
            $this->model->signIn($_POST['login'], $_POST['pass']); 
        }

        $this->view->render('Страница авторизации');
    }

    public function registerAction() {
		$data = [
			'age' => 88,
			'arr' => [1, 2, 3],
			'name' => 'Bill'
		];
        $this->view->render('Register Page', $data);
    }
}
