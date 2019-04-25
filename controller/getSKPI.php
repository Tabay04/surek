<?php

function get_skpi($nik)
{
    include 'connect.php';
    $result = pg_query($conn, "SELECT nik, no_kk, nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, nama_lengkap_ibu, nama_lengkap_ayah, status_kawin, gol_darah, pendidikan_akhir, jenis_pekerjaan, status_hubkel, tanggal_entri, tanggal_ubah, agama
    FROM public.penduduk WHERE nik='$nik';");

    
    $hasil = array(
        'status'=> 'Login Sukses',
        'error' => 'false',
        'data'=>array()
        );
    
    while ($row=pg_fetch_assoc($result)) {
        $data = array(
    'nik'=>$row['nik'],
    'no_kk'=>$row['no_kk'],
    'nama_lengkap'=>$row['nama_lengkap'],
    'jenis_kelamin'=>$row['jenis_kelamin'],
    'tempat_lahir'=>$row['tempat_lahir'],
    'tanggal_lahir'=>$row['tanggal_lahir'],
    'nama_lengkap_ibu'=>$row['nama_lengkap_ibu'],
    'nama_lengkap_ayah'=>$row['nama_lengkap_ayah'],
    'status_kawin'=>$row['status_kawin'],
    'gol_darah'=>$row['gol_darah'],
    'pendidikan_akhir'=>$row['pendidikan_akhir'],
    'jenis_pekerjaan'=>$row['jenis_pekerjaan'],
    'status_hubkel'=>$row['status_hubkel'],
    'tanggal_entri'=>$row['tanggal_entri'],
    'tanggal_ubah'=>$row['tanggal_ubah'],
    'agama'=>$row['agama']
    );
    }
    
    array_push($hasil['data'], $data);
    // var_dump($hasil);
    return $hasil;
}

function getKeluarga($no_kk)
{
    include 'connect.php';
    $result = pg_query($conn, "SELECT nik, no_kk, nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, nama_lengkap_ibu, nama_lengkap_ayah, status_kawin, gol_darah, pendidikan_akhir, jenis_pekerjaan, status_hubkel, tanggal_entri, tanggal_ubah, agama
    FROM public.penduduk WHERE no_kk='$no_kk';");

    $hasil = array(
    'status'=> 'Login Sukses',
    'error' => 'false',
    'data'=>array()
    );

    while ($row=pg_fetch_assoc($result)) {
        $data = array(
'nik'=>$row['nik'],
'no_kk'=>$row['no_kk'],
'nama_lengkap'=>$row['nama_lengkap'],
'jenis_kelamin'=>$row['jenis_kelamin'],
'tempat_lahir'=>$row['tempat_lahir'],
'tanggal_lahir'=>$row['tanggal_lahir'],
'nama_lengkap_ibu'=>$row['nama_lengkap_ibu'],
'nama_lengkap_ayah'=>$row['nama_lengkap_ayah'],
'status_kawin'=>$row['status_kawin'],
'gol_darah'=>$row['gol_darah'],
'pendidikan_akhir'=>$row['pendidikan_akhir'],
'jenis_pekerjaan'=>$row['jenis_pekerjaan'],
'status_hubkel'=>$row['status_hubkel'],
'tanggal_entri'=>$row['tanggal_entri'],
'tanggal_ubah'=>$row['tanggal_ubah'],
'agama'=>$row['agama']
);
array_push($hasil['data'], $data);
    }

    
    // var_dump($hasil);
    return $hasil;
}