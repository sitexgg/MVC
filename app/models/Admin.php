<?php

namespace app\models;
use app\core\Model;

class Admin extends Model {

    // Создание новой страницы
    public function createPage($t, $n) {
        $title = $this->validStr($t);
        $namePage = $this->validStr($n);
        $page = 'main/'.$namePage;

        $this->db->insert('INSERT INTO mvc_routes (`page`, `controller`, `action`) VALUES ("'.$page.'", "main", "'.$namePage.'")');

        $codeController  = "\tpublic function ".$namePage."Action() {\n";
        $codeController .= "\t\t \$this->view->render('".$title."'); \n";
        $codeController .= "\t}\n}";

        $dir = $_SERVER['DOCUMENT_ROOT'].'/app/controllers/mainController.php';
        if(file_exists($dir)) {
            $fp = fopen($dir, 'r+');
            $stat = fstat($fp);
            ftruncate($fp, $stat['size']-1);
            fclose($fp);

            $fp = fopen($dir, "a+");
            fwrite($fp, $codeController);
            fclose($fp);
        }

        $dir = $_SERVER['DOCUMENT_ROOT'].'/app/views/main/'.$namePage.'.php';
        if(!file_exists($dir)) {
            $view = fopen($dir, "a");
            fclose($view);
        }

        exit('Страница создана');
    }
}