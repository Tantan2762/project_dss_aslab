<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login DSS</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body class="my-5">
    <div class="row"></div>
    <div class="container mx-auto my-5 d-m-flex flex-row" style="max-width: 30em">
            <div class = "card mx-auto p-4" >
                <h3 class="text-center">Login</h3>
                <form action="func_login.php" method="POST">
                    <label for="username">Username</label>
                    <br>
                    <input type="text" name="username" class="form-control" placeholder="masukkan username">
                    <br>
                    <br>
                    <label for="username">Password</label>
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="masukkan password">
                    <br>
                    <br>
                    <div class="text-center">
                    <input type="submit" value="Login" name="" class="btn btn-primary mx-auto">
                    </div>
                </form>
            </div>

    </div>
    <div class="row"></div>
</body>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
 $('.carousel').carousel({
  interval: 2000
})
</script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>