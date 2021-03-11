<?php
session_start();

include 'koneksi.php';

unset($_SESSION['username']);
header("location:login.php");

?>

<!-- This Source Code by Nafatul & Andika --- PLEASE DON'T REMOVE ATTRIBUTE -->