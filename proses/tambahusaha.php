<?php

	include '../controller/connect.php';
	$jenis_usaha = $_POST['nama_jenis_usaha'];
	
	$result = pg_query("SELECT MAX(id_jenis_usaha) AS id FROM jenis_usaha");
	while ($data=pg_fetch_assoc($result)) {
		$id= $data["id"]+1;
	}

	$sql = pg_query("INSERT INTO jenis_usaha (id_jenis_usaha, nama_jenis_usaha) VALUES ('$id', '$jenis_usaha')");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../index/usaha.php?sukses='.$jenis_usaha.'"/>';
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}

?>