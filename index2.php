<?php 
// koneksi database
$conn = mysqli_connect("localhost", "root", "","laporankp");

// if($conn) {
//     echo "koneksi host berhasil.<br/>";
// } else {
//     echo "koneksi host gagal.<br/>";
// }


// ambil data dari tugaskp

$result = mysqli_query($conn, "SELECT * FROM tugaskp");

// if ($result) {
//     echo "koneksi query berhasil.<br/>";
// }else {
//     echo "koneksi query gagal.<br/>";
// }


// while($kp = mysqli_fetch_assoc($result)) {
// var_dump($kp);
// } 
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Aplikasi Monitoring Gudang</h1> 
    <table border="1" cellpadding="10" cellspacing="0">
    
    <tr>
        <th>No</th>
        <th>Kode barang</th>
        <th>Nama Barang</th>
        <th>Jumlah Barang</th>
        <th>Tanggal Masuk</th>
        <th>Tanggal Keluar</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?=$i ?></td>
        <td><?=$row["kode_barang"]; ?></td>
        <td><?=$row["nama_barang"]; ?></td>
        <td><?=$row["jumlah_barang"]; ?></td>
        <td><?=$row["tgl_masuk"]; ?></td>
        <td><?=$row["tgl_keluar"]; ?></td>
        <td>
            <a href="">Update</a> | 
            <a href="">Hapus</a>
        </td>
    </tr>
<?php $i++; ?>
<?php 
    endwhile;
?>

    </table>
</body>
</html>