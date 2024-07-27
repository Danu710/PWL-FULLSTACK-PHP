<?php
header('Content-Type: application/json');
include "connect.php";

try {
    // Query for student count
    $students_result = mysqli_query($conn, "SELECT COUNT(*) AS count FROM siswa");
    $students_row = mysqli_fetch_assoc($students_result);
    $students_count = $students_row['count'];

    // Query for employee count
    $employees_result = mysqli_query($conn, "SELECT COUNT(*) AS count FROM pegawai");
    $employees_row = mysqli_fetch_assoc($employees_result);
    $employees_count = $employees_row['count'];

    // Query for classroom count
    $classrooms_result = mysqli_query($conn, "SELECT COUNT(*) AS count FROM kelas");
    $classrooms_row = mysqli_fetch_assoc($classrooms_result);
    $classrooms_count = $classrooms_row['count'];

    // Query for subject count
    $subjects_result = mysqli_query($conn, "SELECT COUNT(*) AS count FROM mapel");
    $subjects_row = mysqli_fetch_assoc($subjects_result);
    $subjects_count = $subjects_row['count'];

    $response = [
        'students' => $students_count,
        'employees' => $employees_count,
        'classrooms' => $classrooms_count,
        'subjects' => $subjects_count,
    ];

    echo json_encode($response);

} catch (Throwable $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
