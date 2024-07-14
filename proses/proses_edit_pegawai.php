<!-- edit data pegawai -->
<?php
session_start();
include "connect.php";
$id_pegawai = (isset($_POST['id_pegawai'])) ? htmlentities($_POST['id_pegawai']) : "";
$nama_pegawai = (isset($_POST['nama_pegawai'])) ? htmlentities($_POST['nama_pegawai']) : "";
$jabatan = (isset($_POST['jabatan'])) ? htmlentities($_POST['jabatan']) : "";
$jenis_pegawai = (isset($_POST['jenis_pegawai'])) ? htmlentities($_POST['jenis_pegawai']) : "";
$nip = (isset($_POST['nip'])) ? htmlentities($_POST['nip']) : "";

if (!empty($_POST['edit_pegawai_validate'])) {
    $query = mysqli_query($conn, "UPDATE pegawai SET 
        nama_pegawai='$nama_pegawai', 
        jabatan='$jabatan', 
        jenis_pegawai='$jenis_pegawai',
        nip='$nip' 
        WHERE id_pegawai='$id_pegawai'");

    if (!$query) {
        $_SESSION['message'] = [
            'title' => 'Data Gagal Diedit',
            'icon' => 'error'
        ];
        header('Location: ../pegawai');
    } else {
        $_SESSION['message'] = [
            'title' => 'Data BerhasiL Diedit',
            'icon' => 'success'
        ];
        header('Location: ../pegawai');
    }
}
?>
<!-- akhir edit data pegawai -->