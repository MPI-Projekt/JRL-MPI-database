<?php
 require_once ('konfiguration.php');
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
					
// MySQL-Befehl der Variablen $sql zuweisen
$sql = "
    CREATE TABLE `files` (
    `id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `name` VARCHAR( 150 ) NOT NULL ,
    `size` DOUBLE NOT NULL ,
    `reference` VARCHAR( 200) NOT NULL ,
    `datum` VARCHAR(40) NOT NULL ,
    `description` VARCHAR( 100 ) NULL
    ) ENGINE = MYISAM ;
    ";
 
$sql1 = "
    CREATE TABLE `kind` (
    `id` INT ( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR( 45 ) NOT NULL
    ) ENGINE = MYISAM;
    ";
	
$sql2 = "
    CREATE TABLE `r_kind_files` (	
	`id_file` INT ( 10 ) NOT NULL,
	`id_kind` INT ( 10 ) NOT NULL,
	PRIMARY KEY(`id_file`, `id_kind`)
	) ENGINE = MYISAM;
	";
	
	 

$db_erg = mysqli_query($db_link, $sql);
  //or die("files: Anfrage fehlgeschlagen: " . mysqli_error());
  
$db_erg1 = mysqli_query($db_link, $sql1);
  //or die("kind: Anfrage fehlgeschlagen: " . mysqli_error()); 
  
$db_erg2 = mysqli_query($db_link, $sql2);
 // or die("relation: Anfrage fehlgeschlagen: " . mysqli_error());
?>