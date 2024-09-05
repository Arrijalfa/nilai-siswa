<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_soal = htmlspecialchars($_POST['nama_soal']);
$jawaban = htmlspecialchars($_POST['jawaban']);
$pilihan_a = htmlspecialchars($_POST['pilihan_a']);
$pilihan_b = htmlspecialchars($_POST['pilihan_b']);
$pilihan_c = htmlspecialchars($_POST['pilihan_c']);
$pilihan_d = htmlspecialchars($_POST['pilihan_d']);

$id_user = $_SESSION['user']['id_user'];

// masukkan ke database

$query = "INSERT INTO soal (id_soal, nama_soal, jawaban, pilihan_a, pilihan_b, pilihan_c, pilihan_d) VALUES (NULL, '$nama_soal', '$jawaban', '$pilihan_a', '$pilihan_b', '$pilihan_c', '$pilihan_d');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah soal berhasil'); window.location.href='../soal/index.php'</script>";
} else {
  echo "<script>window.alert('Tambah soal gagal!'); window.location.href='../soal/create.php'</script>";
}
