<?php

	include '../controller/connect.php';

	$id = $_POST['id_adm'];
	$user = $_POST['useradmin'];
	$pass = md5($_POST['pw']);

	$sql = pg_query("UPDATE admin SET username='$user', password='$pass' WHERE id_admin='$id'");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../index/profiladmin.php"/>';
		//echo $sql;
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}
	

?>
