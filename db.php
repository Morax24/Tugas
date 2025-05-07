<?php
$host = 'localhost';
$dbname = 'portfolio_db';
$username = 'root';
$password = '';

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>
