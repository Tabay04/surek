<?php
	include '../controller/connect.php';
	$no_surat = $_POST['no_surat'];
	$nik = $_POST['nik'];
	$pelapor = $_POST['nik_pelapor'];
	$pegawai = $_POST['pegawai']; 
	$hubungan = $_POST['hubungan'];
	$tanggal_meninggal = $_POST['tanggal_meninggal'];
	$pukul = $_POST['pukul']; 
	$dikuburkan = $_POST['dikuburkan'];
	$kota = $_POST['kota'];
	session_start();
	$id_admin = $_SESSION['admin_id_admin'];
	
	if ($_POST['status']=='on') {
		$status = "1";
	}
	else {
		$status = "0";
	}

	$tanggal = date('Y-m-d');


	$sql = pg_query("INSERT INTO skmd (no_surat, nik, nik_pelapor, id_pegawai, hubungan, status, tanggal,tanggal_meninggal,pukul,dikuburkan,kota, id_admin) VALUES ('$no_surat', '$nik', '$pelapor', '$pegawai', '$hubungan', '$status', '$tanggal', '$tanggal_meninggal','$pukul','$dikuburkan','$kota', '$id_admin')");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../surat/skmd/skmd.php?no='.$no_surat.'">';
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}
?>