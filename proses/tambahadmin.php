<?php

	include '../controller/connect.php';
	$user = $_POST['username'];
	$pw = md5($_POST['password']);
	
	$result = pg_query("SELECT MAX(id_admin) AS id FROM admin");
	while ($data=pg_fetch_assoc($result)) {
		$id= $data["id"]+1;
	}

	$sql = pg_query("INSERT INTO admin (id_admin, username, password, statusakun) VALUES ('$id', '$user', '$pw', 2)");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../index/kelolaadmin.php?sukses='.$user.'"/>';
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}

?>

