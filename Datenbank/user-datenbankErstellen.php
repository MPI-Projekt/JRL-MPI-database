<?php
require('index.php');
$db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT                     					 
					);
					
$erg = $db->query("CREATE DATABASE user");
?>