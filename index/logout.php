<?php  
	
	session_start();
	$_SESSION["admin_id_admin"];
	$_SESSION["admin_username"];

	unset($_SESSION["admin_id_admin"]);
	unset($_SESSION["admin_username"]);

	session_unset();
	session_destroy();

	header("location:login.php");

?>