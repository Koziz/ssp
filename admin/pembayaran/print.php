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
  

<section class="dashboard container-fluid mt-4">
        
            <div class="row">
                    <div class="col">
                      <h1>Report Hasil Pembayaran</h1>
                    </div>
                                   
                <?php include 'api/getData2.php'; ?>
            </div>
         
        
    </section>
    <script>
            window.print();
        </script>
    <script src="../asset/js/scripts.js"></script>
</body>
</html>