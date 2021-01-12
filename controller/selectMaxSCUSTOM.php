<?php

include "connect.php";

$SCUSTOMMax="SELECT no_surat FROM scustom";

$resultSCUSTOM=pg_query($SCUSTOMMax);
$hasil = array(
	'features' => array()
	);
while ($isinya = pg_fetch_assoc($resultSCUSTOM)) {
	$features = array(
		'properties' => array(
			'no_surat' => $isinya['no_surat']
			)
		);
	array_push($hasil['features'], $features);
}
echo json_encode($hasil);


?>