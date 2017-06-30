<?php
	session_start();
	$_SESSION['name'] = null;
	header('location: home.html');
?>