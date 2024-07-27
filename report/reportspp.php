<?php
include '../proses/connect.php';

$bulan = isset($_GET['bulan']) ? $_GET['bulan'] : '';

    // Modifikasi query SQL untuk menggunakan filter bulan jika diberikan
    if (!empty($bulan)) {
        $sql = "SELECT * FROM spp WHERE bulan = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $bulan);
    } else {
        $sql = "SELECT * FROM spp";
        $stmt = $conn->prepare($sql);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("Content-Type: text/html; charset=UTF-8");

        $html = "<html><head>";
        $html .= "<title>Report SPP</title>";
        $html .= "<style>";
        $html .= "body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 0; text-align: center; }";
        $html .= ".container { max-width: 800px; margin: 0 auto; padding: 20px; }";
        $html .= ".header-container { display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }";
        $html .= ".header-container img { width: 80px; height: 80px; margin-right: 10px; }";
        $html .= ".header-container .text { margin: 0; text-align: center; }";
        $html .= "table { width: 100%; border-collapse: collapse; margin: 20px 0; }";
        $html .= "table, th, td { border: 1px solid #ddd; }";
        $html .= "th, td { padding: 12px; text-align: left; }";
        $html .= "th { background-color: #f2f2f2; }";
        $html .= "tr:nth-child(even) { background-color: #f9f9f9; }";
        $html .= "p.center { text-align: center; }";
        $html .= ".right-align { text-align: right; }";
        $html .= "@media print {";
        $html .= "    .container { width: 100%; box-shadow: none; margin: 0; padding: 0; }";
        $html .= "    table, th, td { border: 1px solid #000; }";
        $html .= "    th { background-color: #ccc; }";
        $html .= "    body { background-color: white; }";
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
        $html .= "<p class='center'><strong>DAFTAR STATUS SPP</strong></p>";
        if ($result->num_rows > 0) {
            $html .= "<table>";
            $html .= "<thead><tr><th>NIPD</th><th>Nama Siswa</th><th>Kelas</th><th>Bulan</th><th>Jumlah Bayar</th><th>Tanggal</th><th>Status</th></tr></thead>";
            $no = 1;
            $html .= "<tbody>";
            while ($row = $result->fetch_assoc()) {
                $html .= "<tr>";
                $html .= "<td>" . $no . "</td>";
                $html .= "<td>" . $row['nipd'] . "</td>";
                $html .= "<td>" . $row['nama_siswa'] . "</td>";
                $html .= "<td>" . $row['kelas'] . "</td>";
                $html .= "<td>" . $row['bulan'] . "</td>";
                $html .= "<td>" . $row['bayar'] . "</td>";
                $html .= "<td>" . $row['tanggal'] . "</td>";
                $html .= "<td>" . $row['status'] . "</td>";
                $html .= "</tr>";
                $no++;
            }
            $html .= "</tbody></table>";
        } else {
            $html .= "<p>Tidak ada data SPP untuk bulan tersebut.</p>";
        }

        $html .= "<p class='right-align'>Jakarta, " . date('d-m-Y') . "</p>";
        $html .= "<p class='right-align'><strong>Kepala Sekolah,<br><br><br><br></strong> _______________</p>";
        $html .= "<div class='no-print'><button onclick='window.print()'>Print</button></div>";
        $html .= "</div>";
        $html .= "</body></html>";

        echo $html; 
    } else {
        echo 'Tidak ada data SPP.';
    }
?>