<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM siswa";

$hasil = mysqli_query($db, $query);

$data_siswa = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_siswa[] = $row;
}
