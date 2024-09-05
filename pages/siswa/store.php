<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nis = htmlspecialchars($_POST['nis']);
$nama_siswa = htmlspecialchars($_POST['nama_siswa']);
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']); // Ini adalah string
$password = htmlspecialchars($_POST['password']);

$id_user = $_SESSION['user']['id_user'];

// masukkan ke database
$query = "INSERT INTO siswa (nis, nama_siswa, jenis_kelamin, password) VALUES ('$nis', '$nama_siswa', '$jenis_kelamin', '$password');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah siswa berhasil'); window.location.href='../siswa/index.php'</script>";
} else {
  echo "<script>window.alert('Tambah siswa gagal!'); window.location.href='../siswa/create.php'</script>";
}

