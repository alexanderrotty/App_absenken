<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db_name = "db_pesat";

$koneksi = new mysqli($localhost, $username, $password, $db_name);

if ($koneksi->connect_error) {
    die("koneksi gagal" . $koneksi->connect_error);
} 