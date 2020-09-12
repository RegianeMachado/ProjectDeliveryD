<?php
// This file has like objective check if the city was registered in the database and it´s send the response to html with the longitude and latitude values

require 'database_connection.php';
$cityName = @$_REQUEST["city"];

$sth = $pdo->prepare("SELECT cityName, latitude, longitude 
                        FROM cities_register
                        WHERE cityName = ?");
$sth->execute(array($cityName));

$result = $sth->fetchAll(\PDO::FETCH_ASSOC);

foreach($result as $value) {
    echo json_encode($value) ;
}

