<?php

require_once __DIR__ . '/Patient.php';

class PatientController
{
    private $patient_model;
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
        $this->patient_model = new Patient($db);
    }

    public function addPatient($full_name, $phone, $email, $date, $date_of_birth, $gender, $doctor_id)
    {
        return $this->patient_model->addPatient($full_name, $phone, $email, $date, $date_of_birth, $gender, $doctor_id);
    }

    public function getPatientById($id)
    {
        $stmt = $this->db->prepare("
            SELECT p.*, d.full_name AS doctor_name
            FROM patients p
            LEFT JOIN doctor d ON p.doctor_id = d.id
            WHERE p.id = :id
        ");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updatePatient($id, $full_name, $phone, $email, $date, $date_of_birth, $gender, $doctor_id)
    {
        return $this->patient_model->updatePatient($id, $full_name, $phone, $email, $date, $date_of_birth, $gender, $doctor_id);
    }

    public function deletePatient($id)
    {
        return $this->patient_model->deletePatient($id);
    }
}
