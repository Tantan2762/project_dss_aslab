<?php
include "../koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$hasil = mysqli_query($connection,"insert into tbl_alternatif (nama, alamat, no_telp) values ('$nama', '$alamat', '$no_telp') ");

if($hasil){
    echo "<script>alert('Data Alternatif Berhasil ditambahkan! ');window.location='../index.php?halaman=data&pesan=tambah_sukses';</script>";
}else{
    echo "<script>alert('Data Alternatif Gagal ditambahkan! ');window.location='../index.php?halaman=data&pesan=tambah_sukses';</script>";
}