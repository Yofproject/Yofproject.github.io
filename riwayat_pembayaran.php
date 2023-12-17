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
      <hr class="h-color mx-2">
      <ul class="list-unstyled px-2">
        
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
        
      <h3 class="h3">RIWAYAT PEMBAYARAN</h3>
      </nav>
      
      <div class="card">
	<div class="card-header">
	<a href="riwayat_pembayaran.php" class="btn btn-primary btn-icon-split">
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
                    <th style="text-align:center">Nama Penyewa</th>
                    <th style="text-align:center">Tanggal Huni</th>
                    <th style="text-align:center">Tanggal Jatuh Tempo</th>
                    <th style="text-align:center">Nama Kasir</th>
                    <th style="text-align:center">Harga Kamar</th>
                    <th style="text-align:center">Total Bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require('koneksi.php');
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT* from tb_pembayaran");
                        while($tampil = mysqli_fetch_array($data)){
                            
                        ?>
                    <tr>
                        <td style="text-align:center"><?php echo $no; ?></td>
                        <td style="text-align:center"><?php echo $tampil ['nama_penyewa'] ?></td>
                        <td style="text-align:center"><?php echo $tampil ['tanggal_huni'] ?></td>
                        <td style="text-align:center"><?php echo $tampil ['tanggal_jatuh_tempo']?></td>
                        <td style="text-align:center"><?php echo $tampil ['nama_user'] ?></td>
                        <td style="text-align:center">Rp. <?php echo $tampil ['harga_kamar']?></td>
                        <td style="text-align:center">Rp. <?php echo $tampil ['total'] ?></td>
                           
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
    </div>
    </div>
    </div>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>