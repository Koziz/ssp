<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
}
?>
<?php
  // Ini Koneksi
include 'api/koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM petugas WHERE id_petugas='$id'";
    $result = mysqli_query($kon, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($kon).
         " - ".mysqli_error($kon));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
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
            <div class="row">
                    <div class="col">
                    <h1>Edit Data Petugas <?php echo $data['nama_petugas']; ?></h1>
                    </div>
                 <div class="col d-flex justify-content-end">
                  <a class="btn btn-primary mb-3" href="petugas.php" >Kembali</a>                    
                </div>
                    <div class="container">
                        <div class="card-body">
                            <div class="card-text m-2">
                            <input name="id" value="<?php echo $data['id_petugas']; ?>"  hidden />
                                <div class="form-group mb-4">
                                    <div class="row">
                                        <div class="col-md-2 h6">Username</div>
                                        <input type="text" name="Data1" value="<?php echo $data['username']; ?>" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="row">
                                        <div class="col-md-2 h6">Password</div>
                                        <input type="password" name="Data2" value="<?php echo $data['password']; ?>" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="row">
                                        <div class="col-md-2 h6">Nama Petugas</div>
                                        <input type="text" name="Data3" value="<?php echo $data['nama_petugas']; ?>" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-4 h6" >Level</label>
                                <select name="Data4" class="form-control">
                                    <option value="<?php echo $data['level']; ?>" selected > <?php echo $data['level']; ?></option>
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas </option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <input href="petugas.php" type="submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
        </div>
         
        
    </section>

    <script src="../asset/js/scripts.js"></script>
</body>
</html>