<?php

namespace app\models;
use app\core\Model;

class Main extends Model {

    public function getMenu() {
        $menu = $this->db->row('SELECT `id`, `item`, `link` FROM mvc_menu_'.$_SESSION['lang']);
        return $menu;
    }

    public function getSubMenu() {
        $subMenu = $this->db->row('SELECT `menu_id`, `item`, `link` FROM mvc_submenu_'.$_SESSION['lang']);
        return $subMenu;
    }

    public function getCompany() {
        $result = $this->db->row('SELECT adress_'.$_SESSION['lang'].', phone, fax, email FROM mvc_company');
        $company = $result[0];
        return $company;
    }

    public function getData() {
        $menu = $this->getMenu();
        $subMenu = $this->getSubMenu();
		$company = $this->getCompany();
		
        $data = [
					'menu' => $menu,
                    'submenu' => $subMenu,
					'company' => $company,
				];
        return $data;
    }
}