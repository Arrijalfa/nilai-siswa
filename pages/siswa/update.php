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
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']); // ini merupakan string
$password = htmlspecialchars($_POST['password']);

$id_user = $_SESSION['user']['id_user'];

// update database
$query = "UPDATE siswa SET nama_siswa = '$nama_siswa', jenis_kelamin = '$jenis_kelamin', password = '$password' WHERE nis = '$nis';";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah data siswa berhasil'); window.location.href='../siswa'</script>";
} else {
  echo "<script>window.alert('Ubah data siswa gagal!'); window.location.href='../siswa'</script>";
}
?>
