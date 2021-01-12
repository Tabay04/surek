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
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
        <center class="satu"><img src="../image/Agam1.PNG" width="130px" height="160px" color="white"> <br>
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
          if (isset($_GET['sukses'])) {
              echo '<div class="alert alert-success alert-dismissible fade show">';
              echo  "<strong>".$_GET['sukses']."</strong> sudah berhasil ditambahkan !";
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
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambahkan Data Kependudukan</h4>
                    <p class="card-category">Isikan Data dengan benar</p>
                </div>
                <div class="card-body">
                  <form action="../proses/input_penduduk.php" method="POST">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">N I K</label>
                          <input id='nik' required type="number" min="1000000000000000" max="9999999999999999" name="nik" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <select class="selectpicker form-control" name="no_kk" id="no_kk" data-container="body" data-live-search="true" data-hide-disabled="true">
                              <option value="0">Pilih NO.KK</option>
                              <?php   
                               include '../controller/connect.php';             
                                $kk=pg_query($conn,"SELECT no_kk, id_rumah
                                FROM public.kk;");
                                while($row = pg_fetch_assoc($kk))
                                {
                                    echo"<option value='".$row['no_kk']."'>".$row['no_kk']."</option>";
                                }
                              ?>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Lengkap</label>
                          <input id='nama_lengkap' required type="text" name="nama_lengkap" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin:</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                              <option name="jenis_kelamin" value="1" >Laki-laki</option>
                              <option name="jenis_kelamin" value="0">Perempuan</option> 
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="agama">Agama:</label>
                            <select class="form-control" name="agama" id="agama">
                              <option value="Islam">Islam</option>
                              <option value="Kristen Protestan">Kristen Protestan</option>
                              <option value="Katolik">Katolik</option>
                              <option value="Hindu">Hindu</option> 
                              <option value="Buddha">Buddha</option>
                              <option value="Kong Hu Cu">Kong Hu Cu</option> 
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="gol_darah">Golongan Darah:</label>
                            <select class="form-control" name="gol_darah" id="gol_darah">
                              <option value="-">Tidak Tau</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="AB">AB</option>
                              <option value="O-">O-</option>
                              <option value="O">O</option>
                            </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tempat Lahir</label>
                          <input type="text" required id='tempat_lahir' name="tempat_lahir" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label >Tanggal Lahir</label>
                          <input type="date" required id='tanggal_lahir' name="tanggal_lahir" class="form-control" >
                        </div>
                      </div>
                    </div>
                  
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Lengkap Ibu</label>
                          <input type="text" required id='nama_lengkap_ibu' name="nama_lengkap_ibu" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Lengkap Ayah</label>
                          <input type="text" required id='nama_lengkap_ayah' name="nama_lengkap_ayah" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="status_kawin">Status Kawin:</label>
                            <select class="form-control" name="status_kawin" id="status_kawin">
                              <option value="Belum Kawin">Belum Kawin</option>
                              <option value="Kawin">Kawin</option>               
                              <option value="Cerai Hidup">Cerai Hidup</option>
                              <option value="Cerai Mati">Cerai Mati</option>
                            </select>	
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="pendidikan_akhir">Pendidikan Terakhir:</label>
                            <select class="form-control" name="pendidikan_akhir" id="pendidikan_akhir">
                            	<option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                              <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                              <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                              <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                              <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                              <option value="Diploma I">Diploma I</option>
                              <option value="Diploma II">Diploma II</option>
                              <option value="Diploma III">Diploma III</option>
                              <option value="Diploma IV/Sarjana I">Diploma IV/Sarjana I</option>
                              <option value="Sarjana II">Sarjana II</option>
                              <option value="Sarjana III">Sarjana III</option>
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
                            <select class="form-control" name="status_hubkel" id="status_hubkel">
                              <option value="Kepala Keluarga">Kepala Keluarga</option>
                              <option value="Isteri">Isteri</option>
                              <option value="Anak">Anak</option>
                              <option value="Cucu">Cucu</option>
                              <option value="Mertua">Mertua</option>
                              <option value="Famili Lain">Famili Lain</option>
                              <option value="Orang Tua">Orang Tua</option>
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
                    
                    <button onclick='tambahData()' type="submit" name="submit" class="btn btn-primary pull-right">Tambah Data</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->

  <script>
  
  function tambahData()
  {
    nama_lengkap=document.getElementById('nama_lengkap').value;
    jk=document.getElementById('jk').value;
    agama=document.getElementById('agama').value;
    tempat_lahir=document.getElementById('tempat_lahir').value;
    nama_ibu=document.getElementById('nama_ibu').value;
    nama_ayah=document.getElementById('nama_ayah').value;
    staka=document.getElementById('staka').value;
    pt=document.getElementById('pt').value;
    jp=document.getElementById('jp').value;
    shk=document.getElementById('shk').value;
    golda=document.getElementById('golda').value;
    nik=document.getElementById('nik').value;
    no_kk=document.getElementById('no_kk').value;
    tgl_lahir=document.getElementById('tgl_lahir').value;

    window.location="../controller/tambah_update.php?nama_lengkap="+nama_lengkap+"&jk="+jk+"&agama="
    +agama+"&tempat_lahir="+tempat_lahir+"&nama_ibu="+nama_ibu+"&nama_ayah="+nama_ayah+"&staka="+staka
    +"&pt="+pt+"&jp="+jp+"&shk="+shk+"&golda="+golda+"&nik="+nik+"&no_kk="+no_kk+"&tgl_lahir="+tgl_lahir;
  }

  </script>
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
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
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
 
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    var containerdot = document.getElementById('containerdot');
    window.addEventListener('load', function(){
        containerdot.style.display="none";
    });
  </script>
</body>

</html>
<?php 
  pg_close($conn);
  ob_end_flush();
?>