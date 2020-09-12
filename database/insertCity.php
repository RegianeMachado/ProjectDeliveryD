<?php
// This file inserts the register citys values in database and create and write the values ones in file: vertices.txt
require 'database_connection.php';

$cityName = @$_POST["cityName"];
$latitude = @$_POST["latitude"];
$longitude = @$_POST["longitude"];

$sql = $pdo->prepare("INSERT IGNORE INTO cities_register (cityName, latitude, longitude) VALUES(?,?,?)");
$response = $sql->execute(array($cityName, $latitude, $longitude)) ;

echo json_encode($response);


$createFile = fopen("vertices.txt","a+",0);
$valueVertices = $cityName.",".$latitude.",".$longitude."\n";
fwrite($createFile,$valueVertices,strlen($valueVertices));
fclose($createFile);