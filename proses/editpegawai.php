<?php

	include '../controller/connect.php';

	$idpeg = $_POST['id_pgw'];
	$namapeg = $_POST['nama_pgw'];
	$jab = $_POST['jabatan'];
	
	$sql = pg_query("UPDATE pegawai SET id_pegawai='$idpeg', nama_pegawai='$namapeg', jabatan='$jab' WHERE id_pegawai='$idpeg'");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../index/pegawai.php?edit='.$namapeg.'"/>';
	}
	else {
		echo "<script>alert('gagal!')</script>";
	}
	

?>