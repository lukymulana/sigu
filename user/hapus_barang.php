<?php
  include 'koneksi.php';

  $kode_barang = $_GET['kode_barang'];

  $query = mysqli_query($koneksi, "DELETE from barang where kode_barang = '$kode_barang'") or die(mysqli_error($koneksi));

  if ($query) {
    header("Location: barang.php");
  }
  else {
    echo "GAGAL";
  }
?>