<?php  
// Calculate the distance between two places using haversine formula
include_once 'database/database_connection.php';

$lat1 = @$_POST["firstLatitude"];
$lon1 = @$_POST["firstLongitude"];
$lat2 = @$_POST["secondLatitude"];
$lon2 = @$_POST["secondLongitude"];

function distancia($lat1, $lon1, $lat2, $lon2) {

    $lat1 = deg2rad($lat1);
    $lat2 = deg2rad($lat2);
    $lon1 = deg2rad($lon1);
    $lon2 = deg2rad($lon2);

    $dist = (6371 * acos( cos( $lat1 ) * cos( $lat2 ) * cos( $lon2 - $lon1 ) + sin( $lat1 ) * sin($lat2) ) );
    $dist = number_format($dist, 2, '.', '');
    return $dist;
}

$total = distancia($lat1, $lon1, $lat2, $lon2);

echo json_encode($total);

