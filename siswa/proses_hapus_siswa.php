<!-- Hapus Data -->
<?php
session_start();
include "../proses/connect.php";
$id_siswa = (isset($_POST['id_siswa'])) ? htmlentities($_POST['id_siswa']) : "";

if (!empty($_POST['hapus_siswa_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM siswa WHERE id_siswa='$id_siswa'");
    if (!$query) {
        $error_message = mysqli_error($conn);
        $_SESSION['message'] = [
            'title' => 'Data Gagal Dihapus',
            'icon' => 'error'
        ];
        header('Location: ../siswaa');
    } else {
        $_SESSION['message'] = [
            'title' => 'Data Berhasil Dihapus',
            'icon' => 'success'
        ];
        header('Location: ../siswaa');
    }
}
?>

<!-- Akhir Hapus Data -->