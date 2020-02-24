<?php

include '../controller/connect.php';

if( isset($_GET['nik']) ){
    $nik = $_GET['nik'];
    $query = pg_query("SELECT * FROM penduduk WHERE nik='$nik'");
	while($penduduk = pg_fetch_array($query)){
	$nama=$penduduk['nama_lengkap'];
	}

    $sql = pg_query("DELETE FROM penduduk WHERE nik='$nik'");

    if( $sql ){
        // header('Location: ../index/edithapusdata.php');
        echo '<meta http-equiv="refresh" content="0.1;url=../index/edithapusdata.php?hapus='.$nama.'"/>';
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>