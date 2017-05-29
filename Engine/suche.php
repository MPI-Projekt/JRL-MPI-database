<?php

require_once ('konfiguration.php');
    $db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
				

 if($dateiname != "" && $dateigroesse != ""){
	 if($groesse == "groesser"){
		$sql = "SELECT " .$reference. " FROM `files` WHERE `name` LIKE " .$dateiname.  " AND `size` > " .$dateigroesse. ";"
	 }
 }
 
 
 $db_erg = mysqli_query($db_link, $sql);
 
 echo '<table border="1">';
while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
{
  echo "<tr>";
  echo "<td>". $zeile['reference'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>