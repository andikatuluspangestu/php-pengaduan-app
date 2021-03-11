<?php 

  include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cetak Pengaduan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Google Fonts Poppins CDN -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

  </head>
  <body>

    <div class="container mt-5 ps-5 pe-5 pb-5 mb-5">

      <h2 class="text-center m-5 text-primary">Data Pengaduan</h2>

      <div class="row">
        <table class="table table-striped table-hover">

          <thead>
            <!-- Baris Judul Kolom Tabel -->
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Laporan</th>
              <th>Bukti</th>
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
            </tr>
         
            <?php
              // Agar Nomor Pengaduan terus bertambah 1
              $no++; 
            } ?>

          </tbody>
        </table>
      </div>
    </div>

    <!-- Fungsi Cetak Javascript -->
    <script type="text/javascript">
      window.print();
    </script>

  </body>
</html>

<!-- This Source Code by Nafatul & Andika --- PLEASE DON'T REMOVE ATTRIBUTE -->
