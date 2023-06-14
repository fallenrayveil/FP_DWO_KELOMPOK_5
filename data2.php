<?php
//setting header to json
header('Content-Type: application/json');

include('koneksi.php');
$query = sprintf("SELECT e.name as nama, COUNT(sf.salesfact_id) total FROM sales_fact sf JOIN employee e on e.employee_id=sf.employee_id GROUP by sf.employee_id ORDER BY total DESC LIMIT 10;");
$result2 = $koneksi->query($query);

$data2 = array();
foreach ($result2 as $row2){
	$data2[] = $row2;
}

$result2 -> close();

print json_encode($data2);
?>