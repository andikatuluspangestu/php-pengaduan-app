<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Register</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Google Fonts Poppins CDN -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

</head>

<!-- Background Warna Biru -->
<body class="bg-primary" style="font-family: 'Poppins', sans-serif;">

  <!-- Buat Sebuah Container -->
  <div class="container">

    <!-- Buat Form dengan method POST -->
    <form method="post" action="register_proses.php">

      <!-- Buat sebuah CARD dengan posisi absolute dengan top dan start 50% kemudian tengahkan objek -->
      <div class="card p-5 position-absolute top-50 start-50 translate-middle d-flex justify-content-center">

        <!-- Teks Judul Login -->
        <h2 class="m-2 text-center"> Pendaftaran </h2>

        <br>

        <!-- Form Input Username -->
        <input type="text" name="username" class="form-control" placeholder="Username">

        <br>

        <!-- Form Input Username -->
        <input type="password" name="password" class="form-control" placeholder="Password">

        <br>

        <!-- Tombol Daftar -->
        <input type="submit" name="daftar" class="btn btn-primary " value="Daftar">
        
        <br>

        <!-- Tawaran jika sudah punya akun -->
        <span> Sudah Punya Akun? 
          <a class="text-center text-decoration-none" href="login.php"> 
            Masuk
          </a> 
        </span>

      </div>
    </form>
  </div>
</body>
</html>

<!-- This Source Code by Nafatul & Andika --- PLEASE DON'T REMOVE ATTRIBUTE -->
