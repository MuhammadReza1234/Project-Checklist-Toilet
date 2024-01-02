<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "checklist";
$port = "3308";

$koneksi = mysqli_connect($server, $username, $password, $database, $port);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
