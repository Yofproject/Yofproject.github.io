<?php

require 'koneksi.php';

if(isset($_POST['submit'])){

    $tipe_kamar = $_POST['tipe_kamar'];
    $harga_kamar = $_POST['harga_kamar'];

    $query = "INSERT INTO tipe_kamar(tipe_kamar, harga_kamar) VALUES ('$tipe_kamar', '$harga_kamar' )";

    $sql = mysqli_query($koneksi, $query); 

    if($sql){
        echo "
        <script>
            alert('Berhasil Input Data!');
            window.location.href='dashboard.php'
        </script>
        ";

    } else {
        echo "
        <script>
            alert('Gagal Input Data!!!');
            window.location.href='dashboard.php'
        </script>
        ";
    }
}
?>








