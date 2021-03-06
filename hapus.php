<?php

// Panggil koneksi.php untuk menghubungkan ke Database
   include 'koneksi.php';

  // Buat Variable untuk menampung ID yang akan dihapus
  $id = $_GET["id"];

  // Jalankan query DELETE untuk menghapus DATA
  $query = "DELETE FROM laporan WHERE id='$id' ";
  $hasil_query = mysqli_query($koneksi, $query);

  // Cek Query ada yang error atau tidak
  if(!$query){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi));
  } else {
    // Halaman akan redirect ke halaman index.php
    echo "<script>window.location='index.php';</script>";
  }

?>