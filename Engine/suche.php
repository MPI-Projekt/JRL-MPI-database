<?php
require('konfiguration.php');
    $db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
				

 if($dateiname != "" && $dateigroesse != ""){
	 if($groesse == "groesser"){
		$erg = $db->query("SELECT " .$reference. " FROM `files` WHERE `name` LIKE " .$dateiname.  " AND `size` > " .$dateigroesse);
	 }
 }

?>
