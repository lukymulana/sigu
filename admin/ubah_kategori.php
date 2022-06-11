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
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-archive"></i>
          <span>Barang</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="barang.php">Data Barang</a>
            <a class="collapse-item" href="tampil_barang_masuk.php">Barang Masuk</a>
            <a class="collapse-item" href="tampil_barang_keluar.php">Barang Keluar</a>
            <a class="collapse-item active" href="kategori.php">Kategori</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fa fa-industry"></i>
          <span>Supplier</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="supplier.php">Data Supplier</a>
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
            <h1 class="h3 mb-0 text-gray-800">Data Kategori</h1>
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
        
        <?php
        include 'koneksi.php';

        $kode_kategori = $_GET['kode_kategori'];

        $query = mysqli_query($koneksi, "SELECT * from kategori where kode_kategori = '$kode_kategori'") or die(mysqli_error($koneksi));
        $baris = mysqli_fetch_array($query);
        $a = $baris['nama_kategori'];

        ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Ubah Data Kategori</h4>
            </div>
            <div class="card-body" style="margin-left: 350px;">
          <form action="proses_ubah_kategori.php?kode_kategori=<?php echo $kode_kategori?>" method="post">
            <table>
            <tr>
              <td>Kode Kategori</td>
              <td> </td>
              <td> : </td>
              <td> </td>
              <td><input type="text" class="form-control" name="kode_kategori" value="<?php echo $kode_kategori?>" disabled></td>
            </tr>
            <tr>
              <td>Nama Kategori</td>
              <td> </td>
              <td> : </td>
              <td> </td>
              <td><select class="form-control" name="nama_kategori" required="">
                <option value="" selected="">--Pilih Data--</option>
                  <option value="Makanan" <?php if($a=='Makanan'){echo "selected=''";}?>>Makanan</option>
                  <option value="Alat" <?php if($a=='Alat'){echo "selected=''";}?>>Alat</option>
                  <option value="Lainnya" <?php if($a=='Lainnya'){echo "selected=''";}?>>Lainnya</option>
              </select></td>
            </tr>
            <tr>
              <td>No Rak</td>
              <td> </td>
              <td> : </td>
              <td> </td>
              <td><input type="text" class="form-control" name="no_rak" value="<?php echo $baris['no_rak'] ?>"></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><input type="submit" name="ubah" value="Ubah" class="btn btn-primary"> <input type="button" onclick="javascript:history.back()" name="batal" value="Kembali" class="btn btn-secondary"></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
        </div>
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
          <a class="btn btn-primary" href="logout.php" >Logout</a>
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
