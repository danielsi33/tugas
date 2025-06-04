<?php
require_once "../models/cinimodelll.php";

class PetsalonController {
    private $model;

    public function __construct() {
        $this->model = new Petsalon();
    }

    public function store() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idm = $_POST["idm"];
            $nama = $_POST["nama"];
            $pet = $_POST["pet"];
            $alamat = $_POST["alamat"];
            $tlp = $_POST["tlp"];
            if ($this->model->insertPetsalon($idm, $nama, $pet, $alamat, $tlp)) {
                header("Location: ../index.php"); // Redirect setelah insert
                exit();
            } else {
                echo "Gagal menyimpan data";
            }
        }
    }

    public function index() {
        return $this->model->getAllPetsalon();
    }
    public function edit($idm) {
        return $this->model->getPetsalonByIdm($idm);
    }
    
    public function update() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idm = $_POST["idm"];
            $nama = $_POST["nama"];
            $pet = $_POST["pet"];
            $alamat = $_POST["alamat"];
            $tlp = $_POST["tlp"];
            if ($this->model->updatePetsalon($idm, $nama, $pet, $alamat, $tlp)) {
                header("Location: ../index.php"); // Redirect ke index setelah update
                exit();
            } else {
                echo "Gagal mengupdate data";
            }
        }
    }
  
    public function delete() {
        if (isset($_GET["idm"])) {
            $idm = $_GET["idm"];
            if ($this->model->deletePetsalon($idm)) {
                header("Location: ../index.php"); // Redirect ke index setelah delete
                exit();
            } else {
                echo "Gagal menghapus data";
            }
        }
    }  
    
}

// Jika request berasal dari form insert, jalankan store()
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new PetsalonController();
    $controller->store();
}
if (isset($_POST["idm"])) {
    $controller = new PetsalonController();
    $controller->update();
}
?>