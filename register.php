<?php 
require 'functions.php';

    if(isset($_POST["register"])) {
        if(registrasi($_POST) > 0 ) {
            echo "<script>
                    alert('user baru berhasil ditambahkan!');
                </script>";
         } else { 
             echo mysqli_error($conn);    
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Registrasi</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link rel="stylesheet" href="stylergstr.css">
<body class="pt-4">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container text-center alert dark alert-dark pt-2">
        <h1>Halaman Registrasi</h1>
            <div class="container col-sm-4 text-center">
            <form action="" method="post">
            <ul>
                <li>
                    <label for="username" >Username :</label>
                    <input class="form-control form -sm" type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password" >Password :</label>
                    <input class="form-control form -sm" type="password" name="password" id="password">
                </li>
                <li>
                    <label for="password2">Confirm Password :</label>
                    <input class="form-control form -sm" type="password" name="password2" id="password2">
                </li>
                <li>
                    <label for="email">Email :</label>
                    <input class="form-control form -sm" type="email" name="email" id="email">
                </li>
                <br>
                <li>
                    <button class="btn btn-dark" type="submit" name="register"> Register!</button>
                </li>
            </ul>
        </div>
    </div>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            </form>
</body>
</html>