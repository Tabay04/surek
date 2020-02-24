<?php 
  
  ob_start();
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login SISUM</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../assets/img/surat.png">
<!--===============================================================================================-->  
  <!-- <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css"> -->
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/csslogin.css">
 
<!--===============================================================================================-->
<style type="text/css">
  .i {
    color: #5356ad; 
    text-shadow: 20px #5356ad ;
    }
</style>
</head>
<body>

  <div class="container">
    <div class="box"></div>
    <div class="container-forms">
      <div class="container-info">
        <div class="info-item">
          <div class="table">
            <div class="table-cell">
              <p>
                Pastikan <br><i class="i"> Username & Password </i> Yang Anda Masukkan Benar
              </p>
            </div>
          </div>
        </div>
        <div class="info-item">
          <div class="table">
            <div class="table-cell">
              <p>
                Selamat Datang di SISUM
              </p>
              <div class="btn">
                Sign In
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-form">
        <div class="form-item log-in">
          <div class="table">
            <div class="table-cell">
              <div class="login100-form-avatar">
                <img src="../image/avatar-01.png" alt="AVATAR">
              </div>
            </div>
          </div>
        </div>
        <form action="" method="POST">
          <div class="form-item sign-up">
            <div class="table">
              <div class="table-cell">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                 
                <div class="container-login100-form-btn ">
                  <button class="login100-form-btn btn" type="submit" name="login" value="Login"> Login
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
         <!-- <div style="display: none;"class="login_gagal">
          <button class="gagal_act">Back</button>
        </div> -->
      </div>
    </div>
  </div>
<!--===============================================================================================-->  
  <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="../vendor/bootstrap/js/popper.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="../js/main.js"></script>

 
  <script >
    $(".info-item .btn").click(function(){
    $(".container").toggleClass("log-in");
    });
    $(".gagal_act").click(function(){
    console.log("sddhiudu");
    });
    
  </script>
<?php
   if(isset($_SESSION['admin_username'])) header("location: beranda.php"); 
  
  include "../controller/connect.php";

  if(isset($_POST['login'])){
      $username = $_POST['username'];
      $password = md5($_POST['pass']);
      $login = pg_query($conn, "SELECT * FROM admin WHERE username = '$username' AND password ='$password'");

      if(pg_num_rows($login)>0) {
        $row_admin=pg_fetch_array($login);
        $_SESSION['admin_id_admin'] = $row_admin['id_admin'];
        $_SESSION['admin_username'] = $row_admin['username'];
        $_SESSION['admin_statusakun'] = $row_admin['statusakun'];

        if ($_SESSION['admin_statusakun'] == '1')
         {
           echo "<script type='text/javascript'>
          $('.container').addClass('active');
          $('.table').hide();
          </script>
          <meta http-equiv='refresh' content='0.1;url=beranda.php'>
          ";
        } else{
           echo "<script type='text/javascript'>
          $('.container').addClass('active');
          $('.table').hide();
          </script>
          <meta http-equiv='refresh' content='0.1;url=berandaadmin.php'>
          ";
        }

      }else {
      echo "<script type='text/javascript'>
          $(document).ready(function(){
          $('.container').addClass('active1');
          $('.table').hide();
          $('.login_gagal').show();    
        });
         </script>
         <meta http-equiv='refresh' content='0.1;url=login.php?login-gagal'>
         ";
      }
  }
?>

</body>
</html>
<?php 
  pg_close($conn);
  ob_end_flush();
?>