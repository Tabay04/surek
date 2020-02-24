<?php

include '../controller/connect.php';

if( isset($_GET['id']) ){
    $id= $_GET['id'];
    $query = pg_query("SELECT * FROM pegawai WHERE id_pegawai='$id'");
	while($pegawai = pg_fetch_array($query)){
	$nama=$pegawai['nama_pegawai'];
	} 

    $sql = "DELETE FROM pegawai WHERE id_pegawai='$id'";
    $query = pg_query($sql);

    if( $query ){
        // header('Location: ../index/pegawai.php');
        echo '<meta http-equiv="refresh" content="0.1;url=../index/pegawai.php?hapus='.$nama.'"/>';
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>