<?php
require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/PatientController.php';
require_once __DIR__ . '/../../includes/config.php';

$patient_controller = new PatientController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming the data from the form is sent via POST
    $patient_id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $doctor_id = $_POST['doctor_id'];

    // Update patient details
    $patient_controller->updatePatient($patient_id, $full_name, $phone, $email, $date, $date_of_birth, $gender, $doctor_id);

    // Redirect to patient list after successful update
    header("Location: /Patient-Management-Module/index.php?module=patients&page=list");
    exit;
}
?>
