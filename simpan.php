<?php 
    require_once('koneksi.php');
    //menangkap variabel dari pengiriman form untuk tabel identitas
    $no_rekmed = $_POST['no_rekmed'];
    $ruang = $_POST['ruang'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jkl = $_POST['jkl'];
    $agama = $_POST['agama'];
    $suku = $_POST['suku'];
    $pendidikan = $_POST['pendidikan'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $penanggung = $_POST['penanggung'];
    //mengecek apakah data no rek medis yang akan diinputsdh ada atau belum dalam tabel riwayat
    $q=mysqli_query($conn,"SELECT no_rekmed FROM identitas WHERE no_rekmed='$no_rekmed'");
    $jml=mysqli_num_rows($q);
?>
    <?php 
    if($jml == 0){
        $q1 = mysqli_query($conn,"INSERT INTO identitas (no_rekmed, ruang, nama, umur, jkl, agama, suku, pendidikan, pekerjaan, alamat, penanggung) VALUES ('$no_rekmed', '$ruang', '$nama', '$umur', '$jkl', '$agama', '$suku', '$pendidikan', '$pekerjaan', '$alamat', '$penanggung')");

		//menangkap variabel dari pengiriman form untuk tabel riwayat
		$tgl_masuk = date("Y-m-d");
		$diagnosa_masuk = $_POST['diagnosa_masuk'];
		$keluhan = $_POST['keluhan'];
		$alasan = $_POST['alasan'];
		$faktor = $_POST['faktor'];
		$lama = $_POST['lama'];
		$tahap = $_POST['tahap'];
		$upaya = $_POST['upaya'];
		$berobat = $_POST['berobat'];
		$obat = $_POST['obat'];
		$waktu = $_POST['waktu'];
		$penyakit = $_POST['penyakit'];
		$rs = $_POST['rs'];
		$kecelakaan = $_POST['kecelakaan'];
		$jls1 = $_POST['jls1'];
		$alergi = $_POST['alergi'];
		$jls2 = $_POST['jls2'];
		$keturunan = $_POST['keturunan'];
		$ket = $_POST['ket'];
		//menyimpan ke tabel riwayat
		$q1 = mysqli_query($conn,"INSERT INTO riwayat (id, no_rekmed, tgl_masuk, diagnosa_masuk, keluhan, alasan, faktor, lama, tahap, upaya, berobat, obat, waktu, penyakit, rs, kecelakaan, jls1, alergi, jls2, keturunan, ket) VALUES ('', '$no_rekmed', '$diagnosa_masuk', '$keluhan', '$alasan', '$faktor', '$lama', '$tahap', '$upaya', '$berobat', '$obat', '$waktu', '$penyakit', '$rs', '$kecelakaan', '$jls1', '$alergi', '$jls2', '$keturunan', '$ket')");

		//menyimpan ke tabel diagnosa
		if (isset($_POST['makan'])) {
			$makan = $_POST['makan'];
			$jmakan = count($makan);

			for ($i=0; $i<$jmakan; $i++) {
			$q1 = mysqli_query($conn,"INSERT INTO diagnosa VALUES ('','$no_rekmed', 'makan', '$makan[$i]')");
			}
		}
		if (isset($_POST['minum'])) {
			$minum = $_POST['minum'];
			$jminum = count($minum);

			for ($i=0; $i<$jminum; $i++) {
			$q1 = mysqli_query($conn,"INSERT INTO diagnosa VALUES ('','$no_rekmed', 'minum', '$minum[$i]')");
			}
		}
		if (isset($_POST['persepsi'])) {
			$persepsi = $_POST['persepsi'];
			$q1 = mysqli_query($conn,"INSERT INTO diagnosa VALUES ('','$no_rekmed', 'persepsi', '$persepsi')");
			}
		if (isset($_POST['polatdr'])) {
			$polatdr = $_POST['polatdr'];
			$jpolatdr = count($polatdr);

			for ($i=0; $i<$jpolatdr; $i++) {
			$q1 = mysqli_query($conn,"INSERT INTO diagnosa VALUES ('','$no_rekmed', 'polatdr', '$polatdr[$i]')");
			}
		}
		if (isset($_POST['polalat'])) {
			$polalat = $_POST['polalat'];
			$jpolalat = count($polalat);

			for ($i=0; $i<$jpolalat; $i++) {
			$q1 = mysqli_query($conn,"INSERT INTO diagnosa VALUES ('','$no_rekmed', 'polalat', '$polalat[$i]')");
			}
		}
		if (isset($_POST['polaeliminasi'])) {
			$polaeliminasi = $_POST['polaeliminasi'];
			$jpolaeliminasi = count($polaeliminasi);

			for ($i=0; $i<$jpolaeliminasi; $i++) {
			$q1 = mysqli_query($conn,"INSERT INTO diagnosa VALUES ('','$no_rekmed', 'polaeliminasi', '$polaeliminasi[$i]')");
			}
		}
    ?>
        <table>
            <form action=simpan2.php method="post">
                <tr>
                    <td colspan=3 align=center>ANALISI DATA</td>
                </tr>
                <tr>
                    <td>Nomor Rekam Medis</td>
                    <td>:</td>
                    <td><input type='text' name='no_rekmed' value='<?= $no_rekmed ?>' readonly='readonly'></td>
                </tr>
                <tr>
                    <td>Nama Pasien</td>
                    <td>:</td>
                    <td><input type='text' name='nama' value='<?= $nama ?>' readonly='readonly'></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td><input type='text' name='umur' value='<?= $umur ?>' readonly='readonly'></td>
                </tr>
                <tr>
                    <td>Masalah Utama</td>
                    <td>:</td>
                    <?php 
                    $query=mysqli_query($conn, "SELECT * FROM masalah WHERE masalah.dp=(select gejala.dp from gejala,riwayat where gejala.id=riwayat.keluhan and riwayat.no_rekmed='$no_rekmed')");
                    $hasil=mysqli_fetch_assoc($query);
                    ?>
                    <td><input type='text' name='keluhan' value='$hasil[dp]-$hasil[mslh]' readonly='readonly'></td>
                </tr>
                <tr>
                    <td>Masalah Tambahan</td>
                    <td>:</td>
                    <td> <select multiple=multiple name='tambahan[]'>";
                    $query=mysqli_query($conn,"SELECT masalah.dp, mslh FROM masalah WHERE masalah.dp IN(SELECT DISTINCT dp FROM gejala WHERE id IN(SELECT diagnosa.id_gejala FROM diagnosa WHERE diagnosa.id_pasien='$no_rekmed')) ORDER BY masalah.dp");
                    while ($hasil=mysqli_fetch_assoc($query)) {
                        $dp = $hasil['dp'];
                        $mslh = $hasil['mslh'];

                    echo "<option value=$dp>$dp-$mslh</option>";
                }
                echo"</select></td>

                </tr>
                <tr>
                    <td colspan=2> </td>
                    <td ><input type submit value=Simpan name=simpan>
                </tr>
            </form>
        </table>
    <?php 
    } 
    else {
        echo "<script>alert('Data no rek medis sdh ada dalam tbl riwayat'); history.go(-1);</script>";
    }
    ?>