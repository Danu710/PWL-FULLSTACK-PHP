<!-- edit spp siswa -->
<?php
session_start();
include "../proses/connect.php";
$nipd = (isset($_POST['nipd'])) ? htmlentities($_POST['nipd']) : "";
$nama_siswa = (isset($_POST['nama_siswa'])) ? htmlentities($_POST['nama_siswa']) : "";
$kelas = (isset($_POST['kelas'])) ? htmlentities($_POST['kelas']) : "";
$bulan = (isset($_POST['bulan'])) ? htmlentities($_POST['bulan']) : "";
$bayar = (isset($_POST['bayar'])) ? htmlentities($_POST['bayar']) : "";
$tanggal = (isset($_POST['tanggal'])) ? htmlentities($_POST['tanggal']) : "";
$status = (isset($_POST['status'])) ? htmlentities($_POST['status']) : "";


if (!empty($_POST['edit_spp_validate'])) {
    $query = mysqli_query($conn, "UPDATE spp SET nipd='$nipd', nama_siswa='$nama_siswa', kelas='$kelas', 
    bulan='$bulan', bayar='$bayar', tanggal='$tanggal', status='$status' WHERE nipd='$nipd'");
    if (!$query) {
        $_SESSION['message'] = [
            'title' => 'Tidak Ada Data Yang Diubah',
            'icon' => 'info'
        ];
        header('Location: ../spp1');
    } else {
        $_SESSION['message'] = [
            'title' => 'Data SPP BerhasiL Diedit',
            'icon' => 'success'
        ];
        header('Location: ../spp1');
    }
}