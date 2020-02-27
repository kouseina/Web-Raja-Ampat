<?php
require 'function.php';
$guestbook = query("SELECT * FROM guestbook");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Data</title>
    <link rel="stylesheet" href="assets/lihatdata-style.css">
</head>

<body>
    <header>
        <nav>
            <a href="index.php"><img width="170px" src="assets/img/logo1.png" alt=""></a>
            <ul>
                <li><a class="hover" href="index.php">Destination</a></li>
                <li><a class="hover" href="index.php">Guidetour</a></li>
                <li><a class="hover" href="index.php">About us</a></li>
                <li><a class="box" href="inputdata.php">Input Data</a></li>
            </ul>
        </nav>
    </header>
    <div class="jumbotron"></div>
    <div>
        <div class="tittle">
            <p>Guestbook</p>
        </div>
        <div class="table">
            <table style="overflow-y: scroll;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kota</th>
                    <th>Email</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($guestbook as $row) : ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["nama"] ?></td>
                        <td><?php echo $row["kota"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>