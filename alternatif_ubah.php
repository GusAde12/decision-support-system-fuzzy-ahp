<?php
session_start();
if (!isset($_SESSION["user"])) {
    echo '<script>alert("Anda harus login!");
        window.location.href="login.php"; setTimeout(anu,3000);</script>';
    exit;
}

$hak_akses=$_SESSION["level"];

if ($hak_akses!="manager") {
    echo "Anda tidak punya akses pada halaman manager";
    exit;
}

$id_user=$_SESSION["id_user"];
$username=$_SESSION["user"];
$nama=$_SESSION["nama"];
$jabatan=$_SESSION["level"];

$row = $db->get_row("SELECT * FROM tb_alternatif WHERE kode_alternatif='$_GET[ID]'");
?>
<div class="page-header">
    <h1>Ubah Alternatif</h1>
</div>
<div style="padding-left: 400px;">
<div class="row">
    <div class="col-sm-8" align="left">
        <?php if ($_POST) include 'aksi.php' ?>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Kode <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode" readonly="readonly" value="<?= $row->kode_alternatif ?>" />
            </div>
            <div class="form-group">
                <label>Nama Alternatif <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="<?= $row->nama_alternatif ?>" />
            </div>
            <div class="form-group">
                <label>Alamat </label>
                <textarea class="form-control editor" name="alamat"><?= $row->alamat ?></textarea>
            </div>
              <div class="form-group">
                <label>No TLP </label>
                <textarea class="form-control editor" name="no_tlp"><?= $row->no_tlp ?></textarea>
            </div>
              <div class="form-group">
                <label>No KTP </label>
                <textarea class="form-control editor" name="no_ktp"><?= $row->no_ktp ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>