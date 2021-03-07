<?php
session_start();

include 'koneksi.php';

unset($_SESSION['username']);
header("location:login.php");

?>
