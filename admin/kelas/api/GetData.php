<?php
include 'koneksi.php';

$sql ="SELECT * FROM kelas  ";

$query = mysqli_query($kon, $sql);


echo '<table class="table">
    <thead>
    <tr>
    <th scope="col">ID Kelas</th>
    <th scope="col">Nama Kelas</th>
    <th scope="col">Kompetensi_keahlian</th>
    <th scope="col">Fungsi</th>
    </tr>
</thead>
<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['id_kelas'].'</td>
			<td>'.$row['nama_kelas'].'</td>
			<td>'.$row['kompetensi_keahlian'].'</td>
            <td>
            <a href="EditKelas.php?id='.$row['id_kelas'].'">Edit</a> |
            <a onclick="return confirm(\'Anda yakin akan menghapus data ini?\')" href="api/DelData.php?id='.$row['id_kelas'].'" >Hapus</a>
            </td>
		</tr>';
}
echo '
	</tbody>
</table>';
mysqli_free_result($query);


mysqli_close($kon);
?>