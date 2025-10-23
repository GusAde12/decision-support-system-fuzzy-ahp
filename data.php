<?php
header('Content-Type: application/json');
include 'koneksi.php';
//$conn = mysqli_connect("localhost","root","","fuzzy_ahp")
$sqlQuery = "SELECT kode_alternatif,nama_alternatif,total,rank FROM tb_alternatif ORDER BY kode_alternatif";
$result = mysqli_query($koneksi,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($koneksi);
echo json_encode($data);
?>