<?php

require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/DoctorController.php';
require_once __DIR__ . '/../../includes/config.php';

$doctor_controller = new DoctorController($db);

if (isset($_GET['id'])) {
    $doctor_id = $_GET['id'];
    $doctor = $doctor_controller->getDoctorById($doctor_id);

    if ($doctor) {
        echo json_encode($doctor); 
    } else {
        echo json_encode(['error' => 'Doctor not found']);
    }
}
?>
