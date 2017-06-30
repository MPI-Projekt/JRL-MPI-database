<?php
	session_start();
	require('ind.php');
	error_reporting(E_ALL);
	$database = $_SESSION[ 'database' ];
	define ( 'MYSQL_DATENBANK', ''.$database);
?>
