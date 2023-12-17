<?php 
    
    session_start();

    if(empty($_SESSION['nama'])){

        echo "<script>alert('Maaf Anda Harus Login Dahulu');window.location.assign('login.php');</script>";
    }

    $page = $_SESSION['level'];

    include 'koneksi.php';
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


      <!-- <?php if ( $page == 'admin' ) { ?> -->

        
      <li class="active"><a href="list_penyewa.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-book"></i> List Penyewa</a></li>
      <li class="active"><a href="list_bayar.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-money"></i> List Bayar</a></li>
      <li class="active"><a href="sewa_kamar.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-bed"></i> Sewa Kamar</a></li>
      <li class="active"><a href="kamar.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-plus-square"></i> Kamar</a></li>
      <li class="active"><a href="tipe_kamar.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-bed"></i> Tipe Kamar</a></li>

      <!-- <?php } ?> -->
      
      <li class="active"><a href="riwayat_pembayaran.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-bell"></i> Riwayat Pembayaran</a></li>
      <hr class="h-color mx-2">
      <li class=""><a href="login.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-arrow-left"></i> Logout</a></li>
      </ul>
      
      </div>
      
      <div class="content">
      <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">  
        <h3 class="h3">SEWA KAMAR</h3>
        </nav>

        <div class="card">
	<div class="card-header">
	<a href="list_penyewa.php" class="btn btn-primary btn-icon-split">
		<span class="icon text-white-50">
			<i class="fa fa-arrow-left"></i>
		</span>
		<span class="text">Kembali</span>
	</a>

	</div>
    <div class="card-body">
      <form method="post" action="proses_sewa.php">

        <div class="form-group">
          <label>Nama Penyewa</label>
          <input name="nama_penyewa" class="form-control" type="text" placeholder="Masukkan Nama" required><br>
        </div>

        <div class="form-group">
          <label>Jenis Kelamin</label>
          <select name="jenis_kelamin" class="form-control" required>
            <option disabled selected>--Pilih Jenis Kelamin--</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div><br>

        <div class="form-group">
          <label>Daerah Asal</label>
          <input name="daerah_asal" class="form-control" type="text" placeholder="Masukkan Nama" required><br>
        </div>

        <div class="form-group">
          <label>Tanggal Lahir</label>
          <input name="tanggal_lahir" class="form-control" type="date" placeholder="Tanggal Lahir" required><br>
        </div>

        <div class="form-group">
          <label>Nomor HP</label>
          <input name="no_hp" class="form-control" type="text" maxlength="13"placeholder="Masukkan Nomor HP" required><br>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input name="email" class="form-control" type="text" placeholder="Masukkan Email" required><br>
        </div>

        <div class="form-group">
          <label>Tipe Kamar</label>
            <select name="tipe_kamar" id="tipe_kamar" class="form-select" required>

                <option disabled selected>--Pilih Tipe Kamar--</option>
                <?php 

                  $query = mysqli_query($koneksi, "SELECT * FROM tipe_kamar");
                  while ( $row = mysqli_fetch_array($query) ) { ?>
                  <option value="<?=$row['id_tipe_kamar']?>"><?= $row['tipe_kamar']?></option>

                <?php } ?>

            </select>
        </div>
        <br>

        <div class="form-group">
            <label>No Kamar</label>
            <select name="no_kamar" id="no_kamar" class ="form-select">
            <option disabled selected>--No Kamar--</option>
          </select>
        </div>
        <br>

        <div class="form-group">
          <label>Harga Kamar</label>
          <select name="harga_kamar" id="harga_kamar" class ="form-select">
            <option disabled selected>--Harga Kamar--</option>
          </select>
        </div>
        
        <br>

        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"> Simpan</i></button>
          <button type="reset" class="btn btn-warning"><i class="fa fa-save"> Kosongkan</i></button>
        </div>

      </form>
	</div>
</div>


    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>

      $('#tipe_kamar').change(function() {

        let id = $('#tipe_kamar').val();
        $.ajax({
          url: "get_no.php",
          type: "POST",
          data: {
            id_tipe_kamar: id
          },
          dataType: "html",
          success: function(data) {
            $('#no_kamar').html(data);
            }
          });
        });

      $('#tipe_kamar').change(function() {

        let id = $('#tipe_kamar').val();
        $.ajax({
          url: "get_harga.php",
          type: "POST",
          data: {
            id_tipe_kamar: id
          },
          dataType: "html",
          success: function(data) {
            $('#harga_kamar').html(data);
            }
          });
        });

    </script>
  </body>
</html>