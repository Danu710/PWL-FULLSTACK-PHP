<?php
session_start();
include "connect.php";
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";

if (!empty($_POST['ubah_profile_validate'])) {
    $query = mysqli_query($conn, "UPDATE login SET nama='$nama', nohp='$nohp', alamat='$alamat' WHERE username = '$_SESSION[username_simsditp]'");
    if ($query) {
        $_SESSION['message'] = [
            'title' => 'Profile Berhasil Diupdate',
            'icon' => 'success'
        ];
    } else {
        $_SESSION['message'] = [
            'title' => 'Profile Gagal Diupdate',
            'icon' => 'error'
        ];
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
?>
