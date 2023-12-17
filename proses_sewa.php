<?php

require 'koneksi.php';

if(isset($_POST['submit'])){

    $idkamar = $_POST['no_kamar'];
    $nama = $_POST['nama_penyewa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $daerah_asal = $_POST['daerah_asal'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nohp = $_POST['no_hp'];
    $email = $_POST['email'];
    $id_tipe = $_POST['tipe_kamar'];
    $harga = $_POST['harga_kamar'];

    $validasi= "SELECT*FROM tb_penyewa WHERE id_kamar='$idkamar'";
    $v = mysqli_query($koneksi, $validasi);

    if (mysqli_num_rows($v)==0) {

        $query = "INSERT INTO tb_penyewa(id_kamar, nama_penyewa, jenis_kelamin, daerah_asal, tanggal_lahir, no_hp, email, id_tipe_kamar, harga_kamar) 
        VALUES ('$idkamar', '$nama', '$jenis_kelamin', '$daerah_asal', '$tanggal_lahir', '$nohp', '$email', '$id_tipe', '$harga')";

        $sql = mysqli_query($koneksi, $query); 
    
        if($sql){
            echo "
            <script>
                alert('Berhasil Sewa Kamar!');
                window.location.href='list_penyewa.php'
            </script>
            ";
    
        } else {
            echo "
            <script>
                alert('Gagal Melakukan Penyewaan!!!');
                window.location.href='sewa_kamar.php'
            </script>
            ";
        }

    } else {

        echo "
        <script>
            alert('Kamar Sudah Ditempati!!!');
            window.location.href='sewa_kamar.php'
        </script>
        ";

    }


}
?>








