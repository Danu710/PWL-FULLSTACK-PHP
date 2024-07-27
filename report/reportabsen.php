<?php
include_once '../proses/connect.php';

$type = $_GET['type'];
$tanggal_awal = $_GET['tanggal_awal'];
$tanggal_akhir = $_GET['tanggal_akhir'];
$kelas = isset($_GET['kelas']) ? $_GET['kelas'] : '';

if ($type == 'absen' && $tanggal_awal && $tanggal_akhir) {
    if (!DateTime::createFromFormat('Y-m-d', $tanggal_awal) || !DateTime::createFromFormat('Y-m-d', $tanggal_akhir)) {
        die("Format tanggal tidak valid.");
    }

    if ($kelas === '' || $kelas === 'Semua Kelas') {
        $sql = "SELECT * FROM absen WHERE tanggal BETWEEN ? AND ? ORDER BY kelas, tanggal ASC";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die("Error preparing statement: " . $conn->error);
        }
        $stmt->bind_param("ss", $tanggal_awal, $tanggal_akhir);
    } else {
        $sql = "SELECT * FROM absen WHERE tanggal BETWEEN ? AND ? AND kelas = ? ORDER BY tanggal ASC";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die("Error preparing statement: " . $conn->error);
        }
        $stmt->bind_param("sss", $tanggal_awal, $tanggal_akhir, $kelas);
    }

    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    }
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("Content-Type: text/html; charset=UTF-8");
        $html = "<html><head>";
        $html .= "<style>";
        $html .= "body { font-family: Arial, sans-serif; margin: 0; padding: 0; text-align: center; }";
        $html .= ".container { max-width: 800px; margin: 0 auto; padding: 20px; }";
        $html .= "table { width: 100%; border-collapse: collapse; margin: 20px 0; max-width: 100%; }";
        $html .= "th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }";
        $html .= "th { background-color: #f2f2f2; }";
        $html .= "p { margin: 20px 0; }";
        $html .= ".header-container { display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }";
        $html .= ".header-container img { width: 80px; height: 80px; margin-right: 10px; }";
        $html .= ".header-container .text { margin: 0; text-align: center; }";
        $html .= ".right-align { text-align: right; }";
        $html .= ".right-align table { margin: 0 auto; }";
        $html .= "@media print {";
        $html .= "    @page { size: auto; margin: 20mm; }";
        $html .= "    body { margin: 0; }";
        $html .= "    table { page-break-inside: avoid; }";
        $html .= "    .no-print { display: none; }";
        $html .= "}";
        $html .= "</style>";
        $html .= "</head><body>";
        $html .= "<div class='container'>";
        $html .= "<div class='header-container'>";
        $html .= "<img src='../assets/img/sekolah.png' alt='Logo'>";
        $html .= "<div class='text'>";
        $html .= "<p><strong>PEMERINTAH PROVINSI DKI JAKARTA</strong><br>";
        $html .= "<strong>DINAS PENDIDIKAN</strong><br>";
        $html .= "<strong>SEKOLAH DASAR ISLAM TELADAN PULOGADUNG</strong><br>";
        $html .= "Jl. Raya Bekasi km.18 Kecamatan Cakung Jakarta Timur</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "<p class='center'><strong>DAFTAR ABSENSI PESERTA DIDIK</strong></p>";
        $html .= "<table>";
        $html .= "<tr><th>No</th><th>NIPD</th><th>Nama</th><th>Kelas</th><th>Status</th><th>Tanggal</th></tr>";
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>" . $no . "</td>";
            $html .= "<td>" . $row['nipd'] . "</td>";
            $html .= "<td>" . $row['nama_siswa'] . "</td>";
            $html .= "<td>" . $row['kelas'] . "</td>";
            $html .= "<td>" . $row['presensi'] . "</td>";
            $html .= "<td>" . $row['tanggal'] . "</td>";
            $html .= "</tr>";
            $no++;
        }
        $html .= "</table>";
        $html .= "<p class='right-align'>Jakarta, " . date('d-m-Y') . "</p>";
        $html .= "<p class='right-align'><strong>Kepala Sekolah,<br><br><br><br></strong> _______________</p>";
        $html .= "<div class='no-print'><button onclick='window.print()'>Print</button></div>";
        $html .= "</div>";
        $html .= "</body></html>";

        echo $html; 
    } else {
        echo "Tidak ada data absen untuk kelas " . ($kelas ? $kelas : "semua kelas") . " pada tanggal " . $tanggal_awal . " sampai " . $tanggal_akhir;
    }
} else {
    echo "Error: Tidak ada data yang dipilih.";
}
?>
