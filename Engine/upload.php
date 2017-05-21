<?php
	
	if (isset($_FILES['datei']['tmp_name'])) {
		move_uploaded_file($_FILES['datei']['tmp_name'], 'FZ/'.$_FILES['datei']['name']);
	 }
	$file = $_FILES['datei']['name'];
	$path = 'FZ/'.$_FILES['datei']['name'];
	$filename = 'name';
	$filesize = filesize($path);
	// Der Rest kommt von Jakob
?>
<html>
	<script>
		window.open("eingabe.html","_self")
	</script>
</html>
