<?php
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
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="favicon.ico" />

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
                               <i class="fa fa-calculator"></i> <span>Hasil Perhitungan</span>
                            </a>
                        </li>
                         <li>
                            <a href="user.php">
                            <i class="fa fa-user"></i> <span>Profile</span>
                             </a> 
                        </li>
                        <li>
                            <a href="index.php?m=logout">
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
  
  <div class="page-header">
    <h1>USER</h1>
</div>
      <ol class="breadcrumb">
        <li><a href="alternatif.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA USER</li>
      </ol>
    </section>

    <!-- Main content -->
    <div class="container">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header" align="left">
          <a href="index.php?m=tambah_user" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus" ></i> Tambah</a>
          </div>
          <br>
            <div class="box-body table-responsive">
              <table id="karyawan" class="table table-bordered table-hover">
                <thead>
                <tr>
                  
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Username</th>

                  <th>Jabatan</th>
                  <th>Aksi</th>
        
                </tr>
                </thead>
                <tbody>

                <?php
                include "koneksi.php";
                $no=0;
                $query=mysqli_query($koneksi, "SELECT * FROM tb_admin ORDER BY id_user DESC");
                while ($row=mysqli_fetch_array($query))
                {
                ?>

                <tr>
                
                  <td align="left"><?php echo $no=$no+1;?></td>
                  <td align="left"><?php echo $row['nama'];?></td>
                  <td align="left"><?php echo $row['user'];?></td>
                  
                  <td align="left"><?php echo $row['level'];?></td>
                  
                  <td align="left">
                    <a class="btn btn btn-warning" href="ubah_datakaryawan.php?id=<?php echo $row['id_user'];?> "><span class="glyphicon glyphicon-edit"></span></a>
                   <a href="hapus_user.php?id=<?=$row['id_user'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a> 
                  </td>
                </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>
  </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#karyawan').DataTable();
  });
</script>
  
   <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 footer-copyright">
                        
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


