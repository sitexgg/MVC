<?php

namespace app\models;
use app\core\Model;

class Main extends Model {

    public function getMenu() {
        $menu = $this->db->row('SELECT `item`, `link` FROM mvc_menu_'.$_SESSION['lang']);
        return $menu;
    }

    public function getDataItexPage() {
        $title = $this->db->row('SELECT title_'.$_SESSION['lang'].' FROM mvc_index_page');
        $titleOf = 'title_'.$_SESSION['lang'];
        return html_entity_decode($title[0][$titleOf]);
    }
}