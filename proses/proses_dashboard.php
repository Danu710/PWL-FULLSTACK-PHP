<?php
header('Content-Type: application/json');

// Koneksi database
$host = 'localhost';
$db = 'cobasimsditp';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Debugging output
    $students_count = $pdo->query("SELECT COUNT(*) FROM siswa")->fetchColumn();
    $employees_count = $pdo->query("SELECT COUNT(*) FROM pegawai")->fetchColumn();
    $classrooms_count = $pdo->query("SELECT COUNT(*) FROM kelas")->fetchColumn();
    $subjects_count = $pdo->query("SELECT COUNT(*) FROM mapel")->fetchColumn();

    $response = [
        'students' => $students_count,
        'employees' => $employees_count,
        'classrooms' => $classrooms_count,
        'subjects' => $subjects_count,
    ];

    echo json_encode($response);

} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
