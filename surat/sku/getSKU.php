<?php

function get_sku($no)
{
    include '../../controller/connect.php';
    $result = pg_query($conn, "SELECT status,nama_jenis_usaha, tanggal, nama_pegawai, jabatan, nama_jorong, tahun_usaha, alamat, penduduk.nik as nik, penduduk.no_kk as no_kk,nama_lengkap,jenis_kelamin,tempat_lahir,tanggal_lahir,nama_lengkap_ibu,nama_lengkap_ayah,status_kawin,gol_darah, pendidikan_akhir,jenis_pekerjaan,  status_hubkel,tanggal_entri,tanggal_ubah,agama FROM sku LEFT JOIN penduduk ON sku.nik=penduduk.nik LEFT JOIN kk ON penduduk.no_kk=kk.no_kk LEFT JOIN rumah ON kk.id_rumah=rumah.id_rumah LEFT JOIN jenis_usaha ON jenis_usaha.id_jenis_usaha=sku.id_jenis_usaha LEFT JOIN jorong ON jorong.id_jorong=sku.id_jorong LEFT JOIN pegawai ON pegawai.id_pegawai=sku.id_pegawai WHERE no_surat='$no';");
    
    
    $hasil = array(
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
    'alamat'=>$row['alamat'],
    'nama_jenis_usaha'=>$row['nama_jenis_usaha'],
    'nama_jorong'=>$row['nama_jorong'],
    'nama_pegawai'=>$row['nama_pegawai'],
    'status'=>$row['status'],
    'jabatan'=>$row['jabatan'],
    'tanggal'=>$row['tanggal'],
    'tahun_usaha'=>$row['tahun_usaha']

    );
    }
    
    array_push($hasil['data'], $data);
    // var_dump($hasil);
    return $hasil;
}
