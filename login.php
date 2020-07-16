<?php 
// cek tombol submit suda di klik apa belum ?
if (isset($_POST["login"])) {
    //cek username dan password 
    if ($_POST["username"] == "admin" && $_POST["password"]=="123") {
    // jika benar, redirect ke halama login
        header("Location:index.php");
        exit;
} else {
    $error = true;
}
    // jika salah tampilkan pesan kesalahan
    
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
        <div class=" container col-sm-4 text-center">
        <form action="index.php" method="post">
        <ul class="">
            <li>
                <label for="username" class="">Username :</label>
                <input  class="form-control form -sm" type="text" name="username" id="username">
            </li>
            <li>
                <label for="password" class=""> Password :</label>
                <input  class="form-control form -sm" type="password" name="username" id="password">
            </li>
            <br>
                <?php if(isset($error)):?>
                <p style="color:red; font-style:italic;">username / password salah!</p>
                <?php endif; ?>
                <li>
                <button class="btn btn-dark" type="submit" name="login"> Login</button>
            </li>
            <li class="pt-2">
                <button class="justify-content-right btn btn-dark" type="submit" name="register" href="register.php">Register</button>
            </li>
        </ul>
        <br><br>

        </form>    
        </div>
    </div>
    
</body>
</html>