<?php 
  
  ob_start();
  session_start();
  if (!isset($_SESSION['admin_username']))
  { 
    header("location: login.php");
  }
  else 
  {
    if ($_SESSION['admin_statusakun'] != '2') 
    {
          header("location: 403A.php");
    }
  }

  // var_dump($_SESSION['admin_username']); 
  include "../controller/connect.php";

?>
  <!DOCTYPE html>
<html lang="en">

<head>
  <script type="text/javascript" src="checkNumber.js"></script>
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
       .dua{
        color: purple;
       }
  </style>
</head>
<?php
  include '../controller/connect.php';
?>
<body class="">
  <div id="containerdot">
      <div class="dot dot1"></div> &nbsp; &nbsp;
      <div class="dot dot2"></div> &nbsp; &nbsp;
      <div class="dot dot3"></div>
    </div>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-5.jpg">
     <div class="logo">
       <center class="satu"> <img src="../image/Agam1.PNG" width="130px" height="160px" color="white"> <br>
        <h3> SISUM </h3>
          Sistem Informasi Surat Menyurat
        </a></center>
      </div>
      <div class="sidebar-wrapper ">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="berandaadmin.php">
              <i class="material-icons">dashboard</i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="suratmenyuratadmin.php">
              <i class="material-icons">library_books</i>
              <p>Surat Menyurat</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="suratmenyuratadmin.php">Back</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="profiladmin.php">Profile</a>
                  <!-- <a class="dropdown-item" href="#">Settings</a> -->
                  <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <center>
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Surat Keterangan Meninggal Dunia</h4>
                </div>
                </center>
                <div class="card-body">
                <form action="../proses/form-skmd.php" method="post">
                  <?php                
                      $sql_s=pg_query("SELECT no_surat as no FROM setting");
                      while($row = pg_fetch_assoc($sql_s))
                      {
                          $no=$row['no'];
                      }
                  ?>
                  <font>No. Surat:</font>
                  <br>
                  <input type="hidden" name="temp" id="temp" value="473 / 0<?php echo $no ?> / SKMD / 2021">
                  <button class="btn btn-primary" onclick="maxSetting()">Nomor Setting</button>
                  <script type="text/javascript">
                    
                    function maxSetting()
                    {
                        let target1=document.getElementById("no_surat");
                        let dataAwal=document.getElementById("temp").value;
                        target1.value=dataAwal;
                    }

                  </script>
                  <button class="btn btn-primary" onclick="checkNomor()">Nomor Terakhir</button>
                   
                    <input id="no_surat" type="text" class="form-control" readonly required name="no_surat" value="473 / 00<?php echo $no ?> / SKMD / 2021">
                    
                  <br/>
                  <font>NIK Warga Meninggal Dunia:</font>
                  <select class="selectpicker form-control" id="nik" name="nik" data-container="body" data-live-search="true" required title="PILIH NIK PENDUDUK" data-hide-disabled="true">
                        <?php                
                            $sql_d=pg_query("SELECT nik, nama_lengkap FROM penduduk ORDER BY nama_lengkap");
                            while($row = pg_fetch_assoc($sql_d))
                            {
                                echo"<option value=".$row['nik'].">(".$row['nik'].") ".$row['nama_lengkap']."</option>";
                            }
                        ?>
                  </select>
                  <br/><br/><br/>
                  <font>NIK Pelapor:</font>
                  <select class="selectpicker form-control" id="nik" name="nik_pelapor" data-container="body" data-live-search="true" required title="PILIH NIK PENDUDUK" data-hide-disabled="true">
                        <?php                
                            $sql_d=pg_query("SELECT nik, nama_lengkap FROM penduduk ORDER BY nama_lengkap");
                            while($row = pg_fetch_assoc($sql_d))
                            {
                                echo"<option value=".$row['nik'].">(".$row['nik'].") ".$row['nama_lengkap']."</option>";
                            }
                        ?>
                  </select>
                  <br/><br/><br/>
                  <font>Tanggal Meninggal:</font>
                    <input type="date" required class="form-control" name="tanggal_meninggal">
                  <br/><br/>
                  <font>Pukul Meninggal:</font>
                    <input type="" required placeholder="Example : 13.00" class="form-control" name="pukul">
                  <br/><br/>
                  <font>Meninggal di:</font>
                    <input type="input" required class="form-control" name="kota">
                  <br/><br/>
                  <font>Di Kuburkan:</font>
                    <input type="input" required class="form-control" name="dikuburkan">
                  <br/><br/>
                  
                  <font>Hubungan Pelapor dengan Almarhum:</font>
                    <input type="text" required class="form-control" name="hubungan">
                  <br/><br/>
                  <font>Pegawai:</font>
                  <select class="form-control" required id="pegawai" name="pegawai" title="PILIH PEGAWAI">
                        <?php                
                            $sql_d=pg_query("SELECT id_pegawai, nama_pegawai FROM pegawai ORDER BY nama_pegawai");
                            while($row = pg_fetch_assoc($sql_d))
                            {
                                echo"<option value=".$row['id_pegawai'].">".$row['nama_pegawai']."</option>";
                            }
                        ?>
                  </select>
                  <br/><br/>
                  <input type="checkbox" name="status">
                  <font>Atas Nama</font>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                         
                        </div>
                      </div>
                    </div>
                    <!-- <center><button type="submit" class="btn btn-primary btn-round">GO</button></center> -->
                    <center><input type="submit" class="btn btn-primary btn-round" name="" value="GO !"></center>
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
<link rel="stylesheet" href="../../js/bootstrap.bundle.min.js" />
<script src="../dist/js/bootstrap-select.js"></script>
</html>
<?php 
  pg_close($conn);
  ob_end_flush();
?>