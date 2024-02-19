<?php
include 'koneksi.php';
$id = $_GET["id"];

$query = "DELETE FROM kelas WHERE id_kelas='$id' ";
$hasil_query = mysqli_query($kon, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($kon).
       " - ".mysqli_error($kon));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../Kelas.php';</script>";
    }
?>
