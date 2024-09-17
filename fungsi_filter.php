<?php
function tampil_all() {
global $conn;
echo 'Tampilan seluruhan Data Diagnosa Keperawatan
			<table width="70%" border="1">
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
					<td class='kotak_nomor'>$nomer</td>
					<td><a href='?p=61&dp=$dp' style='TEXT-DECORATION:NONE'>$dp</a></td>
					<td>$hasil[mslh]</td>
					<td colspan='2'>$hasil[luaran]</td>
			</tr>";
			$nomer1=0;
			$query1=mysqli_query($conn,"SELECT id, gejala FROM gejala WHERE gejala.dp='$dp' order by id ASC");
		    while ($hasil1=mysqli_fetch_assoc($query1)) {
		     		$nomer1++;
		     		echo "<tr>
		     					<td colspan='3'></td>
		     					<td class='kotak_nomor'>$nomer1</td>
		     					<td><a href='?p=63&id=$hasil1[id]' style='TEXT-DECORATION:NONE'>$hasil1[gejala]</a></td>
		     				</tr>";
		     		}
		}
		echo '</table>';
}
function tampil_gejala($a) {
		global $conn;
		echo 'Daftar Gejalanya
			<table width="100%" border="1">
					<tr>
							<th>Nomer</th>
							<th>Gejala</th>
					</tr>';
		$nomer=0;
		$query=mysqli_query($conn,"SELECT id, gejala FROM gejala WHERE gejala.dp='$a' ");
		while ($hasil=mysqli_fetch_assoc($query)) {
		     	$nomer++;
		     	echo "<tr>
		     				<td class='kotak_nomor'>$nomer</td>
							 <td><a href='?p=63&id=$hasil[id]' style='TEXT-DECORATION:NONE'>$hasil[gejala]</a></td>
	  				</tr>";

	  	}
	  	echo '</table>';
}
?>