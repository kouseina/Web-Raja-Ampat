<?php
require 'function.php';

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'lihatdata.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'lihatdata.php';
            </script>
            ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>
    <link rel="stylesheet" href="assets/inputdata-style.css">
</head>

<body>
    <header>
        <nav>
            <a href="index.php"><img width="170px" src="assets/img/logo1.png" alt=""></a>
            <ul>
                <li><a class="hover" href="index.php">Destination</a></li>
                <li><a class="hover" href="index.php">Guidetour</a></li>
                <li><a class="hover" href="index.php">About us</a></li>
                <li><a class="nav-box" href="lihatdata.php">Lihat Data</a></li>
            </ul>
        </nav>
    </header>
    <div class="jumbotron"></div>
    <div class="box">
        <h2>Guestbook</h2>
        <form action="" method="POST">
            <div class="input-box">
                <input type="text" id="nama" name="nama" required>
                <label for="nama">Nama</label>
            </div>
            <div class="input-box">
                <input type="text" id="kota" name="kota" required>
                <label for="kota">Kota</label>
            </div>
            <div class="input-box">
                <input type="text" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

</html>