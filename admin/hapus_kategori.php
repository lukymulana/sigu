<?php
  include 'koneksi.php';

  $kode_kategori = $_GET['kode_kategori'];

  $query = mysqli_query($koneksi, "DELETE from kategori where kode_kategori = '$kode_kategori'") or die(mysqli_erorr($koneksi));

  if ($query) {
    header("Location: kategori.php");
  }
  else {
    echo "GAGAL";
  }
?>