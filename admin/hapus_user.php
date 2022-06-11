<?php
  include 'koneksi.php';

  $user_id = $_GET['user_id'];

  $query = mysqli_query($koneksi, "DELETE from user where user_id = '$user_id'") or die(mysqli_erorr($koneksi));

  if ($query) {
    header("Location: daftar_user.php");
  }
  else {
    echo "GAGAL";
  }
?>