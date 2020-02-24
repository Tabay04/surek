<?php

include "connect.php";

$skbbMax="SELECT no_surat FROM skbb";

$resultSKBB=pg_query($skbbMax);
$hasil = array(
	'features' => array()
	);
while ($isinya = pg_fetch_assoc($resultSKBB)) {
	$features = array(
		'properties' => array(
			'no_surat' => $isinya['no_surat']
			)
		);
	array_push($hasil['features'], $features);
}
echo json_encode($hasil);


?>