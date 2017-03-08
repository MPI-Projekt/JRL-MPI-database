<?php
require_once ('konfiguration.php');
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
					
					// zuweisen der MySQL-Anweisung einer Variablen
$sql = 'CREATE DATABASE file-system-references';
 
$result = mysqli_query($db_link, $sql)
  or die("Anfrage fehlgeschlagen: " . mysql_error());
?>