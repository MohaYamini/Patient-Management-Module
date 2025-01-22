<?php
require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/DoctorController.php';
require_once __DIR__ . '/../../includes/config.php';

$doctor_controller = new DoctorController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $doctor_controller = new DoctorController($db);
    $doctor_controller->addDoctor($_POST['full_name'], $_POST['specialty'], $_POST['phone'], $_POST['email']);
    
    header("Location: /Patient-Management-Module/index.php?module=doctors&page=list");
    exit;  
}

$smarty->display(__DIR__ . '/form.tpl');
?>
