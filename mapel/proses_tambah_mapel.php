<?php
session_start();
include "../proses/connect.php";

$nama_mapel = (isset($_POST['nama_mapel'])) ? htmlentities($_POST['nama_mapel']) : "";
$kategori = (isset($_POST['kategori'])) ? htmlentities($_POST['kategori']) : "";

if (!empty($_POST['input_mapel_validate'])) {
    $select = mysqli_query($conn, "SELECT nama_mapel FROM mapel WHERE nama_mapel = '$nama_mapel'");
    if (mysqli_num_rows($select) > 0) {
        $_SESSION['message'] = [
            'title' => 'Mapel yang dimasukan telah ada',
            'icon' => 'info'
        ];
        header('Location: ../mapell');
    } else {
        $query_id = mysqli_query($conn, "SELECT id_mapel FROM mapel ORDER BY id_mapel DESC LIMIT 1");
        $data_id = mysqli_fetch_array($query_id);
        $max_id = $data_id['id_mapel'];
        $id_number = (int) substr($max_id, 2);
        $id_number++;
        $new_id = 'MP' . sprintf("%03s", $id_number);

        $query = mysqli_query($conn, "INSERT INTO mapel (id_mapel, nama_mapel, kategori) VALUES ('$new_id', '$nama_mapel', '$kategori')");

        if ($query) {
            $_SESSION['message'] = [
                'title' => 'Mapel Baru Berhasil Ditambah',
                'icon' => 'success'
            ];
        } else {
            $_SESSION['message'] = [
                'title' => 'Mapel Baru Gagal Ditambah',
                'icon' => 'error'
            ];
        }
        header('Location: ../mapell');
    }
}
?>
