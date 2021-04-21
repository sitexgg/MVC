<?php

namespace app\controllers;
use app\core\Controller;

class AccountController extends Controller {
    
    public function loginAction() {

        if(isset($_POST['login']) && isset($_POST['pass'])) {
            $this->model->signIn($_POST['login'], $_POST['pass']); 
        }
        $this->custom();
        $this->view->render('Страница авторизации');
    }

    public function registerAction() {
        if(isset($_POST['login']) && isset($_POST['pass'])) {
            $this->model->signUp($_POST['login'], $_POST['pass'], $_POST['pass2']); 
        }
        $this->custom();
        $this->view->render('Страница регистрации');
    }

    public function logoutAction() {
        $this->model->logout();
    }
}
