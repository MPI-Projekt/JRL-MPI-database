<?php
	require_once ('konfiguration.php');
    $db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
	
	if (isset($_FILES['datei']['tmp_name'])) {
		move_uploaded_file($_FILES['datei']['tmp_name'], 'FZ/'.$_FILES['datei']['name']); //Upload noch fehlerhaft
	 }
	$file = $_FILES['datei']['name'];
	$path = 'FZ/'.$_FILES['datei']['name'];
	$filename = 'name';
	$filesize = filesize($path);
 	$date = . date("F d Y H:i:s.", filemtime($filename));
	// Der Rest kommt von Jakob 
	//Jakob hat ;-P
	//letztes Änderungsdatum muss noch mitgegeben werden
	
	
	//id?
	
	
	

	$sql = "
	         INSERT INTO `files`
  ( 
    `id`, `name`, `size`, `reference`, `datum`
  )
  VALUES
  (
   001, '" . $filename . "', " . $filesize . ", '" . $path . "',". $date"
  );";
  $commands[] = $sql;
  
  $db_erg = mysqli_query($db_link, $sql);
	
?>
<html>
	<script>
		window.open("eingabe.html","_self")
	</script>
</html>
