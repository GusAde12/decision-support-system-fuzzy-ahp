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

<div class="page-header">
    <h1>Tambah Data USER</h1>
</div>

      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH DATA USER</li>
      </ol>
    </section>
    <div style="padding-left: 400px;">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-7">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="tambah_user_proses.php">
              <div class="box-body" align="left">
               
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>
                
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="user" class="form-control" placeholder="Username" required>
                </div>
                 <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="pass" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control" name="level">
                    <option value="">- Pilih Jabatan -</option>
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="kolektor">Kolektor</option>



                    <!-- <option value="Jabatan 2">Jabatan 2</option>
                    <option value="Jabtan 3">Jabtan 3</option> -->
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              
              
                 <button onclick="goBack()" class="btn btn-primary"><i class="glyphicon glyphicon-remove"></i> Kembali</button>
                 <script>
                   function goBack(){
                    window.history.back();
                   }
                 </script>
              </div>
            </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

