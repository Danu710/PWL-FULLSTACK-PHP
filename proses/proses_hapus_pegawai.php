<!-- hapus pegawai -->
<?php
session_start();
include "connect.php";

$id_pegawai = (isset($_POST['id_pegawai'])) ? htmlentities($_POST['id_pegawai']) : "";

if (!empty($_POST['hapus_pegawai_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'");
    if (!$query) {
        $_SESSION['message'] = [
            'title' => 'Data Gagal Dihapus',
            'icon' => 'error'
        ];
        header('Location: ../pegawai');
    } else {
        $_SESSION['message'] = [
            'title' => 'Data Berhasil Dihapus',
            'icon' => 'success'
        ];
        header('Location: ../pegawai');
    }
}
?>
<!-- akhir hapus pegawai -->