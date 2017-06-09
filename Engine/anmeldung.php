<?php
require('index.php');
$db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
					 user
                     );

if($db->connect_errno){
require('user-datenbankErstellen.php');
$db = new mysqli(
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
					 user
                     );
}	
$erg = $db->query("Select database WHERE name LIKE " .$benutzername. " AND password LIKE " .$passwort);
if($erg->num_rows){
$array = $erg->fetch_assoc();
$database = $array['database'];
include('konfiguration.php');
}
else{
<html>

<script>
  window.open("logindatenfehlerhaft.html","_self")
</script>
</html>	
}
?>