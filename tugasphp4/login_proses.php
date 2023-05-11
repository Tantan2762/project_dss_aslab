<?php 
 session_start();
 include 'koneksidb.php';
 
 $email = $_POST['email'];
 $password = $_POST['password'];
 $name = $_POST['name'];



if(isset($email) && isset($password) && isset($name)){
 $query = "
 SELECT *
 FROM users
 WHERE email = '$email' AND password = '$password' AND name='$name' 
 ";

 $select = $connection->query($query);
 
 if($select->num_rows >0){
 $row = $select->fetch_assoc();
 $_SESSION['is_login'] = true;
 $_SESSION['email'] = $row['email'];
 $_SESSION['password'] = $row['password'];
 $_SESSION['name'] = $row['name'];

 echo "<script>window.location='dashboard2.php';</script>";
 } else {
    echo "<script>window.location='login.php';</script>";
 }
} else {
    echo "<script>window.location='login.php';</script>";
}

?>


