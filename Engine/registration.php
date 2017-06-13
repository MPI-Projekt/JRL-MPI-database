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
	require('user-Einrichten.php');//hier gibt's noch Probleme, nicht wundern -J.
	
	$db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
					 'user'
					 );
}

$pw1 = $_POST["pw1"];
$pw2 = $_POST["pw2"];
$benutzername = $_POST["benutzername"];	

if($pw1 != $pw2){
	header('location: registration.html?error=passwort');
}
else{
$erg1 = $db->query("SELECT name FROM user WHERE name LIKE ".$benutzername);//same, wortwörtlich -J.
if($erg1->num_rows){
	header('location: registration.html?error=benutzername');
}
else{
$erg2 = $db->query("INSERT INTO user (name, password, database) VALUES ('" . $benutzername . "' , '" . $pw1 . "' , 'fs-" . $benutzername . "')");
	header('location: home.html');
	}
}	
?>
