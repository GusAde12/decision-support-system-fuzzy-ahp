<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from tb_alternatif where kode_alternatif='$id'");
 
 echo '<script language="javascript" type="text/javascript">
alert("data berhasil di hapus!");</script>';
echo "<meta http-equiv='refresh' content='2; url=datatomanager.php'>";
// mengalihkan halaman kembali ke index.php

 
?>