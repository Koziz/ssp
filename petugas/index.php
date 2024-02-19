<?php
session_start();
if (!isset($_SESSION['petugas'])) {
    header("Location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Petugas</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
    <?php
    include 'componen/navbar.php'
    ?>

<section class="dashboard container-fluid mt-4">
        <div class="container d-flex justify-content-between">
            <div class="display-6 fw-normal">Selamat Datang Petugas</div>
        </div>

        <div class="card mt-3 ">
            <div class="card-body ">
                 Visi Misi SMK Merdeka Bandung 
                  "Menjadi lembaga pendidikan kejuruan unggulan yang menghasilkan lulusan berkompeten, berkarakter, dan siap bersaing di dunia kerja."
            </div>
        </div>
         
        
    </section>

    <script src="asset/js/scripts.js"></script>
</body>
</html>