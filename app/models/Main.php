<?php

namespace app\models;
use app\core\Model;

class Main extends Model {

    public function getMenu() {
        $menu = $this->db->row('SELECT `item`, `link` FROM mvc_menu_'.$_SESSION['lang']);
        return $menu;
    }

    public function getDataOfHeader() {
        $short_des = $this->db->row('SELECT short_des_'.$_SESSION['lang'].' FROM mvc_index_page');
        $short_desOf = 'short_des_'.$_SESSION['lang'];
        $short_des = html_entity_decode($short_des[0][$short_desOf]);
        return $short_des;
    }
}