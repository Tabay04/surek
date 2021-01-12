<?php

	include '../controller/connect.php';
	$idpegawai = $_POST['id_pegawai'];
	$namapegawai = $_POST['nama_pegawai'];
	$jabatan = $_POST['jabatan'];
	
	$sql = pg_query("INSERT INTO pegawai (id_pegawai, nama_pegawai, jabatan) VALUES ('$idpegawai', '$namapegawai', '$jabatan')");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../index/pegawai.php?sukses='.$namapegawai.'"/>';
	}
	else {
		echo "<script>alert('gagal!')</script>";
	}

?>