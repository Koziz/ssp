<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
}
?>
<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'api/koneksi.php';
// tenari
    // ['id'] == 0 ? $id : $id = ($_GET["id"]);

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM siswa as a LEFT JOIN kelas as b ON a.id_kelas = b.id_kelas LEFT JOIN spp as c ON a.id_spp = c.id_spp    WHERE nisn='$id'";
    $result = mysqli_query($kon, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($kon).
         " - ".mysqli_error($kon));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);

    $nominal =$data['nominal'] ;
    $HN = number_format($nominal);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Admin</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
</head>
<body>
    <?php
    include 'componen/navbar.php'
    ?>

<section class="dashboard container-fluid mt-4">
        
        <div class="card mt-1 ">
            <div class="card-body ">
                <form method="post" action="api/EditData.php">
                    <div class="container">
                        <div class="card-body">
                        <div class="row">
                                <div class="col">
                                <h1>Edit Data <?php echo $data['nama']; ?></h1>
                            </div>
                                <div class="col d-flex justify-content-end">
                                    <a class="btn btn-primary mb-3" href="siswa.php" >Kembali</a>                    
                                </div>
                            <div class="card-text m-2">
                            <input name="id" value="<?php echo $data['nisn']; ?>"  hidden />
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">NIS</div>
                                        <input type="text" name="Data2" value="<?php echo $data['nis']; ?>" class="form-control col-md-8">
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Nama</div>
                                        <input type="text" name="Data3" value="<?php echo $data['nama']; ?>" class="form-control col-md-8">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-4 h6" >Kelas</label>
                                <select name="Data4" class="form-control">
                                <option value="<?php echo $data['id_kelas']; ?>" selected><?php echo $data['nama_kelas']; ?> / <?php echo $data['kompetensi_keahlian']; ?></option>
                                        <?php
                                        include 'GetDP1.php'
                                        ?>
                                </select>
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Alamat</div>
                                        <input type="text" name="Data5" value="<?php echo $data['alamat']; ?>" class="form-control col-md-8">
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">No Telepon</div>
                                        <input type="text" name="Data6" value="<?php echo $data['no_telp']; ?>" class="form-control col-md-8">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-4 h6" >ID Spp</label>
                                <select name="Data7" class="form-control">
                                <option value="<?php echo $data['id_spp']; ?>" selected><?php echo $data['tahun']; ?> / Rp. <?php echo $HN ?> </option>
                                        <?php
                                        include 'GetDP.php'
                                        ?>
                                </select>
                                </div>
                                <div class="form-group">
                                        <input href="siswa.php" type="submit" class="btn btn-primary">
                                </div>
                            </form>
        </div>
         
        
    </section>

    <script src="../asset/js/scripts.js"></script>
</body>
</html>