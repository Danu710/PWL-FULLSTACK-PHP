<?php
session_start();
include "connect.php";

$id_mapel = (isset($_POST['id_mapel'])) ? htmlentities($_POST['id_mapel']) : "";

if (!empty($_POST['hapus_mapel_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM mapel WHERE id_mapel='$id_mapel'");
    if ($query) {
        $_SESSION['message'] = [
            'title' => 'Data Berhasil Dihapus',
            'icon' => 'success'
        ];
    } else {
        $error_message = mysqli_error($conn);
        $_SESSION['message'] = [
            'title' => 'Data Gagal Dihapus',
            'text' => 'Error: ' . $error_message,
            'icon' => 'error'
        ];
    }
    header('Location: ../mapel');
}
?>
