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

    <div id="wrapper">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary" align="center">Data Barang Keluar</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-responsive" id="dataTable" >
                  <thead align="center">
                    <tr>
                      <th>No Faktur</th>
                      <th>Tanggal Keluar</th>
                      <th>Nama Barang</th>
                      <th>Jumlah</th>
                      <th>Supplier</th>
                      <th>Keterangan</th>
                      <th>Kondisi</th>
                      <th>Petugas</th>
                    </tr>
                  </thead>
                  <tbody align="center">
                    <?php
                      include 'koneksi.php';
                       if (isset($_GET['tanggal'], $_GET['cari'])) {
                        $tanggal = $_GET['tanggal'];
                        $cari = $_GET['cari'];

                        $data = mysqli_query($koneksi, "SELECT no_faktur, barang.kode_barang, nama_barang, tanggal_keluar, jumlah, nama_supplier, nama, keterangan, kondisi from barang_keluar, barang, supplier, user where barang_keluar.kode_barang=barang.kode_barang and barang_keluar.kode_supplier = supplier.kode_supplier and barang_keluar.user_id = user.user_id and nama_barang like '%".$cari."%' and tanggal_keluar like '%".$tanggal."%'") or die (mysqli_error($koneksi));
                      foreach ($data as $baris) { ?>
                        <tr>
                            <td><?php echo $baris['no_faktur'] ?></td>
                            <td><?php echo $baris['tanggal_keluar'] ?></td>
                            <td><?php echo $baris['nama_barang'] ?></td>
                            <td><?php echo $baris['jumlah'] ?></td>
                            <td><?php echo $baris['nama_supplier'] ?></td>
                            <td><?php echo $baris['keterangan'] ?></td>
                            <td><?php echo $baris['kondisi'] ?></td>
                            <td><?php echo $baris['nama'] ?></td>
                        </tr>
                    <?php
                      }
                    }else{
                      $data = mysqli_query($koneksi, "SELECT no_faktur, barang.kode_barang, nama_barang, tanggal_keluar, jumlah, nama_supplier, nama, keterangan, kondisi from barang_keluar, barang, supplier, user where barang_keluar.kode_barang=barang.kode_barang and barang_keluar.kode_supplier = supplier.kode_supplier and barang_keluar.user_id = user.user_id") or die (mysqli_error($koneksi));
                      foreach ($data as $baris) { ?>
                        <tr>
                            <td><?php echo $baris['no_faktur'] ?></td>
                            <td><?php echo $baris['tanggal_keluar'] ?></td>
                            <td><?php echo $baris['nama_barang'] ?></td>
                            <td><?php echo $baris['jumlah'] ?></td>
                            <td><?php echo $baris['nama_supplier'] ?></td>
                            <td><?php echo $baris['keterangan'] ?></td>
                            <td><?php echo $baris['kondisi'] ?></td>
                            <td><?php echo $baris['nama'] ?></td>
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
          <a class="btn btn-primary" href="index.php" >Logout</a>
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
  <Script>
    window.print()
  </Script>
</body>

</html>
