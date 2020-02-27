<?php
$conn = mysqli_connect("localhost", "root", "", "rajaampat");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $kota = htmlspecialchars($data["kota"]);
    $email = htmlspecialchars($data["email"]);

    $query = "INSERT INTO guestbook
                    VALUES
                    ('$nama','$kota','$email')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>