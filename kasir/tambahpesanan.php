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
    <link rel="stylesheet" href="../kasir/style.css">
</head>
<body>

    <div class="all">
        <div class="head">
            <h1>FUTSAL OK</h1>
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
            <h2 style="text-align: center; margin-top: 30px; margin-bottom: 25px;">Tambah pesanan</h2>

                <form action="proses.php?aksi=tambahpesanan" method="post">
                    <ul>
                        <li>
                            <label for="nama_penyewa">Nama Penyewa : </label>
                        </li>

                        <select name="id_penyewa" id="nama_penyewa">
                            <option disabled selected>Pilih Nama Penyewa</option>

                            <?php foreach( $dbfutsal -> tampilanpenyewa() as $option ) : ?>
                                <option value="<?php echo $option['id_penyewa'] ?>"><?php echo $option['nama_penyewa'] . ' - ' . $option['alamat'] . ' - ' . $option['no_telp'] ?></option>
                            <?php endforeach ?>
                        </select>

                        
                        <li>
                            <label for="nama_lapangan">Nama Lapangan : </label>
                        </li>

                        <select name="id_lapangan" id="nama_lapangan">
                            <option disabled selected>Pilih Lapangan</option>

                            <?php foreach( $dbfutsal -> tampilanlapangan() as $option ) : ?>
                                <option value="<?php echo $option['id_lapangan'] ?>"><?php echo $option['nama_lapangan'] . ' ' . '- Rp ' . $option['harga'] ?></option>
                            <?php endforeach ?>
                        </select>

                        <li>
                            <label for="waktu">Lama Penyewaan : </label>
                        </li>
                        <input type="number" name="waktu" id="waktu">

                        <br><br>
                        <button type="submit">Tambah</button>
                    </ul>
                </form>
        </div>
    </div>

</body>
</html>
