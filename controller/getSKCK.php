<?php

function get_skck($nik)
{
    $niks=$nik;
    include 'connect.php';

    $result = pg_query($conn, "SELECT P.nik, P.no_kk, P.nama_lengkap, P.jenis_kelamin, P.tempat_lahir, P.tanggal_lahir, P.nama_lengkap_ibu, P.nama_lengkap_ayah, P.status_kawin, P.gol_darah, P.pendidikan_akhir, P.jenis_pekerjaan, P.status_hubkel, P.tanggal_entri, P.tanggal_ubah, P.agama, R.alamat
    FROM public.penduduk AS P
    LEFT JOIN kk as K ON P.no_kk=K.no_kk
    LEFT JOIN rumah as R ON R.id_rumah=K.id_rumah
    WHERE P.nik = '$niks';
    ");

    $result = pg_query($conn, "SELECT nik, no_kk, nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, nama_lengkap_ibu, nama_lengkap_ayah, status_kawin, gol_darah, pendidikan_akhir, jenis_pekerjaan, status_hubkel, tanggal_entri, tanggal_ubah, agama
    FROM public.penduduk WHERE nik='$nik';");

    
    
    $hasil = array(
        'status'=> 'Login Sukses',
        'error' => 'false',
        'data'=>array()
        );
    
    while ($row=pg_fetch_assoc($result)) {
        if ($row['jenis_kelamin']==1) {
            $kelamin="Laki - laki";
        }
        else {
            $kelamin="Perempuan";    
        }
        $data = array(
    'nik'=>$row['nik'],
    'no_kk'=>$row['no_kk'],
    'nama_lengkap'=>$row['nama_lengkap'],
    'jenis_kelamin'=>$kelamin,
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
    'agama'=>$row['agama'],
    'alamat'=>$row['alamat']
    );
    }
    
    array_push($hasil['data'], $data);
    // var_dump($hasil);
    return $hasil;
}
