<!DOCTYPE html>
<html>
<head>
    <title>LAPOR...</title>
</head>
<body>
    <center>
        <h2>LAPORAN DATA HASIL PERHITUNGAN</h2>
        <hr />
    </center>
    <table border="1" style="width: 100%">
        <tr>
            <th width="1%">Rangking</th>
            <th>Nama</th>
            <th>Nilai Total</th>
            <th width="5%">Tanggal</th>
        </tr>
    <?php
    include 'koneksi.php';
    //$no = 1;
    $query=mysqli_query($koneksi, "SELECT * FROM tb_alternatif order by rank ASC");
    while ($row=mysqli_fetch_array($query))
    {
        ?>
        <tr>
            <td><?php echo $row['rank'];?></td>
            <td><?php echo $row['nama_alternatif'];?></td>
            <td><?php echo $row['total'];?></td>
            <td><?php echo $row['tanggal'];?></td>
            
        </tr>
    <?php 
        }
        ?>
</table>

<script>
        window.print();
    </script>