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

    // Получение прав пользователя
    public function getRole($user) {
        $res = $this->db->row('SELECT `role` FROM mvc_users WHERE user ="'.$user.'";');
        return $res;
    }

    // Регистрация пользователя
    public function registration($user, $pass) {
        $res = $this->db->query('INSERT INTO `mvc_users` (`user`, `pass`, `role`) VALUES ("'.$user.'", "'.$pass.'", 1)');
        return $res;
    }

    // Выход
    public function logout() {
        unset($_SESSION['login']);
        header('Location: /main/index');
    }

    // Авторизация пользователей
    public function signIn($l, $p) {
        if(!empty($l)) {
            $login = $this->validStr($l);
            $pass = $this->validStr($p);

            $res = $this->getUser($login);
            if(!empty($res)) {
                if(!empty($pass)) {
                    $res = $this->getPass($login);
                    if(!empty($res) && $res[0]['pass'] == $pass) {
                        $role = $this->getRole($l);
                        if($role[0]['role'] == 0) {
                            $_SESSION['role'] = 'admin';
                        }
                        $_SESSION['login'] = $login;
                        exit('authLogin'.$role[0]['role']);
                    } else {
                        exit('Вы ввели не верный пароль !');
                    }
                } else {
                    exit('Введите пароль !');
                }
            } else {
                exit('Вы ввели не верный логин !');
            }
        }
    }

    // Регистрация пользователей
    public function signUp($l, $p, $p2) {
        if(!empty($l)) {
            $login = $this->validStr($l);
            $pass = $this->validStr($p);
            $pass2 = $this->validStr($p2);

            $res = $this->getUser($login);
            if(empty($res)) {
                if(!empty($pass)) {
                    if(!empty($pass2) && ($pass == $pass2)) {
                        $this->registration($login, $pass);
                        exit('registration');
                    } else {
                        exit('Введите повторный пароль верно !');
                    }
                } else {
                    exit('Введите пароль !');
                }
            } else {
                exit('Пользователь с этим логином уже зарегистрирован !');
            }
        }
    }
}