<?php

include '../controller/connect.php';

if( isset($_GET['id']) ){
	$id = $_GET['id'];
	$query = pg_query("SELECT * FROM pekerjaan WHERE id_pekerjaan='$id'");
	while($pekerjaan = pg_fetch_array($query)){
	$nama=$pekerjaan['nama_pekerjaan'];
	}

    $sql = "DELETE FROM pekerjaan WHERE id_pekerjaan='$id'";
    $query = pg_query($sql);

    if( $query ){
        echo '<meta http-equiv="refresh" content="0.1;url=../index/pekerjaan.php?hapus='.$nama.'"/>';
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>