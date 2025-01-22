<?php
// Include the database config
require_once 'db.php';

try {
    // Create the database if it doesn't exist
    $pdo->exec("CREATE DATABASE IF NOT EXISTS patient_management");

    // Use the created database
    $pdo->exec("USE patient_management");

    // Create the 'doctor' table first
    $sql = "
        CREATE TABLE IF NOT EXISTS doctor (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            full_name VARCHAR(255) NOT NULL,
            specialty VARCHAR(255) NOT NULL,
            phone VARCHAR(15) NOT NULL,
            email VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );
    ";

    // Execute the query to create the 'doctor' table
    $pdo->exec($sql);
    echo "Table 'doctor' created successfully.\n";

    // Now, create the 'patients' table with a foreign key constraint
    $sql = "
        CREATE TABLE IF NOT EXISTS patients (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            full_name VARCHAR(255) NOT NULL,
            phone VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            date DATE NOT NULL,
            date_of_birth DATE NOT NULL,
            gender ENUM('Male', 'Female') NOT NULL,
            doctor_id INT(11) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (doctor_id) REFERENCES doctor(id) ON DELETE CASCADE
        );
    ";

    // Execute the query to create the 'patients' table
    $pdo->exec($sql);
    echo "Table 'patients' created successfully.\n";

} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
