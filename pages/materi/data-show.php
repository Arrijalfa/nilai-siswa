<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_materi = $_GET['id_materi'];

// ambil dari database
$query = "SELECT * FROM materi WHERE id_materi = $get_id_materi";

$hasil = mysqli_query($db, $query);

$data_materi = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_materi[] = $row;
}
