<?php
	include 'koneksi.php';

	$user_id = $_GET['user_id'];
	$username = $_GET['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$level = $_POST['level'];

	$query = mysqli_query($koneksi, "UPDATE user set username = '$username', password = '$password', nama = '$nama', level = '$level' where user_id = '$user_id'") or die(mysqli_error($koneksi));

	if ($query) {
		echo "<script>alert('Perubahan Berhasil Disimpan'); window.location='daftar_user.php';</script>";
	}
	else {
		echo "GAGAL";
	}