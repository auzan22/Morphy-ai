<?php
$host = "localhost";
$user = "root";
$password = ""; 
$database = "db_project"; 

// koneksi
$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}
?>
