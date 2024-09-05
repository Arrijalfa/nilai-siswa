<?php

session_start(); 
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

require_once "../../config/koneksi.php";

// ambil data dari form
$id_soal = htmlspecialchars($_GET['id_soal']);


// delete database
$query = "DELETE FROM soal WHERE id_soal = $id_soal";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../soal'</script>";
} else {
  echo "<script>window.alert('Data warga gagal dihapus!'); window.location.href='../soal'</script>";
}