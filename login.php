<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Login</title>

  <!-- Custom styles for this template-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<!-- Background Warna Biru -->
<body class="bg-primary">

  <!-- Buat Sebuah Container -->
  <div class="container">

    <!-- Buat Form dengan method POST -->
    <form method="post" action="login_proses.php">

      <!-- Buat sebuah CARD dengan posisi absolute dengan top dan start 50% kemudian tengahkan objek -->
      <div class="card p-5 position-absolute top-50 start-50 translate-middle d-flex justify-content-center">

        <!-- Teks Judul Login -->
        <h2 class="m-2 text-center"> Login </h2>

        <br>

        <!-- Form Input Username -->
        <input type="text" name="username" class="form-control" placeholder="Username">

        <br>

        <!-- Form Input Username -->
        <input type="password" name="password" class="form-control" placeholder="Password">

        <br>

        <!-- Tombol Login -->
        <input type="submit" name="login" class="btn btn-primary " value="Masuk">
        
        <br>

        <!-- Tawaran jika beleum punya akun -->
        <span> Belum Punya Akun? 
          <a class="text-center text-decoration-none" href="register.php"> 
            Daftar
          </a> 
        </span>

      </div>
    </form>
  </div>
</body>
</html>
