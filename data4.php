<?php
//setting header to json
header('Content-Type: application/json');

include('koneksi.php');
$query = sprintf("SELECT SUM(fakta_sales.TotalDue) as total, produk.Kategori FROM fakta_sales JOIN produk ON fakta_sales.ProductID = produk.ProductID WHERE produk.Kategori is NOT NULL GROUP BY produk.Kategori;");
$result4 = $koneksi->query($query);

$data4 = array();
foreach ($result4 as $row4){
	$data4[] = $row4;
}

$result4 -> close();

print json_encode($data4);
?>