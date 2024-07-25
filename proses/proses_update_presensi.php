<?php
session_start();
include "connect.php";

// Error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!$conn) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Debugging: Tampilkan data POST
    echo '<pre>';
    echo "Data POST:\n";
    print_r($_POST);
    echo '</pre>';

    $kelas = isset($_POST['kelas']) ? $_POST['kelas'] : '';
    $presensi = isset($_POST['presensi']) ? $_POST['presensi'] : [];
    $nama_siswa = isset($_POST['nama_siswa']) ? $_POST['nama_siswa'] : [];
    $tanggal = date('Y-m-d'); // Tanggal hari ini

    // Debugging: Tampilkan variabel yang digunakan
    echo '<pre>';
    echo "Kelas: $kelas\n";
    echo "Presensi:\n";
    print_r($presensi);
    echo "Nama Siswa:\n";
    print_r($nama_siswa);
    echo "Tanggal: $tanggal\n";
    echo '</pre>';

    if (empty($presensi) || empty($kelas)) {
        die('Data tidak lengkap.');
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

        // Debugging: Tampilkan data yang akan di-bind
        echo '<pre>';
        echo "Binding parameters:\n";
        echo "NIPD: $nipd\n";
        echo "Nama: $nama\n";
        echo "Kelas: $kelas\n";
        echo "Status: $status\n";
        echo "Tanggal: $tanggal\n";
        echo '</pre>';

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
    header('Location: ../absen?kelas=' . urlencode($kelas));
    exit();
}
?>
