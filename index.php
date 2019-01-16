<?php

require "app/lib/Dev.php";

use app\core\Stat;
use app\core\Router;
use app\controllers\AccountController;

spl_autoload_register(function($class){
	$path = str_replace('\\', '/', $class.'.php');
	
	if (file_exists($path) ) {
		require $path;
	}
});

session_start();

$router = new Router;
$router->run();

#$stat = new Stat;

#strlen()							#isset()						#preg_replace()
#explode()							#trim()							#ucwords()
#implode()							#wordwrap()						#getcwd()
#str_replace()						#htmlspecialchars()				#chdir()
#date()								#htmlspecialchars_decode()		#opendir()
#count()							#addslashes()					#closedir()
#in_array()							#chunk_split()					#readdir()
#array_unshift()					#rtrim()						#scandir()
#foreach($ar as $key => $val){}		#ucfirst()						#file_get_contents()
#empty()							#lcfirst()

#SHOW DATABASES;
#CREATE DATABASE nameDb CHARACTER SET utf8 COLLATE utf8_general_ci;
#USE nameDb;
#DROP DATABASE nameDb;
#DROP TABLE nameTable;
#SET PASSWORD FOR 'login'@'localhost' = PASSWORD('password');
#GRANT ALL ON nameDb.* TO 'login'@'localhost' IDETIFIED BY 'password';
#CREATE TABLE nameTable (
    #id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    #name VARCHAR(400) NOT NULL,
    #genre VARCHAR(255) NOT NULL,
    #duration SMALLINT UNSIGNED NOT NULL,
    #PRIMARY KEY(id));
#DESC tableName;
#INSERT INTO films(name, genre, duration)
    #VALUES ('Побег из Шоушенга', 'Триллер', 143),
    #('Гладиатор', 'Исторические', 231),
#ALTER TABLE nameTable RENAME newNameTable;
#ALTER TABLE nameTable CHANGE name title VARCHAR(300) NOT NULL;
#ALTER TABLE nameTable ADD newColumn INT UNDIGNED NOT NULL;
#ALTER TABLE nameTable MODIFY nameColumn DATETIME;
#ALTER TABLE nameTable DROP nameColumn;
#SELECT * FROM table WHERE duration IN (12, 234);
#SELECT * FROM table WHERE duration BETWEEN 32  AND 3243;
#SELECT * FROM table WHERE title LIKE '%ллар%';
#UPDATE table SET nameColunt = '123' WHERE title = 'nameColumn';
#DELETE FROM table WHERE ...;

#CREATE TABLE newTable(
    #film_id INT,
    #genre_id INT,
    #FOREIGN KEY(film_id) REFERENCES films(id) ON DELETE CASCADE,
    #FOREIGN KEY(gente_id) REFERENCES geners(id) ON DELETE CASCADE,
    #PRIMARY KEY(film_id,genre_id));
 
#SELECT films.title, genre.genre
    #FROM films INNER JOIN films_genre
    #ON films.id = films_genre.film_id
    #INNER JOIN geners ON films_genre.genre_id = geners.id
    #WHERE films.title = "Троя";

   

    //namespace app\lib;
    



