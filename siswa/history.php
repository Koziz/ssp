<?php
session_start();
if (!isset($_SESSION['siswa'])) {
    header("Location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Siswa</title>
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
                      <h1>History pembayaran  <?php echo $_SESSION['nama'];?></h1>
                    </div>    
                    <div class="dropdown-divider"></div>
                     <?php
                     include 'api-history.php';
                     ?>
                    </div>
            </div>
        </div>
         
        
    </section>

    <script src="../asset/js/scripts.js"></script>
</body>
</html>