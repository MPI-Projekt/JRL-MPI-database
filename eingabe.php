<?php
if (isset($_FILES['datei']['tmp_name'])) {
  move_uploaded_file($_FILES['datei']['tmp_name'], 'upload/'.$_FILES['datei']['name']);
}
?>
<html>
	<body bgcolor="#F5F5F5" text="#000000">
		<u><font size="6"><p align="center">Eingabe</p></font></u>
		<form action="eingabe.php" method="post" enctype="multipart/form-data"><br /><br /><!-- upload.php -> siehe Robin -->
			Bitte geben Sie hier Ihre Datei zum speichern ein:<br /><br />
			<input type="file" name="datei" id="datei"><br /><br />
			<input type="reset" onclick="alert('Ihre Daten wurden zur&uuml;ckgesetzt.')">
			<input type="submit" value="Speichern"> <!-- onclick funktioniert hier noch nicht so richtig --> 
		</form>
		<script>
		function test() {
			window.open("eingabe.html","_self");
		}
		</script>
	</body>
</html>
