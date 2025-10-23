<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
//$id = $_GET['id'];
$tgl            = $_POST['tanggal'];
//$nama           = $_POST['nama'];
//$jurusan        = $_POST['jurusan'];
//$jenis_kelamin  = $_POST['jenis_kelamin'];
//$alamat         = $_POST['alamat'];
// query SQL untuk insert data
$query="UPDATE tb_alternatif SET tanggal='$tgl'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
// mengalihkan ke halaman index.php
echo "<script>alert('Data yang anda Update sukses');window.location='hitung.php'</script>";
?>