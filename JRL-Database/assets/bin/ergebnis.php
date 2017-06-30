<html>
	<body bgcolor="#F5F5F5" text="#000000">
		<u><font size="6"><p align="center">Ergebnis</p></font></u>
		
<?php
		session_start();
		$erg = $_SESSION['result'];
		if($erg->num_rows){//wenn Ergebnisse vorhanden
		$array = $erg->fetch_all();
		}
		echo "<script>";
?>
			function name(pName){
              document.write(pName + ': ');			
			}
			var ref = $array[0];
			function auto(pReferenz){
				window.open(pReferenz);
			}
			name('Test');
		</script>
		<a href="javascript:void(0)" onclick="auto(ref);">Hier klicken...</a>
	</body>
</html>