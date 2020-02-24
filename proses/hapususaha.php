<?php

include '../controller/connect.php';

if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $query = pg_query("SELECT * FROM jenis_usaha WHERE id_jenis_usaha='$id'");
	while($usaha = pg_fetch_array($query)){
	$nama=$usaha['nama_jenis_usaha'];
	}

    $sql = "DELETE FROM jenis_usaha WHERE id_jenis_usaha='$id'";
    $query = pg_query($sql);

    if( $query ){
        // header('Location: ../index/usaha.php');
        echo '<meta http-equiv="refresh" content="0.1;url=../index/usaha.php?hapus='.$nama.'"/>';
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>