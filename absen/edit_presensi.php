<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../proses/connect.php";

$tanggal_hari_ini = date('Y-m-d');
$kelas_terpilih = isset($_GET['kelas']) ? $_GET['kelas'] : '';

$sql = "SELECT * FROM absen WHERE tanggal = ?";
if ($kelas_terpilih) {
    $sql .= " AND kelas = ?";
}
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}

if ($kelas_terpilih) {
    $stmt->bind_param("ss", $tanggal_hari_ini, $kelas_terpilih);
} else {
    $stmt->bind_param("s", $tanggal_hari_ini);
}

if (!$stmt->execute()) {
    die("Error executing statement: " . $stmt->error);
}
$result = $stmt->get_result();

$kelas = '';
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $kelas = $row['kelas'];
    $result->data_seek(0); // reset pointer to the beginning
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Presensi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Edit Presensi Tanggal <?php echo htmlspecialchars($tanggal_hari_ini); ?>
        </div>
        <div class="card-body">
            <form method="GET" action="">
                <div class="form-group">
                    <label for="kelas">Pilih Kelas:</label>
                    <select name="kelas" id="kelas" class="form-control" onchange="this.form.submit()">
                        <option value="">Semua Kelas</option>
                        <?php
                        $kelas_query = "SELECT DISTINCT kelas FROM absen";
                        $kelas_result = $conn->query($kelas_query);
                        while ($kelas_row = $kelas_result->fetch_assoc()) {
                            $kelas_value = htmlspecialchars($kelas_row['kelas']);
                            $selected = $kelas_value == $kelas_terpilih ? ' selected' : '';
                            echo '<option value="' . $kelas_value . '"' . $selected . '>' . $kelas_value . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </form>

            <?php
            if ($result->num_rows > 0) {
                echo '<form method="POST" action="absen/update_presensi.php">';
                echo '<input type="hidden" name="kelas" value="' . htmlspecialchars($kelas) . '">';
                echo '<table class="table table-bordered">';
                echo '<thead><tr><th>NIPD</th><th>Nama</th><th>Kelas</th><th>Presensi</th></tr></thead>';
                echo '<tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['nipd']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['nama_siswa']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['kelas']) . '</td>';
                    echo '<td>';
                    echo '<select name="presensi[' . htmlspecialchars($row['nipd']) . ']" class="form-control">';
                    echo '<option value="hadir"' . ($row['presensi'] == 'hadir' ? ' selected' : '') . '>Hadir</option>';
                    echo '<option value="izin"' . ($row['presensi'] == 'izin' ? ' selected' : '') . '>Izin</option>';
                    echo '<option value="sakit"' . ($row['presensi'] == 'sakit' ? ' selected' : '') . '>Sakit</option>';
                    echo '<option value="alpa"' . ($row['presensi'] == 'alpa' ? ' selected' : '') . '>Alpa</option>';
                    echo '</select>';
                    echo '</td>';
                    echo '<input type="hidden" name="nama_siswa[' . htmlspecialchars($row['nipd']) . ']" value="' . htmlspecialchars($row['nama_siswa']) . '">';
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
                echo '<button type="submit" class="btn btn-success">Simpan Perubahan</button>';
                echo '</form>';
            } else {
                echo '<p>Tidak ada data presensi untuk tanggal ini dan kelas yang dipilih.</p>';
            }
            $stmt->close();
            ?>
        </div>
    </div>
</div>
</body>
</html>
