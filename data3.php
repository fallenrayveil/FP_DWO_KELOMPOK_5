<?php
//setting header to json
header('Content-Type: application/json');

include('koneksi.php');
$query = sprintf("SELECT SUM(fakta_sales.OrderQty) as total, produk.NamaProduk FROM fakta_sales JOIN produk ON fakta_sales.ProductID = produk.ProductID GROUP BY produk.NamaProduk ORDER BY total DESC LIMIT 10");
$result3 = $koneksi->query($query);

$data3 = array();
foreach ($result3 as $row3){
	$data3[] = $row3;
}

$result3 -> close();

print json_encode($data3);
?>