<html>
	<head>
		<link rel="icon" type="image/gif" href="bilder/loading.gif">
	</head>
	<body bgcolor="#F5F5F5" />
</html>

<?php
require ('konfiguration.php');
$db = new mysqli(MYSQL_HOST, MYSQL_BENUTZER, MYSQL_KENNWORT, MYSQL_DATENBANK);

	if (isset($_FILES['datei']['tmp_name'])) {
		move_uploaded_file($_FILES['datei']['tmp_name'], 'upload/'.$_FILES['datei']['name']);
	 }
$folder = 'upload/';
$filename = pathinfo($_FILES['datei']['tmp_name'], PATHINFO_FILENAME);
$extension = strtolower(pathinfo($_FILES['datei']['tmp_name'], PATHINFO_EXTENSION));
$filesize = $_FILES['datei']['size'];
$filesize = $filesize*1000000;
$path = pathinfo($_FILES['datei']['tmp_name'], PATHINFO_DIRNAME);
$datum = date("F d Y H:i:s.", filemtime($filename));
$dateityp = $_POST['dateityp'];
$beschreibung = $_POST['beschreibung'];
$type = $_FILES['datei']['typ'];



if($_POST['beschreibung'] != ""){
$erg = $db->query("INSERT INTO `files` (`name`, `type`,`date`,`reference`,`size`,`description`) VALUES ('".$filename."', '" .$dateityp. "', '" .$datum."','" .$path."',".$filesize.",'".$beschreibung.")" );	 
}
else{
	$erg = $db->query("INSERT INTO `files` (`name`, `type`,`date`,`reference`,`size`) VALUES ('".$filename."', '" .$dateityp. "', '" .$datum."','" .$path."',".$filesize.")" );	 
}

?>
<html>
	<script>
		//window.open("eingabe.html","_self")
	</script>
</html>
