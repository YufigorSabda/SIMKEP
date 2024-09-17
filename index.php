<?php
require_once('koneksi.php');
session_start();
if (isset ($_POST['Login'])) {
	$user =trim($_POST['user']);
	$pass =trim($_POST['pass']);
	if(!preg_match("/^[a-zA-Z0-9]*$/", $user) and !preg_match("/^[a-zA-Z0-9]*$/", $pass))
                echo "Input hanya huruf dan angka yang diijinkan, dan tidak boleh menggunakan spasi ...!<br> Silahkan login <a href='index.php'>di sini</a>";
    else {
     	$login=mysqli_query($conn,"SELECT * FROM user WHERE id_user='$user' AND password='$pass' ");
		$ketemu=mysqli_num_rows($login);
		$r=mysqli_fetch_assoc($login);
		if ($ketemu > 0){
			session_start();
			$_SESSION['id_user'] = $r['id_user'];
			$_SESSION['nama'] = $r['nama'];
			$_SESSION['bagian'] = $r['bagian'];
			//menuju kehalaman utama
			header ("location:home.php?p=0");
		} else { ?>
            <script>alert('Data Tidak ada');history.go(-1);</script>
            <?php
        }
    }
}else {?>
		<html>
		<link href="style.css" rel="stylesheet" type="text/css" >
		<head>
			<title>LOGIN   HERE...</title>
		</head>
		<body><br><br>
			<form action="" method=post >
			<table border=0 width=40% align=center>
				<tr>
					<th colspan=3 class=bg_header><b>SISTEM INFORMASI KEPERAWATAN DASAR</b></th>
				</tr>
				<tr>
					<td>Username </td>
					<td>: </td>
					<td><input type=text name=user id=user required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: </td>
					<td><input type=password name=pass id=pass required></td>
				</tr>
				<tr>
					<td colspan=3 class=footer><input type="submit" name="Login" value="Login"></td>
				</tr>
			</table>
			</form>
		</body>
		</html>
<?php } ?>