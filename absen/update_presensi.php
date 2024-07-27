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

    // Check if there is already an entry for this class and date
    $check_query = "SELECT COUNT(*) FROM absen WHERE kelas = ? AND tanggal = ?";
    $check_stmt = $conn->prepare($check_query);
    $check_stmt->bind_param('ss', $kelas, $tanggal);
    $check_stmt->execute();
    $check_stmt->bind_result($entry_exists);
    $check_stmt->fetch();
    $check_stmt->close();

    if ($entry_exists > 0) {
        // If entries exist, update existing records
        $stmt = $conn->prepare("UPDATE absen SET presensi = ? WHERE nipd = ? AND kelas = ? AND tanggal = ?");

        if (!$stmt) {
            die('Gagal menyiapkan pernyataan: ' . $conn->error);
        }

        foreach ($presensi as $nipd => $status) {
            // Update existing records
            $stmt->bind_param('ssss', $status, $nipd, $kelas, $tanggal);

            if (!$stmt->execute()) {
                echo 'Gagal memperbarui data: ' . $stmt->error;
            }
        }

        $stmt->close();

        $_SESSION['message'] = [
            'title' => 'Data Absen Berhasil Diperbarui',
            'icon' => 'success'
        ];
    } else {
        // If no entries exist, you can choose to insert new data or show an error message
        $_SESSION['message'] = [
            'title' => 'Gagal Menyimpan Data',
            'icon' => 'error',
            'text' => 'Data presensi untuk kelas ini pada tanggal ini tidak ditemukan.'
        ];
    }

    $conn->close();

    // Redirect with message
    header('Location: ../absenn');
    exit();
}
?>