<?php

class Patient
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addPatient($full_name, $phone, $email, $date, $date_of_birth, $gender, $doctor_id)
    {
        $stmt = $this->db->prepare("INSERT INTO patients (full_name, phone, email, date, date_of_birth, gender, doctor_id) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$full_name, $phone, $email, $date, $date_of_birth, $gender, $doctor_id]);
    }

    public function updatePatient($id, $full_name, $phone, $email, $date, $date_of_birth, $gender, $doctor_id)
    {
        $stmt = $this->db->prepare("UPDATE patients 
                                    SET full_name = ?, phone = ?, email = ?, date = ?, date_of_birth = ?, gender = ?, doctor_id = ? 
                                    WHERE id = ?");
        return $stmt->execute([$full_name, $phone, $email, $date, $date_of_birth, $gender, $doctor_id, $id]);
    }

    public function deletePatient($id)
    {
        $stmt = $this->db->prepare("DELETE FROM patients WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function getPatient($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM patients WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
