<?php
require_once ('konfiguration.php');
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT                     					 
					);
					
$sql = 'CREATE DATABASE user';
 
$result = mysqli_query($db_link, $sql);
?>