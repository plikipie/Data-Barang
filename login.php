<?php 
require 'functions.php';
// cek tombol submit suda di klik apa belum ?
if (isset($_POST["login"])) {
    //cek username dan password 
    $username = $_POST["username"];
    $password = $_POST["password"];
    // cek terlebih dahulu apakah username & password sudah sesuai blm di database
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    // cek username ==> 1 berarti ada kalo 0 ngga ada   
    if(mysqli_num_rows($result)===1) {
        // cek passowrd
        $row = mysqli_fetch_assoc($result);
       if(password_verify($password, $row["password"])) {
           header("Location:index.php");
           exit;
       }
    }   
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="stylelgn.css">
</head>
<body class="pt-4 mt-4 mb-4">
    <br><br><br><br><br>
    <div class="container text-center alertdark alert-dark">
        <br><br>
        <h1 class="">Halaman Login</h1>
        <?php if(isset($error)): ?>
        <p style="color:red; font-style:italic;">username/password salah!</p>
        <?php endif ?>
        <div class=" container col-sm-4 text-center">
        <form action="" method="post">
        <ul class="">
            <li>
                <label for="username" class="">Username :</label>
                <input  class="form-control form -sm" type="text" name="username" id="username">
            </li>
            <li>
                <label for="password" class=""> Password :</label>
                <input  class="form-control form -sm" type="password" name="password" id="password">
            </li> 
                <li>
                <button class="btn btn-dark" type="submit" name="login"> Login</button>
            </li>
            <li class="pt-2">
                <a class="justify-content-right btn btn-dark" type="submit" name="register" href="register.php">Register</a>
            </li>
        </ul>
        <br><br>

        </form>    
        </div>
    </div>
    
</body>
</html>