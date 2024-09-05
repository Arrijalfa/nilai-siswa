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
<h1 class="h4 mb-0 text-gray-800">Tambah Data Materi</h1>
<br>
<form action="store.php" method="post" style="height: 70%;">
<table class="table table-sm table-middle">
  <tr>
    <th width="20%">ID Materi</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="id_materi" readonly placeholder="Tidak perlu di isi."></td>
  </tr>
  <tr>
    <th>Judul</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="judul" required></td>
  </tr>
  <tr>
    <th>Deskripsi</th>
    <td>:</td>
    <td><textarea class="form-control" name="deskripsi" rows="10" required></textarea></td>
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
