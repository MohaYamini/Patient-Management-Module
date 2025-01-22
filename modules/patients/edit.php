<?php
require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/PatientController.php';
require_once __DIR__ . '/../doctors/DoctorController.php';
require_once __DIR__ . '/../../includes/config.php';

$patient_controller = new PatientController($db);  
$doctor_controller = new DoctorController($db);

$patient_id = $_GET['id'] ?? null;

if ($patient_id) {
    $patient = $patient_controller->getPatientById($patient_id);
    
    if ($patient) {

        $doctors = $doctor_controller->getAllDoctors();
        
        $smarty->assign('patient', $patient);
        $smarty->assign('doctors', $doctors);
    } else {
        echo "Patient not found.";
        exit;
    }
} else {
    echo "Invalid patient ID.";
    exit;
}

// Display the edit form using the Smarty template
$smarty->display(__DIR__ . '/edit.tpl');
?>
