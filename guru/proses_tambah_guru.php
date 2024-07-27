<!-- input_guru_validate -->
<?php
session_start();
include "../proses/connect.php";

$nama_guru = (isset($_POST['nama_guru'])) ? htmlentities($_POST['nama_guru']) : "";
$wali_kelas = (isset($_POST['wali_kelas'])) ? htmlentities($_POST['wali_kelas']) : "";

if (!empty($_POST['input_guru_validate'])) {
    $select = mysqli_query($conn, "SELECT nama_guru FROM guru WHERE nama_guru = '$nama_guru'");
    if (mysqli_num_rows($select) > 0) {
        $_SESSION['message'] = [
            'title' => 'Data guru Sudah Ada',
            'icon' => 'info'
        ];
        header('Location: ../guruu');
    } else {
        $query = mysqli_query($conn, "INSERT INTO guru (nama_guru, wali_kelas) 
                                      VALUES ('$nama_guru', '$wali_kelas')");

        if ($query) {
            $_SESSION['message'] = [
                'title' => 'Data guru Berhasil Ditambah',
                'icon' => 'success'
            ];
            header('Location: ../guruu');
        } else {
            $_SESSION['message'] = [
                'title' => 'Gagal Menambahkan Data',
                'icon' => 'error'
            ];
            header('Location: ../guruu');
        }
    }
}
?>
<!-- akhir tambah data pegawai -->