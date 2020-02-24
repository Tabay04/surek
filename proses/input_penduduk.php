<?php

	include '../controller/connect.php';
	$nik = $_POST['nik'];
	$nokk = $_POST['no_kk'];
	$nale = $_POST['nama_lengkap'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$goldar = $_POST['gol_darah'];
	$tela = $_POST['tempat_lahir'];
	$tala = date("Y-m-d");
	$namaibu = $_POST['nama_lengkap_ibu'];
	$namaayah = $_POST['nama_lengkap_ayah'];
	$status = $_POST['status_kawin'];
	$pendidikan = $_POST['pendidikan_akhir'];
	$jepe = $_POST['jenis_pekerjaan'];
	$hubkel = $_POST['status_hubkel'];
	$tanggalentri = date("Y-m-d");
	$tanggalubah = date("Y-m-d");
	
	$sql = pg_query("INSERT INTO penduduk (nik, no_kk, nama_lengkap, jenis_kelamin, agama, gol_darah, tempat_lahir, tanggal_lahir, nama_lengkap_ibu, nama_lengkap_ayah, status_kawin, pendidikan_akhir, jenis_pekerjaan, status_hubkel, tanggal_entri, tanggal_ubah) VALUES ('$nik', '$nokk', '$nale', '$jk', '$agama', '$goldar', '$tela', '$tala', '$namaibu', '$namaayah', '$status', '$pendidikan', '$jepe', '$hubkel', '$tanggalentri', '$tanggalubah')");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../index/penduduk.php?sukses='.$nale.'"/>';
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}

?>