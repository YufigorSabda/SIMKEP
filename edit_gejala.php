<?php require_once('koneksi.php');
$id=$_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM `gejala` WHERE id='$id'");
$jmlrek = mysqli_num_rows($query);
if ($jmlrek!='0') {
    $hasil=mysqli_fetch_array($query);
        $id      = $hasil['id'];
        $dp      = $hasil['dp'];
        $gejala  = $hasil['gejala'];
        echo "<FORM ACTION='?p=64' METHOD='POST' >
            <table width=60% border=1>
                <tr><td colspan=3 align=center><b>Edit Data Gejala Masalah Keperawatan</b></td>
                </tr>
                <tr><td width=20%>Id</td>
                    <td width=2%>:</td>
                    <td width=38%><input name=id type=text readonly=readonly value='$id' ></td>
                </tr>
                <tr><td >Kode DP</td>
                    <td >:</td>
                    <td ><input type=text name=dp size=5 maxlength=5 readonly=readonly value='$dp' ></td>
                </tr>
                <tr><td >Gejala Keperawatan</td>
                    <td >:</td>
                    <td ><input type=text name=gejala size=80 maxlength=80 value='$gejala'></td>
                </tr>
                <tr><td colspan=2></td>
                    <td width=35%><input type=submit name=Input value=Simpan></td>
                </tr>
            </table>
        </FORM>";
}else echo "Data $id Tidak ada"; ?>