<?php

$no=$_GET['no'];

include 'getSKTM.php';
// $meninggal=$_GET['meninggal'];
// $lapor=$_GET['lapor'];
$hasil=get_skmd($no);
// echo $no;
// var_dump($hasil['data']);

 $download=$_GET['download'];
    if ($download==1) {
       header("Content-Type: application/vnd.msword");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("content-disposition: attachment;filename=hasilekspor.doc");
    }

?>
<?php
        $bulan = array (
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11'=> 'November',
            '12' => 'Desember'
        );

    // 
    // var_dump($pecahkan); exit();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/demo/demo.css" rel="stylesheet" />
    <style type="text/css">
       .satu {
       font-size: 18px;
       font-family: Times New Roman;
       font-weight: bold; 
       }
       .dua {
       font-size: 20px;
       font-weight: bold; 
       font-family: Arial Black;
       }
       .tiga {
       font-size: 18px;
       font-family: Times New Roman;
       }
    </style>
    <title>SURAT KETERANGAN TIDAK MAMPU</title>
</head>

<body style='background-color:white;'>
    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-1">
                <img style='height:100px;' class="img-responsive" src="../../image/Agam1.png" alt="" srcset="">
            </div>
            <br>
            <div class="col-sm-6" style="text-align:center;" > 
                <h4><a class="dua" "dua">PEMERINTAH KABUPATEN AGAM</a></h4>
                <h4><a class="dua">KECAMATAN IV KOTO</a></h4>
                <h4><a class="dua">NAGARI KOTO GADANG</a></h4>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
        </div>

    </div>

    <div class="row">
        <div class='col-sm-2'></div>
        <div class="col-sm-8">
            <div style='text-align:center;'> <small>Jl. H. Agus Salim Koto Gadang Kode Pos 26161 Telp: (0752) 7444207
                    e-Mail: kotogadangempatkoto@gmail.com </small></div>
            <hr style="border:2px solid black;">
            <hr style='margin-top:-14px; border:1px solid black;'>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        <div class='col-sm-2'></div>
        <div class="col-sm-8">
            <div style='text-align:center;'> <u><a class="satu">SURAT KETERANGAN TIDAK MAMPU</a></u>
                <br>
                <b>Nomor: <?php echo $hasil['data'][0]['no_surat'] ?></b>
            </div>

            <br>

        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        <div class='col-sm-2'></div>
        <div class="col-sm-8">
            <div class="tiga">
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Yang bertanda tangan di bawah ini, Wali Nagari Kotogadang, Kecamatan IV Koto, Kabupaten Agam, dengan
                    ini menerangkan bahwa :
                </p>
            </div>

        </div>
        <div class="col-sm-1"></div>
    </div>

    <div class="row">
        <div class='col-sm-2'></div>
        <div class="col-sm-8">
            <div class='row'>

                <div class='col-sm-4'>
                    <div class="tiga" >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Lengkap <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat / tgl.Lahir <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agama <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat <br>
                    </div>
                </div>
                <div class='col-sm-1'>
                    : <br>
                    : <br>
                    : <br>
                    : <br>
                    : <br>

                </div>
                <div class='col-sm-7'>
                    <div class="tiga">
                    <?php echo $hasil['data'][0]['nama_lengkap'] ?><br>
                    <?php echo $hasil['data'][0]['jenis_kelamin'] ?> <br>
                    <?php $pecah = explode("-", $hasil['data'][0]['tanggal_lahir']) ?>
                    <?php echo $hasil['data'][0]['tempat_lahir'].", ".$pecah[2]." ".$bulan[$pecah[1]]." ".$pecah[0]; ?> <br>
                    <?php echo $hasil['data'][0]['agama'] ?> <br>
                    <?php echo $hasil['data'][0]['alamat'] ?> <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br>
                <p class="tiga">Bahwa nama yang tersebut di atas adalah Anak dari:</p>
       
            <div class='row'>
                <div class='col-sm-4'>
                    <div class="tiga">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Ibu <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat / tgl.Lahir <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agama <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat <br>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Ayah <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat / tgl.Lahir <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agama <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat <br>
                    </div>
                </div>

                <div class='col-sm-1'>
                    : <br>
                    : <br>
                    : <br>
                    : <br>
                    : <br>
                    <br>
                    : <br>
                    : <br>
                    : <br>
                    : <br>
                    : <br>
                </div>
                <div class='col-sm-7'>
                    <div class="tiga">
                    <?php
                        include '../../controller/connect.php';
                        $nik_ibu = $hasil['data'][0]['nik_ibu'];
                        $result = pg_query($conn, "SELECT penduduk.nama_lengkap as nama_lengkap, penduduk.jenis_kelamin as jenis_kelamin, penduduk.tempat_lahir as tempat_lahir, penduduk.tanggal_lahir as tanggal_lahir, penduduk.agama as agama, rumah.alamat FROM penduduk JOIN kk ON penduduk.no_kk=kk.no_kk JOIN rumah ON rumah.id_rumah=kk.id_rumah WHERE nik='$nik_ibu'");
                        $ibu = pg_fetch_assoc($result);
                        // var_dump($ibu); exit();
                    ?>
                    <?php echo $hasil['data'][0]['nama_lengkap_ibu'] ?><br>
                    <!-- <?php echo $ibu['jenis_kelamin'] ?> <br> -->
                    <?php echo 'Perempuan' ?> <br>
                    <?php $pecah = explode("-", $ibu['tanggal_lahir']) ?>
                    <?php echo $ibu['tempat_lahir'].", ".$pecah[2]." ".$bulan[$pecah[1]]." ".$pecah[0]; ?> <br>
                    <?php echo $ibu['agama'] ?> <br>
                    <?php echo $ibu['alamat'] ?><br><br>
                    <?php
                        include '../../controller/connect.php';
                        $nik_ayah = $hasil['data'][0]['nik_ayah'];
                        $result = pg_query($conn, "SELECT penduduk.nama_lengkap as nama_lengkap, penduduk.jenis_kelamin as jenis_kelamin, penduduk.tempat_lahir as tempat_lahir, penduduk.tanggal_lahir as tanggal_lahir, penduduk.agama as agama, rumah.alamat FROM penduduk JOIN kk ON penduduk.no_kk=kk.no_kk JOIN rumah ON rumah.id_rumah=kk.id_rumah WHERE nik='$nik_ayah'");
                        $ayah = pg_fetch_assoc($result);
                        // var_dump($ayah); exit();
                    ?>
                    <?php echo $hasil['data'][0]['nama_lengkap_ayah'] ?><br>
                    <!-- <?php echo $ayah['jenis_kelamin'] ?> <br> -->
                    <?php echo 'Laki-laki'?> <br>
                    <?php $pecah = explode("-", $ayah['tanggal_lahir']) ?>
                    <?php echo $ayah['tempat_lahir'].", ".$pecah[2]." ".$bulan[$pecah[1]]." ".$pecah[0]; ?> <br>
                    <?php echo $ayah['agama'] ?> <br>
                    <?php echo $ayah['alamat'] ?>
                    </div>
                </div> 
            </div>
              
        </div>
        <div class="col-sm-2"></div>
    </div>
    <div class="row">
        <div class='col-sm-2'></div>
            <div class="col-sm-8">
                <div class="tiga">
                    <p> <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Berdasarkan data yang ada pada kami, nama yangg tersebut diatas benar penduduk Jorong <?php echo $hasil['data'][0]['alamat'] ?> adalah benar keluarga miskin/kurang mampu.
                        <br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Demikianlah surat keterangan tidak mampu ini kami berikan dan dipergunakan untuk 
                        <a class="satu"><u><?php echo $hasil['data'][0]['keterangan'] ?></u></a>.
                    </p>
                    <br>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-7"></div>
                <div class="col-sm-5" style='text-align:center;'>
                    <div class="tiga">
                    <?php
                        $pecahkan = explode('-', $hasil['data'][0]['tanggal']);
                    ?>
                    Kotogadang, <?php echo $pecahkan[2]." ".$bulan[$pecahkan[1]]." ".$pecahkan[0]; ?> <br>
                    <!-- Kotogadang, <?php echo date('d F Y', strtotime($hasil['data'][0]['tanggal'])) ?> <br> -->

                    <?php
                        if ($hasil['data'][0]['status']==1) {
                            echo "An.";
                        }
                    ?>
                     Walinagari Koto Gadang <br>
                    <br>
                    <br>
                    </div>
                    <a class="satu"><u> <?php echo $hasil['data'][0]['nama_pegawai'] ?> </u></a> <br>
                    <a class="tiga"><?php echo $hasil['data'][0]['jabatan'] ?> </a><br>


                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <script>
        window.print();
    </script>

</body>

</html>