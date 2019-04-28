<?php


include 'getSKMD.php';
$meninggal=$_GET['meninggal'];
$lapor=$_GET['lapor'];
$hasil=get_skmd($meninggal, $lapor);

//var_dump($hasil['data']);

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
    <title>SURAT KETERANGAN MENINGGAL DUNIA</title>
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
            <div style='text-align:center;'> <u><b>SURAT KETERANGAN MENINGGAL DUNIA</b></u>
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
                    Yang bertanda tangan di bawah ini, Wali Nagari Kotogadang, Kecamatan IV Koto, Kabupaten Agam, dengan
                    ini menerangkan bahwa :
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
                    Tempat / tgl.Lahir <br>
                    Jenis Kelamin <br>
                    Bangsa/Agama <br>
                    Alamat <br>
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
                    <?php echo $hasil['data'][0]['nama_lengkap'] ?><br>
                    <?php echo $hasil['data'][0]['nik'] ?> <br>

                    <?php echo $hasil['data'][0]['tempat_lahir'].", ".$hasil['data'][0]['tanggal_lahir'] ?> <br>
                    <?php echo $hasil['data'][0]['jenis_kelamin'] ?> <br>
                    <?php echo "Indonesia / ".$hasil['data'][0]['agama'] ?> <br>
                    <?php echo $hasil['data'][0]['alamat'] ?> <br>

                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br> <br>
            <p>Nama yang tersebut di atas sepengetahuan kami selama berada di Jorong Sutijo, Nagari Kotogadang, Kec. IV
                Koto, Kab. Agam berkelakuan baik dan tidak pernah terikat dengan minuman keras (narkoba) dan tidak
                pernah dihukum karena tindak pidana.
                Rekomendasi ini diberikan untuk <b><u>Pengurusan SKCK</u></b>.
            </p>



            <p>Demikianlah surat keterangan ini diberikan untuk dapat dipergunakan sebagaimana mestinya. </p>
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