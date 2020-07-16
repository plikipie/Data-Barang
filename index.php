<?php 
require 'functions.php';
$kp = query("SELECT * FROM tugaskp");

// tombol cari ditekan 

if(isset($_POST["cari"])) {
    $kp = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="style.css">

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link btn btn-outline-dark bg-light text-dark mx-4" href="tambah.php">Tambah Data Barang</a>
      </li>
      <li class="nav-item">
      <form class="form-inline my-2 my-md-0" method="post">
      <input class="form-control mr-md-4" type="text" name="keyword" placeholder="Masukan Keyword..">
      <button class="btn btn btn-outline-dark bg-light text-dark my-2 my-sm-0 " name="cari" type="submit">Search</button>
    </form>
      </li>
    </ul>
    <a class="nav-link btn btn-outline-dark bg-light text-dark " href="login.php">Logout</a>
  </div>
</nav>
    <div class="container">
    <h1 class="d-flex justify-content-start">Data Barang</h1>
    <table class="table" border="1" cellpadding="10" cellspacing="0">
        <thead class="thead-dark">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Kode barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Jumlah Barang</th>
        <th sope="col">Tanggal Masuk</th>
        <th scope="col">Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $kp as $row) : ?> 
    <tr>
        <td><?=$i ?></td>
        <td><?=$row["kode_barang"]; ?></td>
        <td><?=$row["nama_barang"]; ?></td>
        <td><?=$row["jumlah_barang"]; ?></td>
        <td><?=$row["tgl_masuk"]; ?></td>
        <td>
            <a class="btn btn-info" href="ubah.php?no=<?= $row["no"]; ?>">Ubah</a>  
            <a class="btn btn-danger"  href="hapus.php?no=<?=$row["no"]; ?>">Hapus</a>
        </td>
    </tr>
<?php $i++; ?>
<?php 
    endforeach;
?>

    </table>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>