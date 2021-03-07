<?php

	// membuat koneksi 
	include 'koneksi.php';

	// Deklarasi variable untuk menampung Username dan Password dari Form Register
	$username = $_POST['username'];
	$password = $_POST['password'];
	$submit   = $_POST['daftar'];

	$pass = md5($_POST['password']);
	$ins = mysqli_query($koneksi,"insert into login(user_login,pass_login) values ('$username','$pass')");

if(isset($submit)){

	if(empty($username) or empty($password)){

		// Jika Form kosong maka akan ada peringatan dan tidak dikembalikan ke halaman REGISTER
		echo "<script>alert('Form tidak boleh kosong'); window.location=('register.php') </script>";

	}else{

		// Jika Form sudah di isi maka akan dibawa ke halaman LOGIN
		echo "<script>alert('Data berhasil di Tambah'); window.location=('login.php');</script>";
	}
}
?>
