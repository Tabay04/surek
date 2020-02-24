<?php

include "connect.php";

$SKUMax="SELECT no_surat FROM sku";

$resultSKU=pg_query($SKUMax);
$hasil = array(
	'features' => array()
	);
while ($isinya = pg_fetch_assoc($resultSKU)) {
	$features = array(
		'properties' => array(
			'no_surat' => $isinya['no_surat']
			)
		);
	array_push($hasil['features'], $features);
}
echo json_encode($hasil);


?>