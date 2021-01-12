<?php

	include '../controller/connect.php';
	$pekerjaan = $_POST['nama_pekerjaan'];
	
	$result = pg_query("SELECT MAX(id_pekerjaan) AS id FROM pekerjaan");
	while ($data=pg_fetch_assoc($result)) {
		$id= $data["id"]+1;
	}

	$sql = pg_query("INSERT INTO pekerjaan (id_pekerjaan, nama_pekerjaan) VALUES ('$id', '$pekerjaan')");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../index/pekerjaan.php?sukses='.$pekerjaan.'"/>';
	}
	else {
		echo "<script>alert('gagal!')</script>";
	}

?>