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
    <title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="all">
    <div class="head">
        <h1>FUTSAL UHUY</h1>
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
                <h2 style="text-align: center; margin-bottom: 20px;">DATA LAPANGAN FUTSAL</h2>

                <a href="tambahlapangan.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px;">Tambah Pesanan</a><br><br>

                <table border="1" cellspacing="0" cellpadding="9" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
        <tr>
            <th>No</th>
            <th>Nama Lapangan</th>
            <th>Harga Lapangan</th>
        </tr>
<?php
$no=1;
foreach($dbfutsal->tampilanlapangan() as $x):
?>
<tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $x ['nama_lapangan'];?></td>
    <td><?php echo $x ['harga'];?></td>
</tr>
<?php endforeach;?>
</table>
</div>
</center>
</body>
</html>