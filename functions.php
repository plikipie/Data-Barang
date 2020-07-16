<?php 
// koneksi database
    $conn = mysqli_connect("localhost", "root", "","laporankp");


function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data) {
    global $conn;
    $kode_barang = htmlspecialchars ($data["kode_barang"]);
    $nama_barang = htmlspecialchars ($data["nama_barang"]);
    $jumlah_barang = htmlspecialchars ($data["jumlah_barang"]);
    $tgl_masuk = htmlspecialchars ($data["tgl_masuk"]);
    

    $query = "INSERT INTO tugaskp VALUES 
            ('','$kode_barang','$nama_barang','$jumlah_barang','$tgl_masuk')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    } 
    
    function hapus($no) {
        global $conn;
        mysqli_query($conn, "DELETE FROM tugaskp WHERE no = $no");
        return mysqli_affected_rows($conn);
    }

    function ubah ($data) {
        global $conn;
        $no = $data["no"];
        $kode_barang = htmlspecialchars ($data["kode_barang"]);
        $nama_barang = htmlspecialchars ($data["nama_barang"]);
        $jumlah_barang = htmlspecialchars ($data["jumlah_barang"]);
        $tgl_masuk = htmlspecialchars ($data["tgl_masuk"]);
        
        
        $query = "UPDATE tugaskp SET 
               kode_barang = '$kode_barang',
               nama_barang = '$nama_barang',
               jumlah_barang = '$jumlah_barang',
               tgl_masuk = '$tgl_masuk'
               WHERE no = $no
               ";
        mysqli_query($conn, $query);  
    }

    function cari($keyword) {
        $query = "SELECT * FROM tugaskp WHERE 
        kode_barang LIKE '%$keyword%' OR 
        nama_barang LIKE '%$keyword%' OR 
        jumlah_barang LIKE '%$keyword%' OR 
        tgl_masuk LIKE '%$keyword%' 
        ";
        return query($query);
    }

    function registrasi ($data) {
        global $conn;
    

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data["password"]);
        $password2 = mysqli_real_escape_string($conn,$data["password2"]);
        $email = strtolower (stripslashes($data["email"]));

        // cek username uda ada apa belum 

       $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
       
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('username sudah terdaftar')
                </script>";
                return false;
        }
       // cek konfirmasi password  
        if($password !== $password2 ) {
            echo "<script>
                alert('Password tidak sesuai');
            </script>";
            return false; 
        }
        
    
        // enkripsi password
        $password = password_hash($password,PASSWORD_DEFAULT);
       
        // tambahakan user baru ke database 
        mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password','$email')");     
        return mysqli_affected_rows($conn);
    }   
?> 
