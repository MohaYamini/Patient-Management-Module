<?php

require_once __DIR__ . '/Doctor.php';

class DoctorController
{
    private $doctor_model;
    private $db; 

    public function __construct($db)
    {
        $this->db = $db; 
        $this->doctor_model = new Doctor($db);  
    }

    public function addDoctor($full_name, $specialty, $phone, $email)
    {
        return $this->doctor_model->addDoctor($full_name, $specialty, $phone, $email);
    }

    public function getDoctorById($doctor_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM doctor WHERE id = :id");
        $stmt->bindParam(':id', $doctor_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateDoctor($id, $full_name, $specialty, $phone, $email)
    {
        return $this->doctor_model->updateDoctor($id, $full_name, $specialty, $phone, $email);
    }

    public function deleteDoctor($id)
    {
        return $this->doctor_model->deleteDoctor($id);
    }

    public function getAllDoctors()
    {
        $stmt = $this->db->prepare("SELECT id, full_name FROM doctor"); 
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
