<?php 
  
  ob_start();
  session_start();
  if (!isset($_SESSION['admin_username']))
  { 
    header("location: login.php");
  }
  else 
  {
    if ($_SESSION['admin_statusakun'] != '1') 
    {
          header("location: 403.php");
    }
  }

  // var_dump($_SESSION['admin_username']); 
  include "../controller/connect.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/surat.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    SISUM Koto Gadang
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/dist/css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/loading.css">
    <style type="text/css">
    .satu {
    color: white;
    }
    </style>
  </head>
  <body class="">
    <div id="containerdot">
      <div class="dot dot1"></div> &nbsp; &nbsp;
      <div class="dot dot2"></div> &nbsp; &nbsp;
      <div class="dot dot3"></div>
    </div>
    <div class="wrapper ">
      <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-5.jpg">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
        -->
        <div class="logo">
          <center class="satu"> <img src="../image/Agam1.PNG" width="130px" height="160px" color="white"> <br>
          <h3> SISUM </h3>
          Sistem Informasi Surat Menyurat
        </a></center>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="beranda.php">
              <i class="material-icons">dashboard</i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="suratmenyurat.php">
              <i class="material-icons">library_books</i>
              <p>Surat Menyurat</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="keloladatakependudukan.php">
              <i class="material-icons">content_paste</i>
              <p>Kelola Data</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="kelolaadmin.php">
              <i class="material-icons">supervisor_account</i>
              <p>Kelola Admin</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="kelolaadmin.php">
              <i class="material-icons">person</i>
              <p>Kelola Admin</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="keloladatakependudukan.php">Back</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <!-- <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
                </button>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <!-- <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i> -->
                  <!-- <span class="notification">5</span> -->
                  <!-- <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <!-- <a class="dropdown-item" href="profile">Profile</a> -->
                  <!-- <a class="dropdown-item" href="#">Settings</a> -->
                  <!-- <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item" href="logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
      <div class="content">
        <?php
          if (isset($_GET['hapus'])) {
            echo '<div class="alert alert-danger alert-dismissible fade show">';
            echo  "<strong>".$_GET['hapus']."</strong> sudah berhasil dihapus !";
            echo  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
           </div>';
          }
          if (isset($_GET['edit'])) {
            echo '<div class="alert alert-warning alert-dismissible fade show">';
            echo  "<strong>".$_GET['edit']."</strong> Sudah Berhasil Diedit !";
            echo  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
           </div>';
          }
        ?> 
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <center>
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Masukkan NIK</h4>
                  <p class="card-category">Masukkan NIK dengan benar</p>
                </div>
                </center>
                <div class="card-body">
                  <form action="edithapusdata.php" method="POST">
                    <select class="selectpicker form-control" id="nik" data-container="body" data-live-search="true" title="Search" data-hide-disabled="true" name="nik">
                      <option value="0">Unknown</option>
                      <?php
                      include '../controller/connect.php';
                      $sql_d=pg_query("SELECT nik, nama_lengkap FROM penduduk ORDER BY nama_lengkap");
                      while($row = pg_fetch_assoc($sql_d))
                      {
                      echo "<option value=".$row['nik'].">(".$row['nik'].") ".$row['nama_lengkap']."</option>";
                      }
                      ?>
                    </select>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          
                        </div>
                      </div>
                    </div>
                    <!-- <center><button type="submit" class="btn btn-primary btn-round">GO</button></center> -->
                    <center >
                    <div class="tampil" >
                      <input type="submit" class="btn btn-primary btn-round" value="Tampil" ></input>
                    </div>
                    </center>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
              
              <div class="data">
                <div class="content">
                  
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <div class="card">
                        
                        <center>
                        <div class="data">
                          <div class="card">
                            <h3>
                            <?php
                            $jenis_kelamin = array(
                            "1"=>"Laki-Laki",
                            "0"=>"Perempuan");
                            if (isset($_POST['nik'])) {
                            $nik = $_POST['nik'];
                            $sql = "SELECT * FROM penduduk where nik = '$nik'";
                            $query = pg_query($sql);
                            while($penduduk = pg_fetch_array($query)){
                            
                            echo $penduduk['nama_lengkap']
                            ?>
                            </h3>
                            <div class="card-body">
                              <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                  <table class="table">
                                    <div class="card-body table-responsive">
                                      <table  class="table " style="width:100%">
                                        <tbody>
                                          <tr>
                                            <td>NIK</td>
                                            <td><?php echo $nik3=$penduduk['nik'] ?></td>
                                          </tr>
                                          <tr>
                                            <td>No.KK</td>
                                            <td><?php echo $kk2=$penduduk['no_kk'] ?></td>
                                          </tr>
                                          <tr>
                                            <td>Jenis Kelamin</td>
                                            <td><?php echo $jenis_kelamin[$penduduk['jenis_kelamin']]; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Tempat Lahir</td>
                                            <td><?php echo $penduduk['tempat_lahir'] ?></td>
                                          </tr>
                                          <tr>
                                            <td>Tanggal Lahir</td>
                                            <td><?php echo $penduduk['tanggal_lahir'] ?></td>
                                          </tr>
                                          <tr>
                                            <td>Nama lengkap Ibu</td>
                                            <td><?php echo $penduduk['nama_lengkap_ibu'] ?></td>
                                          </tr>
                                          <tr>
                                            <td>Nama Lengkap Ayah</td>
                                            <td><?php echo $penduduk['nama_lengkap_ayah'] ?></td>
                                          </tr>
                                          <tr>
                                            <td>Status Kawin</td>
                                            <td><?php echo $penduduk['status_kawin'] ?></td>
                                          </tr>
                                          <tr>
                                            <td>Golongan Darah</td>
                                            <td><?php echo $penduduk['gol_darah'] ?></td>
                                          </tr>
                                          <tr>
                                            <td>Agama</td>
                                            <td><?php echo $penduduk['agama'] ?></td>
                                          </tr>
                                          <tr>
                                            <td>Pendidikan Akhir</td>
                                            <td><?php echo $penduduk['pendidikan_akhir'] ?></td>
                                          </tr>
                                          <tr>
                                            <td>Jenis Pekerjaan</td>
                                            <td><?php echo $penduduk['jenis_pekerjaan'] ?></td>
                                          </tr>
                                          <tr>
                                            <td>Status Hubungan Keluarga</td>
                                            <td><?php echo $penduduk['status_hubkel'] ?></td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td class="td-actions text-right">
                                              
                                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#edit">
                                              <i class="material-icons">edit</i>
                                              </button>
                                              <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <!-- <div class="content"> -->
                                                      <div class="container-fluid">
                                                        <div class="row">
                                                          <div class="col-md-12">
                                                            <div class="card">
                                                              <div class="card-header card-header-primary">
                                                                <h4 class="card-title">Edit Data Kependudukan</h4>
                                                                <p class="card-category">Isikan Data dengan benar</p>
                                                              </div>
                                                              <div class="card-body">
                                                                <form action="../proses/editpenduduk.php" method="POST">
                                                                  <div class="row">
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label class="bmd-label-floating">N I K</label>
                                                                        <input id='nik' required type="text" name="nik" class="form-control" value="<?php echo $penduduk['nik'] ?>">
                                                                        <input id='nik' required type="hidden" name="nik2" class="form-control" value="<?php echo $penduduk['nik'] ?>">
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label class="bmd-label-floating">Nama Lengkap</label>
                                                                        <input id='nama_lengkap' required type="text" name="nama_lengkap" class="form-control" value="<?php echo $penduduk['nama_lengkap'] ?>">
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="row">
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label class="bmd-label-floating">N o. K K</label>
                                                                        <select class="form-control" name="no_kk" id="no_kk" >
                                                                          <?php
                                                                          include '../controller/connect.php';
                                                                          $kk=pg_query($conn,"SELECT no_kk, id_rumah
                                                                          FROM public.kk;");
                                                                          echo"<option value='".$kk2."'>".$kk2."</option>";
                                                                          while($row = pg_fetch_assoc($kk))
                                                                          {
                                                                          echo"<option value='".$row['no_kk']."'>".$row['no_kk']."</option>";
                                                                          }
                                                                          ?>
                                                                        </select>
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                                                                        <?php $jenis_kelamin = $penduduk['jenis_kelamin']; ?>
                                                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                                                          <option value="1" <?php echo ($jenis_kelamin == '1') ? "selected": "" ?>>Laki-Laki</option>
                                                                          <option value="0" <?php echo ($jenis_kelamin == '0') ? "selected": "" ?>>Perempuan</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="row">
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="agama">Agama:</label>
                                                                        <?php $agama = $penduduk['agama']; ?>
                                                                        <select class="form-control" name="agama" id="agama">
                                                                          <option value="Islam" <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                                                                          <option value="Kristen Protestan" <?php echo ($agama == 'Kristen Protestan') ? "selected": "" ?>> Kristen Protestan</option>
                                                                          <option value="Katolik" <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
                                                                          <option value="Hindu" <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                                                                          <option value="Buddha" <?php echo ($agama == 'Buddha') ? "selected": "" ?>>Buddha</option>
                                                                          <option value="Kong Hu Cu" <?php echo ($agama == 'Kong Hu Cu') ? "selected": "" ?>>Kong Hu Cu</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                      <div class="form-group">
                                                                        <label for="gol_darah">Gol. Darah:</label>
                                                                        <?php $gol_darah = $penduduk['gol_darah']; ?>
                                                                        <select class="form-control" name="gol_darah" id="gol_darah">
                                                                          <option value="-" <?php echo ($gol_darah == '-') ? "selected": "" ?>>Tidak Tau</option>
                                                                          <option value="A" <?php echo ($gol_darah == 'A') ? "selected": "" ?>>A</option>
                                                                          <option value="B" <?php echo ($gol_darah == 'B') ? "selected": "" ?>>B</option>
                                                                          <option value="AB" <?php echo ($gol_darah == 'AB') ? "selected": "" ?>>AB</option>
                                                                          <option value="O-" <?php echo ($gol_darah == 'O-') ? "selected": "" ?>>O-</option>
                                                                          <option value="O" <?php echo ($gol_darah == 'O') ? "selected": "" ?>>O</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="row">
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label class="bmd-label-floating">Tempat Lahir</label>
                                                                        <input type="text" required id='tempat_lahir' name="tempat_lahir" class="form-control" value="<?php echo $penduduk['tempat_lahir'] ?>">
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label class="bmd-label-floating">Tanggal Lahir</label>
                                                                        <input type="date" required id='tanggal_lahir' name="tanggal_lahir" class="form-control" value="<?php echo $penduduk['tanggal_lahir'] ?>">
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  
                                                                  <div class="row">
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label class="bmd-label-floating">Nama Lengkap Ibu</label>
                                                                        <input type="text" required id='nama_lengkap_ibu' name="nama_lengkap_ibu" class="form-control" value="<?php echo $penduduk['nama_lengkap_ibu'] ?>">
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label class="bmd-label-floating">Nama Lengkap Ayah</label>
                                                                        <input type="text" required id='nama_lengkap_ayah' name="nama_lengkap_ayah" class="form-control" value="<?php echo $penduduk['nama_lengkap_ayah'] ?>">
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="row">
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="status_kawin">Status Kawin:</label>
                                                                        <?php $status_kawin = $penduduk['status_kawin']; ?>
                                                                        <select class="form-control" name="status_kawin" id="status_kawin">
                                                                          <option value="Belum Kawin" <?php echo ($status_kawin == 'Belum Kawin') ? "selected": "" ?>>Belum Kawin</option>
                                                                          <option value="Kawin" <?php echo ($status_kawin == 'Kawin') ? "selected": "" ?>>Kawin</option>
                                                                          <option value="Cerai Hidup" <?php echo ($status_kawin == 'Cerai Hidup') ? "selected": "" ?>>Cerai Hidup</option>
                                                                          <option value="Cerai Mati" <?php echo ($status_kawin == 'Cerai Mati') ? "selected": "" ?>>Cerai Mati</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="pendidikan_akhir">Pendidikan Terakhir:</label>
                                                                        <?php $pendidikan_akhir = $penduduk['pendidikan_akhir']; ?>
                                                                        <select class="form-control" name="pendidikan_akhir" id="pendidikan_akhir">
                                                                          <option value="Tidak/Belum Sekolah" <?php echo ($pendidikan_akhir == 'Tidak/Belum Sekolah') ? "selected": "" ?>>Tidak/Belum Sekolah</option>
                                                                          <option value="Belum Tamat SD/Sederajat" <?php echo ($pendidikan_akhir == 'Belum Tamat SD/Sederajat') ? "selected": "" ?>>Belum Tamat SD/Sederajat</option>
                                                                          <option value="Tamat SD/Sederajat" <?php echo ($pendidikan_akhir == 'Tamat SD/Sederajat') ? "selected": "" ?>>Tamat SD/Sederajat</option>
                                                                          <option value="SLTP/Sederajat" <?php echo ($pendidikan_akhir == 'SLTP/Sederajat') ? "selected": "" ?>>SLTP/Sederajat</option>
                                                                          <option value="SLTA/Sederajat" <?php echo ($pendidikan_akhir == 'SLTA/Sederajat') ? "selected": "" ?>>SLTA/Sederajat</option>
                                                                          <option value="Diploma I" <?php echo ($pendidikan_akhir == 'Diploma I') ? "selected": "" ?>>Diploma I</option>
                                                                          <option value="Diploma II" <?php echo ($pendidikan_akhir == 'Diploma II') ? "selected": "" ?>>Diploma II</option>
                                                                          <option value="Diploma III" <?php echo ($pendidikan_akhir == 'Diploma III') ? "selected": "" ?>>Diploma III</option>
                                                                          <option value="Diploma IV/Sarjana I" <?php echo ($pendidikan_akhir == 'Diploma IV/Sarjana I') ? "selected": "" ?>>Diploma IV/Sarjana I</option>
                                                                          <option value="Sarjana II" <?php echo ($pendidikan_akhir == 'Sarjana II') ? "selected": "" ?>>Sarjana II</option>
                                                                          <option value="Sarjana III" <?php echo ($pendidikan_akhir == 'Sarjana III') ? "selected": "" ?>>Sarjana III</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="row">
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="jenis_pekerjaan">Jenis Pekerjaan:</label>
                                                                        <select class="form-control" name="jenis_pekerjaan" id="jenis_pekerjaan">
                                                                          <?php
                                                                          include '../controller/connect.php';
                                                                          $pekerjaan=pg_query($conn,"SELECT nama_pekerjaan
                                                                          FROM public.pekerjaan;");
                                                                          while($row = pg_fetch_assoc($pekerjaan))
                                                                          {
                                                                          echo"<option value='".$row['nama_pekerjaan']."'>".$row['nama_pekerjaan']."</option>";
                                                                          }
                                                                          ?>
                                                                        </select>
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="status_hubkel">Status Hubungan Keluarga :</label>
                                                                        <?php $status_hubkel = $penduduk['status_hubkel']; ?>
                                                                        <select class="form-control" name="status_hubkel" id="status_hubkel">
                                                                          <option value="Kepala Keluarga" <?php echo ($status_hubkel == 'Kepala Keluarga') ? "selected": "" ?>>Kepala Keluarga</option>
                                                                          <option value="Isteri" <?php echo ($status_hubkel == 'Isteri') ? "selected": "" ?>>Isteri</option>
                                                                          <option value="Anak" <?php echo ($status_hubkel == 'Anak') ? "selected": "" ?>>Anak</option>
                                                                          <option value="Cucu" <?php echo ($status_hubkel == 'Cucu') ? "selected": "" ?>>Cucu</option>
                                                                          <option value="Mertua" <?php echo ($status_hubkel == 'Mertua') ? "selected": "" ?>>Mertua</option>
                                                                          <option value="Famili Lain" <?php echo ($status_hubkel == 'Famili Lain') ? "selected": "" ?>>Famili Lain</option>
                                                                          <option value="Orang Tua" <?php echo ($status_hubkel == 'Orang Tua') ? "selected": "" ?>>Orang Tua</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  
                                                                  <div class="row">
                                                                    <div class="col-md-6">
                                                                      
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                      
                                                                    </div>
                                                                  </div>
                                                                  
                                                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                  <input  class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                                                                  
                                                                </form>
                                                              </div>
                                                            </div>
                                                            <!-- </div> -->
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <button type="button" rel="tooltip" title="Hapus" class="btn btn-danger btn-link btn-sm" data-toggle="modal" data-target="#hapus" >
                                              <i class="material-icons">close</i>
                                              </button>
                                              <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Untuk Menghapus data?</h5>
                                                      <button class="close" type="submit" data-dismiss="modal" aria-label="Close" href='hapuspenduduk.php?nik=".$penduduk['nik']."'>
                                                      <span aria-hidden="true">×</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">Pilih "Hapus" dibawah jika anda ingin menghapus datanya.</div>
                                                    <div class="modal-footer">
                                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                      <a href="../proses/hapuspenduduk.php?nik=<?php echo $nik ?>">
                                                        <button class="btn btn-danger" name="hapus" type="submit" value="Hapus" >Hapus</button>
                                                      </a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <?php }} ?>
                                    </div>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    var containerdot = document.getElementById('containerdot');
    window.addEventListener('load', function(){
        containerdot.style.display="none";
    });
  </script>
</body>
<link rel="stylesheet" href="../../js/bootstrap.bundle.min.js" />
<script src="../dist/js/bootstrap-select.js"></script>
</html>
<?php 
  pg_close($conn);
  ob_end_flush();
?>