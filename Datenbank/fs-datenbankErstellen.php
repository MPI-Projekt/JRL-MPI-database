<?php
require_once ('konfiguration.php');
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT                     					 
					);
					
$sql = 'DROP DATABASE IF EXISTS filesystemreferences';
$sql1 = 'CREATE DATABASE filesystemreferences';
 
$result = mysqli_query($db_link, $sql);
$result = mysqli_query($db_link, $sql1);
?>
