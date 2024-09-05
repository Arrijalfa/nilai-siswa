<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);
//mysqli_report(MYSQLI_REPORT_ERROR);

$host = "localhost";
// $user = "vsdnpara_admin";
// $pass = "sdnparakan123";
// $database = "vsdnpara_siswa";
$user = "root";
$pass = "";
$database = "siswa";

$db = mysqli_connect($host, $user, $pass, $database) or die("Gagal koneksi ke database");
