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
<div class="page-header" >
    <h1>Tambah Alternatif</h1>
</div>
<div style="padding-left: 400px;">
<div class="row">
    <div class="col-sm-8" align="left">
        <?php if ($_POST) include 'aksi.php' ?>
        <form method="post" enctype="multipart/form-data" align="left" >
            <div class="form-group">
                <label>Kode <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode" value="<?= $_POST['kode'] ?>" />
            </div>
            <div class="form-group">
                <label>Nama Alternatif <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="<?= $_POST['nama'] ?>" />
            </div>
            <div class="form-group">
                <label>Alamat <span class="text-danger">*</span></label>
                <textarea class="form-control" type="text" name="alamat" value="<?= $_POST['alamat'] ?>" /></textarea>
            </div>
            <div class="form-group">
                <label>No Ktp <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="no_ktp" value="<?= $_POST['no_ktp'] ?>" />
            </div>
            <div class="form-group">
                <label>No Telepon <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="no_tlp" value="<?= $_POST['no_tlp'] ?>" />
            </div>
            <div class="form-group">
                <label>Keterangan </label>
                <textarea class="form-control editor" name="keterangan"><?= $_POST['keterangan'] ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>