<?php
	
	if (isset($_FILES['datei']['tmp_name'])) {
		move_uploaded_file($_FILES['datei']['tmp_name'], 'H:\FZ'.$_FILES['datei']['name']);
		}
	
	$file = $_FILES['datei']['name']
	

?>
<html>
	<script>
		window.open("einabe.php","_self")
	</script>
</html>