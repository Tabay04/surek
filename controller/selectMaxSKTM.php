<?php

include "connect.php";

$sktmMax="SELECT no_surat FROM sktm";

$resultSKTM=pg_query($sktmMax);
$hasil = array(
	'features' => array()
	);
while ($isinya = pg_fetch_assoc($resultSKTM)) {
	$features = array(
		'properties' => array(
			'no_surat' => $isinya['no_surat']
			)
		);
	array_push($hasil['features'], $features);
}
echo json_encode($hasil);


?>