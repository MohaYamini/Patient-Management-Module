<?php
require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/PatientController.php';
require_once __DIR__ . '/../../includes/config.php';

$patient_controller = new PatientController($db);

if (isset($_POST['id'])) {
    $patient_id = $_POST['id'];

    if ($patient_controller->deletePatient($patient_id)) {
        echo "success";
    } else {
        echo "failed";
    }
} else {
    echo "Invalid patient ID.";
}
?>
