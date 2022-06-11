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

          <!-- DataTales Example -->
          <?php
            $periode_awal = $_GET['periode_awal'];
            $periode_akhir = $_GET['periode_akhir'];            
          ?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary" align="center">Stok Barang</h4>
              <br>
              <label>Periode Awal : <?php echo date('d F Y', strtotime($periode_awal)) ?></label>
              <br>
              <label>Periode Akhir : <?php echo date('d F Y', strtotime($periode_akhir)) ?></label>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead align="center">
                    <tr>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Kategori</th>
                      <th>Supplier</th>
                      <th width="50">Stok Awal</th>
                      <th>In</th>
                      <th>Out</th>
                      <th width="50">Stok Akhir</th>
                      <th>Satuan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include 'koneksi.php';
            
                      $cek = mysqli_query($koneksi, "SELECT b.kode_barang, b.nama_barang, k.nama_kategori, s.nama_supplier, b.satuan from barang b, kategori k, supplier s where b.kode_kategori = k.kode_kategori and b.kode_supplier = s.kode_supplier");
                      while ($data = mysqli_fetch_array($cek)) {
                        $kode_barang = $data['kode_barang'];
                        $nama_barang = $data['nama_barang'];
                        $nama_kategori = $data['nama_kategori'];
                        $nama_supplier = $data['nama_supplier'];
                        $satuan = $data['satuan'];

                        $query = mysqli_query($koneksi, "SELECT barang.*, sum(barang_masuk.jumlah) as jumlah from barang, barang_masuk where barang.kode_barang = '$kode_barang' and barang.kode_barang = barang_masuk.kode_barang and tanggal_masuk < '$periode_awal' group by barang.kode_barang");
                        $arraymasuk = mysqli_fetch_assoc($query);
                        $masuk = $arraymasuk['jumlah'];

                        $query1 = mysqli_query($koneksi, "SELECT barang.*, sum(barang_keluar.jumlah) as jumlah from barang, barang_keluar where barang.kode_barang = '$kode_barang' and barang.kode_barang = barang_keluar.kode_barang and tanggal_keluar < '$periode_awal' group by barang.kode_barang");
                        $arraykeluar = mysqli_fetch_assoc($query1);
                        $keluar = $arraykeluar['jumlah'];

                        $query2 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang, barang_masuk where barang.kode_barang = '$kode_barang' and tanggal_masuk between '$periode_awal' and '$periode_akhir' and barang.kode_barang = barang_masuk.kode_barang group by barang.kode_barang") or die(mysqli_error($koneksi));
                        $arrayin = mysqli_fetch_assoc($query2);
                        $iner = $arrayin['jumlah'];
                        if (is_null($iner)) {
                                   $in = 0;
                                 }
                                 else {
                                  $in = $arrayin['jumlah'];
                                 } 

                        $query3 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang, barang_keluar where barang.kode_barang = '$kode_barang' and tanggal_keluar between '$periode_awal' and '$periode_akhir' and barang.kode_barang = barang_keluar.kode_barang group by barang.kode_barang");
                        $arrayout = mysqli_fetch_assoc($query3);
                        $outer = $arrayout['jumlah'];
                        if (is_null($outer)) {
                                   $out = 0;
                                 }
                                 else {
                                  $out = $arrayout['jumlah'];
                                 }         

                        $stok_awal = $masuk - $keluar;
                        $stok_akhir = ($stok_awal + $in) - $out;

                        echo ' <tr>
                                <td>'.$kode_barang.'</td>
                                <td>'.$nama_barang.'</td>
                                <td>'.$nama_kategori.'</td>
                                <td>'.$nama_supplier.'</td>
                                <td align="center">'.$stok_awal.'</td>
                                <td align="center">'.$in.'</td>
                                <td align="center">'.$out.'</td>
                                <td align="center">'.$stok_akhir.'</td>
                                <td>'.$satuan.'</td>
                        </tr>
                        ';
                      }
                    ?>

                  </tbody>
                </table>
              </div>
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
  <script>
    window.print();
  </script>

</body>

</html>
