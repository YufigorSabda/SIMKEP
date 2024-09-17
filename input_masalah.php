<?php
require('koneksi.php');
echo "<FORM ACTION='?p=41' METHOD='POST'>
	<table width=60% border=1>
		<tr><td colspan=3 align=center><b>Inputan Data Masalah </b></td>
		</tr>
		<tr><td width=20%>Kode DP</td>
			<td width=2%>:</td>
			<td width=38%><input name=dp type=text size=5 maxlength=5 onkeyup=this.value=this.value.toUpperCase()/> </td>
		</tr>
		<tr><td>Masalah Keperawatan</td>
			<td>:</td>
			<td><input type=text name=mslh ></td>
		</tr>
		</tr>
		<tr><td>Luaran</td>
			<td>:</td>
			<td><input type=text name=luaran ></td>
		</tr>
		<tr><td colspan=2></td>
			<td><input type=submit name=Input value=Input></td>
		</tr>

	 </table>
</FORM>";

echo "Tampilan Data DP dan Masalah Keperawatan
		<table width=80% border=1>
			<tr>
				<th>Nomer</th>
				<th>Kode DP</th>
				<th>Masalah Keperawatan</th>
				<th>Luaran</th>
			</tr>";
			$nomer=0;
			$query = mysqli_query($conn,"SELECT * FROM masalah order by dp ASC");
			while ($hasil=mysqli_fetch_array($query)) {
				$nomer++;
				echo "<tr>
						<td class=kotak_nomor>$nomer</td>
						<td>$hasil[dp]</td>
						<td>$hasil[mslh]</td>
						<td>$hasil[luaran]</td>
					</tr>";
			}
	echo "</table>";
?>