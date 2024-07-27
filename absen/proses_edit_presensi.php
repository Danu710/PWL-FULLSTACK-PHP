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

    // Menyiapkan pernyataan SQL
    $stmt = $conn->prepare("UPDATE absen 
                            SET presensi = ? 
                            WHERE nipd = ? AND kelas = ? AND tanggal = ?");

    if (!$stmt) {
        die('Gagal menyiapkan pernyataan: ' . $conn->error);
    }

    foreach ($presensi as $nipd => $status) {
        // Bind parameter
        $stmt->bind_param('ssss', $status, $nipd, $kelas, $tanggal);

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
        'text' => 'Data berhasil diperbarui.',
        'icon' => 'success'
    ];

    // Redirect dengan pesan sukses
    header('Location: ../absenn');
    exit();
}
?>
