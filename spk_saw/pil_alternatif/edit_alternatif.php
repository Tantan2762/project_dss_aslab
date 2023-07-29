<?php
include "koneksi.php";
$data = mysqli_query($connection,"select * from tbl_alternatif where id_alternatif='$_GET[id_alternatif]'");
$row=mysqli_fetch_array($data);
?>
<div class="m-4 p-4 col-10">
    <h3 class="text-center">Ubah Alternatif</h3>
    <form action="pil_alternatif/func_edit_alternatif.php" method="post">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <input type="hidden" name="id_alternatif" class="form-control" id="id_alternatif" value="<?php echo $row['id_alternatif']?>">
            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $row['nama']?>">

        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $row['alamat']?>">

        </div>

        <div class="form-group row">
            <label for="no_telp" class="col-sm-2 col-form-label">No. Telp</label>
            <input type="text" name="no_telp" class="form-control" id="no_telp" value="<?php echo $row['no_telp']?>">

        </div>

        <div class="form-group row col-3 mx-auto">
            <input type="submit" name="submit" class="form-control btn-primary" id="" value="Simpan Perubahan">
            
        </div>
    </form>

</div>