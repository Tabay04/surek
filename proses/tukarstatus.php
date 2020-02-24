<?php

require( "../controller/connect.php");
$sql=pg_query($conn, "UPDATE admin SET status='".$_POST['val']."' WHERE id_admin='".$_POST['id_admin']."' ");

if($sql)
	{
		$q=pg_query($conn, "SELECT * FROM admin WHERE id_admin='".$_POST['id_admin']."' ");
		$data=pg_fetch_assoc($sql);
		echo $data['status'];
	}


?>