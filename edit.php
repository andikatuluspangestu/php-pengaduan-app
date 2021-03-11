<?php

  // Memanggil file koneksi.php untuk melakukan koneksi database
  include 'koneksi.php';

	// Membuat variabel untuk menampung data dari FORMULIR PENGADUAN
  $id            = $_POST['id'];
  $tgl           = $_POST['tgl'];
  $pengaduan     = $_POST['pengaduan'];
  $ft            = $_FILES['bukti']['name'];
  $file          = $_FILES['bukti']['tmp_name'];

  // Jalankan query UPDATE berdasarkan ID yang Datanya kita edit
  $query  = "UPDATE laporan SET tgl = '$tgl', pengaduan = '$pengaduan', bukti = '$ft' ";
  move_uploaded_file($file, "gambar/".$ft);

  $query .= "WHERE id = '$id'";
  $result = mysqli_query($koneksi, $query);

  // Periksa query apakah ada error
  if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi));
  } else {
    // Akan redirect ke halaman index.php
    echo "<script>window.location='index.php';</script>";
  }

?>

<!-- This Source Code by Nafatul & Andika --- PLEASE DON'T REMOVE ATTRIBUTE -->