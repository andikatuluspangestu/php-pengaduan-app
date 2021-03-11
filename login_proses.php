<?php
session_start();

// membuat koneksi 
$con = mysqli_connect("localhost","root","","layanan_pengaduan");

// Deklarasi variable
$username = $_POST['username'];
$password = md5($_POST['password']);
$login 	  = $_POST['login'];

// Cek Kondisi Input Form
// Jika Tombol Login telah di klik ..
if(isset($login)){

	if (empty($username) or empty($password)){

		// Cek apakah Username dan Password apakah kosong atau tidak.
		echo "<script>alert('Login Gagal.. Form tidak boleh kosong!'); </script>";
		header('location:login.php');

	} else {

		// Cek ke database, apakah username dan passowrd yang dimasukan ada
		$query = mysqli_query($con,"select * from login where user_login = '$username' and pass_login = '$password'");
		
		if (mysqli_num_rows($query) > 0){

			$r = mysqli_fetch_array($query);
			$_SESSION['username'] = $r['user_login'];

			header("location: index.php");
		} else {

			header("location:login.php");

		}
	}
}

?>

<!-- This Source Code by Nafatul & Andika --- PLEASE DON'T REMOVE ATTRIBUTE -->