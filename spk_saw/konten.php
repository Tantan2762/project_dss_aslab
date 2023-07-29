
<?php
if(isset($_GET['halaman'])){ //isset untuk mengecek variabel sudah ada nilainya atau belum
    if($_GET['halaman']=='home'){
        include "home.php";
    }elseif($_GET['halaman']=='data'){
        include "pil_alternatif/pil_alternatif.php";
    }elseif($_GET['halaman']=='tambah_data'){
        include "pil_alternatif/tambah_alternatif.php";
    }elseif($_GET['halaman']=='edit_data'){
        include "pil_alternatif/edit_alternatif.php";
    }elseif($_GET['halaman']=='penilaian'){
        include "isi_penilaian/isi_penilaian.php";
    }elseif($_GET['halaman']=='bobot'){
        include "bobot/edit_bobot.php";
    }
    elseif($_GET['halaman']=='peringkat'){
        include "peringkat/peringkat.php";
    }else{
        echo('Halaman Tidak Ada!');
    }
}else{
    include "home.php";
}
?>
