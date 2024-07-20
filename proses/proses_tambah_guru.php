<!-- input_guru_validate -->
<?php
session_start();
include "connect.php";

$nama_guru = (isset($_POST['nama_guru'])) ? htmlentities($_POST['nama_guru']) : "";
$wali_kelas = (isset($_POST['wali_kelas'])) ? htmlentities($_POST['wali_kelas']) : "";

if (!empty($_POST['input_guru_validate'])) {
    $select = mysqli_query($conn, "SELECT nama_guru FROM guru WHERE nama_guru = '$nama_guru'");
    if (mysqli_num_rows($select) > 0) {
        $_SESSION['message'] = [
            'title' => 'Data guru Sudah Ada',
            'icon' => 'info'
        ];
        header('Location: ../pegawai');
    } else {
        $query_id = mysqli_query($conn, "SELECT MAX(nama_guru) as max_id FROM guru");
        $data_id = mysqli_fetch_array($query_id);
        $max_id = $data_id['max_id'];
        $id_number = (int) substr($max_id, 1, 3);
        $id_number++;
        $new_id = 'P' . sprintf("%03s", $id_number);

        $query = mysqli_query($conn, "INSERT INTO guru (nama_guru, wali_kelas) 
                                      VALUES ('$nama_guru', '$wali_kelas')");

        if ($query) {
            $_SESSION['message'] = [
                'title' => 'Data guru Berhasil Ditambah',
                'icon' => 'success'
            ];
            header('Location: ../guru');
        } else {
            $_SESSION['message'] = [
                'title' => 'Gagal Menambahkan Data',
                'icon' => 'error'
            ];
            header('Location: ../guru');
        }
    }
}
?>
<!-- akhir tambah data pegawai -->