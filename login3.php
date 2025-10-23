<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">

	<link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	
</head>
<body>

	<?php
		 //Fungsi untuk mencegah inputan karakter yang tidak sesuai
		 function input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		//Cek apakah ada kiriman form dari method post
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			session_start();
			include "koneksi.php";
			$username = input($_POST["user"]);
			$p = input(md5($_POST["pass"]));

			$sql = "SELECT * from tb_admin where user='".$username."' and pass='".$p."' limit 1";
			$hasil = mysqli_query ($kon,$sql);
			$jumlah = mysqli_num_rows($hasil);

			if ($jumlah>0) {
				$row = mysqli_fetch_assoc($hasil);
				$_SESSION["id_user"]=$row["id_user"];
				$_SESSION["user"]=$row["user"];
				$_SESSION["nama"]=$row["nama"];
				//$_SESSION["jabatan"]=$row["jabatan"];
				$_SESSION["level"]=$row["level"];
		
		
				if ($_SESSION["level"]=$row["level"]==1)
				{
					echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="index.php";</script>';
				} else if ($_SESSION["level"]=$row["level"]==2)
				{
					echo '<script language="javascript">alert("Anda berhasil Login kolektor!"); document.location="index3.php";</script>';
				}else if ($_SESSION["hak_akses"]=$row["hak_akses"]==3){
					echo '<script language="javascript">alert("Anda berhasil Login manager!"); document.location="manager/manager.php";</script>';
				}
		
				
			}else {
				
			  echo '<script language="javascript" type="text/javascript">
					alert("Maaf username atau password salah!");</script>';

			}

		}
	
	?>

	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg">
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
				<h2>Koperasi Jaya Amerta Bumi</h2>
			<div class="form-group">
				<p><input type="text" placeholder="Username" name="username" class="form-control"></p>
			</div>

			<div class="form-group">
				<p><input type="password" placeholder="Password" name="password" class="form-control"></p>
			</div>
			<div class="form-group">	
				<button type="submit" value="Login"></button>
			</div>	
			</form>
		</div>

	</div><!-- container -->

	<!-- JS  -->

	
<!-- End Document -->
</body>
</html>




