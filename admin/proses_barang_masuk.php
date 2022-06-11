<?php
	include 'koneksi.php';
    include 'cek.php';

	$no_faktur = $_POST['no_faktur'];
	$tanggal = $_POST['tanggal'];
	$kode_barang = $_GET['kode_barang'];
	$jumlah = $_POST['jumlah'];
	$kode_supplier = $_POST['nama_supplier'];
	$user_id = $_SESSION['user_id'];
	$kondisi = $_POST['kondisi'];

	$cek = mysqli_query($koneksi, "SELECT stok from barang where kode_barang = '$kode_barang'") or die(mysqli_error($koneksi));
	$a = mysqli_fetch_array($cek);
	$b = $a['stok'];
	$stok = $b + $jumlah;

	$query = mysqli_query($koneksi, "INSERT into barang_masuk values('$no_faktur','$tanggal','$kode_barang','$jumlah','$kode_supplier','$user_id','$kondisi')") or die(mysqli_error($koneksi));

	$edit_stok = mysqli_query($koneksi, "UPDATE barang set stok = '$stok' where kode_barang = '$kode_barang'") or die(mysqli_error($koneksi));

	if ($query && $edit_stok) {
		echo "<script>alert('Data Berhasil Disimpan !!!'); window.location='tampil_barang_masuk.php';</script>";
	}
	else{
		echo "GAGAL";
	}
?>