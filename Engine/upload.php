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
	 echo $dateityp;
	 
$filename = $_FILES['datei']['name'];
$filesize = $_FILES['datei']['size'];
$path = $_SERVER["DOCUMENT_ROOT"].'/'.$folder.$filename;
$beschreibung = $_POST['beschreibung']."";
$datum =  date("F d Y H:i:s.", filectime($path));/* $_FILES['date'];*/

// Umwandlung des Dateityps für die Datenbank
$datyp_anfang = /*substr($dateityp, 0, 4);*/substr($dateityp, 0, strpos($dateityp, '/'));
$datyp_ende = /*substr($dateityp, -4, 4);*/substr($dateityp, strpos($dateityp, '/'), strlen($dateityp) - 1);

echo $datyp_anfang."</br>";
echo $datyp_ende."</br>";

echo "Description: ".$beschreibung;

if(strcmp($datyp_anfang,"image") == 0){
	$dateityp = "image";
} else if($datyp_anfang == "text" || ($datyp_anfang == "application" && ($datyp_ende == "/pdf" || $dateityp_ende == "/vnd.openxmlformats-officedocument. wordprocessingml.document"))){
	$dateityp = "text";
} else if($datyp_anfang == "video"){
	$dateityp = "video";
} else if($datyp_anfang == "audio" || $datyp_ende == "/mpeg" || $datyp_ende == "/peg3" || $datyp_ende == "/eg-3" || $datyp_ende == "/ream"){ // application/octet-stream muss differenziert werden!!!
	$dateityp = "audio";
}  else {
	$dateityp = "unbekannt";
}
echo "</br>".$dateityp; 
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
		//window.open("eingabe.html","_self")
	</script>
</html>


