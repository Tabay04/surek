<?php

	include '../controller/connect.php';

	$id = $_POST['id_usaha'];
	$naus = $_POST['nama_usaha'];

	$sql = pg_query("UPDATE jenis_usaha SET nama_jenis_usaha='$naus' WHERE id_jenis_usaha='$id'");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../index/usaha.php?edit='.$naus.'"/>';
		//echo $sql;
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}
	

?>