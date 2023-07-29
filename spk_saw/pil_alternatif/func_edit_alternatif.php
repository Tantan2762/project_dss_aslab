<?php

include "../koneksi.php";


$id_alternatif = $_POST['id_alternatif'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$hasil = mysqli_query($connection,"update tbl_alternatif set nama='$nama', 
alamat='$alamat', 
no_telp='$no_telp' where id_alternatif='$id_alternatif'");


if ($hasil) {
    echo "<script>alert('Data Alternatif Berhasil diubah! ');window.location='../index.php?halaman=data&pesan=edit_sukses';</script>";
   }else
   {
    echo "<script>alert('Data Alternatif Gagal diubah! ');window.location='../index.php?halaman=data&pesan=edit_sukses';</script>";
   }

