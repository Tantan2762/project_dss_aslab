<?php
include "koneksi.php";
$hasil = mysqli_query($connection,"select * from tbl_alternatif");

?>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<div class="m-4 p-4 col-10">
    <a href="index.php?halaman=tambah_data">
    <input type="button" value=" Tambah Alternatif + " class="btn btn-primary my-2">
    </a>

    <h3 class="text-center">Tabel Data Alternatif</h3>
    <table class="table table-striped">
    <thead>
        <tr  class="text-center">
            <td width="5%">No.</td>
            <td width="20%">Nama</td>
            <td width="35%">Alamat</td>
            <td width="15%">No. Telp</td>
            <td width="30%">Aksi</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $number = 1;
        while ($data=mysqli_fetch_array($hasil)){
        ?>
        <tr class="text-center">
        <td><?php echo $number++?></td>
        <td><?php echo $data['nama']?></td>
        <td><?php echo $data['alamat']?></td>
        <td><?php echo $data['no_telp']?></td>
        <td>
            
            <a href="index.php?halaman=edit_data&id_alternatif=<?php echo $data['id_alternatif']?>">
                <input type="button" value="Ubah" class="btn btn-warning">
            </a>
            <a onclick ="return confirm('Apakah Anda yakin untuk menghapus?')" href="pil_alternatif/func_hapus_alternatif.php?id_alternatif=<?php echo $data['id_alternatif']?>">
                <input type="button" value="Hapus" class="btn btn-danger">
            </a>
        </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
    </table>
</div>