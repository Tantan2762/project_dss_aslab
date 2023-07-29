<?php
include "../koneksi.php";

$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$b3 = $_POST['b3'];
$b4 = $_POST['b4'];

$ubah = mysqli_query($connection,"update tbl_bobot set b1='$b1', b2='$b2', b3='$b3', b4='$b4'");

if($ubah){
    echo "<script>alert('Data Bobot Berhasil diubah! ');window.location='../index.php?halaman=bobot';</script>";
}else{
    echo "<script>alert('Data Bobot Gagal diubah! ');window.location='../index.php?halaman=bobot';</script>";
}

?>