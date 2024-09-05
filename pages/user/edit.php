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
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h4 mb-0 text-gray-800">Data User</h1>
  </div>

    <?php include('_partials/menu.php') ?>

    <?php include('data-show.php') ?>

<form action="update.php" method="post">
  
<h5>Edit Data User</h5>
<table class="table table-sm table-middle">
<tr>
  <th width="20%">Nama User</th>
  <td width="1%">:</td>
  <td><input type="text" class="form-control" name="nama_user" value="<?= $data_user[0]['nama_user'] ?>" required></td>
</tr>
<tr>
  <th>Username</th>
  <td>:</td>
  <td><input type="text" class="form-control" name="username_user" value="<?= $data_user[0]['username_user'] ?>" required></td>
</tr>
<tr>
    <th>Password</th>
    <td>:</td>
    <td>
      <input type="password" class="form-control" name="password_user">
       <small>Jika dikosongkan, maka password tidak berubah</small>
     </td>
</tr>
<tr>
  <th>Keterangan</th>
  <td>:</td>
  <td><textarea class="form-control" name="keterangan_user"><?= $data_user[0]['keterangan_user'] ?></textarea></td>
</tr>
<tr>
  <th>Status</th>
  <td>:</td>
  <td>
    <select class="form-control selectpicker" name="status_user" required>
    <option value="<?= $data_user[0]['status_user'] ?>" selected><?= $data_user[0]['status_user'] ?></option>
    <option value="Admin">Admin</option>
    </select>
  </td>
</tr>
</table>

  <input type="hidden" name="id_user" value="<?= $data_user[0]['id_user'] ?>">

  <button type="submit" class="btn btn-primary btn-lg mb-3">
  <i class="fas fa-save"></i> Simpan</button>
</form>
</div>

<!-- /.container-fluid -->
</div>

<!-- End of Main Content -->

<?php include('../_partials/dashboard-footer.php'); ?>
</div>

<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<?php include('../_partials/dashboard-bottom.php') ?>