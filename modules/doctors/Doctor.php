<?php

class Doctor {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addDoctor($full_name, $specialty, $phone, $email) {
        $stmt = $this->db->prepare("INSERT INTO doctor (full_name, specialty, phone, email) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$full_name, $specialty, $phone, $email]);
    }

    public function updateDoctor($id, $full_name, $specialty, $phone, $email) {
        $stmt = $this->db->prepare("UPDATE doctor SET full_name = ?, specialty = ?, phone = ?, email = ? WHERE id = ?");
        return $stmt->execute([$full_name, $specialty, $phone, $email, $id]);
    }

    public function deleteDoctor($id) {
        $stmt = $this->db->prepare("DELETE FROM doctor WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
