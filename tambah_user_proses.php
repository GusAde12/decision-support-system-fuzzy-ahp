<?php
include "koneksi.php";
if($_POST)
{
$nama = $_POST['nama'];
$username = $_POST['user'];
$password = ($_POST['pass']);
$jabatan = $_POST['level'];
$query = ("INSERT INTO tb_admin(id_user,nama,user,pass,level) VALUES ('','".$nama."','".$username."','".$password."','".$jabatan."')");
if(!mysqli_query($koneksi,$query)){
die('mysqli_error');
}else{
echo '<script>alert("Data Berhasil Ditambahkan !!!");
window.location.href="user.php"</script>';
}
}
?>