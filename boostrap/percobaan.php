<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Lakukan validasi data dan simpan ke database
    // ...

    // Contoh pesan sukses
    echo "Pendaftaran berhasil untuk $nama dengan email $email";
}
?>

