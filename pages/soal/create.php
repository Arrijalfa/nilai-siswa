<?php include('../_partials/dashboard-top.php') ?>

<!-- Page Wrapper -->
<div id="wrapper">
  <?php include('../_partials/dashboard-sidebar.php'); ?>

<!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
    <div id="content">
      <?php include('../_partials/dashboard-topbar.php'); ?>

<!-- Begin Page Content -->
      <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h4 mb-0 text-gray-800">Tambah Data Soal</h1>
<br>
<form action="store.php" method="post" style="height: 70%;">
<table class="table table-sm table-middle">
  <tr>
    <th width="20%">ID Soal</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="_id_soal" readonly placeholder="Tidak perlu di isi."></td>
  </tr>
  <tr>
    <th>Nama Soal</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_soal" required></td>
  </tr>
  <tr>
    <th>Jawaban</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="jawaban" required></td>
  </tr>
  <tr>
    <th>Pilihan A</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="pilihan_a" required></td>
  </tr>
  <tr>
    <th>Pilihan B</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="pilihan_b" required></td>
  </tr>
  <tr>
    <th>Pilihan C</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="pilihan_c" required></td>
  </tr>
  <tr>
    <th>Pilihan D</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="pilihan_d" required></td>
  </tr>
</table>

<a href="index.php" class="btn btn-primary btn-lg">
  <i class="fas fa-arrow-left"></i> Kembali
</a>
<button type="submit" class="btn btn-primary btn-lg">
  <i class="fas fa-save"></i> Simpan
</button>
</form>
<?php include('../_partials/dashboard-footer.php'); ?>
<?php include('../_partials/dashboard-logout.php'); ?>
<?php include('../_partials/dashboard-bottom.php') ?>
