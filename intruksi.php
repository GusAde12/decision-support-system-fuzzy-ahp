<?php
include 'functions.php';
session_start();

if (!isset($_SESSION["user"])) {
    echo '<script>alert("Anda harus login!");
        window.location.href="login.php"; setTimeout(anu,3000);</script>';
    exit;
}

$hak_akses=$_SESSION["level"];

if ($hak_akses!="admin") {
    echo "Anda tidak punya akses pada halaman admin";
    exit;
}

$id_user=$_SESSION["id_user"];
$username=$_SESSION["user"];
$nama=$_SESSION["nama"];
$jabatan=$_SESSION["level"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistem Pendukung Keputusan Pemberian Kredit Koperasi Jaya Amerta Bumi</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,500,500i">
        <link rel="stylesheet" href="assetssw/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assetssw/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assetssw/css/animate.css">
        <link rel="stylesheet" href="assetssw/css/setele.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assetssw/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assetssw/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assetssw/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assetssw/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assetssw/ico/apple-touch-icon-57-precomposed.png">

 

  <title>SPK Metode Fuzzy AHP</title>
  
  <link href="assets/css/general.css" rel="stylesheet" />

  
  <style type="text/css">
      .navbar-inverse{
  background-color:  #32CD32;
       }
    </style>
</head>

<body>
  <!-- Top menu -->
        <nav class="navbar navbar-inverse navbar-fixed-top navbar-no-bg" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="admin.php">Koperasi Jaya Amerta Bumi</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-navbar-1" class="dropdown">
                    <ul class="nav navbar-nav navbar-right" class="dropdown-menu">
                        <li>
                            <a href="alternatif.php">
                                <i class="fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
                         <li>
                            <a href="alternatif2.php">
                                <i class="fa fa-user"></i> <span>Nasabah</span>
                            </a>
                        </li>
                        <li>
                            <a href="kriteria.php">
                                <i class="fa fa-th-large"></i> <span>kriteria</span>
                            </a>
                        </li>
                        <li>
                            <a href="#otherSectionss" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSectionss" >
                                <i class="fa fa-signal"> <i class="caret"></i></i><span>Bobot</span>
                            </a>
                        <ul class="collapse list-unstyled" id="otherSectionss">
                            <li>
                                <a class="scroll-link" href="rel_kriteria.php">Kriteria</a>
                            </li>
                            <li>
                                <a class="scroll-link" href="rel_alternatif.php">Alternatif</a>
                            </li>
                        </ul>
                      </li>
                          <li>
                            <a href="#other" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="other" >
                                <i class="fa fa-calculator"> <i class="caret"></i></i><span>SPK</span>
                            </a>
                        <ul class="collapse list-unstyled" id="other">
                            <li>
                                <a class="scroll-link" href="hitung.php">Perhitungan SPK</a>
                            </li>
                            <li>
                                <a class="scroll-link" href="intruksi.php">Intruksi Perhitungan</a>
                            </li>
                        </ul>
                      </li>
                        <li>
                            <a href="datatomanager.php">
                               <i class="fa fa-calendar"></i> <span>Hasil Perhitungan</span>
                            </a>
                        </li>
                         <li>
                            <a href="user.php">
                            <i class="fa fa-user"></i> <span>Profile</span>
                             </a> 
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-sign-out"></i> <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
             </div>
        </nav>


        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-12 text wow fadeInLeft">
                        <h1>Koperasi<strong>Jaya Amerta Bumi</strong></h1>
                       
                    </div>
                </div>
                
            </div>
        </div>
  



<br>
<br>
<div class="container-fluid">
<div class="panel-heading">
<h3>1. Tabel Penentuan Bobot  Dari Parameter Alternatif Calon Penerima Kredit</h3>
<img src="images/parameter.png" class="img-fluid" alt="bobot_parameter">
 <br>
 <h3>2. Tabel Matriks Perbandingan Kepentingan Antar Kriteria</h3> 
 <img src="images/tfn.png" class="img-fluid" alt="tfn">
 <br>
<br>
<ul class="list-unstyled">
  <li>Keterangan :</li>
  <li>Skala Triangular Fuzzy Number :</li>
  <li>T    : Sama Penting             T     : Resiprocal dari T</li>
  <li>CP  : Cukup Lebih Penting       CP’ : Resiprocal dari CP</li>
  <li>KP  : Kuat Penting              KP’ : Resiprokal dari KP</li>
  <li>KP  : Kuat Penting              KP’ : Resiprokal dari KP</li>
  <li>LK  : Lebih Kuat Penting        LK’ : Resiprokal dari LK</li>
  <li>M    : Mutlak Lebih Penting     M’   : Resiprocal dari M</li>
</ul>
<br>
<h3>3. Selanjutnya menentukan matriks kepentingan antar kriteria fuzzy AHP<br>
Tabel  Matriks Parwise Comparison Antar Kriteria
</h3>
<img src="images/parwise.png" class="img-fluid" alt="parwise">
<br>
<h3>4. Menentukan total baris dan kolom dari fuzzy tringular number
Nilai yang didapatkan dari perhitungan setiap kolom L, M, dan U.<br>
Tabel LMU
</h3>
<img src="images/lmu1.png" class="img-fluid" alt="lmu1">
<br>
<h3>5. Nilai Sintesis Fuzzy<br>
 Setelah nilai jumlah baris dan kolom diperoleh dari masing-masing <br> matriks perbandingan, selanjutnya menggunakan persamaan (1).<br> Diperoleh nilai sintesis fuzzy untuk masing-masing kriteria sebagai berikut:
</h3>
<br><img src="images/sintetis1.png" class="img-fluid" alt="sintetis1">
    <img src="images/sintetis2.png" class="img-fluid" alt="sintetis2">
    <br><h3>Tabel Hasil Perhitungan Sintetis Fuzzy</h3>
    <img src="images/hasil_sintetis.png" class="img-fluid" alt="_hasil_sintetis">
    <br>
    <br>
    <h2>6. Menentukan nilai derajad keanggotaan</h2><br>
    <img src="images/derajad1.png" class="img-fluid" alt="derajad1"><br>
    <img src="images/derajad2.png" class="img-fluid" alt="derajad2">
    <br>
    <br>
    <h3>7. Normalisasi bobot vektor dapat dilihat pada tabel dibawah</h3>
    <h4>Tabel Normalisasi Bobot Vektor</h4>
    <img src="images/nbv.png" class="img-fluid" alt="nbv">
    <br>
    <br>
    <h3>8.Hasil pembobotan dapat dilihat pada tabel dibawah </h3>
    <h4>Tabel Hasil Pembobotan</h4>
    <img src="images/hasil_bobot.png" class="img-fluid" alt="hasil_bobot">
    <br>
    <br>
    <h3>9. Hasil perangkingan dapat dilihat pada tabel dibawah</h3>
    <h4>Tabel Hasil Perangkingan</h4>
    <img src="images/rangking.png" class="img-fluid" alt="rangking">
</div>
</div>
   <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 footer-copyright">
                        &copy; Copyright by Finix <a href="http://azmind.com"></a>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

   
</body>

</html>
