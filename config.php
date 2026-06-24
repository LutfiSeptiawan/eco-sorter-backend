<?php
// Mengizinkan frontend lintas domain (seperti Vercel) untuk menembak API ini
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// DATA KONEKSI DATABASE YANG SUDAH DIPERBAUI KAWAN:
$host     = "mysql.railway.internal"; // Menggunakan host internal Railway
$user     = "root";
$pass     = "BMEdcUYpRkStSbDtgeoLWKYPdRUlWiOe"; // Password terbaru dari file config kamu
$db_name  = "railway"; 
$port     = 3306; // Menggunakan port internal standar 3306

// Menghubungkan ke database dengan port unik dari Railway
$conn = new mysqli($host, $user, $pass, $db_name, $port);

if ($conn->connect_error) {
    header("Content-Type: application/json");
    die(json_encode(["status" => "error", "message" => "Koneksi Gagal: " . $conn->connect_error]));
}

// Menyamakan charset koneksi PHP agar sinkron dengan database
$conn->set_charset("utf8mb4");
?>
