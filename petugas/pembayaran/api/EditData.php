<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id    =$_POST['id'];

$Data1 =$_POST['Data1'];
$Data2 =$_POST['Data2'];
$Data3 =$_POST['Data3'];
$Data4 =$_POST['Data4'];
$Data5 =$_POST['Data5'];
$Data6 =$_POST['Data6'];
$Data7 =$_POST['Data7'];
$Data8 =$_POST['Data8'];


$query = "UPDATE pembayaran SET id_petugas = '$Data1',nisn ='$Data2', tgl_bayar='$Data3', bulan_bayar='$Data4',  tahun_dibayar='$Data5', id_spp='$Data6', jumblah_bayar='$Data7', bulan_spp='$Data8' WHERE id_pembayaran = '$id'";
mysqli_query($kon, $query);

echo "<script>alert('Data berhasil diubah.');window.location='../pembayaran.php';</script>";

?>