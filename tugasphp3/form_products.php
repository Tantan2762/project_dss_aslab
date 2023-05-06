<?php 
 include 'koneksidb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">Mengisi Tabel Products</h1>
  
    <div class="col-4 card shadow-lg border-0 m-5 p-5 mx-auto">
        <div class = "card-body">
    <form action="insert.php" method="post">
        <label for="id">ID</label> <br>
        <input type="text" id="id" name = "id" required>
        <br>
        <br>

        <label for="category_id">Category ID</label> <br>
        <input type="text" id="category_id" name = "category_id" required>
        <br>
        <br>

        <label for="name">Name</label> <br>
        <input type="text" id="name" name = "name" required>
        <br>
        <br>

        <label for="description">Description</label> <br>
        <input type="text" id="description" name = "description" required>
        <br>
        <br>

        <label for="price">Price</label> <br>
        <input type="text" id="price" name = "price" required>
        <br>
        <br>

        <label for="status">Status</label> <br>
        <select name="status" id="status">
            <option value="accepted">Accepted</option>
            <option value="rejected">Rejected</option>
            <option value="waiting">Waiting</option>
        </select>
        <br>
        <br>

        <label for="created_at">Created at</label> <br>
        <input type="datetime-local" id="created_at" name = "created_at" required>
        <br>
        <br>

        <label for="updated_at">Updated at</label> <br>
        <input type="datetime-local" id="updated_at" name = "updated_at" required>
        <br>
        <br>

        <label for="created_by">Created by</label> <br>
        <input type="text" id="created_by" name = "created_by" required>
        <br>
        <br>

        <label for="verified_at">Verified at</label> <br>
        <input type="datetime-local" id="verified_at" name = "verified_at" required>
        <br>
        <br>

        <label for="verified_by">Verified by</label> <br>
        <input type="text" id="verified_by" name = "verified_by" required>
        <br>
        <br>

        <input type="submit" value="Add" class="btn btn bg-info" style="color :white">
    </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>