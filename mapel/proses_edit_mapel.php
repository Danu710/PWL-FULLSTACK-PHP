<?php
session_start();
include "../proses/connect.php";

$id_mapel = (isset($_POST['id_mapel'])) ? htmlentities($_POST['id_mapel']) : "";
$nama_mapel = (isset($_POST['nama_mapel'])) ? htmlentities($_POST['nama_mapel']) : "";
$kategori = (isset($_POST['kategori'])) ? htmlentities($_POST['kategori']) : "";

if (!empty($_POST['edit_mapel_validate'])) {
    $query = mysqli_query($conn, "UPDATE mapel SET nama_mapel='$nama_mapel', kategori='$kategori' WHERE id_mapel='$id_mapel'");
    if ($query) {
        $_SESSION['message'] = [
            'title' => 'Data Berhasil Diedit',
            'icon' => 'success'
        ];
    } else {
        $_SESSION['message'] = [
            'title' => 'Data Gagal Diedit',
            'icon' => 'error'
        ];
    }
    header('Location: ../mapell');
}
?>
