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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="all">
        <div class="head">
             <h1>FUTSAL UHUY</h1>
        </div>

        <div class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="menulapangan.php">Nama Lapangan</a></li>
                <li><a href="menupenyewa.php">Menu Penyewa</a></li>
                <li><a href="datapesanan.php">Data Pesanan</a></li>
                <li><a href="../index.php">Logout</a></li>
            </ul>
        </div>
        <center>
            <div class="box">
                <h2 style="text-align: center; margin-bottom: 20px;">DATA PESANAN LAPANGAN FUTSAL</h2>

                <a href="tambahpesanan.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px;">Tambah Pesanan</a><br><br>

                <table border="1" cellspacing="0" cellpadding="8" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">

            <tr>
        <th>ID</th>
        <th>Nama Penyewa</th>
        <th>Nama Lapangan</th>
        <th>Harga</th>
        <th>Waktu</th>
        <th>Harga Total</th>
       </tr>
       <?php $no = 1; foreach( $dbfutsal->tampilpesanan() as $x ): ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $x["nama_penyewa"]; ?></td>
                        <td><?php echo $x["nama_lapangan"]; ?></td>
                        <td><?php echo $x["harga"]; ?></td>
                        <td><?php echo $x["waktu"]; ?></td>
                        <td><?php echo $x["total_pembayaran"]; ?></td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </center>
    </div>

</body>
</html>
