<?php

$nama_lengkap=$_GET['nama_lengkap'];
$jk=$_GET['jk'];
if($jk='Pria')
{
    $jk=1;
}
else
{
    $jk=0;
}

$agama=$_GET['agama'];
$tempat_lahir=$_GET['tempat_lahir'];
$nama_ibu=$_GET['nama_ibu'];
$nama_ayah=$_GET['nama_ayah'];
$staka=$_GET['staka'];
$pt=$_GET['pt'];
$jp=$_GET['jp'];
$shk=$_GET['shk'];
$golda=$_GET['golda'];
$nik=$_GET['nik'];
$no_kk=$_GET['no_kk'];
$tgl_lahir=$_GET['tgl_lahir'];
$tgl_sekarang=date('m/d/Y');
// echo $tgl_sekarang;


// Cek apakah data sudah ada
include 'connect.php';
$result = pg_query($conn, "SELECT nik, no_kk, nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, nama_lengkap_ibu, nama_lengkap_ayah, status_kawin, gol_darah, pendidikan_akhir, jenis_pekerjaan, status_hubkel, tanggal_entri, tanggal_ubah, agama
FROM public.penduduk WHERE nik='$nik';");

$jumlah=pg_num_rows($result);

if($jumlah==1)
{
    $result = pg_query($conn, "UPDATE public.penduduk
	SET nik='$nik', no_kk='$no_kk', nama_lengkap='$nama_lengkap', jenis_kelamin=$jk, tempat_lahir='$tempat_lahir',
    tanggal_lahir='$tgl_lahir', nama_lengkap_ibu='$nama_ibu', nama_lengkap_ayah='$nama_ayah', status_kawin='$staka', 
    gol_darah='$golda', pendidikan_akhir='$pt', jenis_pekerjaan='$jp', status_hubkel='$shk',tanggal_ubah='$tgl_sekarang', agama='$agama'
	WHERE nik='$nik';");
}
else
{
    $resulr=pg_query($conn," INSERT INTO public.penduduk(
        nik, no_kk, nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, nama_lengkap_ibu, nama_lengkap_ayah, status_kawin, gol_darah, pendidikan_akhir, jenis_pekerjaan, status_hubkel, tanggal_entri, tanggal_ubah, agama)
        VALUES ('$nik', '$no_kk', '$nama_lengkap',$jk ,'$tempat_lahir', '$tgl_lahir', '$nama_ibu', '$nama_ayah', '$staka', '$golda', '$pt', '$jp', '$shk', '$tgl_sekarang', '$tgl_sekarang', '$agama');
");

   }

echo '<script>
        alert("proses data selesai")
    </script>
    <meta http-equiv="REFRESH" content="1;url=../index/penduduk.php">
    ';



?>