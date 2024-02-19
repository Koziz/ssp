<?php
include 'koneksi.php';

$sql ="SELECT * FROM petugas  ";

$query = mysqli_query($kon, $sql);


echo '<table class="table">
    <thead>
    <tr>
    <th scope="col">ID Petugas</th>
    <th scope="col">Username</th>
    <th scope="col">Password</th>
    <th scope="col">Nama Petugas</th>
    <th scope="col">Level</th>
    <th scope="col">Fungsi</th>
    </tr>
</thead>
<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '
        <tr>
			<td>'.$row['id_petugas'].'</td>
			<td>'.$row['username'].'</td>
			<td>'.$row['password'].'</td>
			<td>'.$row['nama_petugas'].'</td>
			<td>'.$row['level'].'</td>
            <td>
            <a href="EditPetugas.php?id='.$row['id_petugas'].'">Edit</a> |
            <a onclick="return confirm(\'Apakah Anda Yakin Menghapus Data ini?\')" href="api/HapusData.php?id='.$row['id_petugas'].'" >Hapus</a>
            </td>
		</tr>';
}
echo '
	</tbody>
</table>';
mysqli_free_result($query);


mysqli_close($kon);
?>