<?php 
    
    session_start();

    if(empty($_SESSION['nama'])){

        echo "<script>alert('Maaf Anda Harus Login Dahulu');window.location.assign('login.php');</script>";
    }

    $page = $_SESSION['level'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN MEMBER</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>

  <body>
  
  <div class="main-container d-flex">
    <div class="sidebar" id="side_nav">
      <div class="header-box px-2 pt-3 pb-2">
       
        <h1 class="fs-3"><span class="bg-white text-dark rounded shadow px-3 me-2 "><i class="fa fa-home"></i></span><span class="text-white"> PICO KOST</span></h1>
      </div>
      
      <ul class="list-unstyled px-2">
      <hr class="h-color mx-2">

      <?php if ( $page == 'admin' ) { ?>

        
      <li class="active"><a href="list_penyewa.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-book"></i> List Penyewa</a></li>
      <li class="active"><a href="list_bayar.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-money"></i> List Bayar</a></li>
      <li class="active"><a href="sewa_kamar.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-bed"></i> Sewa Kamar</a></li>
      <li class="active"><a href="kamar.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-plus-square"></i> Kamar</a></li>
      <li class="active"><a href="tipe_kamar.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-bed"></i> Tipe Kamar</a></li>

      <?php } ?>

      <li class="active"><a href="riwayat_pembayaran.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-bell"></i> Riwayat Pembayaran</a></li>
      <hr class="h-color mx-2">
      <li class=""><a href="login.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-arrow-left"></i> Logout</a></li>
      </ul>
      
      </div>
      <div class="content">

      <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        
      <h3 class="h3">LIST PENYEWA</h3>
      
      </nav>
      
    </div>
    <div class="card">
	<div class="card-header">
	<a href="" class="btn btn-primary btn-icon-split">
		<span class="icon text-white-50">
			<i class="fa fa-arrow-left"></i>
		</span>
		<span class="text">Kembali</span>
	</a>
    </div>

    <div class="table-responsive pt-3 ">
        <table class="table table-bordered static-top shadow">
            <thead>
                <tr class="table-primary">
                    <th style="text-align:center">No</th>
                    <th style="text-align:center">ID</th>
                    <th style="text-align:center">No Kamar</th>
                    <th style="text-align:center">Nama</th>
                    <th style="text-align:center">Gender</th>
                    <th style="text-align:center">Daerah Asal</th>
                    <th style="text-align:center">Tanggal Lahir</th>
                    <th style="text-align:center">No HP</th>
                    <th style="text-align:center">Email</th>
                    <th style="text-align:center">Tipe Kamar</th>
                    <th style="text-align:center">Harga Kamar</th>
                    <th style="text-align:center">Tanggal Huni</th>
                    <th colspan="2" style="text-align:center">Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require('koneksi.php');
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT* from tb_penyewa INNER JOIN tb_kamar ON tb_kamar.id_kamar = tb_penyewa.id_kamar INNER JOIN tipe_kamar ON tipe_kamar.id_tipe_kamar = tb_penyewa.id_tipe_kamar ORDER BY id_penyewa ASC");
                        while($tampil = mysqli_fetch_array($data)){
                            
                        ?>
                    <tr>
                        <td style="text-align:center"><?php echo $no; ?></td>
                        <td style="text-align:center"><?php echo $tampil ['id_penyewa'] ?></td>
                        <td style="text-align:center"><?php echo $tampil ['no_kamar'] ?></td>
                        <td style="text-align:center"><?php echo $tampil ['nama_penyewa'] ?></td>
                        <td style="text-align:center"><?php echo $tampil ['jenis_kelamin'] ?></td>
                        <td style="text-align:center"><?php echo $tampil ['daerah_asal']?></td>
                        <td style="text-align:center"><?php echo $tampil ['tanggal_lahir']?></td>
                        <td style="text-align:center"><?php echo $tampil ['no_hp'] ?></td>
                        <td style="text-align:center"><?php echo $tampil ['email'] ?></td>
                        <td style="text-align:center"><?php echo $tampil ['tipe_kamar'] ?></td>
                        <td style="text-align:center">Rp. <?php echo $tampil ['harga_kamar'] ?></td>
                        <td style="text-align:center"><?php echo $tampil ['tanggal_huni'] ?></td>
                        <td style="text-align:center"><a href="pembayaran.php?id_penyewa=<?= $tampil['id_penyewa'] ?>" onclick="return confirm('Transaksi Member?')">Bayar</a> |
                        <a href="hapus.php?id=<?= $tampil['id_penyewa'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a></td>
                           
                        <?php
                        $no++;
                        }
                        ?>
                    </tr>
            </tbody>
        </table>
    </div>


    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>