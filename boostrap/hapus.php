<?php
include 'koneksii.php';

$id = $_GET['id'];

// Ambil nomor data sebelum menghapus data
$result = mysqli_query($koneksi, "SELECT id, nama_tim FROM terdaftar WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
$id_tim = $row['id'];
$namaterdaftar = $row['nama_tim'];

if (mysqli_query($koneksi, "DELETE FROM terdaftar WHERE id='$id'")) {
    echo "<script>alert('Data dengan no $id_tim (Nama Tim: $namaterdaftar) berhasil dihapus.'); window.location.href = 'dashbord.php';</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($koneksi) . "'); window.location.href = 'dashbord.php';</script>";
}

mysqli_close($koneksi);
?>
