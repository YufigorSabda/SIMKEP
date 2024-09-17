<?php require_once('koneksi.php');
	$dp			=$_POST['dp'];
	$gejala		=ucfirst($_POST['gejala']);

	//pastikan apakah data dp,gejala tidak kosong
	if ($dp !="" && $gejala!="")	{
		//tambah data baru sesuai dp y dipilih
		$query2 = mysqli_query($conn,"INSERT INTO gejala (dp, gejala) 
				VALUES ('$dp', '$gejala')");
		echo "Data $dp, $gejala Berhasil Diinput";
	}else 	echo "Data dp dan atau mslh Belum Diisi Lengkap";

?>