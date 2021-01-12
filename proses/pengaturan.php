<?php
	session_start();
    if(isset($_POST['username'])) {
		include '../controller/connect.php';
		$id = $_POST["id_adm"];
		$username = $_POST["username"];
		$pw = md5( $_POST["pw"] );
		$pw2 = md5( $_POST["pw2"] );
		if ($pw == $pw2) {
			$sql = pg_query("UPDATE admin SET password = '$pw' WHERE id_admin = '$id'");
			if ($sql) {
				echo '<script>
					alert("sukses")
					</script>
					<meta http-equiv="REFRESH" content="1;url=../index/profiladmin.php">
					';
			}
			else {
					echo '<script>
					alert("gagal")
					</script>
					<meta http-equiv="REFRESH" content="1;url=../index/profiladmin.php">
					';
			}
		}
		else {
			echo '<script>
					alert("re type password harus sama")
					</script>
					<meta http-equiv="REFRESH" content="1;url=../index/profiladmin.php">
					';
		}
		
	}
	else {
		echo '<script>
			alert("gagal2")
			</script>
			<meta http-equiv="REFRESH" content="1;url=../index/profiladmin.php">
			';
	}
?>