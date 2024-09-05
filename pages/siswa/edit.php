<?php include('../_partials/dashboard-top.php') ?>
<?php include('data-show.php') ?>

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
<h1 class="h3 mb-0 text-gray-800">Edit Data Siswa</h1>
<br>
<form action="update.php" method="post">
<table class="table table-sm table-middle">
  <tr>
    <th width="20%">NIS</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nis" value="<?php echo $data_siswa[0]['nis'] ?>"></td>
  </tr>
  <tr>
    <th>Nama Siswa</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_siswa" value="<?php echo $data_siswa[0]['nama_siswa'] ?>"></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
      <select class="form-control" name="jenis_kelamin">
        <option value="Laki-laki" <?php if($data_siswa[0]['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
        <option value="Perempuan" <?php if($data_siswa[0]['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Password</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" value="<?php echo $data_siswa[0]['password'] ?>"></td>
  </tr>
</table>

<a href="index.php" class="btn btn-primary btn-lg">
  <i class="fas fa-arrow-left"></i> Kembali
</a>
<button type="submit" class="btn btn-primary btn-lg">
  <i class="fas fa-save"></i> Simpan
</button>
<input type="hidden" name="nis" value="<?php echo $data_siswa[0]['nis'] ?>">
</form>

<?php include('../_partials/dashboard-footer.php'); ?>
<?php include('../_partials/dashboard-logout.php'); ?>
<?php include('../_partials/dashboard-bottom.php') ?>
