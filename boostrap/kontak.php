<!DOCTYPE html>
<html lang="en">
<head>
<style>
        /* Styling navbar */
        .navbar {
            background-color: #333; /* Warna latar belakang navbar */
            overflow: hidden;
        }

        /* Styling tautan navbar */
        .navbar a {
            float: left; /* Membuat tautan berada di sebelah kiri */
            display: block; /* Membuat tautan berada dalam satu blok */
            color: white; /* Warna teks tautan */
            text-align: center; /* Pusatkan teks tautan */
            padding: 14px 16px; /* Ruang antara teks dan pinggiran navbar */
            text-decoration: none; /* Hilangkan dekorasi tautan (underline) */
        }

        /* Efek hover saat kursor di atas tautan */
        .navbar a:hover {
            background-color: #ddd; /* Warna latar belakang saat hover */
            color: black; /* Warna teks saat hover */
        }
    </style>
</head>
<body>

<div class="navbar">
    <?php
    // Daftar tautan navbar
    $navbarLinks = [
        "Beranda" => "dashbord.php",
        "Tips" => "tutor.php",
        "Kontak" => "kontak.php"
    ];

    // Loop melalui tautan dan tampilkan dalam navbar
    foreach ($navbarLinks as $label => $url) {
        echo "<a href=\"$url\">$label</a>";
    }
    ?>
</div>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tautan WhatsApp</title>
</head>
<body>
    <h1>Kirim Pesan ke WhatsApp</h1>

    <?php
    // Nomor telepon dan pesan
    $nomorTelepon = '6285797909561'; // Ganti dengan nomor telepon yang ingin Anda gunakan
    $pesan = 'Halo, saya ingin bertanya'; // Ganti dengan pesan yang ingin Anda sertakan

    // Buat tautan WhatsApp dengan nomor telepon dan pesan
    $tautanWhatsApp = "https://api.whatsapp.com/send?phone=$nomorTelepon&text=" . urlencode($pesan);
    ?>

    <!-- Tautan WhatsApp -->
    <a href="<?php echo $tautanWhatsApp; ?>" target="_blank">Kirim Pesan WhatsApp</a>
</body>
</html>
