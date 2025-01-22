<?php
require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/PatientController.php'; 
require_once __DIR__ . '/../doctors/DoctorController.php'; 
require_once __DIR__ . '/../../includes/config.php';

$patient_controller = new PatientController($db);
$doctor_controller = new DoctorController($db);
$doctors = $doctor_controller->getAllDoctors();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];  
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $doctor_id = $_POST['doctor_id'];  

    $patient_controller->addPatient($full_name, $phone, $email, $date, $date_of_birth, $gender, $doctor_id);
    
    header("Location: /Patient-Management-Module/index.php?module=patients&page=list");
    exit;  
}

$smarty->assign('doctors', $doctors);
$smarty->display(__DIR__ . '/form.tpl');
?>
