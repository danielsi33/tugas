<?php
// Memuat file model MahasiswaModel.php yang berisi class Mahasiswa dan fungsi-fungsinya
require_once "models/cinimodelll.php";

// Membuat objek baru dari class Mahasiswa
$Petsalon = new Petsalon();

// Memanggil fungsi getAllPetsalon untuk mengambil seluruh data Petsalon dari database
$dataPetsalon = $Petsalon->getAllPetsalon();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cini Pet salon and Grooming</title>
    <link rel="stylesheet" href="assets/index.css">
</head>

<body>
    
    <!--section nav-->
    <header class="header">
    <nav>
        <div>
            <img src="cini logo.png"></div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="views/form.php">Daftar Member</a></li>
                <li><a href="#list">List Member</a></li>
            </ul>
    </nav>
    </header>

  <!--section home-->
    <section id="home">
        <div class="logo">
            <img src="cini logo.png" width=500px> 
        </div>

        <br>
        <br>
        <table class="tablhom1">
            <tr>
                <td>
        <h1>CINI PET SALON</h1>
                </td>
            </tr>
            <tr>
                <td class="tagline">Kecantikan dan Kebahagiaan untuk Hewan Kesayanganmu</td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <br>
        <h2>Visi dan Misi</h2>
        <br>
        <br>
        <table class="tablhom2">
            <tr>
                <td><h4>Visi</h4></td>
            </tr>
            <tr>
                <td>Menjadi pet salon terkemuka yang menghadirkan perawatan terbaik untuk pet custamer, dan memberikan pengalaman yang nyaman, aman, dan penuh kasih sayang.</td>
            </tr>
        </table>
        <br>
        <br>
        <table class="tablhom3">
            <tr>
                <td><h4>Misi</h4></td>
            </tr>
            <tr>
                <td>        
                    <ol>
            <li>Memberikan layanan perawatan profesional yang berfokus pada kesehatan dan kenyamanan.</li>
            <li>Menghadirkan suasana salon yang ramah hewan, bebas stres, dan penuh perhatian.</li>
            <li>Menggunakan produk perawatan berkualitas tinggi yang aman dan ramah lingkungan.</li>
            <li>Meningkatkan kesadaran tentang pentingnya perawatan hewan peliharaan untuk kesehatan dan kesejahteraannya.</li>
                    </ol>
                </td>
            </tr>
        </table>
    </section>
    <br><br><br><br><br><br><br><br><br><br>
<!--section list-->
    <section id="list">
    <div class="daftmem">
    <div class="bungkus1">
    <h3>Data Member Terdaftar</h3>
    <br>
    <br>
    <table cellspacing="15">
        <tr>
            <th>ID Member</th>
            <th>Nama Member</th>
            <th>Nama PET</th>
            <th>Alamat</th>
            <th>Nomor Tlp</th>
        </tr>

            <?php foreach ($dataPetsalon as $Petsalon): ?>
            <tr>
                <td><?= $Petsalon['idm']; ?></td>         
                <td><?= $Petsalon['nama']; ?></td>       
                <td><?= $Petsalon['pet']; ?></td>      
                <td><?= $Petsalon['alamat']; ?></td>   
                <td><?= $Petsalon['tlp']; ?></td>         
                <td>
                    <div class="action-buttons">
                        <!-- Tombol untuk mengedit data member (mengarah ke form edit.php dengan parameter idm) -->
                        <a href="views/edit.php?idm=<?= $Petsalon['idm']; ?>" class="editefek">✏ Edit</a>

                        <!-- Tombol untuk menghapus data member (mengarah ke DeleteController.php dengan parameter idm) -->
                        <!-- Terdapat konfirmasi sebelum penghapusan -->
                        <a href="controllers/cinicontrollerr.php?idm=<?= $Petsalon['idm']; ?>" class="delefek" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">🗑 Hapus</a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
    </div>
    </div>
    </section>
</body>
</html>
