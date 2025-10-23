<?php
session_start();

$_SESSION['id_user']='';
$_SESSION['user']='';
$_SESSION['nama']='';
//$_SESSION['jabatan']='';
$_SESSION['level']='';

unset($_SESSION['id_user']);
unset($_SESSION['user']);
unset($_SESSION['nama']);
//unset($_SESSION['jabatan']);
unset($_SESSION['level']);

session_unset();
session_destroy();
echo '<script>alert("Anda Berhasil keluar");
        window.location.href="login.php"; setTimeout(anu,3000);</script>';

?>