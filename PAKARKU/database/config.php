<?php
// $host = 'sql301.infinityfree.com'; // Ganti dengan host database Anda
// $db = 'if0_35087764_db_pakarku'; // Ganti dengan nama database Anda
// $user = 'if0_35087764'; // Ganti dengan nama pengguna database Anda
// $password = '39l3ToI4b5Qx'; // Ganti dengan password database Anda
$host = 'localhost'; // Ganti dengan host database Anda
$db = 'db_pakarku'; // Ganti dengan nama database Anda
$user = 'root'; // Ganti dengan nama pengguna database Anda
$password = ''; //
// Menghubungkan ke database
$koneksi = mysqli_connect($host, $user, $password, $db);