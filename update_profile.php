<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_user'];
$nama = $_POST['nama'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$level = $_POST['level'];

 
// update data ke database
mysqli_query($koneksi,"UPDATE tb_admin SET nama='$nama', user='$user', pass='$pass', level='$level' WHERE id_user='$id'");
 
// mengalihkan halaman kembali ke index.php
echo '<script>alert("Data Berhasil Di Ubah !!!");
window.location.href="user.php"</script>';
 
?>