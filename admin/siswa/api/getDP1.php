<?php
include 'koneksi.php';

$sql ='SELECT * FROM kelas ';

$query = mysqli_query($kon, $sql);

		
while ($row = mysqli_fetch_array($query))
{
	echo   '
    <option value="'.$row['id_kelas'].'">'.$row['nama_kelas'].'/'.$row['kompetensi_keahlian'].' </option>
            ';
}

mysqli_free_result($query);


mysqli_close($kon);
?>