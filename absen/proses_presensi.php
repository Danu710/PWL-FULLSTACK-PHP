<?php
session_start();
include "../proses/connect.php";

// Error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!$conn) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kelas = isset($_POST['kelas']) ? $_POST['kelas'] : '';
    $presensi = isset($_POST['presensi']) ? $_POST['presensi'] : [];
    $nama_siswa = isset($_POST['nama_siswa']) ? $_POST['nama_siswa'] : [];
    $tanggal = date('Y-m-d'); // Tanggal hari ini

    if (empty($presensi) || empty($kelas)) {
        die('Data tidak lengkap.');
    }

    // Periksa apakah sudah ada absen untuk kelas dan tanggal hari ini
    $check_sql = "SELECT COUNT(*) AS count FROM absen WHERE kelas = ? AND tanggal = ?";
    $check_stmt = $conn->prepare($check_sql);

    if (!$check_stmt) {
        die('Gagal menyiapkan pernyataan: ' . $conn->error);
    }

    $check_stmt->bind_param('ss', $kelas, $tanggal);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    $check_row = $check_result->fetch_assoc();

    if ($check_row['count'] > 0) {
        // Jika sudah ada absen untuk kelas dan tanggal hari ini
        $_SESSION['message'] = [
            'title' => 'Gagal Menambahkan Absen',
            'text' => 'Absen untuk kelas ini sudah ada untuk Hari Ini',
            'icon' => 'error'
        ];

        // Redirect dengan pesan gagal
        header('Location: ../absenn');
        exit();
    }

    // Menyiapkan pernyataan SQL
    $stmt = $conn->prepare("INSERT INTO absen (nipd, nama_siswa, kelas, presensi, tanggal) 
                            VALUES (?, ?, ?, ?, ?) 
                            ON DUPLICATE KEY UPDATE presensi = VALUES(presensi), tanggal = VALUES(tanggal)");

    if (!$stmt) {
        die('Gagal menyiapkan pernyataan: ' . $conn->error);
    }

    foreach ($presensi as $nipd => $status) {
        $nama = isset($nama_siswa[$nipd]) ? $nama_siswa[$nipd] : '';

        // Bind parameter
        $stmt->bind_param('sssss', $nipd, $nama, $kelas, $status, $tanggal);

        // Eksekusi query
        if (!$stmt->execute()) {
            echo 'Gagal menyimpan data: ' . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();

    // Set session message
    $_SESSION['message'] = [
        'title' => 'Sukses!',
        'text' => 'Data berhasil disimpan.',
        'icon' => 'success'
    ];

    // Redirect dengan pesan sukses
    header('Location: ../absenn');
    exit();
}
?>
