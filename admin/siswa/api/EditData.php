<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id    =$_POST['id'];
// $Data1 =$_POST['Data1'];
$Data2 =$_POST['Data2'];
$Data3 =$_POST['Data3'];
$Data4 =$_POST['Data4'];
$Data5 =$_POST['Data5'];
$Data6 =$_POST['Data6'];
$Data7 =$_POST['Data7'];

$query = "UPDATE siswa SET nis='$Data2', nama='$Data3', id_kelas='$Data4', alamat='$Data5', no_telp='$Data6', id_spp='$Data7' WHERE nisn = '$id'";
mysqli_query($kon, $query);

echo "<script>alert('Data berhasil diubah.');window.location='../siswa.php';</script>";

?>