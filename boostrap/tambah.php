<?php
    include 'koneksii.php';

    if (isset($_POST['getpendaptaran'])) {
        $id = $_POST['id'];
        $nama_timY = $_POST['nama_tim'];
        $nama_pem = $_POST['nama_pemain'];
        $nama_daerah = $_POST['daerah'];
        $tanggalY = $_POST['tanggal'];

        $sql = "INSERT INTO terdaftar (id, nama_tim, nama_pemain,daerah, tanggal) VALUES ('$id', '$nama_timY', '$nama_pem', '$nama_daerah', '$tanggalY')";
        $result = mysqli_query($koneksi, $sql);

        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        } else {
            header("Location: dashbord.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa SMK </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>
<div class="navbar">
    <a href="login.php">Login</a>
    <a href="dashbord.php">Team</a>
    <a href="event.php">Event</a>
    <a href="tutor.php">Tutorial</a>
</div>

<div class="mx-auto">
    <form action="" method="post">
        <div class="card">
            <div class="card-header">
                <p>Create</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="id" placeholder="Masukkan nama" hidden>
                </div>
                <div class="form-group">
                    <p>NAMA TIM</p>
                    <input type="text" class="form-control" name="nama_tim" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <p>NAMA PEMAIN</p>
                    <input type="text" class="form-control" name="nama_pemain" placeholder="Masukkan nama pemain">
                </div>
                <div class="form-group">
                    <label for="daerah">DAERAH</label>
                    <select class="form-control" name="daerah" id="daerah">
                        <?php
                        $query = mysqli_query($koneksi,"SELECT * FROM daerah");
                        while ($lihat = mysqli_fetch_array($query)){
                            echo '<option value="'. $lihat['alamat'] . '">'. $lihat['alamat'] .'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                <div class="form-group">
                    <p>TANGGAL DAFTAR</p>
                    <input type="date" class="form-control" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
                </div>
                <button name="getpendaptaran" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<script src="js/js.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    /* Reset margin dan padding default */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Gaya untuk navbar */
    .navbar {
        background-color: #333;
        overflow: hidden;
    }

    /* Gaya untuk tautan di dalam navbar */
    .navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    /* Gaya tautan saat dihover */
    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }
</style>
</body>
</html>
