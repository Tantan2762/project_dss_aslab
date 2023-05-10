<?php 
function edit_user(){
    include 'koneksidb.php';
    
    $id = isset($_GET['id']) ? $_GET['id'] : false ;
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

    $query_update = "UPDATE users SET  name='$name', role='$role', password ='$password', email='$email', phone='$phone', address='$address', avatar='$avatar',  created_at= NOW(), updated_at= NOW() WHERE id='$id'";
    

    if(mysqli_query($connection, $query_update)){
        echo "<script>alert('Data Pengguna Berhasil Diubah ');window.location='tampil_data_pengguna.php';</script>";
    }else{
        echo "Error :" .mysqli_error($connection);
    }
}

edit_user()
?>