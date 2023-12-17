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

    <link rel="stylesheet" type="text/css" href="css/style_register.css">

  </head>
  <body class="bg-gradient-primary">

    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card bg-dark text-white" style="border-radius: 2rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-1 mt-md-1 pb-1">

              <form action="proses_register.php" method="POST">

              <h2 class="fw-bold mb-2 text-uppercase">DAFTAR</h2>
              <p class="text-white-50 mb-5">Daftarkan Nama dan Password Anda!</p>

              <div class="form-outline form-white mb-1">
                <input type="text" id="username" name="nama" class="form-control form-control-lg" placeholder="Nama User" />
                <label class="form-label" for="username"></label>
              </div>

              <div class="form-outline form-white mb-1">
                <input type="password" id="typePasswordX" name="sandi" class="form-control form-control-lg" placeholder="Kata Sandi" />
                <label class="form-label" for="typePasswordX"></label>
              </div>

              <div class="form-outline form-white mb-1">
                <input type="number" id="typePasswordX" name="no_hp" class="form-control form-control-lg" placeholder="Masukkan No HP" />
                <label class="form-label" for="typePasswordX"></label>
              </div>

              <div class="form-outline form-white mb-1">
                <select name="level" class="form-control form-control-lg">
                  <option disabled selected>Pilih Level</option>
                  <option value="admin">Admin</option>
                  <option value="kasir">Kasir</option>
                </select>
              </div>
              <br>
              <button class="btn btn-outline-light btn-lg px-5" type="submit">Daftar</button>
              </form>
            </div>
            
              <br>

              <div>
              <p class="mb-0">Sudah Punya Akun? <a href="login.php" class="text-white-50 fw-bold">Login Disini!</a>
              </p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>