<?php
session_start();
include "connect.php";

// Mendapatkan data dari form pembayaran
$nipd = (isset($_POST['nipd'])) ? htmlentities($_POST['nipd']) : "";
$bulan_dibayar = (isset($_POST['bulan_dibayar'])) ? htmlentities($_POST['bulan_dibayar']) : "";
$tahun_dibayar = (isset($_POST['tahun_dibayar'])) ? htmlentities($_POST['tahun_dibayar']) : "";
$jumlah_bayar = (isset($_POST['jumlah_bayar'])) ? htmlentities($_POST['jumlah_bayar']) : "";

// Mendapatkan ID pembayaran terakhir untuk membuat ID pembayaran baru
$query_last_id = mysqli_query($conn, "SELECT id_pembayaran FROM pembayaran ORDER BY id_pembayaran DESC LIMIT 1");
$row_last_id = mysqli_fetch_assoc($query_last_id);
$last_id = $row_last_id ? $row_last_id['id_pembayaran'] : 'TRS0001';
$new_id_number = intval(substr($last_id, 3)) + 1;
$new_id_pembayaran = 'TRS' . str_pad($new_id_number, 4, '0', STR_PAD_LEFT);

// Mendapatkan data siswa berdasarkan NIPD
$query_siswa = mysqli_query($conn, "SELECT * FROM siswa WHERE nipd='$nipd'");
$siswa = mysqli_fetch_assoc($query_siswa);

if ($siswa) {
    // Mendapatkan ID SPP dari data siswa
    $id_spp = $siswa['id_spp'];

    // Insert data pembayaran ke tabel pembayaran
    $query_insert = mysqli_query($conn, "INSERT INTO pembayaran (id_pembayaran, id_petugas, nisn, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar) VALUES ('$new_id_pembayaran', '1', '{$siswa['nisn']}', NOW(), '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_bayar')");

    if ($query_insert) {
        $_SESSION['message'] = [
            'title' => 'Pembayaran Berhasil',
            'icon' => 'success'
        ];
    } else {
        $_SESSION['message'] = [
            'title' => 'Pembayaran Gagal',
            'icon' => 'error'
        ];
    }
} else {
    $_SESSION['message'] = [
        'title' => 'Siswa Tidak Ditemukan',
        'icon' => 'error'
    ];
}

header("Location: ../spp");
exit();
?>