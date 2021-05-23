<?php

namespace app\controllers;
use app\core\Controller;
use app\core\View;

class AdminController extends Controller {

    public function __cunstruct() {

    }
    
    public function panelAction() {
        if(!empty($_SESSION['role']) && $_SESSION['role'] == 'admin') {
            $this->customAdmin();
            $this->view->render('Admin Panel');
        } else {
            View::errorCode(505);
        }
    }

    public function settingsAction() {
        $this->customAdmin();
        $this->view->render('Settings Panel');
    }

    public function newsAction() {
        $this->customAdmin();
        if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['date'])) {
            $this->model->appendNews($_POST['title'], $_POST['content'], $_POST['date']);
            exit('Добавлена новая новость');
        }

        $data = [
            'news' =>  $this->model->getNews()
        ];

        $this->view->render('News Panel', $data);
    }

    public function menuAction() {
        $this->customAdmin();

        // Menu
        if(!empty($_POST['item']) && !empty($_POST['id'])) {
            $this->model->changeMenuValue($_POST['id'], $_POST['item']);
            exit('Элемент меню был изменен');
        }
        if(!empty($_POST['link']) && !empty($_POST['id'])) {
            $this->model->changeMenuLink($_POST['id'], $_POST['link']);
            exit('Ссылка на элемент меню была изменена');
        }
        if(!empty($_POST['delMenu']) && !empty($_POST['id'])) {
            $this->model->deletedMenu($_POST['id']);
            exit('Элемент меню был удален');
        }
        if(!empty($_POST['newMenu']) && isset($_POST['newMenu'])) {
            $this->model->appendMenu();
            exit('Добавлен новый элемент меню');
        }

        // SubMenu
        if(!empty($_POST['itemSub']) && !empty($_POST['id'])) {
            $this->model->changeSubMenuValue($_POST['id'], $_POST['itemSub']);
            exit('Элемент меню был изменен');
        }
        if(!empty($_POST['linkSub']) && !empty($_POST['id'])) {
            $this->model->changeSubMenuLink($_POST['id'], $_POST['linkSub']);
            exit('Ссылка на элемент меню была изменена');
        }
        if(!empty($_POST['delMenuSub']) && !empty($_POST['id'])) {
            $this->model->deletedSubMenu($_POST['id']);
            exit('Элемент меню был удален');
        }
        if(!empty($_POST['newSubMenu']) && isset($_POST['newSubMenu'])) {
            $this->model->appendSubMenu($_POST['newSubMenu']);
            exit('Добавлен новый элемент меню');
        }

        $data = [
            'menu' =>  $this->model->getMenu(),
            'submenu' =>  $this->model->getSubMenu()
        ];
           
        $this->view->render('Menu Settings', $data);
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
