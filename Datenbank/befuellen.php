
<?php
 require_once ('konfiguration.php');
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );

$sql = "
  INSERT INTO `files`
  ( 
  `id` , `name`, `size`, `reference`, `datum`, `description`  
  ) 
  VALUES
  (
  001 , 'Hallelujah', 134.00, 'Desktop/Musik/Leonard Cohen', '1997-09-03 00:00:00', 'von Leonard Cohen'
  );
";

$sql1 = "
  INSERT INTO `files`
  ( 
  `id` , `name`, `size`, `reference`, `datum`, `description`
  ) 
  VALUES
  (
  002 , 'Unbroken', 134.00, 'Desktop/Musik/Beyond the Black/Songs of Love and Death', '2015-08-09 00:00:00', 'von Beyond the Black'
  );
";

$sql2 = "
  INSERT INTO `files`
  ( 
  `id` , `name`, `size`, `reference`, `datum`, `description`
  ) 
  VALUES
  (
  003 , 'Sonnenuntergang', 34.00, 'Desktop/Bilder/Ostsee 2016', '2016-07-23 00:00:00', 'Ostsee 2016'
  );
";

$sql3 = "
  INSERT INTO `files`
  ( 
  `id` , `name`, `size`, `reference`, `datum`, `description`  
  ) 
  VALUES
  (
  004 , 'Birke', 34.00, 'Desktop/Bilder/Wald', '2015-08-24 00:00:00', 'Wald 2015'
  );
";

$sql4 = "
  INSERT INTO `kind`
  ( 
  `id` , `name`  
  ) 
  VALUES
  (
  001 , 'Bild'
  );
";

$sql5 = "
  INSERT INTO `kind`
  ( 
  `id` , `name`  
  ) 
  VALUES
  (
  002 , 'Musik'
  );
";

$sql6 = "
  INSERT INTO `r_kind_files`
  ( 
  `id_kind` , `id_file`  
  ) 
  VALUES
  (
  002 , 001
  );
";					

$sql7 = "
  INSERT INTO `r_kind_files`
  ( 
  `id_kind` , `id_file`  
  ) 
  VALUES
  (
  002 , 002
  );
";					

$sql8 = "
  INSERT INTO `r_kind_files`
  ( 
  `id_kind` , `id_file`  
  ) 
  VALUES
  (
  001 , 003
  );
";					

$sql9 = "
  INSERT INTO `r_kind_files`
  ( 
  `id_kind` , `id_file`  
  ) 
  VALUES
  (
  001 , 004
  );
";					
  
$db_erg1 = mysqli_query($db_link, $sql);
$db_erg2 = mysqli_query($db_link, $sql1);
$db_erg3 = mysqli_query($db_link, $sql2);
$db_erg4 = mysqli_query($db_link, $sql3);
$db_erg5 = mysqli_query($db_link, $sql4);
$db_erg6 = mysqli_query($db_link, $sql5);
$db_erg7 = mysqli_query($db_link, $sql6);
$db_erg8 = mysqli_query($db_link, $sql7);
$db_erg9 = mysqli_query($db_link, $sql8);
$db_erg10 = mysqli_query($db_link, $sql9);    
?>