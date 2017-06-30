<?php
	session_start();
	//error_reporting(0);
	echo '<html>';
		echo '<meta charset="utf-8">';
		echo '<body bgcolor="#F5F5F5" text="#000000">';
			echo '<u><font size="6"><p align="center">Ergebnis</p></font></u>';
			$erg = $_SESSION['result'];
			if($erg->num_rows){//wenn Ergebnisse vorhanden
				$array = $erg->fetch_all(MYSQLI_ASSOC);
				echo '<table>';
				echo '<tr>';
				echo '<th>Dateiname</th>';
				echo '<th>Dateityp</th>';
				echo '<th>Dateigröße</th>';
				echo '<th>Dateipfad</th>';
				echo '<th>Datum</th>';
				echo '<th>Beschreibung</th>';
				echo '</tr>';
				if($erg->num_rows = 1){
					for($i = 0; $i < $erg->num_rows; $i++){
						echo '<tr>';
						echo '<td>'.$array['name'].'</td>';
						echo '<td>'.$array['type'].'</td>';
						echo '<td>'.$array['size'].'</td>';
						echo '<td>'.$array['reference'].'</td>';
						echo '<td>'.$array['date'].'</td>';
						echo '<td>'.$array['description'].'</td>';
						echo '</tr>';
					}
				} else {
					for($i = 0; $i < $erg->num_rows; $i++){
						echo '<tr>';
						echo '<td>'.$array[$i]['name'].'</td>';
						echo '<td>'.$array[$i]['type'].'</td>';
						echo '<td>'.$array[$i]['size'].'</td>';
						echo '<td>'.$array[$i]['reference'].'</td>';
						echo '<td>'.$array[$i]['date'].'</td>';
						echo '<td>'.$array[$i]['description'].'</td>';
						echo '</tr>';
					}
				}
				echo '</table>';
			} else{
				echo 'Keine Dateien vorhanden.';
			}
		echo '</body>';
	echo '</html>';
?>
