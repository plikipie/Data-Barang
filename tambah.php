<?php 
require 'functions.php';
// cek apakah tombol submit sudah ditekan / belom 
if(isset($_POST["submit"])) {

// cek apakah tombol submit sudah ditekan / blm 
if(tambah ($_POST) > 0) {
    echo " 
    <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
    </script>";
} else {
    echo "
   <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
    </script>";
}
   
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Barang</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styletmbh.css">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
      </li>
    </ul>
    <a class="nav-link btn btn-outline-dark bg-light text-dark " href="index.php">Kembali</a>
  </div>
</nav>
    <div class="container">
    <h1 class="alert dark alert-dark">Tambah Data Barang</h1>
    <div class="col-sm-4">
    <form action="" method="post">
        <ul>
            <li>
                <label for="kode_barang">Kode Barang :</label>
                <input class="form-control form-sm"  type="text"  name="kode_barang" id="kode_barang" required autocomplete="off">
            </li>
            <li>
            <label for="nama_barang">Nama Barang :</label>
                <input class="form-control form -sm" type="text" name="nama_barang" id="nama_barang" required autocomplete="off">
            </li>
            <li>
            <label for="jumlah_barang">Jumlah Barang :</label>
                <input class="form-control form -sm" type="text" name="jumlah_barang" id="jumlah_barang" required autocomplete="off">
                
            </li> 
            <li>
            <label for="tgl_masuk">Tanggal Masuk :</label>
                <input class="form-control form -sm" type="text" name="tgl_masuk" id="tgl_masuk" autocomplete="off" placeholder="cth:(1995-08-12)">
            </li>
            <li>
                <br>
                <button class="btn btn-dark" type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>