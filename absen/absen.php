<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Halaman Data Presensi</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .table-responsive {
            height: 400px;
            overflow-y: auto;
        }

        .bottom-buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }
    </style>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            <?php if (isset($_SESSION['message'])): ?>
                Swal.fire({
                    title: '<?php echo $_SESSION['message']['title']; ?>',
                    text: '<?php echo isset($_SESSION['message']['text']) ? $_SESSION['message']['text'] : ''; ?>',
                    icon: '<?php echo $_SESSION['message']['icon']; ?>'
                });
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
        });
    </script>
</head>

<body>
    <div class="col-lg-10 mt-2" style="margin-right:-320px">
        <div class="card">
            <div class="card-header">
                Halaman Presensi Siswa
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <h3>Pilih Kelas</h3>
                            <select name="kelas" class="form-control">
                                <option value="">Silahkan Pilih Kelas Terlebih Dahulu</option>
                                <option value="1 A">Kelas 1 A</option>
                                <option value="1 B">Kelas 1 B</option>
                                <option value="2 A">Kelas 2 A</option>
                                <option value="2 B">Kelas 2 B</option>
                                <option value="3 A">Kelas 3 A</option>
                                <option value="3 B">Kelas 3 B</option>
                                <option value="4 A">Kelas 4 A</option>
                                <option value="4 B">Kelas 4 B</option>
                                <option value="5 A">Kelas 5 A</option>
                                <option value="5 B">Kelas 5 B</option>
                                <option value="6 A">Kelas 6 A</option>
                                <option value="6 B">Kelas 6 B</option>
                            </select>
                        </div>
                        <div class="col-md-4 d-flex align-items-end justify-content-start">
                            <button type="submit" name="action" value="tampilkan_data"
                                class="btn btn-primary me-2">Tampilkan Data</button>
                            <button type="submit" name="action" value="edit_presensi" class="btn btn-secondary">Edit
                                Presensi</button>
                        </div>
                    </div>
                </form>

                <?php
                include './proses/connect.php';

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $kelas = isset($_POST['kelas']) ? $_POST['kelas'] : '';
                    $tanggal_hari_ini = date('Y-m-d');

                    if ($kelas) {
                        if (isset($_POST['action']) && $_POST['action'] == 'tampilkan_data') {
                            $sql = "SELECT * FROM siswa WHERE kelas = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("s", $kelas);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                echo '<form method="POST" action="absen/proses_presensi.php">';
                                echo '<input type="hidden" name="kelas" value="' . htmlspecialchars($kelas) . '">';
                                echo '<div class="table-responsive">';
                                echo '<table class="table table-bordered mt-3">';
                                echo '<thead><tr><th>ID</th><th>Nama</th><th>Kelas</th><th>Presensi</th></tr></thead>';
                                echo '<tbody>';
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr>';
                                    echo '<td>' . htmlspecialchars($row['nipd']) . '</td>';
                                    echo '<td>' . htmlspecialchars($row['nama_siswa']) . '</td>';
                                    echo '<td>' . htmlspecialchars($row['kelas']) . '</td>';
                                    echo '<td>';
                                    echo '<select name="presensi[' . htmlspecialchars($row['nipd']) . ']" class="form-control">';
                                    echo '<option value="" disabled selected>Pilih Status</option>';
                                    echo '<option value="Hadir">Hadir</option>';
                                    echo '<option value="Izin">Izin</option>';
                                    echo '<option value="Sakit">Sakit</option>';
                                    echo '<option value="Alpa">Alpa</option>';
                                    echo '</select>';
                                    echo '</td>';
                                    echo '<input type="hidden" name="nama_siswa[' . htmlspecialchars($row['nipd']) . ']" value="' . htmlspecialchars($row['nama_siswa']) . '">';
                                    echo '</tr>';
                                }
                                echo '</tbody>';
                                echo '</table>';
                                echo '</div>';
                                echo '<div class="bottom-buttons">';
                                echo '<button type="submit" class="btn btn-success mt-3">Simpan</button>';
                                echo '</div>';
                                echo '</form>';
                            } else {
                                echo '<p>Tidak ada siswa di kelas ini.</p>';
                            }

                            $stmt->close();
                        } elseif (isset($_POST['action']) && $_POST['action'] == 'edit_presensi') {
                            $sql = "SELECT * FROM absen WHERE kelas = ? AND tanggal = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("ss", $kelas, $tanggal_hari_ini);
                            $stmt->execute();
                            $result = $stmt->get_result();
                        
                            if ($result->num_rows > 0) {
                                echo '<form method="POST" action="absen/proses_edit_presensi.php">';
                                echo '<input type="hidden" name="kelas" value="' . htmlspecialchars($kelas) . '">';
                                echo '<div class="table-responsive">';
                                echo '<table class="table table-bordered mt-3">';
                                echo '<thead><tr><th>ID</th><th>Nama</th><th>Kelas</th><th>Presensi</th></tr></thead>';
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
                                echo '</div>';
                                echo '<div class="bottom-buttons">';
                                echo '<button type="submit" class="btn btn-success mt-3">Simpan Perubahan</button>';
                                echo '</div>';
                                echo '</form>';
                            } else {
                                echo '<p>Tidak ada presensi untuk tanggal hari ini di kelas ini.</p>';
                            }                        

                            $stmt->close();
                        }
                    } else {
                        echo '<p>Pilih kelas terlebih dahulu.</p>';
                    }
                }

                if (isset($conn) && $conn instanceof mysqli) {
                    $conn->close();
                }
                ?>

            </div>
        </div>
    </div>
</body>

</html>