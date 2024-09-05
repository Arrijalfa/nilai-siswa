<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_nilai = $_GET['id_nilai'];

// ambil dari database
$query = "SELECT * FROM nilai WHERE id_nilai = $get_id_nilai";

$hasil = mysqli_query($db, $query);

$data_nilai = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_nilai[] = $row;
}
