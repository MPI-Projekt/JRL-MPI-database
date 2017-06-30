<?php
require_once('ind.php');
$db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
					 'user'
					 );
if($db->connect_errno){
	require('user-datenbankErstellen.php');
	require('user-Einrichten.php');
    require('registration.php');
}
else{
$pw1 = $_POST["pw1"];
$pw2 = $_POST["pw2"];
$benutzername = $_POST["benutzername"];	

if($pw1 != $pw2){
	header('location: registration.html?e=1288');
}
else{
$erg1 = $db->query("SELECT name FROM user WHERE name LIKE '".$benutzername."'");
if($erg1->num_rows){
header('location: registration.html?e=1289');
}

else{
    $erg2 = $db->query("INSERT INTO `user` (`name`, `password`, `database`) VALUES ('".$benutzername."', '".$pw1."', 'fs-".$benutzername."')");
	
	$db = new mysqli(MYSQL_HOST, MYSQL_BENUTZER, MYSQL_KENNWORT);
	$erg3 = $db->query("CREATE DATABASE `fs-".$benutzername."`");
	
	$db = new mysqli(MYSQL_HOST, MYSQL_BENUTZER, MYSQL_KENNWORT, 'fs-'.$benutzername);
	$erg4 = $db->query(" CREATE TABLE `files` (`name` VARCHAR( 150 ) NOT NULL ,`type` enum('application', 'audio', 'example', 'image', 'message', 'model', 'multipart', 'text', 'video') NOT NULL, `size` DOUBLE NOT NULL ,
						`reference` VARCHAR( 200) NOT NULL PRIMARY KEY,`date` VARCHAR(40) NOT NULL ,`description` VARCHAR( 100 ) NULL) ENGINE = MYISAM");
	header('location: home.html?id=1337');
	}
}
}	
?>