<?php
require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/DoctorController.php';
require_once __DIR__ . '/../../includes/config.php';

$doctor_controller = new DoctorController($db);  

$doctor_id = $_GET['id'] ?? null;

if ($doctor_id) {

    $doctor = $doctor_controller->getDoctorById($doctor_id);
    var_dump($doctor);
    
    if ($doctor) {
    } else {
        echo "Doctor not found.";
    }
} else {
    echo "Invalid doctor ID.";
}

$smarty->assign('doctor', $doctor);
$smarty->display(__DIR__ . '/edit.tpl');
?>
