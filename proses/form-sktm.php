<?php
	include '../controller/connect.php';
	$no_surat = $_POST['no_surat'];
	$nik = $_POST['pembuat'];
	$nikibu = $_POST['nik_ibu'];
	$nikayah = $_POST['nik_ayah'];
	$untuk = $_POST['keterangan'];
	$pegawai = $_POST['pegawai']; 
	
	if ($_POST['status']=='on') {
		$status = "1";
	}
	else {
		$status = "0";
	}

	$tanggal = date('Y-m-d');

	// if($nik!=$nikibu || $nikibu!=$nikayah || $nik!=$nikayah)
	// {
	// 	 $carikk="SELECT (SELECT no_kk FROM penduduk WHERE nik='$nik') as kk1,(SELECT no_kk FROM penduduk WHERE nik='$nikayah') as kk2,(SELECT no_kk FROM penduduk WHERE nik='$nikibu') as kk3 FROM kk LIMIT 1";

 //    $result=pg_query($carikk);

 //    if($result)
 //    {
      
 //      while($row=pg_fetch_assoc($result))
 //      {
 //      	$data1=$row['kk1'];
 //      	$data2=$row['kk2'];
 //      	$data3=$row['kk3'];
 //      }

  
    $sql = pg_query("INSERT INTO sktm (no_surat, nik, nik_ibu, nik_ayah, keterangan,  id_pegawai, status, tanggal) VALUES ('$no_surat', '$nik', '$nikibu','$nikayah', '$untuk', '$pegawai', '$status','$tanggal')");

	if ($sql) {
		echo '<meta http-equiv="refresh" content="0.1;url=../surat/sktm/sktm.php?no='.$no_surat.'">';
	}
	else {
		echo "<script>alert('gagal!')</script>";
		//echo '<meta http-equiv="refresh" content="0.1;url=../index/skbb.php">';
	}
      // }
	
 //    } 

 //    else
 //    {
 //    	echo "<script>alert('No KK Tidak Sama!')</script>";
 //    }  

	// }
	// else

	// {
	// 	echo "<script>alert('NIK Tidak Boleh Sama!')</script>";
	// }

   


      

	
	// echo "No surat:".$no_surat;
	// echo "Nik:".$nik;
	// echo "Nik Ayah:".$nikayah;
	// echo "Nik Ibu:".$nikibu;
	// echo "Pegawai:".$pegawai;
?>