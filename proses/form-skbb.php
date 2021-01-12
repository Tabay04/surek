<?php
	include '../controller/connect.php';
	$nik = $_POST['nik'];
	$no_surat = $_POST['no_surat'];
	$pegawai = $_POST['pegawai']; 
	$kelakuan = $_POST['kelakuan'];
	$untuk = $_POST['untuk'];
	session_start();
	$id_admin = $_SESSION['admin_id_admin'];
	
	if ($_POST['status']=='on') {
		$status = "1";
	}
	else {
		$status = "0";
	}

	$tanggal = date('Y-m-d');


	$sql = pg_query("INSERT INTO skbb (no_surat, nik, keterangan, untuk, tanggal, status, id_pegawai, id_admin) VALUES ('$no_surat', '$nik', 1, '$untuk', '$tanggal', '$status', '$pegawai', '$id_admin')");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../surat/skbb/skbb.php?no='.$no_surat.'">';
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}
?>