<?php
require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/DoctorController.php';
require_once __DIR__ . '/../../includes/config.php';

$doctor_controller = new DoctorController($db);

if (isset($_POST['id'])) {
    $doctor_id = $_POST['id'];

    if ($doctor_controller->deleteDoctor($doctor_id)) {
        echo "success";
    } else {
        echo "failed";
    }
} else {
    echo "Invalid doctor ID.";
}
?>
