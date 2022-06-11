<?php
	include 'koneksi.php';

	$kode_kategori = $_GET['kode_kategori'];
	$nama_kategori = $_POST['nama_kategori'];
	$no_rak = $_POST['no_rak'];

	$query = mysqli_query($koneksi, "UPDATE kategori set nama_kategori = '$nama_kategori', no_rak = '$no_rak' where kode_kategori = '$kode_kategori'") or die(mysqli_error($koneksi));

	if ($query) {
		echo "<script>alert('Perubahan Berhasil Disimpan'); window.location='kategori.php';</script>";
	}
	else {
		echo "GAGAL";
	}