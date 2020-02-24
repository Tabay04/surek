<?php


include '../../controller/getSKCK.php';
$no=$_GET['no'];
$hasil=get_skck($no);

//var_dump($hasil['data']);

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
    <title>REKOMENDASI SURAT KETERANGAN BERKELAKUAN BAIK</title>
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
            <div style='text-align:center;'> <u><a class="satu">REKOMENDASI SURAT KETERANGAN BERKELAKUAN BAIK</a></u>
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
                    <div class="tiga">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Lengkap <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIK <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat / tgl.Lahir <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bangsa/Agama <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat <br>
                    </div>
                </div>
                <div class='col-sm-1'>
                    : <br>
                    : <br>
                    : <br>
                    : <br>
                    : <br>
                    : <br>

                </div>
                <div class='col-sm-7'>
                    <div class="tiga">
                    <?php echo $hasil['data'][0]['nama_lengkap'] ?><br>
                    <?php echo $hasil['data'][0]['nik'] ?> <br>

                    <?php $pecah = explode("-", $hasil['data'][0]['tanggal_lahir']) ?>
                    <?php echo $hasil['data'][0]['tempat_lahir'].", ".$pecah[2]." ".$bulan[$pecah[1]]." ".$pecah[0]; ?> <br>
                    <?php echo $hasil['data'][0]['jenis_kelamin'] ?> <br>
                    <?php echo "Indonesia / ".$hasil['data'][0]['agama'] ?> <br>
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
            <br> <br>
          
                <p class="tiga"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama yang tersebut di atas sepengetahuan kami selama berada di Nagari Kotogadang, Kec. IV
                    Koto, Kab. Agam 
                    <?php
                        if ($hasil['data'][0]['untuk']==0) {
                            echo "berkelakuan baik dan tidak pernah terikat dengan minuman keras (narkoba) dan tidak
                    pernah dihukum karena tindak pidana.";
                        }
                        else {
                            echo "berkelakuan bangsat dan tidak bagus.";
                        }
                    ?>

                    Rekomendasi ini diberikan untuk 
                    <a class="satu"><u><?php echo $hasil['data'][0]['untuk'] ?></u></a>.
                </p>
            


            <p class="tiga">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikianlah surat keterangan ini diberikan untuk dapat dipergunakan sebagaimana mestinya. </p>
        </div>
        <div class="col-sm-2"></div>
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
                    <a class="satu"><u> <?php echo $hasil['data'][0]['pegawai'] ?> </u></a> <br>
                    <a class="tiga"><?php echo $hasil['data'][0]['jabatan'] ?> </a><br>


                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</body>

</html>