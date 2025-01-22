<?php
// Include your database connection and the controller
require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/PatientController.php';
require_once __DIR__ . '/../../includes/config.php';

$patient_controller = new PatientController($db);

// Check if 'id' is provided in the query string
if (isset($_GET['id'])) {
    $patient_id = $_GET['id']; // Use the correct query parameter

    // Fetch the patient details using the controller
    $patient = $patient_controller->getPatientById($patient_id); // Correctly use $patient_id

    // If the patient is found, return the details as JSON, otherwise show an error
    if ($patient) {
        echo json_encode($patient);
    } else {
        echo json_encode(['error' => 'Patient not found']);
    }
} else {
    echo json_encode(['error' => 'No patient ID provided']);
}
