<?php require_once('koneksi.php');
    $id_user = $_POST['id_user'];
    $password = $_POST['pass'];
    $nama = $_POST['nama'];
    $bagian = $_POST['bagian'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];

    mysqli_query($conn, "UPDATE user SET kata_sandi='$password', nama='$nama', bagian='$bagian', alamat='$alamat', tlp='$tlp' WHERE id_user='$id_user'");
	echo "Data $id_user Berhasil Diedit";
?>