<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$Data1 =$_POST['Data1'];
$Data2 =$_POST['Data2'];
$Data3 =$_POST['Data3'];
$Data4 =$_POST['Data4'];
$Data5 =$_POST['Data5'];


$query = "INSERT INTO petugas (id_petugas, username, password, nama_petugas, level) VALUES ('$Data1', '$Data2', '$Data3', '$Data4','$Data5')";
mysqli_query($kon, $query);

echo "<script>alert('Data Ditambah.');window.location='../petugas.php';</script>";
?>