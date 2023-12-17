<?php

require 'koneksi.php';

if(isset($_POST['submit'])){

    $id_tipe_kamar = $_POST['id_tipe_kamar'];
    $no_kamar = $_POST['no_kamar'];

    $query = "INSERT INTO tb_kamar(id_tipe_kamar, no_kamar) VALUES ( '$id_tipe_kamar', '$no_kamar' )";

    $sql = mysqli_query($koneksi, $query); 

    if($sql){
        echo "
        <script>
            alert('Berhasil Input Data!');
            window.location.href='kamar.php'
        </script>
        ";

    } else {
        echo "
        <script>
            alert('Gagal Input Data!!!');
            window.location.href='kamar.php'
        </script>
        ";
    }
}
?>








