<?php
//setting header to json
header('Content-Type: application/json');

include('koneksi.php');
$query = sprintf("SELECT COUNT(a.territory) total, a.territory territory FROM shipment_fact shf JOIN address a ON shf.address_id = a.address_id GROUP BY a.territory");
$result5 = $koneksi->query($query);

$data5 = array();
foreach ($result5 as $row5){
	$data5[] = $row5;
}

$result5 -> close();

print json_encode($data5);
?>