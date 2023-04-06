<?php
include 'koneksi.php';
$dbfutsal = new database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penyewa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="all">
    <div class="head">
        <h1>MENU PENYEWA</h1>
</div>

<div class="nav">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="menulapangan.php">Menu Lapangan</a></li>
        <li><a href="menupenyewa.php">Menu Penyewa</a></li>
        <li><a href="datapesanan.php">Data Pesanan</a></li>
        <li><a href="../index.php">Logout</a></li>
</ul>
</div>
<center>
            <div class="box">
                <h2 style="text-align: center; margin-bottom: 20px;">DATA PENYEWA LAPANGAN FUTSAL</h2>

                <a href="tambahpenyewa.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px;">Tambah Pesanan</a><br><br>

                <table border="1" cellspacing="0" cellpadding="8" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
        <tr>

            <th>No</th>
            <th>Nama Penyewa</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
        </tr>
<?php
$no=1;
foreach($dbfutsal->tampilanpenyewa() as $x):
?>
<tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $x ['nama_penyewa'];?></td>
    <td><?php echo $x ['alamat'];?></`td>
    <td><?php echo $x ['no_telp'];?></td>
</tr>
<?php endforeach;?>
</table>
</div>
</center>
</body>
</html>