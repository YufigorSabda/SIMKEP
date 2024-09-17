<?php require_once('koneksi.php');
	$dp			=$_POST['dp'];
	$mslh		=ucwords($_POST['mslh']);
	$luaran		=ucfirst($_POST['luaran']);
	//pastikan apakah data dp,mslh tidak kosong
	if ($dp !="" && $mslh!="")	{
		//cari di tabel alat apakah ada data dp yang ditambah baru
		$query =mysqli_query($conn,"SELECT * FROM masalah WHERE dp = '$dp' ");
		$jmlrek = mysqli_num_rows($query);
		if ($jmlrek=='0') {
			$query2 = mysqli_query($conn,"INSERT INTO masalah (dp,mslh,luaran) VALUES ('$dp', '$mslh', '$luaran')");
			echo "Data $dp Berhasil Diinput";
		} else
			echo "Data $dp$dp Sudah ada";
	} else
		echo "Data dp dan atau mslh Belum Diisi Lengkap";
?>