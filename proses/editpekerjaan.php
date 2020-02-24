<?php

	include '../controller/connect.php';

	$id = $_POST['id_pkj'];
	$napek = $_POST['nama_pkj'];

	$sql = pg_query("UPDATE pekerjaan SET nama_pekerjaan='$napek' WHERE id_pekerjaan='$id'");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../index/pekerjaan.php?edit='.$napek.'"/>';
		//echo $sql;
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}
	

?>