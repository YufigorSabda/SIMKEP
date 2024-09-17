<form>
		<tr>
			<td>:</td>
			<td colspan=2><select	multiple=multiple name='polalat[]'>
				<?php
				$q=mysqli_query($conn,"SELECT * FROM gejala WHERE dp='D0001' or dp='D0054' or dp='D0055' or dp='D0056 or' dp='D0129'or dp='D0136'order by dp");
				while ($h=mysqli_fetch_assoc($q)){
					$id		=	$h['id'];
					$dp		=	$h['dp'];
					$gejala	=	$h['gejala'];

					echo "<option value=$id>$gejala</option>";
				}
				?>
				</select></td>
		</tr>
		<tr>
			<td colspan=2>5. Pola Eliminasi</td>
			<td>:</td>
			<td colspan=2><select 	multiple=multiple name='polaeliminasi[]'>
				<?php
				$q=mysqli_query($conn,"SELECT * from gejala where dp='D0020' or dp='D0036' or dp='D0037' or dp='D0040' or dp='D0041' or dp='D0044' or dp='D0045' or dp='D0050' order by dp");
				while ($h=mysqli_fetch_assoc($q)){
					$id		=	$h['id'];
					$dp		=	$h['dp'];
					$gejala	=	$h['gejala'];

					echo "<option value=$id>$gejala</option>";
				}
				?>
				</select></td>
		</tr>
		<tr>
			<td colspan=3> </td>
			<td colspan=2><input type=submit value=Simpan name=simpan>
		</tr>
	</table>
</form>