<?php

    include 'koneksi.php';
    $dbfutsal = new database;

    $aksi = $_GET["aksi"];

    // Tambah Lapangan
    if( $aksi == "tambahlapangan" ){
        $dbfutsal -> tambahlapangan($_POST["nama_lapangan"], $_POST["harga"]);
        header("Location: menulapangan.php");
    } else if( $aksi== "hapuspesanan" ){
        $dbfutsal -> hapuspesanan($_GET["id_pesanan"]);
        header("Location: home.php");
    }

    // Tambah Penyewa
    if( $aksi == "tambahpenyewa" ){
        $dbfutsal -> tambahpenyewa($_POST["nama_penyewa"], $_POST["alamat"], $_POST["no_telp"]);
        header("Location: menupenyewa.php");
    }

    // Tambah pesanan
    if( $aksi == "tambahpesanan" ){
        $id_lapangan = $_POST["id_lapangan"];
        $query = mysqli_query(mysqli_connect("localhost", "root", "", "db_futsal"), "SELECT harga FROM lapangan WHERE id_lapangan = '$id_lapangan' ");

        while( $row = mysqli_fetch_array($query) ){
            $total_pembayaran = $row["harga"] * $_POST["waktu"];
            $dbfutsal -> tambahpesanan($_POST["id_penyewa"], $_POST["id_lapangan"], $row["harga"], $_POST["waktu"], $total_harga);
            header("Location: datapesanan.php");
        }
    }
?>
