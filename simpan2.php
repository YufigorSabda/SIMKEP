<?php require_once('koneksi.php');
//menangkap variabel kiriman dari daftar masalah keperawatan yg telah dipilih
$no_rekmed = $_POST['no_rekmed'];
//$keluhan= $_POST['keluhan'];
$keluhan = explode("-", $_POST['keluhan']);
$keluhan = $keluhan[0];
//menampilkan daftar diagnosa perawat utama dan tampahan yg akan dilaksanakan intervensi
$q1 = mysqli_query($conn,"INSERT INTO diagnosa2 VALUES ('','$no_rekmed','keluhan','$keluhan')");
if (isset ($_POST['tambahan'])) {
	$tambahan =$_POST['tambahan'];
	$jtambahan = count($tambahan);

	for ($i=0; $i<$jtambahan; $i++) {
		$q1 = mysqli_query($conn,"INSERT INTO diagnosa2 VALUES ('','$no_rekmed','tambahan','$tambahan[$i]')");
	}
}
$query=mysqli_query($conn,"SELECT no_rekmed,nama,umur FROM identitas where identitas.no_rekmed='$no_rekmed' ");
$hasil=mysqli_fetch_assoc($query);
//menampilkan hasil pemilihan masalah keperawatan yang akan dilaksanakan intervensi dalam tabel
echo"<table>
		<form action='' method=post>
		<tr>
			<td colspan=3 align=center>ANALISIS DATA</td>
			</tr>
			<tr>
			<td>NOCM</td>
			<td>:</td>
			<td><input type=text name=no_rekmed value='$no=rekmed' readonly></td>
		</tr>
		<tr>
			<td>Nama Pasien</td>
			<td>:</td>
			<td><input type=text name=nama value='$hasil[nama]' readonly></td>
		</tr>
		<tr>
			<td>Umur</td>
			<td>:</td>
			<td><input type=text name=umur value='$hasil[umur]' readonly></td>
		</tr>
	</form>
</table>";

echo"<table>
	<tr>
		<th>No</th>
		<th>DP</th>
		<th>Masalah</th>
	</tr>";
$nomor=0;
$query1=mysqli_query($conn,"SELECT diagnosa2.dp, mslh FROM diagnosa2 LEFT JOIN masalah ON diagnosa2.dp=masalah.dp WHERE diagnosa2.id_pasien='$no_rekmed' ");
while ($hasil1=mysqli_fetch_assoc($query1)) {
	$nomor++;
	echo"<tr>
		<td>$nomor </td>
		<td>$hasil1[dp]</td>
		<td>$hasil1[mslh] </td>
	</tr>";
}
echo "</table>";
?>