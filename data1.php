<?php
//setting header to json
header('Content-Type: application/json');

include('koneksi.php');
$query = sprintf("SELECT customer.NamaCustomer as nama, SUM(fakta_sales.OrderQty) as total FROM fakta_sales JOIN customer on customer.ContactID=fakta_sales.ContactID GROUP by fakta_sales.ContactID ORDER BY total DESC LIMIT 10;");
$result1 = $koneksi->query($query);

$data1 = array();
foreach ($result1 as $row1){
	$data1[] = $row1;
}

$result1 -> close();

print json_encode($data1);
?>