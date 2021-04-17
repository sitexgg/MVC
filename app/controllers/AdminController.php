<?php

namespace app\controllers;
use app\core\Controller;

class AdminController extends Controller {

    public function __cunstruct() {

    }
    
    public function panelAction() {
        $this->customAdmin();
        $this->view->render('Admin Panel');
    }

    public function settingsAction() {
        $this->customAdmin();
        $this->view->render('Settings Panel');
    }

    public function createPageAction() {

        if(isset($_POST['title']) && isset($_POST['namePage'])) { 
            $this->model->createPage($_POST['title'], $_POST['namePage']); 
        }

        $this->customAdmin();
        $this->view->render('Create new page');
    }

    // Custom layout
    public function customAdmin() {
         $this->view->layout = 'admin';
    }

}
