<html>
	<body bgcolor="#F5F5F5">
	</body>
</html>

<?php
	session_start();
	//$name = $_SESSION[ 'name' ];
	echo "Sie sind angemeldet als ";
	echo '<span style="color: #0000ff">',$_SESSION["name"],'</span>';
?>
