<?php

namespace app\models;

use app\core\Model;
use app\lib\Db;

class Account extends Model
{ 

	public $login;
	public $pass;
	
	public function register()
	{ 
		if(isset($_POST['send']))
		{
			$this->login = trim($_POST['login']);
			$this->pass = trim($_POST['pass']);

			$this->pass = password_hash($this->pass, PASSWORD_DEFAULT);

			$slq = 'INSERT INTO users(login, password) VALUES(:login, :pass)';
			$params = ['login' => $this->login, 'pass' => $this->pass];

			$stmt = $this->db->prepare($sql);
			$stmt->execute($params);	
		}		
    }
}