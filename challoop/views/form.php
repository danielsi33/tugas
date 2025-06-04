<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cini Pet salon and Grooming</title>
    <link rel="stylesheet" href="../assets/form.css">
</head>

<body>
        
    <!--section nav-->
    <header class="header">
    <nav>
        <div>
            <img src="cini logo.png"></div>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="form.php">Daftar Member</a></li>
                <li><a href="#list">List Member</a></li>
            </ul>
    </nav>
    </header>

    <?php
    // Generate id_user otomatis
    $prefix = "CSM";
    $random_number = rand(1001, 9999); // Angka acak 1001-9999
    $generated_id = $prefix . $random_number;
    ?>

        <div class="daftmem">
            <div class="bungkus">
        <h3>Form Pendaftaran Member</h3>
        <br>
        <br>
        <form action="../controllers/cinicontrollerr.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="idm" value="<?php echo $generated_id; ?>">
            <label for="nama">Nama Member :</label><br>
            <input class="daf1" type="text" name="nama" placeholder="masukan nama member" id="nama" size="35"><br><br><br>
            <label for="pet">Nama Pet :</label><br>
            <input class="daf1" type="text" name="pet" placeholder="masukan nama pet" id="pet" size="35"><br><br><br>
            <label for="alamat">Alamat :</label><br>
            <input class="daf1" type="text" name="alamat" placeholder="masukan alamat member" id="alamat" size="35"><br><br><br>
            <label for="tlp">NO. Telepon :</label><br>
            <input class="daf1" type="integer" name="tlp" placeholder=" masukan nomor tlp/hp" id="tlp" size="35"><br><br><br>
            <br>
            <br>
            <input class="box" type="submit" value="DAFTAR" name="submit">
            <input class="box" type="reset" value="RESET">
        </form>
        </div>
        </div>
</body>
</html>