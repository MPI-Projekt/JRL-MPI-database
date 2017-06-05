<?php
 require_once ('konfiguration.php');
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
					

$sql = "
    CREATE TABLE `files` (
    `id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `name` VARCHAR( 150 ) NOT NULL ,
	`type` enum('Bild','Textdokument','Video','Audio') NOT NULL,
    `size` DOUBLE NOT NULL ,
    `reference` VARCHAR( 200) NOT NULL ,
    `datum` VARCHAR(40) NOT NULL ,
    `description` VARCHAR( 100 ) NULL
    ) ENGINE = MYISAM ;
    ";
  

$db_erg = mysqli_query($db_link, $sql);
?>