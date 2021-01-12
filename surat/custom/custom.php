<?php


include '../../controller/getCustom.php';
$no=$_GET['no'];
$hasil=get_custom($no);

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
    <title><?php echo $hasil['data'][0]['judul_surat'] ?></title>
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
            <div style='text-align:center;'> <u><a class="satu"><?php echo $hasil['data'][0]['judul_surat'] ?></a></u>
                <br>
                <b>Nomor: <?php echo $hasil['data'][0]['no_surat'] ?></b>
            </div>

        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        <div class='col-sm-1'></div>
        <div class="col-sm-10">
            <div class="tiga">
                <p>
                    <?php  
                        $teks1 = str_replace(' ', '&nbsp;', $hasil['data'][0]['konten']);
                        $teks2 = str_replace('
', '<br>', $teks1);
                        echo  $teks2;
                    ?>
                </p>
            </div>

        </div>
        <div class="col-sm-1"></div>
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


    <script>
        window.print();
    </script>


</body>

</html>