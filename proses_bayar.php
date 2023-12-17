<?php

require 'koneksi.php';

session_start();

if(isset($_POST['submit'])){

    $id_penyewa = $_POST['nama_penyewa'];
    $id_user = $_SESSION['nama'];
    $idkamar = $_POST['no_kamar'];
    $id_tipe = $_POST['tipe_kamar'];
    $tanggal_huni = $_POST['tanggal_huni'];
    $tanggal_jatuh_tempo = $_POST['tanggal_jatuh_tempo'];
    $harga = $_POST['harga_kamar'];
    $total = $_POST['total'];
    

    if ( $harga <= $total ) {
        $query = "INSERT INTO tb_pembayaran(nama_user, nama_penyewa, tanggal_huni, tanggal_jatuh_tempo, harga_kamar, total) VALUES ('$id_user', '$id_penyewa', '$tanggal_huni', '$tanggal_jatuh_tempo', '$harga', '$total' )";

        $sql = mysqli_query($koneksi, $query); 

        $id_pembayaran = mysqli_insert_id($koneksi);

        if ($sql) {
            
            $query2 = "INSERT INTO detail_pembayaran(id_pembayaran, nama_penyewa, id_kamar, id_tipe_kamar, tanggal_jatuh_tempo, harga_kamar, total) VALUES ('$id_pembayaran', '$id_penyewa', '$idkamar', '$id_tipe', '$tanggal_jatuh_tempo', '$harga', '$total' )";
            
            $sql2 = mysqli_query($koneksi, $query2); 
                
            echo "<script>alert('Transaksi Berhasil!!!');window.location.assign('riwayat_pembayaran.php');</script>";

        } else {
            echo "<script>alert('Transaksi Gagal!!!');window.location.assign('list_penyewa.php');</script>";
        }
    } else {
        echo "<script>alert('Pembayaran Gagal, Nominal Uang Kurang !!!');window.location.assign('list_penyewa.php');</script>";
    }


} else {

    echo "<script>alert('Sistem Masalah!!!');window.location.assign('list_penyewa.php');</script>";    
}


?>








