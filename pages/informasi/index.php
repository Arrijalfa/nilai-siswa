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
        <h1 class="h4 mb-0 text-gray-800">Informasi Pembuat Aplikasi</h1>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-lg-12">
          <!-- Card -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pembuat Aplikasi</h6>
            </div>
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-md-3">
                  <!-- Foto Pembuat -->
                  <img src="pp_fadhil.jpg" alt="Foto Pembuat" class="img-fluid rounded-circle w-50">
                </div>
                <div class="">
                  <!-- Informasi Pembuat -->
                  <table class="table table-borderless">
                    <tbody>
                      <tr>
                        <th>Nama</th>
                        <td>: Fadhil Arrijal</td>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <td>: Desa Ciporang, Kecamatan Maleber, Kabupaten Kuningan, Jawa Barat 45575</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>: fadhilarrijal05@gmail.com</td>
                      </tr>
                      <tr>
                        <th>Telepon</th>
                        <td>: 089662003243</td>
                      </tr>
                      <tr>
                        <th>Program Studi</th>
                        <td>: Teknik Informatika - S1</td>
                      </tr>
                      <tr>
                        <th>Fakultas</th>
                        <td>: Fakultas Ilmu Komputer</td>
                      </tr>
                      <tr>
                        <th>Universitas</th>
                        <td>: Universitas Kuningan</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <?php include('../_partials/dashboard-footer.php') ?>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<?php include('../_partials/dashboard-logout.php'); ?>

<?php include('../_partials/dashboard-bottom.php') ?>
