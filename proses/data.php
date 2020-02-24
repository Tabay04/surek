<?php
include("../controller/connect.php");

$nik = $_GET["nik"];
$querysearch = "SELECT * FROM penduduk WHERE no_kk=(SELECT no_kk FROM penduduk WHERE nik='$nik') AND nik!='$nik'";
			   
$hasil=pg_query($querysearch);
while($row = pg_fetch_array($hasil)){
	$nik = $row['nik'];
	$nama_lengkap = $row['nama_lengkap'];
    $dataarray[]=array('nik'=>$nik,'nama_lengkap'=>$nama_lengkap);
}
echo json_encode ($dataarray);
// echo $dataarray
?>