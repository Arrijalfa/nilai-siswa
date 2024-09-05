<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM nilai";

$hasil = mysqli_query($db, $query);

$data_nilai = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_nilai[] = $row;
}
