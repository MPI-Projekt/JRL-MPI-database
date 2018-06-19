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
$byte = $_SESSION["byte"];

if($groesse == "groesser"){
	$groesse = ">";
} else if($groesse == "kleiner"){
	$groesse = "<";
} else {
	$groesse = "LIKE";
}

if($byte == "KB"){
	$dateigroesse = $dateigroesse * 1000;
} else if ($byte == "MB") {
	$dateigroesse = $dateigroesse * 1000000;
}

if($dateiname != ""){
	$dateiname = " `name` LIKE '%%" .$dateiname.  "%%' ";
} else {
	$dateiname = "TRUE";
}
if($beschreibung != ""){
	$beschreibung = " `description` LIKE '" .$beschreibung. "' ";
} else {
	$beschreibung = "TRUE";
}
if($typ != ""){
	$typ = " `type` LIKE '" .$typ. "' ";
} else {
	$typ = "TRUE";
}
if($dateigroesse != ""){
	$dateigroesse = " `size` " .$groesse.$dateigroesse. " ";
} else {
	$dateigroesse = "TRUE";
}

$erg = $db->query("SELECT * FROM `files` WHERE " .$dateiname. " AND " .$beschreibung. " AND " .$typ. " AND " .$dateigroesse);
       
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
					
				    echo '<table style="border-collapse: collapse" border="1">';
				    echo '<tr>';
						echo '<th style="width:15%">Dateiname</th>';
						echo '<th style="width:15%">Dateityp</th>';
						echo '<th style="width:15%">Dateigröße</th>';
						echo '<th style="width:15%">Dateipfad</th>';
						echo '<th style="width:15%">Datum</th>';
						echo '<th style="width:15%">Beschreibung</th>';
				    echo '</tr>';
					
				    while($row = mysqli_fetch_object($erg)){
						$size_einheit = "Bytes";
						$tmp_size = $row->size;
						if($tmp_size >= 1000) {
							$size_einheit = "KB";
							$tmp_size = $tmp_size/1000;
						}
						if($tmp_size >= 1000){
							$size_einheit = "MB";
							$tmp_size = $tmp_size/1000;
						}
						if($tmp_size >= 1000){
							$size_einheit = "GB";
							$tmp_size = $tmp_size/1000;
						}
						$tmp_size = number_format($tmp_size, 2, ',', '');
						echo '<tr>';
							echo '<td style="padding: 5px">'.$row->name.'</td>';
							echo '<td style="padding: 5px">'.$row->type.'</td>';
							echo '<td style="padding: 5px">'.$tmp_size.$size_einheit.'</td>';
							echo '<td style="padding: 5px">'.$row->reference.'</td>';
							echo '<td style="padding: 5px">'.$row->date.'</td>';
							echo '<td style="padding: 5px">'.$row->description.'</td>';
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
