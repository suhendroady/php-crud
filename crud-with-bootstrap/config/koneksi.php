<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "rpl_muda";

// Buat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
};
