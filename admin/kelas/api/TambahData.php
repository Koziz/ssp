<?php
include 'koneksi.php';

$Data1 =$_POST['Data1'];
$Data2 =$_POST['Data2'];



$query = "INSERT INTO kelas ( nama_kelas, Kompetensi_keahlian) VALUES ('$Data1', '$Data2')";
mysqli_query($kon, $query);

echo "<script>alert('Data Ditambah.');window.location='../kelas.php';</script>";
?>