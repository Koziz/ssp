<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spp Login</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <style>
        body{
            background: #808080;
        }
    </style>
</head>
<body>
<form action="proses_login.php" method="POST" >
        <div class="container" >
            <div class="row h-100">
                <div class="col-sm-12" style="margin-top: 25vh;">
                    <div class="card shadow w-50 mx-auto">
                        <div class="card-header">
                            <h4 class="text-black display-4 row mt-2 row justify-content-center"> Aplikasi SPP</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-text m-2">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-4 h6">Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="row">
                                        <div class="col-md-4 h6">Password </div>
                                        <input type="password" name="password" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class=""> </div>
                                        <input type="submit" class="btn btn-primary">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row justify-content-center">
                                        <div class="col text-center">
                                        <?php
                                        if (isset($_SESSION['login_gagal'])) {
                                            echo '<div class="alert alert-warning text-center mt-3" role="alert">';
                                            echo $_SESSION['login_gagal'];
                                            echo '</div> ';
                                            session_unset();
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    
</body>
</html>