<?php
session_start();
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$name = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$level = (isset($_POST['level'])) ? htmlentities($_POST['level']) : "";
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";


if (!empty($_POST['edit_user_validate'])) {
  $select = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'");
  if (mysqli_num_rows($select) > 0) {
    $_SESSION['message'] = [
      'title' => 'Username yang dimasukan telah ada',
      'icon' => 'info'
    ];
    header('Location: ../user');
  } else {
    $query = mysqli_query($conn, "UPDATE login SET nama='$name', username='$username',level='$level', 
    nohp='$nohp', alamat='$alamat', password='$password' WHERE id='$id'");
    if (!$query) {
      $_SESSION['message'] = [
        'title' => 'Data Gagal Diupdate',
        'icon' => 'error'
      ];
      header('Location: ../user');
    } else {
      $_SESSION['message'] = [
        'title' => 'Data Berhasil Diupdate',
        'icon' => 'success'
      ];
      header('Location: ../user');
    }
  }
}
?>