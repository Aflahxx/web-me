<?php
include 'koneksii.php';

if (isset($_POST['ubahpendaftaran'])) {
    $id = $_POST['ubah_id'];
    $QueryKelasUbah = mysqli_real_escape_string($koneksi, $_POST['ubah_nama_tim']);
    $QueryPelanggaranUbah = mysqli_real_escape_string($koneksi, $_POST['ubah_id_pemain']);
    $QueryPointUbah = mysqli_real_escape_string($koneksi, $_POST['ubah_waktu']);

    $query = "UPDATE jadwal SET `nama tim`='$QueryKelasUbah', id pemain='$QueryPelanggaranUbah', waktu='$QueryPointUbah' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Gagal Di Ubah " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
    } else {
        header('Location: jadwal.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Jadwal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>
<div class="container-fluid">
    <form method="post" action="">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <input name="ubah_id" type="text" class="form-control" value="<?php echo $tampil["id"]; ?>" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">NAMA TIM</label>
            <input name="ubah_nama_tim" type="text" class="form-control" value="<?php echo $tampil["nama tim"]; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">ID PEMAIN</label>
            <input name="ubah_id_pemain" type="number" class="form-control" value="<?php echo $tampil["id pemain"]; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">PELANGGARAN SISWA</label>
            <input name="ubah_tempat" type="text" class="form-control" value="<?php echo $tampil["tempat"]; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">POINT SISWA</label>
            <input name="ubah_waktu" type="text" class="form-control" value="<?php echo $tampil["waktu"]; ?>">
        </div>
        <button name="ubahpendaftaran" type="submit" class="btn btn-sm btn-primary">Simpan</button>
    </form>
</div>
<script src="js/js.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
