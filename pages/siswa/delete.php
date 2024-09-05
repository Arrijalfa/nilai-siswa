<?php

session_start(); 
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

require_once "../../config/koneksi.php";

// ambil data dari form
$nis = htmlspecialchars($_GET['nis']);


// delete database
$query = "DELETE FROM siswa WHERE nis = $nis";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../siswa'</script>";
} else {
  echo "<script>window.alert('Data warga gagal dihapus!'); window.location.href='../siswa'</script>";
}