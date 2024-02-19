<?php
session_start();
if (!isset($_SESSION['petugas'])) {
    header("Location: ../../login.php");
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
                      <h1>Entri Pembayaran</h1>
                    </div>
                 <div class="col d-flex justify-content-end">
                 <button type="button" class="btn btn-primary mb-3 ms-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah</button>  
                  

                </div>

                </div>
               
                <?php include 'api/getData.php'; ?>
            </div>
        </div>
        
    </section>
     <!-- Modal -->
     <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-title h3 text-center" id="staticBackdropLabel">Tambah Data</div>
                        </div>
                        <form method="post" action="api/TambahData.php">
                    <div class="container">
                        <div class="card-body">
                            <div class="card-text m-2">
                                <div class="form-group">
                                        <label class="col-md-2 h6">ID Pembayaran</label>
                                        <input type="text" name="Data1" class="form-control col-md-8">
                                        <input name="Data2" value="<?php echo $_SESSION['id']; ?>"  hidden />
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-4 h6" >NISN</label>
                                <select name="Data3" class="form-control">
                                <option value="NO OPTION SELECT" selected>pilih NISN...</option>
                                        <?php
                                        include 'api/GetDP1.php'
                                        ?>
                                </select>
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Tanggal Bayar</div>
                                        <input type="text" name="Data4" class="form-control col-md-8">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-4 h6" >Bulan Bayar</label>
                                    <select name="Data5" class="form-control">
                                    <option value="NO VALUE" selected>pilih bulan...</option>
                                    <option value="januari">januari</option>
                                    <option value="febuari">Febuari</option>
                                    <option value="maret">Maret</option>
                                    <option value="april">april</option>
                                    <option value="mei">Mei</option>
                                    <option value="juni">Juni</option>
                                    <option value="juli">Juli</option>
                                    <option value="agustus">Agustus</option>
                                    <option value="september">September</option>
                                    <option value="oktober">Oktober</option>
                                    <option value="november">November</option>
                                    <option value="desember">Desember</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Tahun Bayar</div>
                                        <input type="text" name="Data6" class="form-control col-md-8">
                                </div>
                                <div class="form-group mb-4">
                                        <div class="col-md-2 h6">Jumblah Bayar</div>
                                        <input type="number" name="Data8" class="form-control col-md-8">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-4 h6" >Bulan SPP</label>
                                    <select name="Data9" class="form-control">
                                    <option value="NO VALUE" selected>pilih bulan...</option>
                                    <option value="januari">januari</option>
                                    <option value="febuari">Febuari</option>
                                    <option value="maret">Maret</option>
                                    <option value="april">april</option>
                                    <option value="mei">Mei</option>
                                    <option value="juni">Juni</option>
                                    <option value="juli">Juli</option>
                                    <option value="agustus">Agustus</option>
                                    <option value="september">September</option>
                                    <option value="oktober">Oktober</option>
                                    <option value="november">November</option>
                                    <option value="desember">Desember</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                            </form>
                    </div>
                </div>
            </div>

    <script src="../asset/js/scripts.js"></script>
    <script src="../asset/vendors/js/bootstrap.bundle.min.js"></script>
</body>
</html>