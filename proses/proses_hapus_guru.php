<?php
session_start();
include "connect.php";

if (isset($_POST['hapus_guru_validate'])) {
    $nama_guru = $_POST['nama_guru'];

    $query = "DELETE FROM guru WHERE nama_guru='$nama_guru'";
    if (mysqli_query($conn, $query)) {
        $_SESSION['message'] = [
            'title' => 'Berhasil!',
            'text' => 'Data guru berhasil dihapus.',
            'icon' => 'success'
        ];
    } else {
        $_SESSION['message'] = [
            'title' => 'Gagal!',
            'text' => 'Data guru gagal dihapus: ' . mysqli_error($conn),
            'icon' => 'error'
        ];
    }
}

header("Location: ../index.php");
exit();
?>
