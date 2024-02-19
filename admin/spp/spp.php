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
        <div class="container d-flex justify-content-between">
            <div class="display-6 fw-normal">Data SPP</div>
        </div>
        <form method="post" action="api/inputData.php">
                    <div class="container">
                        
                        <div class="card-body">
                            <div class="card-text m-2">
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Tahun</div>
                                        <input type="number" name="Data1" class="form-control col-md-4">
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Nominal</div>
                                        <input type="number" name="Data2" class="form-control col-md-4">
                                </div>
                                <div class="form-group mb-4">
                                        <input href="../spp.php" type="submit" class="btn btn-primary ">
                                </div>
                            </div>
                        </div>
        </form>
        <div class="card mt-1 ">
            <div class="card-body ">
                 <span class="mb-2"> <h2>Data Spp </h2> </span>
                <?php include 'api/getData.php'; ?>
            </div>
        </div>
         
        
    </section>

    <script src="../asset/js/scripts.js"></script>
</body>
</html>