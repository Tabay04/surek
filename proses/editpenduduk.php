<?php

	include '../controller/connect.php';

	$nik = $_POST['nik'];
	$nik2 = $_POST['nik2'];
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
	
	$sql = pg_query("UPDATE penduduk SET nik='$nik', no_kk='$nokk', nama_lengkap='$nale', jenis_kelamin='$jk', agama='$agama', gol_darah='$goldar', tempat_lahir='$tela', tanggal_lahir='$tala', nama_lengkap_ibu='$namaibu', nama_lengkap_ayah='$namaayah', status_kawin='$status', pendidikan_akhir='$pendidikan', jenis_pekerjaan='$jepe', status_hubkel='$hubkel', tanggal_entri='$tanggalentri', tanggal_ubah='$tanggalubah' WHERE nik='$nik2'");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../index/edithapusdata.php?edit='.$nale.'"/>';
		//echo $sql;
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}
	

?>