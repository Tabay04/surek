<?php

function get_custom($no)
{
    $noz=$no;
    include 'connect.php';
    $result = pg_query($conn, "SELECT S.no_surat, S.tanggal, S.status, S.judul_surat, S.konten, PG.nama_pegawai, PG.jabatan, P.nik, P.no_kk, P.nama_lengkap, P.jenis_kelamin, P.tempat_lahir, P.tanggal_lahir, P.nama_lengkap_ibu, P.nama_lengkap_ayah, P.status_kawin, P.gol_darah, P.pendidikan_akhir, P.jenis_pekerjaan, P.status_hubkel, P.tanggal_entri, P.tanggal_ubah, P.agama, R.alamat
    FROM public.scustom AS S
    LEFT JOIN penduduk as P ON S.nik=P.nik
    LEFT JOIN pegawai as PG ON S.id_pegawai=PG.id_pegawai
    LEFT JOIN kk as K ON P.no_kk=K.no_kk
    LEFT JOIN rumah as R ON R.id_rumah=K.id_rumah
    WHERE S.no_surat = '$noz';
    ");
    
    
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
    'no_surat'=>$row['no_surat'],
    'untuk'=>$row['untuk'],
    'keterangan'=>$row['keterangan'],
    'tanggal'=>$row['tanggal'], 
    'status'=>$row['status'],     
    'pegawai'=>$row['nama_pegawai'],
    'jabatan'=>$row['jabatan'],   
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
    'alamat'=>$row['alamat'],
    'judul_surat'=>$row['judul_surat'],
    'konten'=>$row['konten']
    );
    }
    
    array_push($hasil['data'], $data);
    // var_dump($hasil);
    return $hasil;
}
