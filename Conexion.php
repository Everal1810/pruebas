<?php
			$pdo = new PDO("mysql:host=104.248.183.213:3306;dbname=microsoftAcademy", "electiva1","Elec1",    array(
         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
         PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));
	?>
