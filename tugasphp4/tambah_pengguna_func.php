<?php 

function add_user(){

    include 'koneksidb.php';
    
    $name = isset($_POST['name']) ? $_POST['name'] : false ;
    $role = isset($_POST['role']) ? $_POST['role'] : false ;
    $password = isset($_POST['password']) ? $_POST['password'] : false ;
    $email = isset($_POST['email']) ? $_POST['email'] : false ;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : false ;
    $address = isset($_POST['address']) ? $_POST['address'] : false ;
    $avatar = isset($_FILES['avatar']['name']) ? $_FILES['avatar']['name'] : false;
    $avatar_sementara = isset($_FILES['avatar']['tmp_name']) ? $_FILES['avatar']['tmp_name'] : false;
    
 

    $dirUpload = "upload/";

    $terUpload = move_uploaded_file($avatar_sementara, $dirUpload .$avatar);

    $query = "INSERT INTO users (name, role, password, email, phone, address, avatar,  created_at, updated_at) VALUES ('$name', '$role', '$password', '$email', '$phone', '$address', '$avatar', NOW(), NOW())";
    

    if(mysqli_query($connection, $query)){
        echo "<script>alert('Data Pengguna Berhasil Ditambahkan ');window.location='tampil_data_pengguna.php';</script>";
    }else{
        echo "Error :" .mysqli_error($connection);
    }

}

add_user();

?>