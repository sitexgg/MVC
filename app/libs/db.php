<?php

namespace app\libs;
use PDO;

class Db {
	
	protected $db;
	
    public function __construct() {
        $config = [
			'host' => 'localhost:3306',
			'db_name' => 'mvc',
			'db_user' => 'root',
			'db_pass' => 'root',
		];

		// Данные для подключения к базе данных
		$driver = 'mysql';
		$host = $config['host'].':3306';
		$db_name = $config['db_name'];
		$db_user = $config['db_user'];
		$db_pass = $config['db_pass'];
		$charset = 'utf8';
		$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

		try {
			// Создание обьекта PDO и передача данных
			// для подключения в конструктор класса
			$this->db = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset",$db_user,$db_pass,$options);
		// Отладка ошибок подключения
		} catch(PDOException $e) {
			exit('Ошибка подключения к базе данных'.$e);
		}
    }
	
	public function query($sql, $params = []) {
		$stmt = $this->db->prepare($sql);
		if(!empty($params)) {
			foreach($params as $k => $v) {
				$stmt->bindValue(':'.$k, $v);
			}
		}

		$stmt->execute();
		return $stmt;
	}

	public function insert($sql) {
		$this->query($sql);
	}

	public function row($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function column($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchColumn(PDO::FETCH_ASSOC);
	}
}
