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

    public function appendNews($title, $content, $date, $file) {
        $title = htmlentities($title);
        $content = htmlentities($content);

        function gen_token() {
            $token = sprintf(
                '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0x0fff) | 0x4000,
                mt_rand(0, 0x3fff) | 0x8000,
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff)
            );
         
            return $token;
        }
        $nameFile = 'aaa'.gen_token();

        // Загрузка обложки новости
        $typeFile = substr($_FILES['fileNews']['name'], strrpos($_FILES['fileNews']['name'], '.') + 1);
        $file = $nameFile.'.'.$typeFile;
        $uploaddir = './uploads/news/';
        if (!file_exists('./uploads/news/')) {
            mkdir('./uploads/news/', 0777, true);
        }
        $uploadfile = $uploaddir . basename($file);

        move_uploaded_file($_FILES['fileNews']['tmp_name'], "./uploads/news/".$file);

        $res = $this->db->insert('INSERT INTO mvc_news_'.$_SESSION['lang'].'(title, content, date, img) VALUES("'.$title.'","'.$content.'","'.$date.'", "'.$uploadfile.'");');
        return $res;
    }

    public function getNews() {
        $news = $this->db->row('SELECT `id`, `title`, `content`, `date` FROM mvc_news_'.$_SESSION['lang']);
        return $news;
    }
    public function changeNews($id) {
        $news = $this->db->row('SELECT * FROM mvc_news_'.$_SESSION['lang'].' WHERE id = '.$id);
        return $news;
    }
    public function deletedNews($id) {
        $this->db->insert('DELETE FROM mvc_news_'.$_SESSION['lang'].' WHERE id = '.$id);
    }
    public function updateNews($id, $title, $content, $date) {
        $res = $this->db->insert('UPDATE mvc_news_'.$_SESSION['lang'].' SET title = "'.$title.'" WHERE id = '.$id);
        $res = $this->db->insert('UPDATE mvc_news_'.$_SESSION['lang'].' SET content = "'.$content.'" WHERE id = '.$id);
        $res = $this->db->insert('UPDATE mvc_news_'.$_SESSION['lang'].' SET date = "'.$date.'" WHERE id = '.$id);
        return $res;
    }

    public function changeMenuValue($id, $item) {
        $res = $this->db->insert('UPDATE mvc_menu_'.$_SESSION['lang'].' SET item = "'.$item.'" WHERE id = '.$id);
        return $res;
    }

    public function changeMenuLink($id, $link) {
        $res = $this->db->insert('UPDATE mvc_menu_'.$_SESSION['lang'].' SET link = "'.$link.'" WHERE id = '.$id);
        return $res;
    }

    public function deletedMenu($id) {
        $res = $this->db->insert('DELETE FROM mvc_menu_'.$_SESSION['lang'].' WHERE id = '.$id);
        return $res;
    }

    public function changeSubMenuValue($id, $item) {
        $res = $this->db->insert('UPDATE mvc_submenu_'.$_SESSION['lang'].' SET item = "'.$item.'" WHERE id = '.$id);
        return $res;
    }

    public function changeSubMenuLink($id, $link) {
        $res = $this->db->insert('UPDATE mvc_submenu_'.$_SESSION['lang'].' SET link = "'.$link.'" WHERE id = '.$id);
        return $res;
    }

    public function deletedSubMenu($id) {
        $res = $this->db->insert('DELETE FROM mvc_submenu_'.$_SESSION['lang'].' WHERE id = '.$id);
        return $res;
    }

    public function appendSubMenu($id) {
        $res = $this->db->insert('INSERT INTO mvc_submenu_'.$_SESSION['lang'].' (`item`, `link`, `menu_id`) VALUES ("Новый элемент", "/main/index", "'.$id.'")');
        return $res;
    }

    public function appendMenu() {
        $res = $this->db->insert('INSERT INTO mvc_menu_'.$_SESSION['lang'].' (`item`, `link`) VALUES ("Новый элемент", "/main/index")');
        return $res;
    }

    public function getMenu() {
        $menu = $this->db->row('SELECT `id`, `item`, `link` FROM mvc_menu_'.$_SESSION['lang']);
        return $menu;
    }

    public function getSubMenu() {
        $subMenu = $this->db->row('SELECT `menu_id`, `id`, `item`, `link` FROM mvc_submenu_'.$_SESSION['lang']);
        return $subMenu;
    }
}