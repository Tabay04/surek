<?php

	include '../controller/connect.php';
	$nokk = $_POST['no_kk'];
	$idrumah = $_POST['id_rumah'];
	
	$sql = pg_query("INSERT INTO kk (no_kk, id_rumah) VALUES ('$nokk', '$idrumah')");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../index/nomorKK.php?sukses='.$nokk.'"/>';
	}
	else {
		echo '<meta http-equiv="refresh" content="0.1;url=../index/nomorKK.php?gagal='.$nokk.'"/>';
	}

?>