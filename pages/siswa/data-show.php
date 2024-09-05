<?php
include('../../config/koneksi.php');

// ambil dari url
$get_nis = $_GET['nis'];

// ambil dari database
$query = "SELECT * FROM siswa WHERE nis = '$get_nis'";

$hasil = mysqli_query($db, $query);

$data_siswa = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_siswa[] = $row;
}
