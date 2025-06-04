<?php
require_once "config.php";

class Petsalon {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conn;
    }

    public function insertPetsalon($idm, $nama, $pet, $alamat, $tlp) {
        $query = "INSERT INTO petsalon (idm, Nama, pet, alamat, tlp) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssss", $idm, $nama, $pet, $alamat, $tlp);
        return $stmt->execute();
    }

    public function getAllPetsalon() {
        $query = "SELECT * FROM petsalon";
        $result = $this->conn->query($query);

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }


    public function getPetsalonByIdm($idm) {
        $query = "SELECT * FROM petsalon WHERE idm = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $idm);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    
    public function updatePetsalon($idm, $nama, $pet, $alamat, $tlp) {
        $query = "UPDATE petsalon SET nama = ?, pet = ?, alamat = ?, tlp = ? WHERE idm = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssss", $nama, $pet, $alamat, $tlp, $idm);
        return $stmt->execute();
    }

    public function deletePetsalon($idm) {
        $query = "DELETE FROM petsalon WHERE idm = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $idm);
        return $stmt->execute();
    }
    
}

?>