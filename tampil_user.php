<?php require('koneksi.php'); ?>
<form action="?p=73" method="POST" name="Input">
	<table width="60%" border="1">
		<tr>
			<td colspan="3" align="center"><b> Input User</b></td>
		</tr>
		<tr><td width="20%">ID User</td>
		 	<td width="2%">:</td>
			<td width="38%"><input name="iduser" type="text" size="7" maxlength="7"></td>
		</tr>
		<tr><td >Password</td>
			<td >:</td>
			<td ><input type="text" name="password" ></td>
		</tr>
		<tr><td >Nama</td>
			<td >:</td>
			<td ><input type="text" name="nama" ></td>
		</tr>
		<tr><td >Bagian</td>
			<td >:</td>
			<td ><input type="text" name="bagian" ></td>
		<tr><td >Alamat</td>
			<td >:</td>
			<td ><input type="text" name="alamat" ></td>
		</tr>
		<tr><td >No Telp/HP</td>
			<td >:</td>
			<td ><input type="text" name="tlp" ></td>
		</tr>

		<tr><td colspan="2"></td>
			<td width="35%"><input type="submit" name="Input" value="Input"></td>
			</tr>
	</table>
</form>
Tampilan Data User 
<table width="100%" border="1">
	<tr>
		<th>Nomer</th>
		<th>ID User</th>
		<th>Password</th>
		<th>Nama User</th>
		<th>Bagian</th>
		<th>Alamat</th>
		<th>Tlp</th>
	</tr>';
	<?php
	$nomer=0;
	$query=mysqli_query($conn,"SELECT *FROM `user` order by id_user asc" );
	while ($hasil=mysqli_fetch_assoc($query)) {
	$nomer++;
	echo "<tr>
			<td class='kotak_nomor'>$nomer</td>
			<td><a href='?p=71&user=$hasil[id_user]' style='TEXT-DECORATION: NONE'>$hasil[id_user]</td>
			<td>$hasil[kata_sandi]</td>
			<td>$hasil[nama]</td>
			<td>$hasil[bagian]</td>
			<td>$hasil[alamat]</td>
			<td>$hasil[tlp]</td>
		</tr>";
}
echo '</table>';
	 	
?>