<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'kost_2';

	$koneksi = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke internet');
	if (!$koneksi) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

?>