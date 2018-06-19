<html>
	<body bgcolor="#F5F5F5" />
</html>

<?php
require ('konfiguration.php');
$db = new mysqli(MYSQL_HOST, MYSQL_BENUTZER, MYSQL_KENNWORT, MYSQL_DATENBANK);

 $folder = 'upload/';
	
	if (isset($_FILES['datei']['tmp_name'])) {
		$dateityp = "".finfo_file( finfo_open( FILEINFO_MIME_TYPE ), $_FILES['datei']['tmp_name']);
		//Verschieben vom tmp Ordner des Servers in den Upload Ordner
		move_uploaded_file($_FILES['datei']['tmp_name'], $folder.$_FILES['datei']['name']);
	 }
	 
$filename = $_FILES['datei']['name'];
$filesize = $_FILES['datei']['size'];
$path = $_SERVER["DOCUMENT_ROOT"].'/'.$folder.$filename;
$beschreibung = $_POST['beschreibung']."";
$datum =  date("F d Y H:i:s.", filectime($filename));

// Umwandlung des Dateityps für die Datenbank
$datyp_anfang = substr($dateityp, 0, 4);
$datyp_ende = substr($dateityp, -4, 4);
if($datyp_anfang == "imag"){
	$dateityp = 'Bild';
} else if($datyp_anfang == "text" || ($datyp_anfang == "appl" && $datyp_ende == "pdf")){
	$dateityp = 'Textdokument';
} else if($datyp_anfang == "vide"){
	$dateityp = 'Video';
} else if($datyp_anfang == "audi" || $datyp_ende == "mpeg" || $datyp_ende == "peg3" || $datyp_ende == "eg-3" || $datyp_ende == "ream"){ // application/octet-stream muss differenziert werden!!!
	$dateityp = 'Audio';
}  else {
	$dateityp = 'unbekannt';
}

// Alles in die Datenbank
if($_POST['beschreibung'] != ""){
	$erg = $db->query("INSERT INTO `files` (`name`, `type`,`date`,`reference`,`size`,`description`) VALUES ('".$filename."', '" .$dateityp. "', '" .$datum."','" .$path."',".$filesize.",'".$beschreibung."')" );	 
}
else{
	$erg = $db->query("INSERT INTO `files` (`name`, `type`,`date`,`reference`,`size`) VALUES ('".$filename."', '" .$dateityp. "', '" .$datum."','" .$path."',".$filesize.")" );	 
}

?>
<html>
	<script>
		window.open("eingabe.html","_self")
	</script>
</html>


