<?php

session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$sandi = $_POST['sandi'];
 
$login = mysqli_query($koneksi,"SELECT * FROM tb_login WHERE nama='$nama' AND sandi='$sandi'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="admin"){
 
		$_SESSION['nama'] = $nama;
		$_SESSION['level'] = "admin";

		echo "<script>alert('Selamat Datang Admin!!!');window.location.assign('list_penyewa.php');</script>";
 
	}else if($data['level']=="kasir"){

		$_SESSION['nama'] = $nama;
		$_SESSION['level'] = "kasir";
        echo "<script>alert('Selamaat Datang Kasir!!!');window.location.assign('dashboard.php');</script>";
 
	// cek jika user login sebagai pengurus
	} else{

		echo "<script>alert('Gagal Login Sebagai Admin Atau Kasir!!');window.location.assign('login.php');</script>";
	}	

}else{
	echo "<script>alert('Gagal Login!!');window.location.assign('login.php');</script>";
}

?>
