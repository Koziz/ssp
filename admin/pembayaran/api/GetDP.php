<?php
include 'koneksi.php';

$sql ='SELECT * FROM  petugas  ';

$query = mysqli_query($kon, $sql);
		
while ($row = mysqli_fetch_array($query))
{

	echo   '
    <option value="'.$row['id_petugas'].'">'.$row['nama_petugas'].' / '.$row['level'].' </option>
            ';
}

mysqli_free_result($query);


mysqli_close($kon);
?>