<?php
  include 'koneksi.php';

  $no_faktur = $_GET['no_faktur'];
  $kode_barang = $_GET['kode_barang'];

  $cek = mysqli_query($koneksi, "SELECT * from barang_masuk where no_faktur = '$no_faktur'") or die(mysqli_error($koneksi));
  $a = mysqli_fetch_array($cek);
  $b = $a['jumlah'];

  $cek1 = mysqli_query($koneksi, "SELECT stok from barang, barang_masuk where barang.kode_barang = '$kode_barang' and barang.kode_barang = barang_masuk.kode_barang") or die(mysqli_error($koneksi));
  $c = mysqli_fetch_array($cek1);
  $d = $c['stok'];

  $stok = $d - $b;

  $query2 = mysqli_query($koneksi,"UPDATE barang set stok = '$stok' where kode_barang = '$kode_barang'") or die(mysqli_error($koneksi));
  $query = mysqli_query($koneksi, "DELETE from barang_masuk where no_faktur = '$no_faktur'") or die(mysqli_error($koneksi));


  if ($query && $query2) {
  	header("Location: tampil_barang_masuk.php");
  }
  else {
    echo "GAGAL";
  }
?>