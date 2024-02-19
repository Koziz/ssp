<?php
include 'koneksi.php';

$sql ="SELECT * FROM spp  ";

$query = mysqli_query($kon, $sql);


echo '<table class="table">
    <thead>
    <tr>
    <th scope="col">ID Spp</th>
    <th scope="col">Tahun</th>
    <th scope="col">Nominal</th>
    <th scope="col">Fungsi</th>
    </tr>
</thead>
<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
    $nominal =$row['nominal'] ;
	echo '
        <tr>
			<td>'.$row['id_spp'].'</td>
			<td>'.$row['tahun'].'</td>
			<td>Rp. '.number_format($nominal).'</td>
            <td>
            <a href="EditSpp.php?id='.$row['id_spp'].'">Edit</a> |
            <a onclick="return confirm(\'Apakah Anda Yakin Menghapus Data ini?\')" href="api/DelData.php?id='.$row['id_spp'].'" >Hapus</a>
            </td>
		</tr>';
}
echo '
	</tbody>
</table>';
mysqli_free_result($query);


mysqli_close($kon);
?>