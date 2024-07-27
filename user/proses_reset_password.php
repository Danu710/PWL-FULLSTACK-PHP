<?php
session_start();
include "../proses/connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";

if (!empty($_POST['editpass_user_validate'])) {
  $query = mysqli_query($conn, "UPDATE login SET password=md5('password') WHERE id='$id'");
  if (!$query) {
    $_SESSION['message'] = [
      'title' => 'Password Gagal Direset',
      'icon' => 'error'
    ];
    header('Location: ../userr');
  } else {
    $_SESSION['message'] = [
      'title' => 'Password Berhasil Direset',
      'icon' => 'success'
    ];
    header('Location: ../userr');
  }
}
?>