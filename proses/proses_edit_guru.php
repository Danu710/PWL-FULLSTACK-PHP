<?php
session_start();
include "connect.php";

if (isset($_POST['edit_guru_validate'])) {
    $nama_guru_lama = $_POST['nama_guru_lama'];
    $nama_guru_baru = $_POST['nama_guru_baru'];
    $wali_kelas = $_POST['wali_kelas'];

    $query = "UPDATE guru SET nama_guru='$nama_guru_baru', wali_kelas='$wali_kelas' WHERE nama_guru='$nama_guru_lama'";
    if (mysqli_query($conn, $query)) {
        $_SESSION['message'] = [
            'title' => 'Berhasil!',
            'text' => 'Data guru berhasil diupdate.',
            'icon' => 'success'
        ];
    } else {
        $_SESSION['message'] = [
            'title' => 'Gagal!',
            'text' => 'Data guru gagal diupdate: ' . mysqli_error($conn),
            'icon' => 'error'
        ];
    }
}

header("Location: ../index.php");
exit();
?>
