<?php
$host = "localhost";
$dbname = "ecommerce_db";
$username = "root";
$password = ""; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;port=3307", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    echo "Connected successfully"; 
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>