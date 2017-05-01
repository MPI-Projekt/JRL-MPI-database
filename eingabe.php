<?php
//	 if (isset($_FILES['datei']['tmp_name'])) {
//		move_uploaded_file($_FILES['datei']['tmp_name'], 'upload/'.$_FILES['datei']['name']);
//	 }
?>
<html>
	<body bgcolor="#F5F5F5" text="#000000">
		<u><font size="6"><p align="center">Eingabe</p></font></u>
		<form action="upload.php" method="post" enctype="multipart/form-data"><br /><br />  <!-- eingabe.php => upload.php -> siehe Robin -->
			Bitte geben Sie hier Ihre Datei zum speichern ein:<br /><br />
			<input type="file" name="datei" id="datei"><br /><br />
			<input type="reset" onclick="alert('Ihre Daten wurden zur&uuml;ckgesetzt.')">
			<input type="submit" value="Speichern">
		</form><br /><br /> 
<!--		<form class="box" method="post" action="" enctype="multipart/form-data">
			<div class="box__input">
				<input class="box__file" width="400px" height="100px" style="border: 5px dotted red;cursor:crosshair;" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
				<label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
				<button class="box__button" type="submit">Upload</button>
				<input type="reset">
			</div>
		</form> -->
	</body>
</html>
