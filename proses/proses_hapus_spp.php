<?php
  session_start();
  include "connect.php";
  $nipd = (isset($_POST['nipd'])) ? htmlentities($_POST['nipd']) : "";

  if(!empty($_POST['delete_spp_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM spp WHERE nipd='$nipd'");
    if(!$query) {
        $error_message = mysqli_error($conn);
       $_SESSION['message'] = [
      'title' => 'Spp Gagal Dihapus',
      'icon' => 'error'
    ];
      header("Location: ../spp");
    } else {
      $_SESSION['message'] = [
      'title' => 'Data Berhasil Dihapus',
      'icon' => 'success'];
    }
    header("Location: ../spp");
    exit();
  }
?>