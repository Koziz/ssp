<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id    =$_POST['id'];
$Data1 =$_POST['Data1'];
$Data2 =$_POST['Data2'];
$Data3 =$_POST['Data3'];
$Data4 =$_POST['Data4'];



$query = "UPDATE petugas SET username='$Data1', password='$Data2', nama_petugas ='$Data3', level='$Data4' WHERE id_petugas = '$id'";
mysqli_query($kon, $query);

echo "<script>alert('Data berhasil diubah.');window.location='../petugas.php';</script>";

?>