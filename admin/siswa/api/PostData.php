<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$Data1 =$_POST['Data1'];
$Data2 =$_POST['Data2'];
$Data3 =$_POST['Data3'];
$Data4 =$_POST['Data4'];
$Data5 =$_POST['Data5'];
$Data6 =$_POST['Data6'];
$Data7 =$_POST['Data7'];

$query = "INSERT INTO siswa (nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) VALUES ('$Data1', '$Data2', '$Data3','$Data4','$Data5','$Data6','$Data7')";
mysqli_query($kon, $query);

header("location: ../siswa.php")
?>