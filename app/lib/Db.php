<?php

namespace app\lib;

use PDO;
    
class Db {
    
    protected $pdo;
    
    public function __construct() {
        $config = require 'app/config/db.php'; // Файл конфигураций для подключения к БД
        try {
            $this->pdo = new PDO(
                 $config['driver'] .
                 ':host=' . $config['host'] .
                ';dbname=' . $config['name'] . 
                 ';charset=' . $config['charset'] . 
                 ';port=' . $config['port'] . ';' , 
                 $config['user'], $config['pass'], $config['option']);
         } catch(PDOException $e) {
            exit('Нет подключение к Базе данных. Ошибка: ' . $e->getMessage());
        }
    }
       // Применение подготовленых выражений, при помощи именованых placeholders
     public function query($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);

          if (!empty($params)) {
              foreach ($params as $key => $val) {
                   $stmt->bindValue(':'.$key, $val);
               }
           }

        $stmt->execute();
        return $stmt;

        return $query;
    }
       // Возврат строки
     public function row($sql, $params = []) {
         $result = $this->query($sql, $params);
         return $result->fetchAll(PDO::FETCH_ASSOC);
    }
      // Возврат колонки
     public function column($sql, $params = []) {
         $result = $this->query($sql, $params);
         return $result->fetchColumn(PDO::FETCH_ASSOC);
    }
}