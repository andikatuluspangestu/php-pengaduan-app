<?php

  // Memanggil file koneksi.php untuk melakukan koneksi database
  include 'koneksi.php';

	// Membuat variabel untuk menampung data dari FORMULIR PENGADUAN
  $id            = $_POST['id'];
  $tgl           = $_POST['tgl'];
  $pengaduan     = $_POST['pengaduan'];

  // Jalankan query UPDATE berdasarkan ID yang produknya kita edit
  $query  = "UPDATE laporan SET tgl = '$tgl', pengaduan = '$pengaduan' ";

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