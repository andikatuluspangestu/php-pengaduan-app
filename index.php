<?php

 session_start();

 include 'koneksi.php';

 if(isset($_SESSION['username'])){

  $username = $_SESSION['username'];
  } else{
  header("location:login.php");
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Daftar Pengaduan</title>

    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

  </head>
  <body class="bg-primary">

    <div class="container card mt-5 ps-5 pe-5 pb-5">
      <div class="row">
        <table class="table table-striped table-hover">

          <!-- Judul Halaman -->
          <h3 class="text-center m-5 text-primary">Data Pengaduan</h3>

          <thead>

            <!-- Tombol Tambah Pengaduan -->
            <tr>
              <th>
                <a class="btn btn-success mb-3" href="tambah.php"> <i class="bi bi-pencil-square"></i> Tulis</a>
                <a class="btn btn-danger mb-3" href="logout.php"> <i class="bi bi-logout"></i> Keluar</a>
              </th>
            </tr>

            <!-- Baris Judul Kolom Tabel -->
            <tr>
              <th>No</th>
              <th>Tanggal Pengaduan</th>
              <th>Laporan</th>
              <th>Bukti</th>
              <th>Action</th>
            </tr>

          </thead>
          <tbody>
            <?php

              // Jalankan Query untuk menampilkan semua data diurutkan berdasarkan ID
              $query = "SELECT * FROM laporan ORDER BY id ASC";
              $result = mysqli_query($koneksi, $query);

              // Buat perulangan untuk element tabel dari DATA LAPORAN
              $no = 1; //variabel untuk membuat nomor urut
      
              // Hasil query akan disimpan dalam variabel $data dalam bentuk array
              // Kemudian dicetak dengan perulangan while

              while($row = mysqli_fetch_assoc($result)) {
              ?>
            <tr>

              <!-- Nomor Pengaduan -->
              <td><?php echo $no; ?></td>

              <!-- Tanggal Pengaduan -->
              <td><?php echo $row['tgl']; ?></td>

              <!-- Laporan Pengaduan -->
              <td><?php echo $row['pengaduan']; ?></td>

              <!-- Foto Bukti -->
              <td>
                <img class="rounded m-1" src="gambar/<?php echo $row['bukti']; ?>" width=100>
              </td>

              <!-- Tombol Aksi -->
              <td>
                <a class="btn btn-warning" href="haledit.php?id=<?php echo $row['id']; ?>">
                  <i class="bi bi-pencil-square"></i>
                </a> 
                <a class="btn btn-danger" href="hapus.php?id=<?php echo $row['id']; ?>">
                  <i class="bi bi-trash"></i>
                </a>
              </td>
            </tr>
         
            <?php
              // Agar Nomor Pengaduan terus bertambah 1
              $no++; 
            } ?>

          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
