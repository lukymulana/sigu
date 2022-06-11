<?php
	session_start();

	include 'admin/koneksi.php';

	//$username = mysqli_real_escape_string($_POST['username']);
	//$password = mysqli_real_escape_string($_POST['password']);

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysqli_query($koneksi, "SELECT * from user where username = '$username' and password = '$password'") or die(mysqli_error($koneksi));

	$login = mysqli_prepare($koneksi, "SELECT * from user where username = ? and password = ?");

	mysqli_stmt_bind_param($login, "ss", $_POST['username'], $_POST['password']);
	mysqli_execute($login);
	mysqli_stmt_store_result($login);

	if (mysqli_stmt_num_rows($login) == 1){
		$data = mysqli_fetch_array($query);
		$_SESSION['username'] = $data['username'];
		$_SESSION['user_id'] = $data['user_id'];
		$level = $data['level'];
		if ($level == "admin"){
			$_SESSION['status'] = "login";
			header("Location:admin/index.php");
		}
		else{
			$_SESSION['status'] = "login";
			header("Location:user/index.php");
		}
	}
	else{
		$_SESSION['status'] = "gagal";
		header("Location:login.php?pesan=gagal");
	}
?>