<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
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
            <div class="row">
                    <div class="col">
                      <h1 >Tambah Siswa</h1>
                    </div>
                 <div class="col d-flex justify-content-end">
                  <a class="btn btn-primary mb-3" href="siswa.php" >Kembali</a>                    
                </div>
            <form method="post" action="api/PostData.php">
                    <div class="container">
                        <div class="card-body">
                            <div class="card-text m-2">
                                <div class="form-group">
                                        <label class="col-md-2 h6">NISN</label>
                                        <input type="text" name="Data1" class="form-control col-md-8">
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">NIS</div>
                                        <input type="text" name="Data2" class="form-control col-md-8">
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Nama</div>
                                        <input type="text" name="Data3" class="form-control col-md-8">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-4 h6" >Kelas</label>
                                <select name="Data4" class="form-control">
                                <option value="NO OPTION SELECT" selected>pilih Kelas...</option>
                                        <?php
                                        include 'api/GetDP1.php'
                                        ?>
                                </select>
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Alamat</div>
                                        <input type="text" name="Data5" class="form-control col-md-8">
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">No Telepon</div>
                                        <input type="text" name="Data6" class="form-control col-md-8">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-4 h6" >ID Spp</label>
                                <select name="Data7" class="form-control">
                                <option value="NO OPTION SELECT" selected>pilih Spp...</option>
                                        <?php
                                        include 'api/GetDP.php'
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