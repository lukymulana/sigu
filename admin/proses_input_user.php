<?php
	include 'koneksi.php';

	$user_id = $_GET['user_id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$level = $_POST['level'];

	$query = mysqli_query($koneksi, "INSERT into user values ('$user_id', '$username', '$password', '$nama', '$level')") or die(mysqli_error($koneksi));

	if ($query) {
		echo "<script>alert('Data Berhasil Disimpan'); window.location = 'daftar_user.php';</script>";
	}
	else {
		echo "GAGAL";
	}
?>
