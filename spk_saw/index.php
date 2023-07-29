<?php

session_start();
if(!isset($_SESSION['id_admin'])){
    echo "<script>window.location='login.php';</script>";   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decision Support System Pemilihan Asisten Laboratorium</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class="my-5">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-primary py-4 px-5">
        <a class="navbar-brand text-light px-4" href="#">DSS ASLAB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-4" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item px-4">
                <a class="nav-link text-light" href="index.php?halaman=home">Home </a>
            </li>
            <li class="nav-item px-4">
                <a class="nav-link text-light" href="index.php?halaman=data">Alternatif</a>
            </li>
            <li class="nav-item px-4">
                <a class="nav-link text-light" href="index.php?halaman=penilaian">Penilaian</a>
            </li>
            <li class="nav-item px-4">
                <a class="nav-link text-light" href="index.php?halaman=bobot">Bobot</a>
            </li>
            <li class="nav-item px-4">
                <a class="nav-link text-light" href="index.php?halaman=peringkat">Peringkat</a>
            </li>
          
            <li class="nav-item px-4">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
            </ul>
        </div>
        </nav>
        </div>
        
        
        
        <div class="d-flex column my-5 mx-1">
            <div class = "row col-2 my-5" >
                <div class="alert alert-primary" style="min-height: 550px">
                Selamat datang dalam Program Sistem Pendukung Keputusan Pemilihan Asisten Laboratotium Pendidikan Multimedia. Pergunakan Sebaik Mungkin Admin
                </div>
            </div>

            <div class = "row col-10" >
                <?php
                include "konten.php";
                ?>
            </div>
        </div>
    </div>


</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
 $('.carousel').carousel({
  interval: 2000
})
</script>
</html>