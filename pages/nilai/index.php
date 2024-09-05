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
<h1 class="h4 mb-0 text-gray-800">Data Nilai</h1>
</div>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<div class="table-responsive">
  <table class="table table-bordered table-striped table-condensed table-hover" id="datatable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Siswa</th>
        <th>Nilai Kuis</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data_nilai as $nilai) : ?>
      <tr>
        <td><?php echo $nilai['id_nilai'] ?></td>
        <td><?php echo $nilai['nama_siswa'] ?></td>
        <td><?php echo $nilai['nilai_kuis'] ?></td>
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