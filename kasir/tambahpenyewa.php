<?php 
	include 'koneksi.php';
	$dbfutsal = new database;
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Data Penyewa</title>
    <link rel="stylesheet" type="text/css" href="../kasir/style.css">
 </head>
 <body>
 	<div class="all">
 	<div class="head">
 		<h1>Data Penyewa</h1>
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
        <h2 style="text-align: center;margin-top: 30px; margin-bottom: 25px">Tambah Data Penyewa</h2>
 	<table style="padding-center: 720px;">
        <form action="proses.php?aksi=tambahpenyewa" method="post">
        <center>
            <tr>
                <td>Nama Penyewa : </td>
                <td><input type="text" name="nama_penyewa"></td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="text" name="no_telp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </form>
    </table>
    </div>
    </div>
 </body>
 </html>