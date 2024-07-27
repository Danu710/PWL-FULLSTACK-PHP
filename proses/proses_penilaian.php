<?php
session_start();
include "connect.php";

try {
    $id_mapel = (isset($_POST['id_mapel'])) ? $_POST['id_mapel'] : [];
    $id_siswa = (isset($_POST['id_siswa'])) ? htmlentities($_POST['id_siswa']) : "";
    $semester = (isset($_POST['semester'])) ? htmlentities($_POST['semester']) : "";
    $tahun_ajaran = (isset($_POST['tahun_ajaran'])) ? $_POST['tahun_ajaran'] : "";
    $nilai_mapel = (isset($_POST['nilai_mapel'])) ? $_POST['nilai_mapel'] : [];
    $nilai_tugas = (isset($_POST['nilai_tugas'])) ? $_POST['nilai_tugas'] : [];
    $nilai_uts = (isset($_POST['nilai_uts'])) ? $_POST['nilai_uts'] : [];
    $nilai_uas = (isset($_POST['nilai_uas'])) ? $_POST['nilai_uas'] : [];
    $catatan = (isset($_POST['catatan'])) ? $_POST['catatan'] : [];
    $predikat_sikap = (isset($_POST['sikap'])) ? htmlentities($_POST['sikap']) : "";
    $predikat_keterampilan = (isset($_POST['keterampilan'])) ? htmlentities($_POST['keterampilan']) : "";
    $predikat_kompetensi = (isset($_POST['kompetensi'])) ? htmlentities($_POST['kompetensi']) : "";

    //delete nilai
    mysqli_query($conn, "DELETE FROM nilai WHERE siswa_id = '$id_siswa'");

    //insert nilai
    foreach ($id_mapel as $value) {
        $mapel = $nilai_mapel[$value] ?? 0;
        $tugas = $nilai_tugas[$value] ?? 0;
        $uts = $nilai_uts[$value] ?? 0;
        $uas = $nilai_uas[$value] ?? 0;
        $cat = $catatan[$value] ?? null;
        $q = mysqli_query($conn, "INSERT INTO nilai (mapel_id, siswa_id, semester, tahun_ajaran, nilai_mapel, nilai_tugas, nilai_uts, nilai_uas, predikat_sikap, predikat_keterampilan, predikat_kompetensi, catatan) VALUES ('$value', '$id_siswa', '$semester', '$tahun_ajaran', '$mapel', '$tugas', '$uts', '$uas', '$predikat_sikap', '$predikat_keterampilan', '$predikat_kompetensi', '$cat')");
    }
    
    $_SESSION['message'] = [
        'title' => 'Data Nilai Berhasil',
        'text' => "Berhasil di input",
        'icon' => 'success'
    ];
    header('Location: ../nilai');
} catch (\Throwable $th) {
    echo $th->getMessage();
    $_SESSION['message'] = [
        'title' => 'Data Nilai Gagal',
        'text' => $th->getMessage(),
        'icon' => 'error'
    ];
    header('Location: ../nilai?page=penilaian&id_siswa='.$id_siswa);
}