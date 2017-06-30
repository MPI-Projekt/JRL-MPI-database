<?php
session_start();	
require('ind.php');
$db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
					 'user'
                     );

if($db->connect_errno){
 header('location: home.html?id=1339');
}
else{
$benutzername = $_POST["benutzername"];	
$passwort = $_POST["pw"];


$erg = $db->query("SELECT `database`,`name` FROM `user` WHERE `name` LIKE '".$benutzername."' AND `password` LIKE '".$passwort."'");
if($erg->num_rows){


$array = $erg->fetch_assoc();
$_SESSION[ 'database' ] = $array['database'];
$_SESSION['name'] = $array['name'];

header('location: eingabeV2.html');
//print_r($array);
}
else{
header('location: home.html?id=1339');
}
}
?>