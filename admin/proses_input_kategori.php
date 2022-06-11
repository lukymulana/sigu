<?php
	include 'koneksi.php';

	$kode_kategori = $_GET['kode_kategori'];
	$nama_kategori = $_POST['nama_kategori'];
	$no_rak = $_POST['no_rak'];

	$query = mysqli_query($koneksi, "INSERT into kategori values ('$kode_kategori', '$nama_kategori', '$no_rak')") or die(mysqli_error($koneksi));

	if ($query) {
		echo "<script>alert('Data Berhasil Disimpan'); window.location = 'kategori.php';</script>";
	}
	else {
		echo "GAGAL";
	}
?>
