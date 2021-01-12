<?php
	include '../controller/connect.php';
	$no_surat = $_POST['no_surat'];
	$nik = $_POST['nik'];
	$jeus = $_POST['jenis_usaha'];
	$taus = $_POST['tahun_usaha'];
	$idjor = $_POST['id_jorong'];
	$pegawai = $_POST['pegawai']; 
	session_start();
	$id_admin = $_SESSION['admin_id_admin'];
	
	if ($_POST['status']=='on') {
		$status = "1";
	}
	else {
		$status = "0";
	}

	$tanggal = date('Y-m-d');


	$sql = pg_query("INSERT INTO sku (no_surat, nik, Id_jenis_usaha, tahun_usaha, id_jorong, id_pegawai, status, tanggal, id_admin) VALUES ('$no_surat', '$nik', '$jeus','$taus','$idjor', '$pegawai', '$status','$tanggal','$id_admin')");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../surat/sku/sku.php?no='.$no_surat.'">';
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}
?>