<?php
include 'functions.php';
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
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="favicon.ico" />

  <title>SPK Metode Fuzzy AHP</title>
  
  <link href="assets/css/general.css" rel="stylesheet" />

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <style type="text/css">
      .navbar-inverse{
  background-color:  #32CD32;
       }
    </style>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="?">SPK Fuzzy-AHP</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <?php if (empty($_SESSION['login'])) : ?>
            <?php

            //<li><a href="?m=hitung"><span class="glyphicon glyphicon-calendar"></span> Perhitungan</a></li>
            
            //<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            ?>
          <?php else : ?>
            <li><a href="?m=alternatif"><span class="glyphicon glyphicon-user"></span> Alternatif</a></li>
            <li><a href="?m=kriteria"><span class="glyphicon glyphicon-th-large"></span> Kriteria</a></li>
            <li class="dropdown">
              <li>
                            <a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections" >
                                <i class="fa fa-signal"> <i class="caret"></i></i><span>Bobot</span>
                            </a>
                        <ul class="collapse list-unstyled" id="otherSections">
                            <li><a href="?m=rel_kriteria"><span class="glyphicon glyphicon-th-large"></span> Nilai bobot kriteria</a></li></font>
                            <li>
                            <li><a href="?m=rel_alternatif"><span class="glyphicon glyphicon-user"></span> Nilai bobot alternatif</font></a></li>
                            
                            </li>
                        </ul>
                      </li>
                    </li>
              <?php
              /*<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-signal"></span> Nilai Bobot<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?m=rel_kriteria"><span class="glyphicon glyphicon-th-large"></span><font color="black"> Nilai bobot kriteria</a></li></font>
                <li><a href="?m=rel_alternatif"><span class="glyphicon glyphicon-user"></span><font color="black"> Nilai bobot alternatif</font></a></li>
              </ul>
            </li>
            */
            ?>
            <li><a href="?m=hitung"><span class="glyphicon glyphicon-calendar"></span> Perhitungan</a></li>
            <li><a href="?m=password"><span class="glyphicon glyphicon-lock"></span> Password</a></li>
            <li><a href="aksi.php?act=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          <?php endif ?>
        </ul>
        <div class="navbar-text"></div>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
  
   <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 footer-copyright">
                        &copy; Copyright by Finix <a href="http://azmind.com">AZMIND</a>
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