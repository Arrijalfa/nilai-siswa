<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_materi = htmlspecialchars($_POST['id_materi']);
$judul = htmlspecialchars($_POST['judul']);
$deksripsi = htmlspecialchars($_POST['jawaban']);

$id_user = $_SESSION['user']['id_user'];

// update database

$query = "UPDATE materi SET id_materi = '$id_materi', judul = '$judul', deskripsi = '$deskripsi' WHERE materi.id_materi = $id_materi;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah data Materi berhasil'); window.location.href='../materi'</script>";
} else {
  echo "<script>window.alert('Ubah data Materi gagal!'); window.location.href='../materi'</script>";
}
