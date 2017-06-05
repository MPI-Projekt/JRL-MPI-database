<?php
 require_once ('konfiguration.php');
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
					

$sql = "
    CREATE TABLE `user` (
    `name` VARCHAR( 150 ) NOT NULL PRIMARY KEY,
	`password` VARCHAR( 150 ) NOT NULL,
	`database` VARCHAR( 150 ) NOT NULL
    ) ENGINE = MYISAM ;
    ";
  

$db_erg = mysqli_query($db_link, $sql);
?>