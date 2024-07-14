<!-- edit data siswa -->
<?php
session_start();
include "connect.php";
$id_siswa = (isset($_POST['id_siswa'])) ? htmlentities($_POST['id_siswa']) : "";
$nipd = (isset($_POST['nipd'])) ? htmlentities($_POST['nipd']) : "";
$nama_siswa = (isset($_POST['nama_siswa'])) ? htmlentities($_POST['nama_siswa']) : "";
$kelas = (isset($_POST['kelas'])) ? htmlentities($_POST['kelas']) : "";
$kelamin = (isset($_POST['kelamin'])) ? htmlentities($_POST['kelamin']) : "";
$tempat_lahir = (isset($_POST['tempatlahir'])) ? htmlentities($_POST['tempatlahir']) : ""; // Corrected name
$tanggal_lahir = (isset($_POST['tanggal'])) ? htmlentities($_POST['tanggal']) : ""; // Corrected name

if (!empty($_POST['edit_siswa_validate'])) { // Corrected key
    $query = mysqli_query($conn, "UPDATE siswa SET nipd='$nipd', nama_siswa='$nama_siswa', kelas='$kelas', 
    kelamin='$kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir' WHERE id_siswa='$id_siswa'");
    if (!$query) {
        $_SESSION['message'] = [
            'title' => 'Tidak Ada Data Yang Diubah',
            'icon' => 'info'
        ];
        header('Location: ../siswa');
    } else {
        $_SESSION['message'] = [
            'title' => 'Data Siswa BerhasiL Diedit',
            'icon' => 'success'
        ];
        header('Location: ../siswa');
    }
}
?>
<!-- akhir edit data siswa -->