<?php

include ('db.php');

//post lat,lng from js

$lat = $_POST['lat'];
$lng = $_POST['lng'];

//ereuna an to simeio anoikei stin perioxi ereunon

$within = pg_exec($db, 
"select st_contains(st_geomfromtext('POLYGON((
                                             41.7750000000 19.3666666667,
                                             34.4750000000 19.3666666667,
                                             34.4750000000 29.6500000000,
                                             41.7750000000 29.6500000000, 
	                                         41.7750000000 19.3666666667))'), 
											 ST_MakePoint('$lat', '$lng'))" );

		
$rows = pg_fetch_all ($within);
//echo json_encode($rows);
$boundscheck = ($rows[0]['st_contains'] == 't');
if ($boundscheck == true){
//	evresi thermokrasias
$result = pg_exec($db, 
"SELECT
ST_Distance(ST_SetSRID(ST_MakePoint('$lng', '$lat'),4326), temp.pointxy) AS planar_degrees,
longtitude,
latitude,
temperature
FROM temp
ORDER BY planar_degrees ASC
LIMIT 1;" );

while ($row = pg_fetch_row($result)) {
	$longtitude = $row[1];
	$latitude = $row[2];
	$temperature = $row[3];
    $message ="Θερμοκρασία: $temperature βαθμοί Κελσίου.";
   echo json_encode($message, JSON_UNESCAPED_UNICODE);
}
	
}
else{
//epistrofi se js
  $warning = "Εκτός ορίων";
  echo json_encode($warning, JSON_UNESCAPED_UNICODE);	
}








/*
$result = pg_exec($db, "SELECT * FROM temp WHERE (longtitude::text) LIKE '$lng%' AND (latitude::text) LIKE '$lat%'");
while ($row = pg_fetch_row($result)) {
  echo "<br>";
  echo "from database:";
  echo "<br>";
  echo "$row[0]";
  echo "<br>";
  echo "$row[1]";
  echo "<br>";
  echo "$row[2] ";
}
*/
?>