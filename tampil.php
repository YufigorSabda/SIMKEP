<?php require_once('koneksi.php');
echo 'Tampilan seluruhan Data Diagnosa Keperawatan
		<table width="100%" border="1">
				<tr>
						<th>Nomer</th>
						<th>Kode DP</th>
						<th>Nama Masalah</th>
						<th>Luaran</th>
						<th>Gejala</th>
				</tr>';
$nomer=0;
$query=mysqli_query($conn,"SELECT dp,mslh,luaran FROM masalah ORDER BY dp ASC");
while ($hasil=mysqli_fetch_assoc($query)) {
	   $dp=$hasil['dp'];
	   $nomer++;
		echo"<tr>
					<td class='kontak_nomor'>$nomer</td>
					<td>$dp</td>
					<td>$hasil[mslh]</td>
					<td colspan='2'>$hasil[luaran]</td>
			</tr>";
		$nomer1=0;
		$query1=mysqli_query($conn,"SELECT gejala FROM gejala WHERE gejala.dp='$dp' order by id ASC");
		      while ($hasil1=mysqli_fetch_assoc($query1)) {
			   		$nomer1++;
			   		echo "<tr>
							<td colspan='3'></td>
							<td class='kontak_nomor'>$nomer1</td>
							<td>$hasil1[gejala]</td>
						</tr>";
	}
}
echo '</table>';
?>				