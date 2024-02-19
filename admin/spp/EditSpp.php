<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
}
?>
<?php
include 'api/koneksi.php';

  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);


    $query = "SELECT * FROM spp WHERE id_spp='$id'";
    $result = mysqli_query($kon, $query);
 
    if(!$result){
      die ("Query Error: ".mysqli_errno($kon).
         " - ".mysqli_error($kon));
    }

    $data = mysqli_fetch_assoc($result);
 
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='spp.php';</script>";
       }
  } else {
 
    echo "<script>alert('Masukkan data id.');window.location='spp.php';</script>";
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
   
        <form method="post" action="api/EditData.php">
                    <div class="container">
                    <h1>Edit Data Spp Tahun <?php echo $data['tahun']; ?></h1>
                        <div class="card-body">
                            <div class="card-text m-2">
                            <input name="id" value="<?php echo $data['id_spp']; ?>"  hidden />
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Tahun</div>
                                        <input type="number" name="Data1" value="<?php echo $data['tahun']; ?>" class="form-control col-md-4">
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Nominal</div>
                                        <input type="number" name="Data2" value="<?php echo $data['nominal']; ?>" class="form-control col-md-4">
                                </div>
                                <div class="form-group mb-4">
                                        <input href="../spp.php" type="submit" class="btn btn-primary ">
                                        <a class="btn btn-primary " href="spp.php" role="button">Back</a>
                                </div>
                            </div>
                        </div>
        </form>
         
        
    </section>

    <script src="../asset/js/scripts.js"></script>
</body>
</html>