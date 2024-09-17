<?php require_once('koneksi.php');
$dp=$_GET['dp'];
$query = mysqli_query($conn,"SELECT * FROM masalah WHERE dp='$dp'");
$jmlrek = mysqli_num_rows($query);
if ($jmlrek!='0') {
    $hasil=mysqli_fetch_array($query);
        $dp     = $hasil['dp'];
        $mslh   = $hasil['mslh'];
        $luaran = $hasil['luaran'];
        echo "<FORM ACTION='?p=62' METHOD='POST' >
            <table width=60% border=1>
                <tr><td colspan=3 align=center><b>Edit Data DP dan Masalah Keperawatan</b></td>
                </tr>
                <tr><td >Kode DP</td>
                    <td >:</td>
                    <td ><input type=text name=dp size=5 maxlength=5 value='$dp' readonly=readonly></td>
                </tr>
                <tr><td >Masalah Keperawatan</td>
                    <td >:</td>
                    <td ><input type=text name=mslh size=80 maxlength=80 value='$mslh'></td>
                </tr>
                <tr><td >Luaran</td>
                    <td >:</td>
                    <td ><input type=text name=luaran size=80 maxlength=80 value='$luaran'></td>
                </tr>
                <tr><td colspan=2></td>
                    <td width=35%><input type=submit name=Input value=Simpan></td>
                </tr>
            </table>
        </FORM>";
}else echo "Data $id Tidak ada"; ?>