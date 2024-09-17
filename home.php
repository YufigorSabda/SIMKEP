<?php 
session_start(); 
if (isset($_SESSION['id_user'])){
				$user_id	=$_SESSION['id_user'];
				$user_level	=$_SESSION['bagian'];
				$user_name	=$_SESSION['nama'];
?>
<title>.:Sistem Informasi Kajian Keperawatan Dasar:.</title>
<link href=style.css rel=stylesheet type=text/css>
<center>
	<table width=100% cellspacing=0>
		<tr></tr>
		<tr>
			<td class="bg_header"><b>SISTEM INFORMASI KEPERAWATAN DASAR</b>	</td>
		</tr>
		<tr>
			<td><?php require "toolbar.php"; ?></td>
		</tr>
		<tr>
			<td><div style=padding:5px> <?php require "control.php"; ?> </div>
			</td>
		</tr>
		<tr>
			<td class=footer>&copy: 2022  <br>	</td>
		</tr>
	</table>
</center>
<?php 
} else { echo "<tr>
		<td align=center>Anda belum login! Anda tidak berhak masuk ke halaman ini. Silahkan login <a href=index.php>di sini</a></td>
		</tr>";
}?>


