<?php
require_once ('konfiguration.php');
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT                     					 
					);
					
/** if ($db_link)
{
	echo 'Verbindung erfolgreich: ';
	print_r($db_link);
}
else
{
	die('keine Verbindung möglich: ' .mysqli_error());
} */
		
// zuweisen der MySQL-Anweisung einer Variablen
$sql = 'DROP DATABASE IF EXISTS filesystemreferences';
$sql1 = 'CREATE DATABASE filesystemreferences';
 
$result = mysqli_query($db_link, $sql);
$result = mysqli_query($db_link, $sql1);
?>