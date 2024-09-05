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
<h1 class="h4 mb-0 text-gray-800">Data Nilai</h1>
<br>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<h5>A. Data Nilai</h5>
<table class="table table-sm">
  <tr>
    <th width="20%">ID</th>
    <td width="1%">:</td>
    <td><?php echo $data_nilai[0]['id_nilai'] ?></td>
  </tr>
  <tr>
    <th>Nama Siswa</th>
    <td>:</td>
    <td><?php echo $data_nilai[0]['nama_siswa'] ?></td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><?php echo $data_nilai[0]['nilai_kuis'] ?></td>
  </tr>
</table>


<h5>D. Data Aplikasi</h5>
<table class="table table-sm">
  <tr>
    <th width="20%">Diinput oleh</th>
    <td width="1%">:</td>
    <td><?php echo $data_nilai[0]['id_user'] ?></td>
  </tr>
  <tr>
    <th>Diinput</th>
    <td>:</td>
    <td><?php echo $data_nilai[0]['created_at'] ?></td>
  </tr>
  <tr>
    <th>Diperbaharui</th>
    <td>:</td>
    <td><?php echo $data_nilai[0]['updated_at'] ?></td>
  </tr>
</table>
<?php include('../_partials/dashboard-footer.php'); ?>
<?php include('../_partials/dashboard-logout.php'); ?>
<?php include('../_partials/dashboard-bottom.php') ?>
