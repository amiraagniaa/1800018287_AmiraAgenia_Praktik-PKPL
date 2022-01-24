<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "import_data";
$db2 = "db_sintal";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon) {
	die("Koneksi gagal:" . mysqli_connect_error());
}

$kon2 = mysqli_connect($host, $user, $password, $db2);
if (!$kon2) {
	die("Koneksi gagal:" . mysqli_connect_error());
}
