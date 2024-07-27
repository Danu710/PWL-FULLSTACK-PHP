<!-- hapus guru -->
<?php
session_start();
include "../proses/connect.php";

$nama_guru = (isset($_POST['nama_guru'])) ? htmlentities($_POST['nama_guru']) : "";

if (!empty($_POST['hapus_guru_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM guru WHERE nama_guru='$nama_guru'");
    if (!$query) {
        $_SESSION['message'] = [
            'title' => 'Data Gagal Dihapus',
            'icon' => 'error'
        ];
        header('Location: ../guruu');
    } else {
        $_SESSION['message'] = [
            'title' => 'Data Berhasil Dihapus',
            'icon' => 'success'
        ];
        header('Location: ../guruu');
    }
}
?>
<!-- akhir hapus guru -->