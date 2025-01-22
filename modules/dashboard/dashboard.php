<?php
require_once __DIR__ . '/../../includes/db.php'; // Include your database connection file
require_once __DIR__ . '/../../vendor/autoload.php'; // Include Smarty

// Initialize Smarty
$smarty = new Smarty;

// Get the total number of patients
$total_patients_query = "SELECT COUNT(*) AS total FROM patients";
$total_patients_result = $db->query($total_patients_query);
$total_patients_row = $total_patients_result->fetch(PDO::FETCH_ASSOC);
$total_patients = $total_patients_row['total'];

// Get the total number of doctors
$total_doctors_query = "SELECT COUNT(*) AS total FROM doctor";
$total_doctors_result = $db->query($total_doctors_query);
$total_doctors_row = $total_doctors_result->fetch(PDO::FETCH_ASSOC);
$total_doctors = $total_doctors_row['total'];

// Assign variables to Smarty
$smarty->assign('total_patients', $total_patients);
$smarty->assign('total_doctors', $total_doctors);

// Display the template
$smarty->display(__DIR__ . '/dashboard.tpl');
?>
