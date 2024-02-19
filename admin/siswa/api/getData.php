<?php
include 'koneksi.php';

$sql ="SELECT * FROM siswa as a LEFT JOIN kelas as b ON a.id_kelas = b.id_kelas LEFT JOIN spp as c ON a.id_spp = c.id_spp";

$query = mysqli_query($kon, $sql);


echo '<table class="table">
    <thead>
    <tr>
    <th scope="col">NISN</th>
    <th scope="col">NIS</th>
    <th scope="col">Nama</th>
    <th scope="col">id_kelas</th>
    <th scope="col">Alamat</th>
    <th scope="col">No Telepon</th>
    <th scope="col">ID SPP</th>
    <th scope="col">Fungsi</th>
    </tr>
</thead>
<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
    $nominal =$row['nominal'] ;

	echo '<tr>
			<td>'.$row['nisn'].'</td>
			<td>'.$row['nis'].'</td>
			<td>'.$row['nama'].'</td>
			<td>'.$row['nama_kelas'].'</td>
			<td>'.$row['alamat'].'</td>
			<td>'.$row['no_telp'].'</td>
			<td>'.$row['tahun'].' / Rp. '.number_format($nominal).' </td>
            <td>
              <a href="EditSiswa.php?id='.$row['nisn'].'">Edit</a> |
              <a onclick="return confirm(\'Anda yakin akan menghapus data ini?\')" href="api/HapusData.php?id='.$row['nisn'].'">Hapus</a>
          </td>
		</tr>';
}
echo '
	</tbody>
</table>';
mysqli_free_result($query);


mysqli_close($kon);
?>