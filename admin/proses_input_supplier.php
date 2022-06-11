<?php
	include 'koneksi.php';

	$kode_supplier = $_GET['kode_supplier'];
	$nama_supplier = $_POST['nama_supplier'];
	$alamat = $_POST['alamat'];
	$notelp = $_POST['notelp'];

	$query = mysqli_query($koneksi, "INSERT into supplier values ('$kode_supplier', '$nama_supplier', '$alamat', '$notelp')") or die(mysqli_error($koneksi));

	if ($query) {
		echo "<script>alert('Data Berhasil Disimpan'); window.location = 'supplier.php';</script>";
	}
	else {
		echo "GAGAL";
	}
?>
