<?php

$nama = $_POST['nama'];
$sandi = $_POST['sandi'];
$level = $_POST['level'];
$no_hp = $_POST['no_hp'];

include 'koneksi.php';

$query_validasi= "SELECT*FROM tb_login WHERE no_hp='$no_hp'";
$query = mysqli_query($koneksi, $query_validasi);

if(mysqli_num_rows($query)==0){
    $query_register = mysqli_query($koneksi, "INSERT INTO tb_login(nama, sandi, level, no_hp) VALUES ('$nama','$sandi','$level','$no_hp')");
    if($query_register){?>
        <script>
            alert("Akun Berhasil Dibuat");
            window.location.assign("login.php");
        </script>
        <?php } 
} else {
    echo "<script>alert('Nomor HP Sudah Terdaftar');window.location.assign('register.php');</script>";
}







