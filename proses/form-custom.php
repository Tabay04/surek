<?php
	include '../controller/connect.php';
	$no_surat = $_POST['no_surat'];
	$nik = explode("__", $_POST['nik']);
	$pegawai = $_POST['pegawai']; 
	$konten = $_POST['Custom'];
	$judul_surat = $_POST['judul_surat'];
	session_start();
	$id_admin = $_SESSION['admin_id_admin'];
	
	if ($_POST['status']=='on') {
		$status = "1";
	}
	else {
		$status = "0";
	}

	$tanggal = date('Y-m-d');


	$sql = pg_query("INSERT INTO scustom (no_surat, judul_surat, nik, konten, id_pegawai, status, tanggal,id_admin) VALUES ('$no_surat', '$judul_surat', '$nik[1]', '$konten', '$pegawai', '$status', '$tanggal','$id_admin')");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../surat/custom/custom.php?no='.$no_surat.'">';
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}
?>