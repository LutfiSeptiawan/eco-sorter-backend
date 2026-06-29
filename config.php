<?php
$host     = getenv('MYSQLHOST') ?: "mysql.railway.internal"; 
$user     = getenv('MYSQLUSER') ?: "root";
$pass     = getenv('MYSQLPASSWORD') ?: "BMEdcUYpRkStSbDtgeoLWKYPdRUlWiOe"; 
$db_name  = getenv('MYSQLDATABASE') ?: "railway"; 
$port     = getenv('MYSQLPORT') ?: 3306; 

$conn = new mysqli($host, $user, $pass, $db_name, $port);

if ($conn->connect_error) {
    header("Content-Type: application/json");
    die(json_encode(["status" => "error", "message" => "Koneksi Gagal: " . $conn->connect_error]));
}

$conn->set_charset("utf8mb4");
?>
