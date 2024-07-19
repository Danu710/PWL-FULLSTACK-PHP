<?php
session_start();
include "connect.php";
$nama_guru = (isset($_POST['nama_guru'])) ? htmlentities($_POST['nama_guru']) : "";
$wali_kelas = (isset($_POST['wali_kelas'])) ? htmlentities($_POST['wali_kelas']) : "";

if (!empty($_POST['edit_guru_validate'])) {
    $query = mysqli_query($conn, "UPDATE guru SET 
        nama_guru='$nama_guru', 
        wali_kelas='$wali_kelas' 
        WHERE nama_guru='$nama_guru'");

    if (!$query) {
        $_SESSION['message'] = [
            'title' => 'Data Gagal Diedit',
            'icon' => 'error'
        ];
    } else {
        $_SESSION['message'] = [
            'title' => 'Data Berhasil Diedit',
            'icon' => 'success'
        ];
    }
    header('Location: ../guru');
    exit();
}
?>
