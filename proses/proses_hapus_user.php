<?php
session_start();
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";

if (!empty($_POST['delete_user_validate'])) {
  $query = mysqli_query($conn, "DELETE FROM login WHERE id='$id'");
  if (!$query) {
    $_SESSION['message'] = [
      'title' => 'Data Gagal Dihapus',
      'icon' => 'error'
    ];
    header('Location: ../user');
  } else {
    $_SESSION['message'] = [
      'title' => 'Data Berhasil Dihapus',
      'icon' => 'success'
  ];
  header('Location: ../user');

  }
}
?>