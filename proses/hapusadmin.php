<?php

include '../controller/connect.php';

if( isset($_GET['id']) ){
    $id= $_GET['id'];
    $query = pg_query("SELECT * FROM admin WHERE id_admin='$id'");
	while($admin = pg_fetch_array($query)){
	$nama=$admin['username'];
	}

    $sql = "DELETE FROM admin WHERE id_admin='$id'";
    $query = pg_query($sql);

    if( $query ){
        // header('Location: ../index/kelolaadmin.php');
        echo '<meta http-equiv="refresh" content="0.1;url=../index/kelolaadmin.php?hapus='.$nama.'"/>';
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>