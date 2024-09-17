<?php require_once('koneksi.php'); 
$id_user=$_GET['user'];
$query = mysqli_query($conn,"SELECT * FROM `user` WHERE  id_user='$id_user'");
$jmlrek = mysqli_num_rows($query);
if ($jmlrek!='0') {
	while ($hasil=mysqli_fetch_array($query)) {
		$password 	= 	$hasil['kata_sandi'];
		$nama 		= 	$hasil['nama'];
		$bagian 	= 	$hasil['bagian'];
		$alamat 	= 	$hasil['alamat'];
		$tlp 		= 	$hasil['tlp']; 

	}
		echo '<FORM ACTION="?p=72" METHOD="POST" NAME="input">
			<table width="60%" border="1">
				<tr>
				  <td colspan="3" align="center"><b>Edit Data User</b></td>
				</tr>
				<tr><td width="20%">Id User</td>
					<td width="2%">:</td>
					<td width="38%"><input name="id_user" type="text" size="7" maxlength="7" value="'.$id_user.'" readonly="readonly"></td>
				</tr>
				<tr><td >Ganti Password</td>
					<td >:</td>
					<td ><input name="pass" type="text"  value="'.$password.'" ></td>
				</tr>
				<tr><td >Nama User</td>
					<td >:</td>
					<td ><input type="text" name="nama" value="'.$nama.'"></td>
				</tr>
				<tr><td >Bagian</td>
					<td >:</td>
					<td ><input type="text" name="bagian" value="'.$bagian.'"></td>
				</tr>
				<tr><td >Alamat</td>
					<td >:</td>
					<td >
						<input type="text" name="alamat" value="'.$alamat.'" size="50" maxlength="50"></td>
				</tr>
				<tr><td >No Telepon</td>
					<td >:</td>
					<td ><input type="text" name="tlp" value="'.$tlp.'"></td>
				</tr>
				
				<tr><td colspan="2"></td>
					<td width="35%"><input type="submit" name="Input" value="Simpan"></td>
				</tr>
			 </table>
		</FORM>';
}
else { 
	echo "Data $kode Tidak ada"; 
}
?>