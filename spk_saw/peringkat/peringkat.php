<div class="m-4 p-4 col-10">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<h3 class="text-center">Peringkat Aslab Hasil DSS SAW</h3>
<?php
include "koneksi.php";
$hasil = mysqli_query($connection,"select * from tbl_nilai where skor is null");


if(mysqli_num_rows($hasil)>0){
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Pesan : </strong> Peringkat Pelu Diperbarui!
    <button type="button" class="close" data-dismis="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>

</div>
<a href="peringkat/func_peringkat.php"><input style="margin-bottom:5px " class="btn btn-primary" type="button" name="" value="Mulai"></a>
<?php
}else{
?>
<a href="peringkat/func_peringkat.php"><input style="margin-bottom:5px " class="btn btn-primary" type="button" name="" value="Perbarui!"></a>
<?php
}
$data = mysqli_query($connection,"select 
    db_dss.tbl_alternatif.id_alternatif as id_alternatif,
    db_dss.tbl_alternatif.nama as nama,
    db_dss.tbl_nilai.id_nilai as id_nilai,
    db_dss.tbl_nilai.skor as skor from
    (db_dss.tbl_alternatif left join db_dss.tbl_nilai on
    ((db_dss.tbl_alternatif.id_alternatif = db_dss.tbl_nilai.id_alternatif ))) 
    order by skor desc");
$data2 = mysqli_query($connection,"select 
    db_dss.tbl_alternatif.id_alternatif as id_alternatif,
    db_dss.tbl_alternatif.nama as nama,
    db_dss.tbl_nilai.id_nilai as id_nilai,
    db_dss.tbl_nilai.skor as skor from
    (db_dss.tbl_alternatif left join db_dss.tbl_nilai on
    ((db_dss.tbl_alternatif.id_alternatif = db_dss.tbl_nilai.id_alternatif ))) 
    order by skor desc limit 3");

?>

<table class="table table-striped">
    <thead>
        <tr>
           <td width="5%">No.</td>
           <td width="30%">Nama</td>
           <td width="20%">Skor</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $number=1;
        $k=0;
        while($hasil=mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $number++ ?>.</td>
            <td><?php echo $hasil['nama'] ?></td>

            <form action="peringkat/func_peringkat.php" method="post">
            <td><?php echo $hasil['skor'] ?></td>
        </tr>
        <?php
        $k++;
        }
        ?>
        </form>
    </tbody>
</table>
<?php
        $l = 0;
        $num = 1;
        echo "Berikut adalah Aslab Prodi Pendidikan Multimedia Yang Terpilih <br>";
         while($hasil = mysqli_fetch_array($data2)){
            
            echo $hasil['nama']." Peringkat ";
            echo "ke - ".$num++;
            echo "<br>";

            
         }
        ?>

</div>