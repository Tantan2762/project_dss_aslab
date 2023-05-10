<?php 
include 'koneksidb.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
        <h1 style="text-align: center;">Edit Pengguna</h1>

        <?php 
        include 'koneksidb.php';
      
        $id = isset($_GET['id']) ? $_GET['id'] : false;
        $result = mysqli_query($connection,"SELECT * FROM users WHERE id='$_GET[id]' ");
        $row = mysqli_fetch_array($result);
        ?>

        <div class="col-6 card shadow-lg border-0 m-5 p-5 mx-auto">
            <div class = "card-body">
        <form action="edit_pengguna_func.php" method="post" enctype="multipart/form-data">
            
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <div>
            <label for="name">Nama</label><br>
            <input style="width: 100%" type="text" id="name" name = "name" value="<?php echo $row['name'];?>" placeholder="Nama Lengkap" required>
            <br>
            <br>
            </div>

            <div class="d-flex flex-coloumn">
            <div class="col">
            <label  for="role">Role Pengguna</label> <br> 
            <select  class="my-2" style="width: 90%; height :30%" name="role" value="<?php echo $row['role'];?>" id="role" placeholder="Pilih Role Pengguna">
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
            </select>
            </div>

            <div class="col">
            <label for="password">Password</label><br>
            
            <input  style="width: 63%" type="password" id="password" name = "password" value="<?php echo $row['password'];?>" placeholder="Recipient's username" required>
            <a  id ="see" style="width: 5em; color:white" onclick="seeFunction()" class="col btn btn-primary form-control my-2 mx-2" role="button">Lihat</a>
            <br>
            <br>
            </div>
            </div>
            <script>
                function seeFunction() {
                    var pass = document.getElementById("password");
                    if (pass.type === "password"){
                        pass.type = "text";
                    }else{
                        pass.type = "password";
                    }

                }
                
            </script>

            <div class="d-flex flex-coloumn">
            <div class="col">
            <label for="email">Email</label><br>
            <input style="width: 90%" type="email" id="email" name = "email" value="<?php echo $row['email'];?>" placeholder="name@example.com" required>
            <br>
            <br>
            </div>

            <div class="col">
            <label for="phone">Telp</label><br>
            <input style="width: 100%" type="text" id="phone" name = "phone" value="<?php echo $row['phone'];?>" placeholder="08967565" required>
            <br>
            <br>
            </div>
            </div>


            <div>
            <label for="address">Alamat Lengkap</label><br>
            <input style="width: 100%;"   type="text" id="address" name = "address" value="<?php echo $row['address'];?>" placeholder="Masukkan Alamat Lengkap" required>
            <br>
            <br>
            </div>

            <div>
            <label for="avatar">Unggah Foto</label><br>
            <input style="width: 100%" type="file" id="avatar" name = "avatar" required>
            <br>
            <br>
            </div>
            
            <input type="submit" value="Edit" class="btn btn bg-primary" style="color :white">
        </form>

            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>   
</body>
</html>