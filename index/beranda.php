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
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> -->
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
    <?php
    include '../controller/connect.php';
  ?>
  </head>

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
          <li class="nav-item active">
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
          <li class="nav-item ">
            <a class="nav-link" href="keloladatakependudukan.php">
              <i class="material-icons">content_paste</i>
              <p>Kelola Data</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kelolaadmin.php">
              <i class="material-icons">supervisor_account</i>
              <p>Kelola Admin</p>
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
            <a class="navbar-brand" href="beranda.php">Beranda</a>
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
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <center>
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Surat Keluar</h4>
                  <p class="card-category">Seluruh Dokumentasi Surat Keluar</p>
                </div>
                </center>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <div class="card-body table-responsive">
                      <!-- <table  class="table table-striped table-bordered mydatatable" style="width:100%"> -->
                        <table  class="table table-striped table-bordered " style="width:100%" id="mydatatable">
                        <thead class="text-primary">
                          <tr >
                            <th>No</th>
                            <th>No. Surat</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Pegawai</th>
                            <th>Admin</th>
                            <th> <center>File </center></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

                        $sql=pg_query("SELECT S.no_surat, S.untuk, S.keterangan, S.tanggal, S.status, PG.nama_pegawai, PG.jabatan, P.nik, P.no_kk, P.nama_lengkap, P.jenis_kelamin, P.tempat_lahir, P.tanggal_lahir, P.nama_lengkap_ibu, P.nama_lengkap_ayah, P.status_kawin, P.gol_darah, P.pendidikan_akhir, P.jenis_pekerjaan, P.status_hubkel, P.tanggal_entri, P.tanggal_ubah, P.agama, R.alamat, A.username
                          FROM public.skbb AS S
                          LEFT JOIN penduduk as P ON S.nik=P.nik
                          LEFT JOIN pegawai as PG ON S.id_pegawai=PG.id_pegawai
                          LEFT JOIN kk as K ON P.no_kk=K.no_kk
                          LEFT JOIN rumah as R ON R.id_rumah=K.id_rumah
                          LEFT JOIN admin as A ON S.id_admin = A.id_admin");

                        $sql_skmd = pg_query("SELECT S.no_surat, S.tanggal, PG.nama_pegawai, PG.jabatan, P.nik, P.no_kk, P.nama_lengkap, P.jenis_kelamin, P.tempat_lahir, P.tanggal_lahir, P.nama_lengkap_ibu, P.nama_lengkap_ayah, P.status_kawin, P.gol_darah, P.pendidikan_akhir, P.jenis_pekerjaan, P.status_hubkel, P.tanggal_entri, P.tanggal_ubah, P.agama, R.alamat, A.username
                          FROM public.skmd AS S
                          LEFT JOIN penduduk as P ON S.nik=P.nik
                          LEFT JOIN pegawai as PG ON S.id_pegawai=PG.id_pegawai
                          LEFT JOIN kk as K ON P.no_kk=K.no_kk
                          LEFT JOIN rumah as R ON R.id_rumah=K.id_rumah
                          LEFT JOIN admin as A ON S.id_admin = A.id_admin");

                         $sql_sktm = pg_query("SELECT S.no_surat, S.tanggal, PG.nama_pegawai, PG.jabatan, P.nik, P.no_kk, P.nama_lengkap, P.jenis_kelamin, P.tempat_lahir, P.tanggal_lahir, P.nama_lengkap_ibu, P.nama_lengkap_ayah, P.status_kawin, P.gol_darah, P.pendidikan_akhir, P.jenis_pekerjaan, P.status_hubkel, P.tanggal_entri, P.tanggal_ubah, P.agama, R.alamat, A.username
                          FROM public.sktm AS S
                          LEFT JOIN penduduk as P ON S.nik=P.nik
                          LEFT JOIN pegawai as PG ON S.id_pegawai=PG.id_pegawai
                          LEFT JOIN kk as K ON P.no_kk=K.no_kk
                          LEFT JOIN rumah as R ON R.id_rumah=K.id_rumah
                          LEFT JOIN admin as A ON S.id_admin = A.id_admin");

                          $sql_sku = pg_query("SELECT S.no_surat, S.tanggal, PG.nama_pegawai, PG.jabatan, P.nik, P.no_kk, P.nama_lengkap, P.jenis_kelamin, P.tempat_lahir, P.tanggal_lahir, P.nama_lengkap_ibu, P.nama_lengkap_ayah, P.status_kawin, P.gol_darah, P.pendidikan_akhir, P.jenis_pekerjaan, P.status_hubkel, P.tanggal_entri, P.tanggal_ubah, P.agama, R.alamat, A.username
                          FROM public.sku AS S
                          LEFT JOIN penduduk as P ON S.nik=P.nik
                          LEFT JOIN pegawai as PG ON S.id_pegawai=PG.id_pegawai
                          LEFT JOIN kk as K ON P.no_kk=K.no_kk
                          LEFT JOIN rumah as R ON R.id_rumah=K.id_rumah
                          LEFT JOIN admin as A ON S.id_admin = A.id_admin");

                          $sql_custom = pg_query("SELECT S.no_surat, S.tanggal, PG.nama_pegawai, PG.jabatan, P.nik, P.no_kk, P.nama_lengkap, P.jenis_kelamin, P.tempat_lahir, P.tanggal_lahir, P.nama_lengkap_ibu, P.nama_lengkap_ayah, P.status_kawin, P.gol_darah, P.pendidikan_akhir, P.jenis_pekerjaan, P.status_hubkel, P.tanggal_entri, P.tanggal_ubah, P.agama, R.alamat, A.username
                          FROM public.scustom AS S
                          LEFT JOIN penduduk as P ON S.nik=P.nik
                          LEFT JOIN pegawai as PG ON S.id_pegawai=PG.id_pegawai
                          LEFT JOIN kk as K ON P.no_kk=K.no_kk
                          LEFT JOIN rumah as R ON R.id_rumah=K.id_rumah
                          LEFT JOIN admin as A ON S.id_admin = A.id_admin");

                        $no=1;

                        while ($data=pg_fetch_assoc($sql)) {
                            
                            $nos=$data['no_surat'];
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$data['no_surat']."</td>";
                            echo "<td>".$data['nik']."</td>";
                            echo "<td>".$data['nama_lengkap']."</td>";
                            echo "<td>".$data['tanggal']."</td>";
                            echo "<td>".$data['nama_pegawai']."</td>";
                            echo "<td>".$data['username']."</td>";

                            echo '<td><center> <a class="material-icons" target="_blank" href="../surat/skbb/skbb.php?no='.$data['no_surat'].'">insert_drive_file</a>
                                
                             </center></td>';

                            echo "</tr>";
                            // <a class="material-icons" target="_blank" href="../surat/skbb/skbb.php?no='.$data['no_surat'].'&download=1" title="download yuang">arrow_drop_down_circle</a>
                            $no++;
                          }

                          while ($data_skmd=pg_fetch_assoc($sql_skmd)) {
                            
                            $nos=$data['no_surat'];
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$data_skmd['no_surat']."</td>";
                            echo "<td>".$data_skmd['nik']."</td>";
                            echo "<td>".$data_skmd['nama_lengkap']."</td>";
                            echo "<td>".$data_skmd['tanggal']."</td>";
                            echo "<td>".$data_skmd['nama_pegawai']."</td>";
                            echo "<td>".$data_skmd['username']."</td>";

                            echo '<td><center> <a class="material-icons" target="_blank" href="../surat/skmd/skmd.php?no='.$data_skmd['no_surat'].'">insert_drive_file</a>
                                
                             </center></td>';

                            echo "</tr>";
                            // <a class="material-icons" target="_blank" href="../surat/skbb/skbb.php?no='.$data['no_surat'].'&download=1" title="download yuang">arrow_drop_down_circle</a>
                            $no++;
                          }

                          while ($data_sktm=pg_fetch_assoc($sql_sktm)) {
                            
                            $nos=$data['no_surat'];
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$data_sktm['no_surat']."</td>";
                            echo "<td>".$data_sktm['nik']."</td>";
                            echo "<td>".$data_sktm['nama_lengkap']."</td>";
                            echo "<td>".$data_sktm['tanggal']."</td>";
                            echo "<td>".$data_sktm['nama_pegawai']."</td>";
                            echo "<td>".$data_sktm['username']."</td>";

                            echo '<td><center> <a class="material-icons" target="_blank" href="../surat/sktm/sktm.php?no='.$data_sktm['no_surat'].'">insert_drive_file</a>
                                
                             </center></td>';

                            echo "</tr>";
                            // <a class="material-icons" target="_blank" href="../surat/skbb/skbb.php?no='.$data['no_surat'].'&download=1" title="download yuang">arrow_drop_down_circle</a>
                            $no++;
                          }

                          while ($data_sku=pg_fetch_assoc($sql_sku)) {
                            
                            $nos=$data['no_surat'];
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$data_sku['no_surat']."</td>";
                            echo "<td>".$data_sku['nik']."</td>";
                            echo "<td>".$data_sku['nama_lengkap']."</td>";
                            echo "<td>".$data_sku['tanggal']."</td>";
                            echo "<td>".$data_sku['nama_pegawai']."</td>";
                            echo "<td>".$data_sku['username']."</td>";

                            echo '<td><center> <a class="material-icons" target="_blank" href="../surat/sku/sku.php?no='.$data_sku['no_surat'].'">insert_drive_file</a>
                                
                             </center></td>';

                            echo "</tr>";
                            // <a class="material-icons" target="_blank" href="../surat/skbb/skbb.php?no='.$data['no_surat'].'&download=1" title="download yuang">arrow_drop_down_circle</a>
                            $no++;
                          }

                          while ($data_sku=pg_fetch_assoc($sql_custom)) {
                            
                            $nos=$data['no_surat'];
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$data_sku['no_surat']."</td>";
                            echo "<td>".$data_sku['nik']."</td>";
                            echo "<td>".$data_sku['nama_lengkap']."</td>";
                            echo "<td>".$data_sku['tanggal']."</td>";
                            echo "<td>".$data_sku['nama_pegawai']."</td>";
                            echo "<td>".$data_sku['username']."</td>";

                            echo '<td><center> <a class="material-icons" target="_blank" href="../surat/custom/custom.php?no='.$data_sku['no_surat'].'">insert_drive_file</a>
                                
                             </center></td>';

                            echo "</tr>";
                            // <a class="material-icons" target="_blank" href="../surat/skbb/skbb.php?no='.$data['no_surat'].'&download=1" title="download yuang">arrow_drop_down_circle</a>
                            $no++;
                          }
                        ?>
                          
                      </tbody>
                      </table>
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
  <!--   Core JS Files   -->
<!--   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/dataTables.bootstrap4.min.js"></script>
  <script>
    $('.mydatatable').DataTable({
      order: [[3, 'desc']],
      pagingType;
      searching: false;
      ordering: false:
      lengthMenu: [[5,10,25,50,-1]],[[5,10,25,50,"All"]],
      createdRow: function (row,data,index){
        if(data[5].replace(/[\$,]/g,'')*1>150000){
          $('td,' row).eq(5).addClass('text-success');
        }
      }
    })

  </script> -->

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
    $(document).ready( function () {
        $('#mydatatable').DataTable();
    } );

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

    //Inisiasi awal penggunaan jQuery
     $(document).ready(function(){
      //Pertama sembunyikan elemen class gambar
            $('.data').hide();        

      //Ketika elemen class tampil di klik maka elemen class gambar tampil
            $('.tampil').click(function(){
       $('.data').show();
            });

      //Ketika elemen class sembunyi di klik maka elemen class gambar sembunyi
            $('.sembunyi').click(function(){
       //Sembunyikan elemen class gambar
       $('.data').hide();        
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