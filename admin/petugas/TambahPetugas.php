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
                <form method="post" action="api/PostData.php">
                <div class="row">
                    <div class="col">
                      <h1 >Tambah Siswa</h1>
                    </div>
                 <div class="col d-flex justify-content-end">
                  <a class="btn btn-primary mb-3" href="petugas.php" >Kembali</a>                    
                </div>
                    <div class="container">
                        <div class="card-body">
                            <div class="card-text m-2">
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Username</div>
                                        <input type="text" name="Data2" class="form-control col-md-4">
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Password</div>
                                        <input type="password" name="Data3" class="form-control col-md-4">
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Nama Petugas</div>
                                        <input type="text" name="Data4" class="form-control col-md-4">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-4 h6" >Level</label>
                                <select name="Data5" class="form-control">
                                    <option value="No Selected" selected > Pilih Level</option>
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas </option>
                                </select>
                                </div>
                                <div class="form-group">
                                        <input href="../petugas.php" type="submit" class="btn btn-primary">
                                </div>
                            </form>
        </div>
         
        
    </section>

    <script src="../asset/js/scripts.js"></script>
</body>
</html>