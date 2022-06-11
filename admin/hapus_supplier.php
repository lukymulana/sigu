<?php
  include 'koneksi.php';

  $kode_supplier = $_GET['kode_supplier'];

  $query = mysqli_query($koneksi, "DELETE from supplier where kode_supplier = '$kode_supplier'") or die(mysqli_erorr($koneksi));

  if ($query) {
    header("Location: supplier.php");
  }
  else {
    echo "GAGAL";
  }
?>