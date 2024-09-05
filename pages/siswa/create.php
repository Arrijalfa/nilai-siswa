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
<h1 class="h4 mb-0 text-gray-800">Tambah Data Siswa</h1>
<br>
<form action="store.php" method="post" style="height: 70%;">
<table class="table table-sm table-middle">
  <tr>
    <th width="20%">NIS</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nis" required></td>
  </tr>
  <tr>
    <th>Nama Siswa</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_siswa" required></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
        <select class="form-control" name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </td>
</tr>
  <tr>
    <th>Password</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" required></td>
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
