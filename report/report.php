<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Report</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
<div class="col-lg-10 mt-2" style="margin-right:-320px">
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                Halaman Report
            </div>
            <div class="card-body">
                <h5 class="card-title">Pilih data yang ingin dicetak</h5>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cetakModalSiswa">Cetak
                    Data Siswa</button>

                <div class="modal fade" id="cetakModalSiswa" tabindex="-1" role="dialog"
                    aria-labelledby="cetakModalSiswaLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cetakModalSiswaLabel">Cetak Data Siswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="GET" action="report/reportsiswa.php" class="mt-3">
                                    <input type="hidden" name="type" value="siswa">
                                    <div class="form-group">
                                        <label for="kelas">Pilih Kelas:</label>
                                        <select id="kelas" name="kelas" class="form-control" required>
                                            <option value="">Pilih Kelas</option>
                                            <option value="Semua Kelas">Semua Kelas</option>
                                            <?php
                                            $sql = "SELECT DISTINCT kelas FROM siswa";
                                            $result = $conn->query($sql);
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['kelas'] . "'>" . $row['kelas'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Cetak Data Siswa</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="report/reportpegawai.php?type=pegawai" class="btn btn-primary">Cetak Data Pegawai</a>

                <!-- Tombol untuk membuka modal cetak SPP -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cetakModalSPP">Cetak
                    Data SPP</button>

                <!-- Modal untuk cetak SPP -->
                <div class="modal fade" id="cetakModalSPP" tabindex="-1" role="dialog" aria-labelledby="cetakModalSPPLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cetakModalSPPLabel">Cetak Data SPP</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="GET" action="report/reportspp.php" class="mt-3">
                                    <input type="hidden" name="type" value="spp">
                                    <div class="form-group">
                                        <label for="bulan">Pilih Bulan:</label>
                                        <select id="bulan" name="bulan" class="form-control" required>
                                            <option value="">Pilih Bulan</option>
                                            <?php
                                            // Mengambil data bulan yang unik dari tabel spp
                                            $sql = "SELECT DISTINCT bulan FROM spp";
                                            $result = $conn->query($sql);
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['bulan'] . "'>" . $row['bulan'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Cetak Data SPP</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="report/reportmapel.php?type=mapel" class="btn btn-primary">Cetak Data Mata Pelajaran</a>

                <!-- Modal untuk cetak Absen Siswa -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cetakModalAbsen">Cetak
                    Absen Siswa</button>

                <div class="modal fade" id="cetakModalAbsen" tabindex="-1" role="dialog"
                    aria-labelledby="cetakModalAbsenLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cetakModalAbsenLabel">Cetak Absen Siswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="GET" action="report/reportabsen.php" class="mt-3">
                                    <input type="hidden" name="type" value="absen">
                                    <div class="form-group">
                                        <label for="tanggal_awal">Pilih Tanggal Awal:</label>
                                        <input type="date" id="tanggal_awal" name="tanggal_awal" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_akhir">Pilih Tanggal Akhir:</label>
                                        <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kelas">Pilih Kelas:</label>
                                        <select id="kelas" name="kelas" class="form-control" required>
                                            <option value="">Pilih Kelas</option>
                                            <option value="Semua Kelas">Semua Kelas</option>
                                            <?php
                                            $sql = "SELECT DISTINCT kelas FROM absen";
                                            $result = $conn->query($sql);
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['kelas'] . "'>" . $row['kelas'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Cetak Data Absen</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
