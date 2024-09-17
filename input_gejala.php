<?php
require_once('koneksi.php');
require_once('fungsi_filter.php');
if (isset($_POST['dp']))
	$dp=$_POST['dp'];
else
	$dp='';
echo "<form action='' method=post>
		Daftar DP : <select name=dp onchange=this.form.submit()>
						<option value=''>Daftar DP Keseluruhan</option>";
		$query=mysqli_query($conn,"SELECT dp,mslh FROM masalah ORDER BY dp");
		while ($hasil=mysqli_fetch_assoc($query)){
			$dp1=$hasil['dp'];
			if ($dp==$dp1)
				echo "<option value=$dp1 selected>$dp1-$hasil[mslh]</option>";
			else
			echo "<option value=$dp1>$dp1-$hasil[mslh]</option>";
		}
					echo "</select>
</form>";
echo "<FORM ACTION='?p=51' METHOD='POST'>
	<table width=60% border=1>
		<tr><td colspan=3 align=center><b>Inputan Data Gejala </b></td>
		</tr>
		<tr><td width=20%>Kode DP</td>
			<td width=2%>:</td>
			<td width=38%><input name=dp type=text size=5 maxlength=5 value=$dp> </td>
		</tr>
		<tr><td>Gejala Keperawatan</td>
			<td>:</td>
			<td><input type=text name=gejala ></td>
		</tr>
		<tr><td colspan=2><input type=submit name=Input value=Input></td>
			<td width=35%></td>
		</tr>
	</table>
</FORM>";
if ($dp!='')
	tampil_gejala($dp);
else tampil_all();
?>