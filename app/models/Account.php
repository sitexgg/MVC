<?php

namespace app\models;
use app\core\Model;

class Account extends Model {

    // Получение логина
    public function getUser($user) {
        $res = $this->db->row('SELECT user FROM mvc_users WHERE user ="'.$user.'";');
        return $res;
    }

    // Получение пароля
    public function getPass($user) {
        $res = $this->db->row('SELECT pass FROM mvc_users WHERE user ="'.$user.'";');
        return $res;
    }

    // Авторизация пользователей
    public function signIn($l, $p) {
        // if(!empty($l)) {
            $login = $this->validStr($l);
            $pass = $this->validStr($p);

            $res = $this->getUser($login);
            if(!empty($res)) {
                if(!empty($pass)) {
                    $res = $this->getPass($login);
                    if(!empty($res) && $res[0]['pass'] == $pass) {
                        exit('authLogin');
                    } else {
                        exit('Вы ввели не верный пароль !');
                    }
                } else {
                    exit('Введите пароль !');
                }
            } else {
                exit('Вы ввели не верный логин !');
            }
        // }
    }
}