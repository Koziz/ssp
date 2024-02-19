<?php
include 'koneksi.php';

$sql ='SELECT * FROM  spp  ';

$query = mysqli_query($kon, $sql);
		
while ($row = mysqli_fetch_array($query))
{
    $nominal =$row['nominal'] ;

	echo   '
    <option value="'.$row['id_spp'].'">'.$row['tahun'].' / Rp. '.number_format($nominal).' </option>
            ';
}

mysqli_free_result($query);


mysqli_close($kon);
?>