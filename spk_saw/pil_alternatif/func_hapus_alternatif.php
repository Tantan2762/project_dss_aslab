<?php
include "../koneksi.php";

$id_alternatif = $_GET['id_alternatif'];

$hasil = mysqli_query($connection,"delete from tbl_alternatif where id_alternatif='$id_alternatif'");

echo "<script>window.location='../index.php?halaman=data&pesan=edit_sukses'</script>";