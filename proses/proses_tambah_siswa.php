<!-- Input data mahasiswa -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();
include "connect.php";

$nipd = (isset($_POST['nipd'])) ? htmlentities($_POST['nipd']) : "";
$nama_siswa = (isset($_POST['nama_siswa'])) ? htmlentities($_POST['nama_siswa']) : "";
$kelas = (isset($_POST['kelas'])) ? htmlentities($_POST['kelas']) : "";
$kelamin = (isset($_POST['kelamin'])) ? htmlentities($_POST['kelamin']) : "";
$tempatlahir = (isset($_POST['tempatlahir'])) ? htmlentities($_POST['tempatlahir']) : "";
$tanggal = (isset($_POST['tanggal'])) ? htmlentities($_POST['tanggal']) : "";

if (!empty($_POST['input_siswa_validate'])) {
    $select = mysqli_query($conn, "SELECT nipd FROM siswa WHERE nipd = '$nipd'");
    if (mysqli_num_rows($select) > 0) {
        $_SESSION['message'] = [
            'title' => 'Data Siswa Yang Dimasukan Telah Ada',
            'icon' => 'info'
        ];
        header('Location: ../siswa');
    } else {
        $query_id = mysqli_query($conn, "SELECT MAX(id_siswa) as max_id FROM siswa");
        $data_id = mysqli_fetch_array($query_id);
        $max_id = $data_id['max_id'];
        $id_number = (int) substr($max_id, 1, 3);
        $id_number++;
        $new_id = 'S' . sprintf("%03s", $id_number);

        $query = mysqli_query($conn, "INSERT INTO siswa (id_siswa, nipd, nama_siswa, kelas, kelamin, tempat_lahir, tanggal_lahir) 
                                      VALUES ('$new_id', '$nipd', '$nama_siswa', '$kelas', '$kelamin', '$tempatlahir', '$tanggal')");

        if ($query) {
            $_SESSION['message'] = [
                'title' => 'Data Siswa Berhasil Ditambah',
                'icon' => 'success'
            ];
            header('Location: siswa');
        } else {
            $_SESSION['message'] = [
                'title' => 'Gagal Menambahkan Data Siswa',
                'icon' => 'error'
            ];
            header('Location: ../siswa');
        }
    }
}
?>
<!-- akhir input data siswa -->