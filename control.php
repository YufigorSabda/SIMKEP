<?php
$p=$_GET['p'];
if (empty($p)) $p=0;
if ($p==0) require "selamat.php";
if ($p==1) require "daftar.php";
if ($p==2) require "simpan.php";
if ($p==3) require "simpan2.php";
if ($p==4) require "input_masalah.php";
	if ($p==41) require "simpan_masalah.php";
if ($p==5) require "input_gejala.php";
	if ($p==51) require "simpan_gejala.php";
if ($p==6) require "tampil_filter.php";
	if ($p==61) require "edit_masalah.php";
	if ($p==62) require "simpan_edit_masalah.php";
	if ($p==63) require "edit_gejala.php";
	if ($p==64) require "simpan_edit_gejala.php";
if ($p==7) require "tampil_user.php";
	if ($p==71) require "edit_user.php";
	if ($p==72) require "simpan_edit_user.php";
	if ($p==73) require "proses_user.php";
?>