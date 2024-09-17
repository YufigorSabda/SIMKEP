<?php require_once('koneksi.php');
    $id			=$_POST['id'];
	$dp		    =$_POST['dp'];
	$gejala		=ucfirst($_POST['gejala']);

	//pastikan apakah data dp, mslh tidak kosong
	if ($dp !="" && $gejala !="")	{
        //update data di tabel alat sesuai id
        $query2 = mysqli_query($conn,"UPDATE gejala SET dp='$dp', gejala='$gejala' WHERE id='$id';");
        echo "Data $dp Berhasil Diedit";
    }else{
        echo "Dp dan Gejala Belum Diisi ";
    }
?>