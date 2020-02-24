<?php

include "connect.php";

$skmdMax="SELECT no_surat FROM skmd";

$resultSKMD=pg_query($skmdMax);
$hasil = array(
	'features' => array()
	);
while ($isinya = pg_fetch_assoc($resultSKMD)) {
	$features = array(
		'properties' => array(
			'no_surat' => $isinya['no_surat']
			)
		);
	array_push($hasil['features'], $features);
}
echo json_encode($hasil);


?>