
<?php
include "config.php";
if($_POST)
{
$user = $_POST['nama'];
$tanggal = date("Y-m-d H:i:s");
 
$sql = ("INSERT INTO hasil(id_hasil,nama,periode) VALUES('','$nama','$tanggal')");

if (!mysqli_query($config,$sql)) {
	die('mysqli_error');
}else{
	echo '<script>alert("data Berhasi di tambah");
	window.location.href="inputxx.php"</script>';
}
}
?>