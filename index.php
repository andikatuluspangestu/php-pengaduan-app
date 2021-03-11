<?php
 session_start();

 include 'koneksi.php';

 if(isset($_SESSION['username'])){

    $username = $_SESSION['username'];

  } else {

    header("location:login.php");

  }

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Daftar Pengaduan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Bootstrap 5 Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Google Fonts Poppins CDN -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

  </head>

  <!-- Background Warna Biru -->
  <body class="bg-white" style="font-family: 'Poppins', sans-serif;">

    <!-- Buat sebuah Container CARD dengan mt-5, mb-5 (margin-top-bottom), padding (pe-pb) -->
    <div class=" mt-5 ps-5 pe-5 pb-5 mb-5 rounded-pill">

      <!-- Judul Halaman -->
      <h2 class="text-center m-5 text-primary">Data Pengaduan</h2>

      <div class="row">

        <!-- Buatlah sebuah TABEL dengan class yang telah ditentukan -->
        <table class="table table-striped table-hover">

          <thead>

            <tr>
              <td>
                <!-- Tombol Tambah Pengaduan -->
                <a class="btn btn-success mb-3 border-0" href="tambah.php"><i class="bi bi-pencil-square"></i> Tulis</a>
                <!-- Tombol Print -->
                <a class="btn btn-secondary mb-3 border-0" target="_blank" href="cetak.php"><i class="bi bi-printer"></i> Cetak</a>
                <!-- Tombol Keluar -->
                <a class="btn btn-danger mb-3 border-0" href="logout.php"><i class="bi bi-box-arrow-right"></i> Keluar</a>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <form method="post">

                  <!-- Hidden Form Search -->
                  <input type="text" name="nt" placeholder="cari ..." width="2px" hidden="">
                  <input type="submit" name="cari" value="cari" hidden="">

                  <!-- Input Search Form -->
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"> <i class="bi bi-search"></i> </span>
                    <input type="text" name="nt" name="cari" class="form-control" placeholder="Ketik lalu Enter untuk mencari" aria-label="Username" aria-describedby="basic-addon1">
                  </div>

                <form>
              </td>
            </tr>

            <!-- Baris Judul Kolom Tabel -->
            <tr class="bg-primary text-white">
              <th>No</th>
              <th>Tanggal Pengaduan</th>
              <th>Laporan</th>
              <th>Bukti</th>
              <th class="text-center">Action</th>
            </tr>

          </thead>
          <tbody>
            <?php

              // Jika Tombol Cari di Tekan 
              if (ISSET($_POST['cari'])){

                  // Buat variable untuk menampung 'kata kunci yang diketik dalam form pencarian'
                  $cari = $_POST['nt'];

                  // Pilih semua data yang ada di database berdasarkan nama yang diinput
                  $query = "SELECT * FROM laporan WHERE pengaduan LIKE '%$cari%'";


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
              <td class="text-center">
                <!-- Tombol Aksi Edit -->
                <a class="btn btn-warning mt-3" href="haledit.php?id=<?php echo $row['id']; ?>">
                 Edit
                </a> 

                <!-- Tombol Aksi Hapus -->
                <a class="btn btn-danger mt-3" href="hapus.php?id=<?php echo $row['id']; ?>">
                 Hapus
                </a>
              </td>
            </tr>

            <?php
              // Agar Nomor Pengaduan terus bertambah 1
              $no++; 
            ?>

            <!-- Penutup Pencarian -->
            <?php }

            } else {

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
              <td class="text-center">
                <!-- Tombol Aksi Edit -->
                <a class="btn btn-warning mt-3" href="haledit.php?id=<?php echo $row['id']; ?>">
                 <i class="bi bi-pencil"></i>
                </a> 

                <!-- Tombol Aksi Hapus -->
                <a class="btn btn-danger mt-3" href="hapus.php?id=<?php echo $row['id']; ?>">
                 <i class="bi bi-trash"></i>
                </a>
              </td>
            </tr>

            <?php
              // Agar Nomor Pengaduan terus bertambah 1
              $no++; 
            ?>

            <?php }} ?>

          </tbody>
        </table>
      </div>
    </div>

  <!-- Footer -->
  <?php include 'Template/footer.php'; ?>

  </body>
</html>

<!-- This Source Code by Nafatul & Andika --- PLEASE DON'T REMOVE ATTRIBUTE -->
