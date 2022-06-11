<?php
	include 'koneksi.php';

	$kode_supplier = $_GET['kode_supplier'];
	$nama_supplier = $_POST['nama_supplier'];
	$alamat = $_POST['alamat'];
	$notelp = $_POST['notelp'];

	$query = mysqli_query($koneksi, "UPDATE supplier set nama_supplier = '$nama_supplier', alamat = '$alamat', notelp = '$notelp' where kode_supplier = '$kode_supplier'") or die(mysqli_error($koneksi));

	if ($query) {
		echo "<script>alert('Perubahan Berhasil Disimpan'); window.location='supplier.php';</script>";
	}
	else {
		echo "GAGAL";
	}