<?php
require_once "../controllers/cinicontrollerr.php";

$controller = new PetsalonController();
$Petsalon = $controller->edit($_GET["idm"]);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT MEMBER</title>
    <link rel="stylesheet" href="../assets/edit.css">
</head>
<body>
    <div class="container">
    <div class="bungkus">
    <h3>Masukan Data Dengan Benar!</h3>
    <form action="../controllers/cinicontrollerr.php" method="POST">
    <br><br>
            <table class="tabel">
                <tr>
                    <td>Nama Member</td>
                    <td>:</td>
                    <td><input class="tb1" type="text" name="nama" size="50" value="<?= $Petsalon['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Pet</td>
                    <td>:</td>
                    <td><input class="tb1" type="text" name="pet" size="50" value="<?= $Petsalon['pet']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input class="tb1" type="text" name="alamat" size="50" value="<?= $Petsalon['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td><input class="tb1" type="text" name="tlp" size="50" value="<?= $Petsalon['tlp']; ?>"></td>
                </tr>
            </table>
            <br>
            <br>
            <input onclick="javascript: return confirm ('apakah kamu yakin data yang kamu masukan sudah benar?!')" class="ipbox" type="submit" value="ubah" name="submit">
        </form>
        
    </div>
    </div>
</body>
</html>