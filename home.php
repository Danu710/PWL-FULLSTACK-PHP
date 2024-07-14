<?php
// Query untuk mengambil jumlah siswa berdasarkan jenis kelamin
$query = mysqli_query($conn, "SELECT kelamin, COUNT(*) as total FROM siswa GROUP BY kelamin");

// Inisialisasi variabel untuk menyimpan hasil
$jumlah_laki_laki = 0;
$jumlah_perempuan = 0;

// Ambil jumlah siswa laki-laki dan perempuan
while ($row = mysqli_fetch_assoc($query)) {
    if ($row['kelamin'] == 'Laki - Laki') {
        $jumlah_laki_laki = $row['total'];
    } elseif ($row['kelamin'] == 'Perempuan') {
        $jumlah_perempuan = $row['total'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/sidebar.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/home.css" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Dashboard</title>
</head>

<body>
    <div class="col-lg-11 mt-2" style="margin-right:-300px">
        <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
                <div class="card" style="background-color: #478CCF; color: white;">
                    <div class="card-body">
                        <h5 class="card-title">SISWA</h5>
                        <p id="students-count"
                            style="font-family:'poppins';font-size:30px; position:absolute;margin-top:10px">0</p>
                        <div style="text-align: right;">
                            <img src="assets/img/all.png" alt="" style="width:65px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: #478CCF; color: white;">
                    <div class="card-body">
                        <h5 class="card-title">PEGAWAI</h5>
                        <p id="employees-count"
                            style="font-family:'poppins';font-size:30px; position:absolute;margin-top:10px">0</p>
                        <div style="text-align: right;">
                            <img src="assets/img/staff.png" alt="" style="width:65px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: #478CCF; color: white;">
                    <div class="card-body">
                        <h5 class="card-title">RUANG KELAS</h5>
                        <p id="classrooms-count"
                            style="font-family:'poppins';font-size:30px; position:absolute;margin-top:10px">0</p>
                        <div style="text-align: right;">
                            <img src="assets/img/room.png" alt="" style="width:65px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: #478CCF; color: white;">
                    <div class="card-body">
                        <h5 class="card-title">MAPEL</h5>
                        <p id="subjects-count"
                            style="font-family:'poppins';font-size:30px; position:absolute;margin-top:10px">0
                        </p>
                        <div style="text-align: right;">
                            <img src="assets/img/book.png" alt="" style="width:65px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Judul -->
        <div class="alert alert-info alert-dismissible fade show mt-3" role="alert" style="text-align:center">
            <h4 class="card-title">Selamat Datang Di</h4>
            Sistem Informasi Manajemen Sekolah Dasar Islam Teladan Pulogadung
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!-- Akhir Judul -->

        <!-- profile sekolah -->
        <div class="container mt-3 ">
            <div class="row">
                <!-- Profile Sekolah -->
                <div class="col-md-7" style="margin-left: -10px; line-height:0.7">
                    <div class="school-card" style="margin-right: -100px">
                        <div class="school-details">
                            <h4><i class="bi bi-building-fill"></i> SD ISLAM TELADAN PULOGADUNG PAGI</h4><br>
                            <p><strong>NPSN</strong><span>: 20103932</span></p>
                            <p><strong>Status</strong><span> : Swasta</span></p>
                            <p><strong>Kecamatan</strong><span> : KEC. CAKUNG</span></p>
                            <p><strong>Kabupaten</strong><span> : KOTA JAKARTA TIMUR</span></p>
                            <p><strong>Provinsi</strong><span> : PROV. D.K.I. JAKARTA</span></p>
                            <p><strong>Kepala Sekolah</strong>: <span>Susanto</span></p>
                            <p><strong>Operator</strong><span>: <?php echo isset($hasil['nama']) ?
                                $hasil['nama'] : 'Nama Pengguna'; ?></span></p>
                            <p><strong>Akreditasi</strong><span> : B</span></p>
                            <p><strong>Kurikulum</strong><span>: Merdeka</span></p>
                            <p><strong>Status BOS</strong><span> : Bersedia Menerima</span></p>
                        </div>
                        <div class="school-logo">
                            <img src="assets/img/sekolah.png" alt="School Logo" width="170">
                        </div>
                    </div>
                </div>
                <!-- Chart -->
                <div class="col-md-4" style="margin-left:87px;">
                    <div class="card" style="margin-right:-20px; align-items:center">
                        <div class="card-body text-center d-flex align-items-center">
                            <div class="chart-container">
                                <canvas id="doughnut"></canvas>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    const ctx = document.getElementById('doughnut');

                                    new Chart(ctx, {
                                        type: 'doughnut',
                                        data: {
                                            labels: ['Laki-Laki', 'Perempuan'],
                                            datasets: [{
                                                label: 'Jumlah Siswa',
                                                data: [<?= $jumlah_laki_laki ?>, <?= $jumlah_perempuan ?>],
                                                borderWidth: 1,
                                                backgroundColor: [
                                                    'rgba(54, 162, 235, 0.8)', // Biru untuk laki-laki
                                                    'rgba(255, 99, 132, 0.8)' // Merah untuk perempuan
                                                ]
                                            }]
                                        },
                                        options: {
                                            plugins: {
                                                title: {
                                                    display: true,
                                                    text: 'Jumlah Siswa Berdasarkan Jenis Kelamin'
                                                }
                                            },
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/dashboard.js"></script>
</body>

</html>