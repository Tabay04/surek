<?php

include "connect.php";

$status = $_GET['status'];
$id = $_GET['id'];

$sql="UPDATE admin 
	  SET status_admin = ".$status." WHERE id_admin ='".$id."'";

$result=pg_query($sql);

echo "Success";



?>