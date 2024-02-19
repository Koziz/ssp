<?php
include 'koneksi.php';

$sql ="SELECT * FROM pembayaran as a LEFT JOIN siswa as b ON a.nisn = b.nisn LEFT JOIN spp as c ON a.id_spp = c.id_spp LEFT JOIN petugas as 
d ON a.id_petugas = d.id_petugas  ";

$query = mysqli_query($kon, $sql);

$no =1;
echo '<table class="table">
    <thead>
    <tr>
    <th scope="col">NO</th>
    <th scope="col">ID Pembayaran</th>
    <th scope="col">Nama Petugas</th>
    <th scope="col">NISN | Nama </th>
    <th scope="col">Tanggal Bayar</th>
    <th scope="col">Bulan SPP</th>
    <th scope="col">ID SPP</th>
    <th scope="col">Jumblah Bayar</th>
    </tr>
</thead>
<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
    $nominal =$row['nominal'] ;
    $jmb_bayar =$row['jumblah_bayar'];
	echo '
        <tr>
        <td>'.$no++.'</td>
        <td>'.$row['id_pembayaran'].'</td>
        <td>'.$row['nama_petugas'].'</td>
        <td>'.$row['nisn'].' | '.$row['nama'].'</td>
        <td>'.$row['tgl_bayar'].' '.$row['bulan_bayar'].' '.$row['tahun_dibayar'].'</td>
        <td>'.$row['bulan_spp'].'</td>
        <td>Rp. '.number_format($nominal).'</td>
        <td>Rp. '.number_format($jmb_bayar).'</td>
		</tr>';
}
echo '
	</tbody>
</table>';
mysqli_free_result($query);


mysqli_close($kon);
?>