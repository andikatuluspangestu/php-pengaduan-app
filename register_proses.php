 <?php

	// membuat koneksi 
	include 'koneksi.php';

	// Deklarasi variable untuk menampung Username dan Password dari Form Register

	$username = $_POST['username']; // Untuk Menampung Username

	$password = $_POST['password']; // Untuk Menampung Password

	$submit   = $_POST['daftar']; // Untuk Menampung Value Submit

	// Proses Enkripsi Password
	$pass = md5($_POST['password']);

	// Menambahkan Username dan Password ke Database
	$ins = mysqli_query($koneksi,"insert into login(user_login,pass_login) values ('$username','$pass')");

// Cek Kondisi Input Form
// Jika Tombol Registrasi telah di klik ..
if(isset($submit)){

	// Cek apakah Username dan Password apakah kosong atau tidak.
	if(empty($username) or empty($password)){

		// Jika Form kosong maka akan ada peringatan dan tidak dikembalikan ke halaman REGISTER
		echo "<script>alert('Form tidak boleh kosong'); window.location=('register.php') </script>";

	}else{

		// Jika Form sudah di isi maka akan dibawa ke halaman LOGIN
		echo "<script>alert('Data berhasil di Tambah'); window.location=('login.php');</script>";
	}
}
?>

<!-- This Source Code by Nafatul & Andika --- PLEASE DON'T REMOVE ATTRIBUTE -->
