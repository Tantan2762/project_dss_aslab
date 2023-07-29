<?php
if(isset ($_POST['simpan'])){  //mengecek dan mengover isi var, apakah sudah terisi nilai atau belum di tiap barisnya
    include "../koneksi.php";
    $total = $_POST['total'];  //mengoper jumlah baris dari tabel yang akan digunakan sebagai kondisi pada perulangan
    for ($j=0; $j<$total; $j++){
        $temp_id_alternatif="id_alternatif".$j; //variabel yang menyatakan nilai yang sesuai dengan index yg berkaitan (dihubungungkan dgn titik) 
        $temp_id_nilai="id_nilai".$j;
        $temp_k1="k1".$j;
        $temp_k2="k2".$j;
        $temp_k3="k3".$j;
        $temp_k4="k4".$j;

        $fix_id_alternatif = $_POST[$temp_id_alternatif]; //melempar id untuk pengisian nilai dari variabel temp yg dibuat sebelumnya
        $fix_id_nilai = $_POST[$temp_id_nilai];
        $fix_k1 = $_POST[$temp_k1];
        $fix_k2 = $_POST[$temp_k2];
        $fix_k3 = $_POST[$temp_k3];
        $fix_k4 = $_POST[$temp_k4];

        $resultcheck = mysqli_query($connection,"select * from tbl_nilai where id_nilai='$fix_id_nilai'"); //mengecek apakah baris sudah diisi nilai atau belum
        
        if(mysqli_num_rows($resultcheck)<=0){   //kondisi jika nilai masih kosong maka akan ditambahkan nilai
            mysqli_query($connection,"insert into tbl_nilai (id_alternatif, k1,k2,k3,k4) values ('$fix_id_alternatif', '$fix_k1', '$fix_k2', '$fix_k3', '$fix_k4')");
        }else{
            mysqli_query($connection,"update tbl_nilai set k1='$fix_k1', k2='$fix_k2', k3='$fix_k3', k4='$fix_k4' where id_nilai='$fix_id_nilai'"); //jika nilai sudah ada maka hanya akan diperbarui
        }
    
    
    }

}

echo "<script>alert('Data Nilai Berhasil ditambahkan/diperbaharui! ');window.location='../index.php?halaman=penilaian&pesan=tambah_sukses';</script>";

?>