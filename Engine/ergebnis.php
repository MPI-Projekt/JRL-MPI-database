<?php
	session_start();
	//error_reporting(0);
	$_SESSION['dateiname'] = $_POST["dateiname"];
	$_SESSION['dateigroesse'] = $_POST["dateigroesse"];
	$_SESSION['groesse'] = $_POST["groesse"];
	$_SESSION['beschreibung'] = $_POST["beschreibung"];
	$_SESSION['dateityp'] = $_POST["dateityp"];
	$_SESSION['byte'] = $_POST["byte"];
	
	echo '<script>window.open("ergebnis.html","_top" );</script>';
?>