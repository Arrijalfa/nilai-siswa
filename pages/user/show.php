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
          <h1 class="h3 mb-0 text-gray-800">Data User</h1>
        </div>

        <?php include('_partials/menu.php') ?>

        <?php include('data-show.php') ?>

        <h5>Data User</h5>
        <table class="table table-sm table-middle">
        <tr>
            <th width="20%">ID User</th>
            <td width="1%">:</td>
            <td><?php echo $data_user[0]['id_user'] ?></td>
          </tr>
          <tr>
            <th width="20%">Nama User</th>
            <td width="1%">:</td>
            <td><?php echo $data_user[0]['nama_user'] ?></td>
          </tr>
          <tr>
            <th>Username</th>
            <td>:</td>
            <td><?php echo $data_user[0]['username_user'] ?></td>
          </tr>
          <tr>
            <th>Password</th>
            <td>:</td>
            <td><?php echo $data_user[0]['password_user'] ?></td>
          </tr>
        </table>

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