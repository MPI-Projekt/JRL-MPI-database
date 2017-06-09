<?php
require('ind.php');
$db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
					 'user'
					 );
if($db->connect_errno){
	require('user-datenbankErstellen.php');
	require('user-Einrichten.php');
	
	$db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
					 'user'
					 );
}

$pw1 = $_POST["pw1"];
$pw2 = $_POST["pw2"];
$benutzername = $_POST["benutzername"];	

if($pw1 == $pw2){
	<html>	
		<script>
			window.open("registrationfehlerhaft.html?error=passwort","_self")
		</script>
    </html>	
}
else{
$erg1 = $db->query("SELECT name FROM user WHERE name LIKE ".$benutzername);
if($erg1->num_rows){
	<html>	
		<script>
			window.open("registrationfehlerhaft.html?error=benutzername","_self")
		</script>
	</html>	
}
else{
$erg2 = $db->query("INSERT INTO user (name, password, database) VALUES ('" . $benutzername . "' , '" . $pw1 . "' , 'fs-" . $benutzername . "')");
	<html>	
		<script>
			window.open("home.html","_self")
		</script>
	</html>	
	}
}	
?>