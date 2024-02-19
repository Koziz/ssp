<?php
session_start();

include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$q =mysqli_query($kon, "Select * from petugas where username ='$username' and password= '$password'");
$q2 =mysqli_query($kon, "select * from siswa   where nisn='$username'      and nis      ='$password'");

if (mysqli_num_rows($q) != null) {

    $data = mysqli_fetch_assoc($q);

    if($data['level']=="petugas"){
        $_SESSION['username'] = $data['username'];
        $_SESSION['petugas'] = $data['username'];
        $_SESSION['id'] = $data['id_petugas'];
        $_SESSION['level'] = 'petugas';
        // echo 'kamu adalah staff';
        // echo $_SESSION['id'];
        header("Location: petugas/index.php");

    } else if($data['level']=="admin"){
        $_SESSION['username'] = $data['username'];
        $_SESSION['admin'] = $data['username'];
        $_SESSION['id'] = $data['id_petugas'];
        $_SESSION['level'] = 'admin';
        // echo 'kamu adalah admin';
        // echo $_SESSION['id'];
        header("Location: admin/index.php");
    }
}elseif (mysqli_num_rows($q2) != null) {

    $data2 = mysqli_fetch_assoc($q2);

    $_SESSION['id'] = $data2['nisn'];
    $_SESSION['nama'] = $data2['nama'];
    $_SESSION['siswa'] = $data2['nama'];

    echo $_SESSION['nama'];
    // echo 'kamu adalah siswa <br>';
    header('location: siswa/index.php');
}else {
    $_SESSION['login_gagal'] = "Username dan password salah" ;
    header("Location: login.php");

};
?>