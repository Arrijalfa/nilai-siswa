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
<h1 class="h4 mb-0 text-gray-800">Kelola Data Siswa</h1>
</div>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<div class="table-responsive">
  <table class="table table-bordered table-striped table-condensed table-hover" id="datatable">
    <thead>
      <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Password</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data_siswa as $siswa) : ?>
      <tr>
        <td><?php echo $siswa['nis'] ?></td>
        <td><?php echo $siswa['nama_siswa'] ?></td>
        <td><?php echo $siswa['jenis_kelamin'] ?></td>
        <td><?php echo $siswa['password'] ?></td>
        <td>
          <!-- Single button -->
          <div class="btn-group pull-right">
            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret">Pilih</span>
            </button>

          <div class="dropdown-menu pull-right">
              <a class="dropdown-item" href="edit.php?nis=<?= $siswa['nis'] ?>"><i class="fas fa-edit"></i>
                Ubah</a>
            <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="delete.php?nis=<?= $siswa['nis'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                            <i class="fas fa-trash"></i>
                            Delete
                          </a>
                        </div>
          </div>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<!-- End of Main Content -->

<?php include('../_partials/dashboard-footer.php') ?>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- End of Page Wrapper -->

<?php include('../_partials/dashboard-logout.php'); ?>

<?php include('../_partials/dashboard-bottom.php') ?>