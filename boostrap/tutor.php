<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
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
    <title>Tips dan Trik Bermain Call of Duty untuk Pemula</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            color: #666;
            line-height: 1.4; /* Perkecil tinggi baris */
            margin-bottom: 10px;
            font-size: 14px; /* Perkecil ukuran font */
        }
    </style>
</head>
<body>
    <h1>Tips dan Trik Bermain Call of Duty untuk Pemula</h1>

    <?php
    // Data tips dan trik
    $tips = [
        "1.Atur Sensitivitas Kamera Game" => "Hal pertama yang perlu Anda atur sebelum memulai permainan adalah sensitivitas kamera. Disarankan untuk mengatur sensitivitas kamera menjadi 180 derajat. Dengan cara ini, Anda tidak perlu melakukan swiping dua kali untuk melihat musuh di belakang Anda. Sensitivitas yang lebih tinggi memungkinkan Anda untuk berbalik cepat dan menembak musuh.",
        "2.Cara Menjadi Penembak Jitu" => "Rekomendasi kedua adalah mengubah ikon \"lari\" ke tengah layar dan mengubah ukurannya menjadi lebih kecil. Ini akan membantu meningkatkan akurasi Anda, terutama jika Anda kesulitan menembak dalam mode ADS (Aim Down Sight).",
        "3.Menembak dari Dalam Air" => "Meskipun terdengar tidak masuk akal, Anda dapat menembak musuh dari dalam air di Call of Duty Mobile. Musuh tidak akan tahu dari mana tembakan itu berasal, tetapi ingat bahwa bergerak dalam air akan membuat Anda lambat jika musuh mengetahuinya.",
        "4.Menyembuhkan Diri dan Berlari" => "Berbeda dengan game lain, Anda dapat menyembuhkan diri sambil berlari di Call of Duty Mobile. Ini adalah keuntungan besar dan memungkinkan Anda untuk bergerak cepat sambil menyembuhkan diri Anda. Ini adalah fitur yang disediakan oleh developer untuk mempermudah permainan.",
        "5.Gunakan Wingsuit untuk Mendarat" => "Gunakan Wingsuit untuk mendarat dengan cepat di lokasi yang telah ditentukan. Ini akan membantu Anda menghindari jatuh dari ketinggian dan mencapai tujuan Anda lebih cepat.",
        "6.Bermain di Mode Game Domination" => "Bermain dalam mode Game Domination akan memberi Anda lebih banyak pengalaman karena Anda akan sering berhadapan dengan musuh. Semakin banyak musuh yang Anda kalahkan, semakin besar pengalaman yang Anda dapatkan. Mode ini juga membantu meningkatkan keterampilan menembak Anda di Call of Duty Mobile.",
        "7.Kenali dan Kuasai Senjata" => "Kenali karakteristik setiap senjata di Call of Duty Mobile. Cobalah berbagai senjata dalam berbagai pertandingan dan cari senjata yang paling cocok dengan gaya bermain Anda. Kuasai senjata tersebut untuk menjadi ahli dalam memainkan game ini."
    ];

    // Loop melalui data tips dan trik untuk menghasilkan paragraf HTML dengan ukuran teks yang lebih kecil
    foreach ($tips as $judul => $konten) {
        echo "<p><strong>$judul</strong><br><span style='font-size: 14px;'>$konten</span></p>";
    }
    ?>

    <p>Itulah 7 tips dan trik bermain Call of Duty Mobile untuk pemula yang mungkin jarang diketahui orang. Tetap kunjungi EXP Itemku untuk berita, panduan, dan informasi terbaru tentang game PC, konsol, dan mobile.</p>
</body>
</html>
