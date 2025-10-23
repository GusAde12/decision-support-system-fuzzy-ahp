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

$row = $db->get_row("SELECT * FROM tb_kriteria WHERE kode_kriteria='$_GET[ID]'");
?>
<div class="page-header">
    <h1>Ubah kriteria</h1>
</div>
<div style="padding-left: 400px;">
<div class="row">
    <div class="col-sm-8" align="left">
        <?php if ($_POST) include 'aksi.php' ?>
        <form method="post">
            <div class="form-group">
                <label>Kode <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode" readonly="readonly" value="<?= $row->kode_kriteria ?>" />
            </div>
            <div class="form-group">
                <label>Nama kriteria <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="<?= $row->nama_kriteria ?>" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>