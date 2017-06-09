<?php
require_once ('konfiguration.php');
$db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT                        			 
					);
					
$erg = $db->query("CREATE DATABASE ". MYSQL_DATENBANK);
 ?>