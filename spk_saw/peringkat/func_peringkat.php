<?php
include "../koneksi.php";
$getkriteria = mysqli_query($connection,"select max(k1) as max_k1,
                                                max(k2) as max_k2, 
                                                max(k3) as max_k3,
                                                max(k4) as max_k4 from tbl_nilai"); //digunakan untuk mencari nilai terbesar dari sekumpulan nilai kriteria
$data = mysqli_fetch_array($getkriteria);
$max_k1 = $data['max_k1'];
$max_k2 = $data['max_k2'];
$max_k3 = $data['max_k3'];
$max_k4 = $data['max_k4'];  //melempar hasil nilai terbesar menjadi sebuah variabel

$getbobot = mysqli_query($connection, "select * from tbl_bobot");
$data = mysqli_fetch_array($getbobot);
$b1 = $data['b1'];
$b2 = $data['b2'];
$b3 = $data['b3'];
$b4 = $data['b4'];      //mengambil dan melempar nilai bobot menjadi sebuah variabel

$getnilai = mysqli_query($connection,"select * from tbl_nilai"); //mengambil semua nilai
$j = 0;

while($data=mysqli_fetch_array($getnilai)){
    $id_nilai[$j]=$data['id_nilai'];                //mengambil nilai per row sesuai id niainya
    $k1_normalisasi= round(($data['k1']/$max_k1),2);    //melakukan operasi normalisasi benefit (kriteria dibagi nilai max kriteria )
    $k2_normalisasi= round(($data['k2']/$max_k2),2);
    $k3_normalisasi= round(($data['k3']/$max_k3),2);
    $k4_normalisasi= round(($data['k4']/$max_k4),2);

    $skor[$j]=round((($b1*$k1_normalisasi)+($b2*$k2_normalisasi)+($b3*$k3_normalisasi)+($b4*$k4_normalisasi)),2); //semua kriteria hasil normalisasi dikalikan dengan nilai bobot dan dijumlahkan semua kriterianya 
    $j++;
}

$y = 0;
foreach($skor as $key => $value){
    $updateskor = mysqli_query($connection,"update tbl_nilai set skor = '$value' where id_nilai='$id_nilai[$y]'"); //mengupdate semua skor dan memasukakknya kedalam tabel
    $y++;
    echo"<br>";
}


header("location:../index.php?halaman=peringkat");
?>