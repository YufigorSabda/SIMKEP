<?php
require_once('koneksi.php');
require_once('fungsi_filter.php');
if (isset($_POST['dp']))
	$dp=$_POST['dp'];
 else
 		$dp='';
 echo "<form action='' method='post'>
 				Daftar DP : <select name=dp onchange='this.form.submit()'>
 										<option value=''>Daftar DP Keseluruhan</option>";
 				$query=mysqli_query($conn,"SELECT dp, mslh FROM masalah ORDER BY dp");
 				while ($hasil=mysqli_fetch_assoc($query)) {
 						$dp1=$hasil['dp'];
 						if ($dp==$dp1)
 							echo "<option value=$dp1 selected>$dp1-$hasil[mslh]</option>";
 						else
 						echo "<option value=$dp1>$dp1-$hasil[mslh]</option>";
 					}
 									echo "</select>
</form>";
if ($dp!='')
	tampil_gejala($dp);
else tampil_all();
?>