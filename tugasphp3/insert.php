<?php 

function add_products(){
    
    include 'koneksidb.php';

    $id = $_POST['id'];
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];
    $created_by = $_POST['created_by'];
    $verified_at = $_POST['verified_at'];
    $verified_by = $_POST['verified_by'];

    $query = "INSERT INTO products (id, category_id, name, description, price, status, created_at, updated_at, created_by, verified_at, verified_by ) VALUES ('$id','$category_id', '$name', '$description', '$price', '$status', '$created_at', '$updated_at', '$created_by', '$verified_at', '$verified_by' )";
    

    if(mysqli_query($koneksi, $query)){
        echo "<script>alert('Penambahan data Ke Tabel Products Berhasil');window.location='form_products.php';</script>";
    }else{
        echo "Error :" .mysqli_error($koneksi);
    }
}


add_products();



?>