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
            $p = input($_POST["pass"]);

            $sql = "SELECT * from tb_admin where user='".$username."' and pass='".$p."' limit 1";
            $hasil = mysqli_query ($koneksi,$sql);
            $jumlah = mysqli_num_rows($hasil);

            if ($jumlah>0) {
                $row = mysqli_fetch_assoc($hasil);
                $_SESSION["id_user"]=$row["id_user"];
                $_SESSION["user"]=$row["user"];
                $_SESSION["nama"]=$row["nama"];
                //$_SESSION["jabatan"]=$row["jabatan"];
                $_SESSION["level"]=$row["level"];
        
        
                if ($_SESSION["level"]=$row["level"]=='admin')
                {
                    echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="alternatif.php";</script>';
                } else if ($_SESSION["level"]=$row["level"]=="kolektor")
                {
                    echo '<script language="javascript">alert("Anda berhasil Login kolektor!"); document.location="home_kolektor.php";</script>';
                }else if ($_SESSION["level"]=$row["level"]=="manager"){
                    echo '<script language="javascript">alert("Anda berhasil Login manager!"); document.location="home_manager.php";</script>';
                }
        
                
            }else {
                
              echo '<script language="javascript" type="text/javascript">
                    alert("Maaf username atau password salah!"); document.location="login.php";</script>';

            }

        }
    
    ?>