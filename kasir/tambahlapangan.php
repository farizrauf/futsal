<?php 
	include 'koneksi.php';
	$dbfutsal = new database;
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="../kasir/style.css">
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
    <div class="box">
        <h2 style="text-align: center;margin-top: 30px; margin-bottom: 25px">Tambah Data Lapangan</h2>
 	<table style="padding-center: 720px;">
        <form action="proses.php?aksi=tambahlapangan" method="post">
            <tr>
                <td>Nama Lapangan : </td>
                <td><input type="text" name="nama_lapangan"></td>
            </tr>
            <tr>
                <td>Harga Lapangan : </td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
    </div>
    </div>
 </body>
 </html>