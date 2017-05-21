<?php
	
	if (isset($_FILES['datei']['tmp_name'])) {
		move_uploaded_file($_FILES['datei']['tmp_name'], 'FZ/'.$_FILES['datei']['name']);
	 }
	$file = $_FILES['datei']['name'];
	$path = 'FZ/'.$_FILES['datei']['name'];
	$filename = 'name';
	$filesize = filesize($path);
	// Der Rest kommt von Jakob
	
	
	require_once ('konfiguration.php');
    $db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );

	$sql = "
	         INSERT INTO `files`
  ( 
  `name`, `size`, `reference`, `datum`
  )
  VALUES
  (
  " + $filename + ", " + $filesize + ", " + $path + "
  );";
  
  $db_erg1 = mysqli_query($db_link, $sql);
	
?>
<html>
	<script>
		window.open("eingabe.html","_self")
	</script>
</html>
