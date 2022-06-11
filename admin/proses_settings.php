<?php
	include 'koneksi.php';

	$nama = $_GET['nama'];
	$username = $_GET['username'];
	$password = $_POST['password'];

	$query = mysqli_query($koneksi, "UPDATE user set password = '$password' where username='$username'") or die(mysqli_error($koneksi));

	if ($query) {
		echo "<script>alert('Password Berhasil Diubah'); window.location='index.php';</script>";
	}
	else {
		echo "GAGAL";
	}