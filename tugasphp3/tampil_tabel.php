<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 3</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script></head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
<body>
    <h1 style="text-align: center;">Menampilkan Tabel Data Hasil JOIN Table Product dan Categories  </h1>
    <?php 
    include 'koneksidb.php';

    $result = mysqli_query($koneksi,"SELECT *
    FROM products
    INNER JOIN categories 
    ON products.category_id = categories.id");
    ?>
    <div class= "card shadow-lg border-0 m-5 p-5 mx-auto">
    <table id ="myTable">
    <thead class="bg-info" style="color:white">
        <th>ID Category</th>
        <th>Category ID Products</th>
        <th>Name Category</th>
        <th>Description</th>
        <th>Price</th>
        <th>Status</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Created by</th>
        <th>Verified at</th>
        <th>Verified by</th>        
    </thead>

        <tbody>
            <?php
                while($row = mysqli_fetch_array($result)){
            ?>
            
            <tr class="text-center">
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['category_id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['description']?></td>
                <td><?php echo $row['price']?></td>
                <td><?php echo $row['status']?></td>
                <td><?php echo $row['created_at']?></td>
                <td><?php echo $row['updated_at']?></td>
                <td><?php echo $row['created_by']?></td>
                <td><?php echo $row['verified_at']?></td>
                <td><?php echo $row['verified_by']?></td>
                
            </tr>
        </tbody>
<?php } ?>
    
</table>
</div>
       
</body>

<script>
    $(document).ready(function (){
    $('#myTable').DataTable();
    });
</script>

</html>