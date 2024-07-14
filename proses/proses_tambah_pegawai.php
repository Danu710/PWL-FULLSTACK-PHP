<!-- tambah data pegawai -->
<?php
session_start();
include "connect.php";

$nama_pegawai = (isset($_POST['nama_pegawai'])) ? htmlentities($_POST['nama_pegawai']) : "";
$jabatan = (isset($_POST['jabatan'])) ? htmlentities($_POST['jabatan']) : "";
$jenis_pegawai = (isset($_POST['jenis_pegawai'])) ? htmlentities($_POST['jenis_pegawai']) : "";
$nip = (isset($_POST['nip'])) ? htmlentities($_POST['nip']) : "";

if (!empty($_POST['input_pegawai_validate'])) {
    $select = mysqli_query($conn, "SELECT nama_pegawai FROM pegawai WHERE nama_pegawai = '$nama_pegawai'");
    if (mysqli_num_rows($select) > 0) {
        $_SESSION['message'] = [
            'title' => 'Data Pegawai Sudah Ada',
            'icon' => 'info'
        ];
        header('Location: ../pegawai');
    } else {
        $query_id = mysqli_query($conn, "SELECT MAX(id_pegawai) as max_id FROM pegawai");
        $data_id = mysqli_fetch_array($query_id);
        $max_id = $data_id['max_id'];
        $id_number = (int) substr($max_id, 1, 3);
        $id_number++;
        $new_id = 'P' . sprintf("%03s", $id_number);

        $query = mysqli_query($conn, "INSERT INTO pegawai (id_pegawai, nama_pegawai, jabatan, jenis_pegawai, nip) 
                                      VALUES ('$new_id', '$nama_pegawai', '$jabatan', '$jenis_pegawai', '$nip')");

        if ($query) {
            $_SESSION['message'] = [
                'title' => 'Data Pegawai Berhasil Ditambah',
                'icon' => 'success'
            ];
            header('Location: ../pegawai');
        } else {
            $_SESSION['message'] = [
                'title' => 'Gagal Menambahkan Data',
                'icon' => 'error'
            ];
            header('Location: ../pegawai');
        }
    }
}
?>
<!-- akhir tambah data pegawai -->