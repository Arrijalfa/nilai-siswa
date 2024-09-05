<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_user = htmlspecialchars($_POST['nama_user']);
$username_user = htmlspecialchars($_POST['username_user']);
$password_user = md5(htmlspecialchars($_POST['password_user']));
$keterangan_user = htmlspecialchars($_POST['keterangan_user']);
$status_user = htmlspecialchars($_POST['status_user']);



// masukkan ke database

$query = "INSERT INTO user (id_user, nama_user, username_user, password_user, keterangan_user, status_user) VALUES (NULL, '$nama_user', '$username_user', '$password_user', '$keterangan_user', '$status_user');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../user'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../user/create.php'</script>";
}
