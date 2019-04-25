<?php
include '../../controller/getSKPI.php';
$nik=$_GET['nik'];
$hasil=get_skpi($nik);
// var_dump($hasil);
$no_kk=$hasil['data'][0]['no_kk'];

$keluarga=getKeluarga($no_kk);
// var_dump($keluarga);

$jumlah=count($keluarga['data']);


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
    <title>SURAT KETERANGAN PINDAH</title>
</head>

<body style='background-color:white;'>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-2">
                <img style='height:100px;' class="img-responsive" src="../../image/agam.png" alt="" srcset="">
            </div>
            <div class="col-sm-4" style="text-align:center;">
                <h4><b>PEMERINTAH KABUPATEN AGAM</b></h4>
                <h4><b>KECAMATAN IV KOTO</b></h4>
                <h4><b>NAGARI KOTO GADANG</b></h4>
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
            <div style='text-align:center;'> <u><b>SURAT KETERANGAN PINDAH</b></u>
                <br>
                <b>Nomor: XX/XX/XX</b>
            </div>

        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        <div class='col-sm-2'></div>
        <div class="col-sm-8">
            <div>
                <p>
                    Yang bertanda tangan di bawah ini,
                    menerangkan bahwa :
                </p>
            </div>

        </div>
        <div class="col-sm-2"></div>
    </div>


    <div class="row">
        <div class='col-sm-2'></div>
        <div class="col-sm-8">
            <div class='row'>

                <div class='col-sm-4'>
                    Nama Lengkap <br>
                    NIK <br>
                    No Kartu Keluarga: <br>
                    Jenis Kelamin <br>
                    Tempat / tgl.Lahir <br>
                    Agama <br>
                    Kewarganegaraan <br>
                    Alamat Lama <br>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"> Jorong <br> Nagari <br> Kecamatan <br> Kabupaten/Kota <br> Provinsi <br></div>
                    </div>
                    Pindah Ke <br>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"> Jorong <br> Nagari <br> Kecamatan <br> Kabupaten/Kota <br> Provinsi <br></div>
                    </div>
                    Alasan Pindah <br>
                    Pengikut <br>
                </div>
                <div class='col-sm-1'>
                    : <br>
                    : <br>
                    : <br>
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
                    <br>
                    : <br>
                    : <br>
                    : <br>
                    : <br>
                    : <br>
                    : <br>
                    : <br>

                </div>
                <div class='col-sm-7'>
                    <?php echo $hasil['data'][0]['nama_lengkap'] ?> <br>
                    <?php echo $hasil['data'][0]['nik'] ?> <br>
                    <?php echo $hasil['data'][0]['no_kk'] ?> <br>
                    <?php echo $hasil['data'][0]['jenis_kelamin'] ?> <br>
                    <?php echo $hasil['data'][0]['tempat_lahir'].$hasil['data'][0]['tanggal_lahir'] ?> <br>
                    <?php echo $hasil['data'][0]['agama'] ?> <br>
                    <?php echo "Indonesia"?> <br>
                    <br>
                    Test<br>
                    Test<br>
                    Test<br>
                    Test<br>
                    <br>
                    <br>
                    Test<br>
                    Test<br>
                    Test<br>
                    test <br>
                    test <br>
                    Alasan Pindah<br>
                    <?php echo $jumlah; ?>
                   

                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <table class="table table-bordered">
                <th>No</th>
                <th>KTP/NIK/NIPS</th>
                <th>NAMA LENGKAP</th>
                <th>L/P</th>
                <th>Umur</th>
                <th>Agama</th>
               <?php
               $i=0;
              while ($i<$jumlah){ 
              ?>
                <tr>
                    <td><?php echo $i+1; ?></td>
                    <td><?php echo $keluarga['data'][$i]['nik'] ?></td>
                    <td><?php echo $keluarga['data'][$i]['nama_lengkap'] ?></td>
                    <td><?php echo $keluarga['data'][$i]['jenis_kelamin'] ?></td>
                    <td>20</td>
                    <td><?php echo $keluarga['data'][$i]['agama'] ?></td>
                </tr>
             <?php $i++; } ?>


            </table>
        </div>
        <div class="col-sm-2"></div>
    </div>

   

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3" style='text-align:center;'>
                    Kotogadang, 19 Maret 2019 <br>
                    An. Walinagari Koto Gadang <br>
                    <br>
                    <br>

                    VIVI SUSANTI, S.Pt <br>
                    Kasi Kesra <br>


                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>





</body>

</html>