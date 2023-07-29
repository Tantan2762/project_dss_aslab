<?php
include "koneksi.php";

$resultget = mysqli_query($connection, "select 
db_dss.tbl_alternatif.id_alternatif as id_alternatif, 
db_dss.tbl_alternatif.nama as nama,
db_dss.tbl_nilai.k1 as k1,
db_dss.tbl_nilai.k2 as k2,
db_dss.tbl_nilai.k3 as k3,
db_dss.tbl_nilai.k4 as k4,
db_dss.tbl_nilai.id_nilai as id_nilai from
(db_dss.tbl_alternatif left join db_dss.tbl_nilai on ((  
    db_dss.tbl_alternatif.id_alternatif = 
    db_dss.tbl_nilai.id_alternatif)))");

?>
<div class="m-4 p-4 col-10">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<h3 class="text-center">Tabel Isi Penilaian</h3>
<br>

<table class="table-striped">
    <thead class="text-center">
        <tr>
            <td width="2%">No.</td>
            <td width="10%">Nama</td>
            <td width="10%">Kriteria 1</td>
            <td width="10%">Kriteria 2</td>
            <td width="10%">Kriteria 3</td>
            <td width="10%">Kriteria 4</td>
        </tr>
    </thead>
    <tbody >
        <?php
            $number =1;
            $j = 0;
            while($data=mysqli_fetch_array($resultget)){
        ?>
        <tr>
            <td class="text-center"><?php echo $number++ ?></td>
            <td><?php echo $data['nama']?></td>
            <form action="../isi_penilaian/func_isi_penilaian.php" method="post">
            
                <td>
                    <input type="hidden" name="id_alternatif<?php echo $j;?>" value="<?php echo $data['id_alternatif'];?>">
                    <input type="hidden" name="id_nilai<?php echo $j;?>" value="<?php echo $data['id_nilai'];?>">

                    <input type="text" required="" class="text-center form-control" name="k1<?php echo $j;?>" value="<?php echo $data['k1'];?>">
                </td>
                <td>
                    <input type="text" required="" class="text-center form-control" name="k2<?php echo $j;?>" value="<?php echo $data['k2'];?>">
                </td>
                <td>
                    <input type="text" required="" class="text-center form-control" name="k3<?php echo $j;?>" value="<?php echo $data['k3'];?>">
                </td>
                <td>
                    <input type="text" required="" class="text-center form-control" name="k4<?php echo $j;?>" value="<?php echo $data['k4'];?>">
                </td>
           
            <?php 
            $j++;
            } ?>
            <tr>
            <td>
                <input type="hidden" name="total" value="<?php echo $j?>">
                <input type="submit" value="simpan" class="btn btn-primary my-2"name="simpan">
            </td>
            </tr>
            </form>
        </tr>
    </tbody>
</table>
</div>