<?php
$host = 'localhost';
$dbname = 'patient_management';
$username = 'root';
$password = '';

try {
    // Create a new PDO instance for MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Now assign the PDO instance to $db so it's used across other files
    $db = $pdo;
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}