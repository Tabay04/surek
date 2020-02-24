<?php 
  
  ob_start();
  session_start();
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

  			if ($_SESSION['admin_statusakun'] == '1') {
  				header("location: beranda.php");
  			} else{
  				header("location: berandaadmin.php");
  			}

  		}else {
  			header("location:login.php?login-gagal");
  		}
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login SISUM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../assets/img/surat.png">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../image/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
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
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../image/img-01.jpg');">
			<div class="wrap-login100 p-t-10 p-b-30">
				<form action="" method="POST" class="login100-form validate-form">
					<div class="login100-form-avatar">
						<img src="../image/avatar-01.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<?php
						if (isset($_GET['login-gagal'])) {?>

						<div >
							<p style="color:white" >Maaf, Username/Password yang anda masukkan salah!</p>
						</div>

					<?php }?>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" name="login" value="Login"> Login
						</button>
					</div>
				</form>
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

</body>
</html>

<?php 
  pg_close($conn);
  ob_end_flush();
?>