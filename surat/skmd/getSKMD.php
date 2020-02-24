<?php

function get_skmd($no)
{
    include '../../controller/connect.php';
    $result = pg_query($conn, "SELECT status, nik_pelapor, nama_pegawai, jabatan, kota, tanggal, hubungan, tanggal_meninggal, dikuburkan, pukul,alamat, penduduk.nik as nik, penduduk.no_kk as no_kk, nama_lengkap,jenis_kelamin,tempat_lahir,tanggal_lahir,nama_lengkap_ibu,nama_lengkap_ayah,status_kawin,gol_darah, pendidikan_akhir,jenis_pekerjaan, status_hubkel,tanggal_entri,tanggal_ubah,agama FROM skmd LEFT JOIN penduduk ON skmd.nik=penduduk.nik LEFT JOIN kk ON penduduk.no_kk=kk.no_kk LEFT JOIN rumah ON kk.id_rumah=rumah.id_rumah LEFT JOIN pegawai ON pegawai.id_pegawai=skmd.id_pegawai WHERE no_surat='$no';
    ");
    
    
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
    'dikuburkan'=>$row['dikuburkan'],
    'tanggal_meninggal'=>$row['tanggal_meninggal'],
    'kota'=>$row['kota'],
    'pukul'=>$row['pukul'],
    'tanggal'=>$row['tanggal'],
    'hubungan'=>$row['hubungan'],
    'status'=>$row['status'],
    'nik_pelapor'=>$row['nik_pelapor'],
    'nama_pegawai'=>$row['nama_pegawai'],
    'jabatan'=>$row['jabatan'],
    'alamat'=>$row['alamat']
    );
    }
    
    array_push($hasil['data'], $data);
    // var_dump($hasil);
    return $hasil;
}
