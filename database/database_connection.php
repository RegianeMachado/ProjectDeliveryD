<?php
// I used the connectio with PDO from PHP , because it 's more safe and the community from PHP reccommends
$username = 'root';
$password = '';

    try {
    $pdo = new PDO('mysql:host=localhost;dbname=delivery_direto', $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }