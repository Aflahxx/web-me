<?php
    include 'koneksii.php';

    if (isset($_POST['ubahData'])) {
        $id = $_POST['ubah_id'];
        $QueryNamaUbah = mysqli_real_escape_string($koneksi, $_POST['ubah_nama_team']);
        $QueryDaerahUbah = mysqli_real_escape_string($koneksi, $_POST['ubah_daerah']);
        $QuerypemainUbah = mysqli_real_escape_string($koneksi, $_POST['ubah_nama_pemain']);
        $QueryTanggalUbah = mysqli_real_escape_string($koneksi, $_POST['ubah_tanggal']);

        $query = "UPDATE terdaftar SET nama_tim='$QueryNamaUbah', nama_pemain='$QuerypemainUbah', daerah='$QueryDaerahUbah',tanggal='$QueryTanggalUbah'WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Gagal Di Ubah " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
        } else {
            header('Location: dashbord.php');
            exit();
        }
    }

    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM terdaftar WHERE id='$id'");
    while ($tampil = mysqli_fetch_array($data)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | web </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>

      <div class="page-content p-5" id="content">
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
<div class="container-fluid">
    <form method="post" action="">
        <div class="mb-3">
        <label class="form-label">Nama Tim</label>
            <input name="ubah_nama_team" type="text" class="form-control" value="<?php echo $tampil["nama_tim"]; ?>">
            <input name="ubah_id" type="text" class="form-control" value="<?php echo $tampil["id"]; ?>" hidden>
            <div class="mb-3">
            <div class="mb-3">
        <label class="form-label">NAMA  PEMAIN</label>
            <input name="ubah_nama_pemain" type="text" class="form-control" value="<?php echo $tampil["nama_pemain"]; ?>">
            <input name="ubah_nama" type="text" class="form-control" value="<?php echo $tampil["id"]; ?>" hidden>
            <div class="mb-3">
            <label class="form-label" >DAERAH</label>
            <select class="form-control" name="ubah_daerah" id="daerah">
                        <?php
                        $query = mysqli_query($koneksi,"SELECT * FROM daerah");
                        while ($lihat = mysqli_fetch_array($query)){
                            echo '<option value="'. $lihat['alamat'] . '">'. $lihat['alamat'] .'</option>';
                        }
                        ?>
                    </select>
            <input name="ubah_id" type="text" class="form-control" value="<?php echo $tampil["id"]; ?>" hidden>
            <div class="mb-3">
        <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input name="ubah_tanggal" type="date" class="form-control" value="<?php echo $tampil["tanggal"]; ?>">
        </div>
        <button name="ubahData" type="submit" class="btn btn-sm btn-primary">Simpan</button>
    </form>
</div>
<script src="js/js.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>

