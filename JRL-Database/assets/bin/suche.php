<?php
	session_start();
require('konfiguration.php');
    $db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
				
$dateiname = $_POST["dateiname"];	
$dateigroesse = $_POST["dateigroesse"];
$groesse = $_POST["groesse"];
$beschreibung = $_POST["beschreibung"];
$typ = $_POST["dateityp"];

 if($dateiname != "" && $dateigroesse != "" && $beschreibung != "" && $typ != ""){
	 if($groesse == "groesser"){
		$erg = $db->query("SELECT * FROM `files` WHERE `name` LIKE '" .$dateiname.  "' AND `size` > " .$dateigroesse. " AND `type` LIKE '" .$typ. "' AND `description` LIKE '" .$beschreibung. "'");
	}
	 else if($groesse == "kleiner"){
		$erg = $db->query("SELECT * FROM `files` WHERE `name` LIKE '" .$dateiname.  "' AND `size` < " .$dateigroesse. " AND `type` LIKE '" .$typ. "' AND `description` LIKE '" .$beschreibung. "'"); 
	 }
	 else{
		 $erg = $db->query("SELECT * FROM `files` WHERE `name` LIKE '" .$dateiname.  "' AND `size` LIKE " .$dateigroesse. " AND `type` LIKE '" .$typ. "' AND `description` LIKE '" .$beschreibung. "'");
	}
 }
 else if($dateiname != "" && $dateigroesse != "" && $beschreibung != ""){
	  if($groesse == "groesser"){
		$erg = $db->query("SELECT * FROM `files` WHERE `name` LIKE '" .$dateiname.  "' AND `size` > " .$dateigroesse. " AND `description` LIKE '" .$beschreibung. "'");
	 }
	 else if($groesse == "kleiner"){
		$erg = $db->query("SELECT * FROM `files` WHERE `name` LIKE '" .$dateiname.  "' AND `size` < " .$dateigroesse. " AND `description` LIKE '" .$beschreibung. "'"); 
	 }
	 else{
		 $erg = $db->query("SELECT * FROM `files` WHERE `name` LIKE '" .$dateiname.  "' AND `size` LIKE " .$dateigroesse. " `description` LIKE '" .$beschreibung. "'");
	 }
 }
 else if($dateiname != "" && $dateigroesse != ""){
	  if($groesse == "groesser"){
		$erg = $db->query("SELECT * FROM `files` WHERE `name` LIKE '" .$dateiname.  "' AND `size` > " .$dateigroesse);
	 }
	 else if($groesse == "kleiner"){
		$erg = $db->query("SELECT * FROM `files` WHERE `name` LIKE '" .$dateiname.  "' AND `size` < " .$dateigroesse); 
	 }
	 else{
		 $erg = $db->query("SELECT * FROM `files` WHERE `name` LIKE '" .$dateiname.  "' AND `size` LIKE " .$dateigroesse);
	 }
 }
 else if($dateiname != ""){
	 $erg = $db->query("SELECT * FROM `files` WHERE `name` LIKE '" .$dateiname.  "'");
	 }
 else if($dateigroesse != "" && $beschreibung != "" && $typ != ""){
	 if($groesse == "groesser"){
		$erg = $db->query("SELECT * FROM `files` WHERE `size` > " .$dateigroesse. " AND `type` LIKE '" .$typ. "' AND `description` LIKE '" .$beschreibung. "'");
	 }
	 else if($groesse == "kleiner"){
		$erg = $db->query("SELECT * FROM `files` WHERE `size` < " .$dateigroesse. " AND `type` LIKE '" .$typ. "' AND `description` LIKE '" .$beschreibung. "'"); 
	 }
	 else{
		 $erg = $db->query("SELECT * FROM `files` WHERE `size` LIKE " .$dateigroesse. " AND `type` LIKE '" .$typ. "' AND `description` LIKE '" .$beschreibung. "'");
	 }
 }
 else if($dateigroesse != "" && $beschreibung != ""){
	  if($groesse == "groesser"){
		$erg = $db->query("SELECT * FROM `files` WHERE `size` > " .$dateigroesse. " AND `description` LIKE '" .$beschreibung. "'");
	}
	 else if($groesse == "kleiner"){
		$erg = $db->query("SELECT * FROM `files` WHERE `size` < " .$dateigroesse. " AND `description` LIKE '" .$beschreibung. "'"); 
	 }
	 else{
		 $erg = $db->query("SELECT * FROM `files` WHERE `size` LIKE " .$dateigroesse. " `description` LIKE '" .$beschreibung. "'");
	 }
 }
 else if($dateigroesse != ""){
	  if($groesse == "groesser"){
		$erg = $db->query("SELECT * FROM `files` WHERE `size` > " .$dateigroesse);
	 }
	 else if($groesse == "kleiner"){
		$erg = $db->query("SELECT * FROM `files` WHERE `name` LIKE '" .$dateiname.  "' AND `size` < " .$dateigroesse); 
        $_SESSION['result'] = $erg;
	}
	 else{
		 $erg = $db->query("SELECT * FROM `files` WHERE `name` LIKE '" .$dateiname.  "' AND `size` LIKE " .$dateigroesse); 
	}
 }
 else if($beschreibung != "" && $typ != ""){	
		 $erg = $db->query("SELECT * FROM `files` WHERE `type` LIKE '" .$typ. "' AND `description` LIKE '" .$beschreibung. "'");
 }
 else if($beschreibung != ""){	 
		$erg = $db->query("SELECT * FROM `files` WHERE `description` LIKE '" .$beschreibung. "'");
 }
 else if($typ != ""){
		 $erg = $db->query("SELECT * FROM `files` WHERE `type` LIKE " .$typ);
}
else{
	$erg = $db->query("SELECT * FROM `files`");
}
 
         $_SESSION['result'] = $erg;	
		 header("location: ergebnis.php");
?>
