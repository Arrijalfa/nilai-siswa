<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_soal = $_GET['id_soal'];

// ambil dari database
$query = "SELECT * FROM soal WHERE id_soal = $get_id_soal";

$hasil = mysqli_query($db, $query);

$data_soal = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_soal[] = $row;
}
