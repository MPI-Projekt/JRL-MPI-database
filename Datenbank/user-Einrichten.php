<?php
require('ind.php');
$db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     );
					

$erg = $db->query("
    CREATE TABLE `user` (
    `name` VARCHAR( 150 ) NOT NULL PRIMARY KEY,
	`password` VARCHAR( 150 ) NOT NULL,
	`database` VARCHAR( 150 ) NOT NULL
    ) ENGINE = MYISAM 
    ");
?>