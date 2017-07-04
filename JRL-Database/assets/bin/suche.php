<?php
session_start();
error_reporting(0);
require('konfiguration.php');
    $db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
				
$dateiname = $_SESSION["dateiname"];	
$dateigroesse = $_SESSION["dateigroesse"];
$groesse = $_SESSION["groesse"];
$beschreibung = $_SESSION["beschreibung"];
$typ = $_SESSION["dateityp"];

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
       
echo '<html>';
		echo '<meta charset="utf-8">';
		echo '<head>';
		echo '<link rel="icon" href="bilder/JRL-Database.ico">';
		echo '</head>';
		echo '<body bgcolor="#F5F5F5" text="#000000">';
			echo '<u><font size="6"><p align="center">Ergebnis</p></font></u>';
			echo '<div align="center">';	
			echo '<br><br>';
			if($erg->num_rows){ 
					
				    echo '<table border="1">';
				    echo '<tr>';
						echo '<th style="width:16%">Dateiname</th>';
						echo '<th style="width:16%">Dateityp</th>';
						echo '<th style="width:16%">Dateigröße</th>';
						echo '<th style="width:16%">Dateipfad</th>';
						echo '<th style="width:16%">Datum</th>';
						echo '<th style="width:16%">Beschreibung</th>';
				    echo '</tr>';
					
				    while($row = mysqli_fetch_object($erg)){
				    echo '<tr>';
						echo '<td>'.$row->name.'</td>';
						echo '<td>'.$row->type.'</td>';
						echo '<td>'.$row->size.' MB</td>';
						echo '<td>'.$row->reference.'</td>';
						echo '<td>'.$row->date.'</td>';
						echo '<td>'.$row->description.'</td>';
					echo '</tr>';
				    }
				
				
				echo '</table>';
			}else{
				echo 'Keine Dateien vorhanden.';
			}
			echo '<br><br><br>';
			echo '<form target="_top" action="eingabeV2.html">';
			echo '<button type="submit" style="width:15%">Zurück</button>';
			echo '</form>';
			echo '</div>';
		echo '</body>';
echo '</html>';
?>
