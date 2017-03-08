<?php
 require_once ('konfiguration.php');
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
					
$sql = "
  INSERT INTO `kind`
  ( 
  `id` , `name`  
  ) 
  VALUES
  (
  001 , 'Bild'
  );
";

$db_erg = mysqli_query($db_link, $sql) 
   or die("Anfrage fehlgeschlagen: " . mysqli_error());
 ?>