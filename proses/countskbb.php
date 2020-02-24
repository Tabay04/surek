<?php
include "../controller/connect.php";
$sql="SELECT count(no_surat) as count FROM skbb";
$result=pg_query($sql);
while($row=pg_fetch_assoc($result))
{
	$jumlah=$row['count'];
}
echo $jumlah;
?>