<?php

namespace app\core;
use app\libs\Db;

abstract class Model {

    public $db;

    public function __construct() {
        $this->db = new Db;
    }

    public function validStr($str) {
        $str = trim($str);
        $str = htmlentities($str);
        return $str;
    }
}