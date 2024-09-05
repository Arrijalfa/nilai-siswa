<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM materi";

$hasil = mysqli_query($db, $query);

$data_materi = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_materi[] = $row;
}
