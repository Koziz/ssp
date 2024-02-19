<?php
include 'koneksi.php';
$id= $_SESSION['id'];
$sql ="SELECT * FROM pembayaran as a LEFT JOIN siswa as b ON a.nisn = b.nisn LEFT JOIN spp as c ON a.id_spp = c.id_spp LEFT JOIN petugas as 
d ON a.id_petugas = d.id_petugas LEFT JOIN kelas as e ON b.id_kelas = e.id_kelas where a.nisn = '$id' ";

$query = mysqli_query($kon, $sql);

		
while ($row = mysqli_fetch_array($query))
{
    $nominal =$row['nominal'] ;
    $jmb_bayar =$row['jumblah_bayar'];

	echo 'Nama : '.$row['nama'].' <br> '  ;
	echo 'Kelas : '.$row['nama_kelas'].' <br> '  ;
	echo 'Jumlah bayar : '.number_format($jmb_bayar).' <br> '  ;
	echo 'SPP Bulan : '.$row['bulan_dibayar'].' <br> '  ;
	echo '<div class="dropdown-divider"></div>'  ;
}

mysqli_free_result($query);


mysqli_close($kon);

// echo '
//         <tr>
// 			<td>'.$row['id_pembayaran'].'</td>
// 			<td>'.$row['nama_petugas'].'</td>
// 			<td>'.$row['nisn'].' | '.$row['nama'].'</td>
// 			<td>'.$row['tgl_bayar'].'</td>
// 			<td>'.$row['bulan_bayar'].'</td>
// 			<td>'.$row['tahun_dibayar'].'</td>
// 			<td>Rp. '.number_format($nominal).'</td>
// 			<td>Rp. '.number_format($jmb_bayar).'</td>
//             <td>
//             <a href="EditPembayaran.php?id='.$row['id_pembayaran'].'">Edit</a> |
//             <a onclick="return confirm(\'Apakah Anda Yakin Menghapus Data ini?\')" href="api/HapusData.php?id='.$row['id_pembayaran'].'" >Hapus</a>
//             </td>
// 		</tr>';
?>