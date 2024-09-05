<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_soal = htmlspecialchars($_POST['id_soal']);
$nama_soal = htmlspecialchars($_POST['nama_soal']);
$jawaban = htmlspecialchars($_POST['jawaban']);
$pilihan_a = htmlspecialchars($_POST['pilihan_a']);
$pilihan_b = htmlspecialchars($_POST['pilihan_b']);
$pilihan_c = htmlspecialchars($_POST['pilihan_c']);
$pilihan_d = htmlspecialchars($_POST['pilihan_d']);

$id_user = $_SESSION['user']['id_user'];

// update database

$query = "UPDATE soal SET id_soal = '$id_soal', nama_soal = '$nama_soal', jawaban = '$jawaban', pilihan_a = '$pilihan_a', pilihan_b = '$pilihan_b', pilihan_c = '$pilihan_c', pilihan_d = '$pilihan_d' WHERE soal.id_soal = $id_soal;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah data Soal berhasil'); window.location.href='../soal'</script>";
} else {
  echo "<script>window.alert('Ubah data Soal gagal!'); window.location.href='../soal'</script>";
}
