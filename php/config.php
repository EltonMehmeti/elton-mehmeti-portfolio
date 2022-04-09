<?php

$servername = "localhost";
$dbname ="portfolio";
$username = "root";
$password ="";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;",$username,
    $password);
}

catch(PDOException $e) {
    echo "Not connected".$e->getMessage();
}



?>