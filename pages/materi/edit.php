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
<h1 class="h3 mb-0 text-gray-800">Edit Data Materi</h1>
<br>
<?php include('data-show.php') ?>

<form action="update.php" method="post">
<table class="table table-sm table-middle">
  <tr>
    <th width="20%">ID Materi</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="id_materi" value="<?php echo $data_materi[0]['id_materi'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Judul</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="judul" value="<?php echo $data_materi[0]['judul'] ?>"></td>
  </tr>
  <tr>
    <th>Deksripsi</th>
    <td>:</td>
    <td><textarea class="form-control" name="deskripsi" rows="10"><?php echo $data_materi[0]['deskripsi']; ?></textarea></td>
</tr>
</table>

<a href="index.php" class="btn btn-primary btn-lg">
  <i class="fas fa-arrow-left"></i> Kembali
</a>
<button type="submit" class="btn btn-primary btn-lg">
  <i class="fas fa-save"></i> Simpan
</button>
<input type="hidden" name="id_soal" value="<?php echo $data_soal[0]['id_soal'] ?>">
</form>

<?php include('../_partials/dashboard-footer.php'); ?>
<?php include('../_partials/dashboard-logout.php'); ?>
<?php include('../_partials/dashboard-bottom.php') ?>
