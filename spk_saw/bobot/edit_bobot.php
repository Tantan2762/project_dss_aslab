<?php 
include "koneksi.php";
$data_bobot=mysqli_query($connection,"select * from tbl_bobot");
$bobot=mysqli_fetch_array($data_bobot);
?>


<div class="m-4 p-4 col-10">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<h3 class="text-center">Ubah Bobot</h3>
<br>
    <form action="bobot/func_edit_bobot.php" method="post">
        <div class="form-group row">
            <label for="b1" class="">Bobot 1</label>
     
            <input type="text" class="form-control" name="b1" value="<?php echo $bobot['b1']?>">
         
        </div>

        <div class="form-group row">
            <label for="b2" class="">Bobot 2</label>
 
            <input type="text" class="form-control" name="b2" value="<?php echo $bobot['b2']?>">
   
        </div>

        <div class="form-group row">
            <label for="b3" class="">Bobot 3</label>
  
            <input type="text" class="form-control" name="b3" value="<?php echo $bobot['b3']?>">
         
        </div>

        <div class="form-group row">
            <label for="b4" class="">Bobot 4</label>
    
            <input type="text" class="form-control" name="b4" value="<?php echo $bobot['b4']?>">
          
        </div>

        <div class="form-group row  ">
            <input type="submit" name="submit" class="form-control col-3 btn-primary" id="" value="ubah">
            
        </div>
    </form>

</div>