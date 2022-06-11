<?php
include 'koneksi.php';

$kode_barang = $_POST['kode_barang'];

$cek = mysqli_query($koneksi, "SELECT * from barang where kode_barang = '$kode_barang'") or die(mysqli_error($koneksi));

$data = mysqli_fetch_assoc($cek);

if ($data > 0) {
	header("Location:barang_keluar.php?kode_barang=$kode_barang");
}
else {
	echo "<script>alert('Kode barang Tidak Ditemukan !!!'); window.location='cari_barang_keluar.php';</script>";
}

?>