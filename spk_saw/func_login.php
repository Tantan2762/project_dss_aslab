<?php
include 'koneksi.php';

//membuat variabel untuk menampung hasil post data
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($connection,"SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");

$cek_row = mysqli_fetch_array($data);

if($cek_row['id_admin']<>""){
    session_start();
    $_SESSION['id_admin']=$cek_row['id_admin'];
    $_SESSION['nama']=$cek_row['nama'];
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    echo "<script>alert('Login Berhasil ');window.location='index.php';</script>";
}else{
    echo"<script>alert('Login Gagal');history.go(-1);</script>";
}