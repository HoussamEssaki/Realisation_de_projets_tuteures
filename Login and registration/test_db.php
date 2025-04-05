<?php
require_once 'config.php';
try {
    $stmt = $conn->query("SELECT 1");
    echo "Database connection successful!";
    echo "<br>Current tables: ";
    $tables = $conn->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    print_r($tables);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>