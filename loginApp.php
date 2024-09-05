<?php
// Masukkan file koneksi database
include("config/koneksi.php");

// Mulai sesi
session_start();

// Ambil data login dari permintaan POST
$nis = $_POST['nis'];
$password = $_POST['password'];

// Periksa kredensial pengguna di database
$query = "SELECT * FROM siswa WHERE nis = '$nis' AND password = '$password'";
$result = $db->query($query);

if ($result->num_rows > 0) {
    // Ambil data pengguna (misalnya, nama) dari hasil kueri
    $row = $result->fetch_assoc();
    $nama_siswa = $row['nama_siswa'];

    // Set session untuk menyimpan informasi login
    $_SESSION['nis'] = $nis;

    // Login berhasil
    $response = array('success' => true, 'message' => 'Login berhasil', 'nama_siswa' => $nama_siswa);
} else {
    // Login gagal
    $response = array('success' => false, 'message' => 'NIS atau password salah');
}

// Berikan respons dalam format JSON
echo json_encode($response);

?>