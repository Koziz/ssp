<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id    =$_POST['id'];
$Data1 =$_POST['Data1'];
$Data2 =$_POST['Data2'];



$query = "UPDATE spp SET tahun='$Data1', nominal='$Data2' WHERE id_spp = '$id'";
mysqli_query($kon, $query);

echo "<script>alert('Data berhasil diubah.');window.location='../spp.php';</script>";

?>