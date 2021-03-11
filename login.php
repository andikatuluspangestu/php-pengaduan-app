<!DOCTYPE html>
<html lang="en">
<head>

  <title>Login</title>

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
    <form method="post" action="login_proses.php">

      <!-- Buat sebuah CARD dengan posisi absolute dengan top dan start 50% kemudian tengahkan objek -->
      <div class="card p-5 position-absolute top-50 start-50 translate-middle d-flex justify-content-center">

        <!-- Teks Judul Login -->
        <h2 class="m-2 text-center"> Masuk </h2>

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

<!-- This Source Code by Nafatul & Andika --- PLEASE DON'T REMOVE ATTRIBUTE -->