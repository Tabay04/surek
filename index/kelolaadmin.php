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
    <script type="text/javascript">
      var nilai;
    </script>
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
          <li class="nav-item">
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
          <li class="nav-item active">
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
            <a class="navbar-brand" href="kelolaadmin.php">Kelola Admin</a>
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
        <?php
          if (isset($_GET['sukses'])) {
              echo '<div class="alert alert-success alert-dismissible fade show">';
              echo  "<strong>".$_GET['sukses']."</strong> sudah berhasil ditambahkan !";
              echo  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
           </div>';
          }
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
                  <h4 class="card-title">Admin</h4>
                  <p class="card-category">Tambahkan Admin</p>
                </div>
                </center>
                <div class="card-body">
                  <form onsubmit="return pass()"action="../proses/tambahadmin.php" method="POST" >
                    <div class="row">
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input id='username' required type="text" name="username" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input id='password' required type="password" name="password" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Retype Password</label>
                          <input id='rpassword' required type="password" name="password" class="form-control">
                        </div>
                      </div>
                      <span id="ulangi" style="color: red"></span>
                    </div>
                    <center>
                    <input class="btn btn-primary btn-round" type="submit" name="tambahadmin" value="Tambah">
                    <div class="clearfix"></div>
                  </form>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <div class="card-body table-responsive">
                          <table  class="table table-bordered" style="width:100%">
                            <thead class="text-primary">
                              <tr>
                                <th> <center> No</th>
                                <th> <center> Username</th>
                                <th> <center> Status</th>
                                <th> <center> Action</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <!-- <select class="selectpicker form-control" onchange='aktif_tidakaktif(this.value,<?php echo $row['id_admin'] ; ?>)'>
                                <option value="1"> Aktif </option>
                                <option value="2"> Tidak Aktif </option>
                              </select> -->
                              <?php
                              include '../controller/connect.php';
                              $sql = "SELECT * FROM admin";
                              $query = pg_query($sql);
                              $no=0;
                              while($admin = pg_fetch_array($query)){
                              echo "<tr>";
                                echo "<td> <center>" .++$no."</td>";
                                echo "<td> <center>".$admin['username']."<span class='id-admin'>".$admin['id_admin']."</span></td>";
                                // echo "<td> <center>".$pegawai['nama_pegawai']."</td>";
                                // echo "<td> <center>".$pegawai['jabatan']."</td>";
                                if ($admin['status_admin'] == 1) {
                                  echo "<td><center><button class='btn btn-success status-admin'> aktif </button></center></td>";
                                }else{
                                  echo "<td><center><button class='btn btn-danger status-admin'> non aktif </button></center></td>";
                                }
                                
                                  echo "<td> <center>";
                                    echo
                                    '<button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm edit" data-toggle="modal" data-target="#edit" data-id="'.$admin['id_admin']."-".$admin['username']."-".$admin['password'].'">
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
                                                      <h4 class="card-title">Admin</h4>
                                                      <p class="card-category">Edit Admin</p>
                                                    </div>
                                                    <div class="card-body">
                                                      <form action="../proses/editadmin.php" method="POST">
                                                        <div class="row">
                                                          <div class="col-md-1">
                                                          </div>
                                                          <div class="col-md-10">
                                                            <div class="form-group">
                                                              <label class="bmd-label-floating">Username</label>
                                                              <input id="id_adm" required type="hidden" name="id_adm" class="form-control" value="">
                                                              <input id="useradmin" required type="text" name="useradmin" class="form-control" value="">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-1">
                                                          </div>
                                                          <div class="col-md-10">
                                                            <div class="form-group">
                                                              <label class="bmd-label-floating">Password</label>
                                                              <input id="pw" required type="password" name="pw" class="form-control" value="">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-1">
                                                          </div>
                                                          <div class="col-md-10">
                                                            <div class="form-group">
                                                              <label class="bmd-label-floating">Retype Password</label>
                                                              <input id="pw" required type="password" name="pw" class="form-control" value="">
                                                            </div>
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
                                    </div>';
                                    // echo
                                    // '<button type="button" rel="tooltip" title="Hapus" class="btn btn-danger btn-link btn-sm hapus" data-toggle="modal" data-target=" #hapus" data-id="'.$admin['id_admin'].'" >
                                    // <i class="material-icons">close</i>
                                    // </button>
                                    // <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    //   <div class="modal-dialog" role="document">
                                    //     <div class="modal-content">
                                    //       <div class="modal-header">
                                    //         <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Untuk Menghapus data?</h5>
                                    //         <button class="close" type="submit" data-dismiss="modal" aria-label="Close" href="../proses/hapusadmin.php?id='.$admin['id_admin'].'>
                                    //         <span aria-hidden="true">×</span>
                                    //         </button>
                                    //       </div>
                                    //       <div class="modal-body">Pilih "Hapus" dibawah jika anda ingin menghapus datanya.</div>
                                    //       <div class="modal-footer">
                                    //         <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    //         <a id="id_adm" href="../proses/hapusadmin.php?id='.$admin['id_admin'].'">
                                    //         <button class="btn btn-danger" name="hapus" type="submit" value="Hapus" >Hapus</button></a>
                                    //       </div>
                                    //     </div>
                                    //   </div>
                                    // </div>';
                                  echo "</td>";
                                echo "</tr>";
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
    function pass() {
    var a = document.getElementById("password").value;
    var b = document.getElementById("rpassword").value;

    if (a.length < 6) {
      document.getElementById("ulangi").InnerHTML="Password Harus Melebihi 6 Karakter";
      return false;
    }

    if (a!=b) {
      document.getElementById("ulangi").InnerHTML="Password Tidak Sama";
      return false;
    }
    }
  </script>
  <script>
    $(document).on("click", ".edit", function () {
      // console.log("haha");
      // console.log($(this).data('id'));
      // console.log("haha");

    var id_admin = $(this).data('id').split("-")[0];
    var username = $(this).data('id').split("-")[1];
    var password = $(this).data('id').split("-")[2];

    // console.log("id_admin:"+id_admin);
    // console.log("username:"+username);
    // console.log("password:"+password);

    $("#edit #id_adm").val(id_admin);
    $("#edit #useradmin").val(username);
    $("#edit #pw").val(password);
    $('#edit').modal('show');
      });

    // CHANGE STATUS ADMIN -----------------------------------------------------------------

    $(".status-admin").click(function(){
    var nilai; //nilai status yang akan diberikan
    var text = $(this).text();
    var element = $(this);
    console.log($(this).text());

    //check current value

    if ($(this).text() == "aktif") { //saat ini 1
      nilai = '2'; //non aktif
    }else{
      nilai = '1'; //aktif
    }
      
      console.log(nilai);
      var id = $(this).parent().parent().parent().find(".id-admin").text(); //variable mendapatkan nilai id
      var url = '../controller/changeStatus.php?status='+nilai+'&id='+id; //url API
      console.log(url);
       $.ajax({url: url, data: "", context: this, dataType: 'text', success: function(e){
         if ($(this).text() != "aktif") { //apabila teks aktif, maka
          
          $(this).removeClass('btn-danger').addClass('btn-success'); //hapus class btn-danger ubah menjadi btn-success
           $(this).empty(); //mengkosongkan tulisan element button
           $(this).html("aktif"); //mengisi element button dengan teks aktif
        }else{
          $(this).removeClass('btn-success').addClass('btn-danger');
          $(this).empty();
          $(this).html("non aktif");
        }
         
          
       }});//end ajax
    });

  </script>
  <script>
    $(document).on("click", ".hapus", function () {
    var id_admin = $(this).data('id');
    $("#hapus #id_adm").attr("href", "../proses/hapusadmin.php?id="+id_admin);
    $('#hapus').modal('show');
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