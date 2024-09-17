<?php require_once('koneksi.php');
    $dp			=$_POST['dp'];
	$mslh		=ucwords($_POST['mslh']);
	$luaran		=ucfirst($_POST['luaran']);
	//pastikan apakah data dp, mslh tidak kosong
	if ($dp !="" && $mslh !="")	{
        //update data di tabel alat sesuai id
        $query2 = mysqli_query($conn,"UPDATE masalah SET mslh='$mslh', luaran='$luaran' WHERE dp='$dp';");
        echo "Data $dp Berhasil Diedit";
    }else{
        echo "Dp dan Mslh Belum Diisi ";
    }
?>