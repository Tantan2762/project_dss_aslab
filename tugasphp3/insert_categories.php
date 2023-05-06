<?php 

function add_categories(){

    include 'koneksidb.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    $query = "INSERT INTO categories (id,  name,  created_at, updated_at) VALUES ('$id','$name', '$created_at', '$updated_at')";
    

    if(mysqli_query($koneksi, $query)){
        echo "<script>alert('Data Berhasil Ditambahkan ke Tabel Categories');window.location='form_categories.php';</script>";
    }else{
        echo "Error :" .mysqli_error($koneksi);
    }

}

add_categories();

?>