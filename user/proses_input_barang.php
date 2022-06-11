<?php
	include 'koneksi.php';

	$kode_barang = $_GET['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
	$kode_kategori = $_POST['nama_kategori'];
	$kode_supplier = $_POST['nama_supplier'];
	$stok = $_POST['stok'];
	$satuan = $_POST['satuan'];

	$query = mysqli_query($koneksi, "INSERT into barang values ('$kode_barang', '$nama_barang', '$kode_kategori', '$kode_supplier', '$stok', '$satuan')") or die(mysqli_error($koneksi));

	if ($query) {
		echo "<script>alert('Data Berhasil Disimpan'); window.location = 'barang.php';</script>";
	}
	else {
		echo "GAGAL";
	}
?>
