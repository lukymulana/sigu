<?php
include 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIGU - Sistem Inventori Gudang</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sigu</div>
      </a>
      <h6 style="color: white; text-align: center;"> Sistem Inventori Gudang </h6>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fa fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-archive"></i>
          <span>Barang</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="barang.php">Data Barang</a>
            <a class="collapse-item" href="tampil_barang_masuk.php">Barang Masuk</a>
            <a class="collapse-item" href="tampil_barang_keluar.php">Barang Keluar</a>
            <a class="collapse-item " href="kategori.php">Kategori</a>
          </div>
        </div>
      </li>

      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fa fa-industry"></i>
          <span>Supplier</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item active" href="supplier.php">Data Supplier</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fa fa-user"></i>
          <span>Profile</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="settings.php">Settings</a>
            <a class="collapse-item" href="daftar_user.php">Daftar User</a>
            <a class="collapse-item" href="index.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="cek_periode_barang.php">
          <i class="  fa fa-print"></i>
          <span>Laporan</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Data Supplier</h1>
          </div>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <!-- Nav Item - User Information -->
            <?php
            include 'koneksi.php';

            $queryNama = mysqli_query($koneksi, "SELECT nama from user where user_id = '$_SESSION[user_id]'");
            $nama = mysqli_fetch_array($queryNama);
            ?>
            <li class="nav-item dropdown no-arrow">
              <span class="mr-2 d-none d-lg-inline text-gray-600"><?php echo $nama['nama'] ?></span>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Search -->
          <form action="supplier.php" method="get">
            <div class="input-group" align="right">
              <input align="right" type="text" name="cari" class="form-control bg-light border-0 small" placeholder="Search Supplier..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <div>
            <label></label>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Data Supplier
                <button type="button" onclick="window.location.href='input_supplier.php'" class="btn btn-success" style="float: right;"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button>
                </h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead align="center">
                    <tr>
                      <th>Kode Supplier</th>
                      <th>Nama Supplier</th>
                      <th width="400">Alamat</th>
                      <th>No Telp</th>
                      <th width="191">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'koneksi.php';
                    if (isset($_GET['cari'])) {
                      $cari = $_GET['cari'];
                      $data = mysqli_query($koneksi, "SELECT * from supplier where nama_supplier like '%" . $cari . "%'") or die(mysql_error($koneksi));
                      foreach ($data as $baris) { ?>
                        <tr>
                          <td><?php echo $baris['kode_supplier'] ?></td>
                          <td><?php echo $baris['nama_supplier'] ?></td>
                          <td><?php echo $baris['alamat'] ?></td>
                          <td><?php echo $baris['notelp'] ?></td>
                          <td><a class="btn btn-primary" href="ubah_supplier.php?kode_supplier=<?php echo $baris['kode_supplier'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                          </td>
                        </tr>
                      <?php
                      }
                    } else {
                      $data = mysqli_query($koneksi, "SELECT * from supplier") or die(mysqli_error($koneksi));
                      foreach ($data as $baris) { ?>
                        <tr>
                          <td><?php echo $baris['kode_supplier'] ?></td>
                          <td><?php echo $baris['nama_supplier'] ?></td>
                          <td><?php echo $baris['alamat'] ?></td>
                          <td><?php echo $baris['notelp'] ?></td>
                          <td align="center"><a class="btn btn-primary" href="ubah_supplier.php?kode_supplier=<?php echo $baris['kode_supplier'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                          </td>
                        </tr>
                    <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <?php
        if (isset($_GET['cari'])) {
          $cari = $_GET['cari'];
          echo '
                <a target="_blank" type="button" href="cetak_supplier.php?cari=' . $cari . '" class="btn btn-primary" style="margin-left: 985px;"><i class="fa fa-print"> Cetak Data</i></a>';
        } else {
          echo '
                <a target="_blank" type="button" href="cetak_supplier.php" class="btn btn-primary" style="margin-left: 985px;"><i class="fa fa-print"> Cetak Data</i></a>';
        }
        ?>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sigu.com <?php echo date('Y') ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Hapus Modal-->
  <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Yakin Ingin Dihapus?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
          <a class="btn btn-danger" href="hapus_supplier.php?kode_supplier=<?php echo $baris['kode_supplier'] ?>">Hapus</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" jika ingin mengakhiri semua ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>