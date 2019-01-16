<?php

return [
'host' => 'localhost',
'name' => 'new',
'user' => 'admin',
'pass' => '123',
'port' => 3306,
'driver' => 'mysql',
'charset' => 'utf8',
'option' => [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => true
    ]
];