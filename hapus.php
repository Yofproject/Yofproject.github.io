<?php
include('koneksi.php');
 
$id = $_GET['id'];
 
$query = mysqli_query($koneksi, "DELETE FROM tb_penyewa WHERE id_penyewa='$id'");
 
if($query){
 echo "<script>alert('DATA MEMBER TELAH DI HAPUS');window.location.href='list_penyewa.php'</script>";;
}
 
?>