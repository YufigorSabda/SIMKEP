<?php require('koneksi.php'); 
    $id_user = $_POST['iduser'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $bagian = $_POST['bagian'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];

    // Cek apakah ID sudah ada
    $query = mysqli_query($conn, "SELECT id_user FROM user WHERE id_user='$id_user'");
    $id_exist = mysqli_num_rows($query);
    if($id_exist == 0){
        mysqli_query($conn,"INSERT INTO user VALUES ('$id_user', '$password', '$nama', '$bagian', '$alamat', '$tlp')");
        echo "Data $id_user Berhasil Ditambahkan";
    } else{
        echo "ID Sudah terdaftar, gunakan ID lain";
    }
?>
