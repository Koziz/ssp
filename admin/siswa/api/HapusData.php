<?php
include 'koneksi.php';
$id = $_GET["id"];


$query = "DELETE FROM siswa WHERE nisn='$id' ";
$hasil_query = mysqli_query($kon, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($kon).
       " - ".mysqli_error($kon));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../siswa.php';</script>";
    }
?>
