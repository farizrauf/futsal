<?php

    class database{
        var $host = "localhost";
        var $name = "root";
        var $pw = "";
        var $db = "db_futsal";

        // koneksi lapangan 
        function tampilanlapangan(){
            $koneksi = mysqli_connect( $this->host, $this->name, $this->pw, $this->db );
            $data = mysqli_query($koneksi, "SELECT * FROM lapangan");
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }

        // Tambah lapangan
        function tambahlapangan($nama_lapangan, $harga){
            $koneksi = mysqli_connect( $this->host, $this->name, $this->pw, $this->db );

            mysqli_query($koneksi, "INSERT INTO lapangan VALUES('', '$nama_lapangan', '$harga')");
        }

        // Koneksi penyewa
        function tampilanpenyewa(){
            $koneksi = mysqli_connect( $this->host, $this->name, $this->pw, $this->db );
            $data = mysqli_query($koneksi, "SELECT * FROM penyewa");

            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }

        // Tambah penyewa
        function tambahpenyewa($nama_penyewa, $email, $telp){
            $koneksi = mysqli_connect( $this->host, $this->name, $this->pw, $this->db );

            mysqli_query($koneksi, "INSERT INTO penyewa VALUES('', '$nama_penyewa', '$alamat', '$no_telp')");
        }

        // Koneksi pesanan
        function tampilpesanan(){
            $koneksi = mysqli_connect( $this->host, $this->name, $this->pw, $this->db );
            $data = mysqli_query($koneksi, "SELECT
                                                penyewa.id_penyewa,
                                                lapangan.id_lapangan,
                                                pesanan.id_pesanan,
                                                penyewa.nama_penyewa,
                                                penyewa.alamat,
                                                penyewa.no_telp,
                                                lapangan.nama_lapangan,
                                                pesanan.harga,
                                                pesanan.waktu,
                                                pesanan.total_pembayaran
                                            FROM lapangan INNER JOIN pesanan ON lapangan.id_lapangan = pesanan.id_lapangan
                                            INNER JOIN penyewa ON penyewa.id_penyewa = pesanan.id_penyewa;");

            while($d = mysqli_fetch_array($data)){ 
                $hasil[] = $d;
            }
            return $hasil;
        }

        // Tambah pesanan
        function tambahpesanan($id_penyewa, $id_lapangan, $harga, $waktu, $total_pembayaran){
            $koneksi = mysqli_connect( $this->host, $this->name, $this->pw, $this->db );

            mysqli_query($koneksi, "INSERT INTO pesanan VALUES('', $id_penyewa, $id_lapangan, $harga, $waktu, $total_pembayaran)");
        }
        
    }?>
