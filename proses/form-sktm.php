<?php
	include '../controller/connect.php';
	$no_surat = $_POST['no_surat'];
	$nik = $_POST['pembuat'];
	$nikibu = $_POST['nik_ibu'];
	$nikayah = $_POST['nik_ayah'];
	$untuk = $_POST['keterangan'];
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

  
    $sql = pg_query("INSERT INTO sktm (no_surat, nik, nik_ibu, nik_ayah, keterangan,  id_pegawai, status, tanggal, id_admin) VALUES ('$no_surat', '$nik', '$nikibu','$nikayah', '$untuk', '$pegawai', '$status','$tanggal','$id_admin')");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../surat/sktm/sktm.php?no='.$no_surat.'">';
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}
 
?>