<?php
include "proses/connect.php";

$querySiswa = "SELECT id_siswa, nipd, nama_siswa, kelas, kelamin, tempat_lahir, tanggal_lahir FROM siswa";

$filterKelas = "";
if (isset($_GET['filter_kelas'])) {
    $filterKelas = htmlspecialchars($_GET['filter_kelas']);
    $querySiswa .= " WHERE kelas = '$filterKelas'";
}

$query = mysqli_query($conn, $querySiswa);
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

// Query untuk mengambil data dari tabel kelas
$query_kelas = mysqli_query($conn, "SELECT * FROM kelas");
while ($record = mysqli_fetch_array($query_kelas)) {
    $kelas[] = $record;
}

?>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
<div class="col-lg-11 mt-2" style="margin-right:-320px">
    <div class="card">
        <div class="card-header">
            Halaman Data Siswa
        </div>
        <div class="card-body">

            <?php
            if (empty($result)) {
                echo "Data Mata Pelajaran Tidak Ada";
            } else {
                ?>
                <form action="nilai" method="GET">
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="filter_kelas">Filter Kelas</label>
                            <select class="form-select" name="filter_kelas" id="filter_kelas" onchange="this.form.submit()">
                                <option value="">Pilih Kelas</option>
                                <?php foreach ($kelas as $k): ?>
                                    <option
                                        value="<?php echo htmlspecialchars($k['kelas']); ?>"
                                        <?= $k['kelas'] == $filterKelas ? ' selected' : ''  ?>
                                    >
                                        <?php echo htmlspecialchars($k['kelas']);?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </form>
                
                <!-- Tabel daftar Kategori -->
                <div class="table-responsive mt-1">
                    <table class="table table-bordered" id="example">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align:center">ID</th>
                                <th scope="col" style="text-align:center">NIPD</th>
                                <th scope="col" style="text-align:center">NAMA</th>
                                <th scope="col" style="text-align:center">KELAS</th>
                                <th scope="col" style="text-align:center">JENIS KELAMIN</th>
                                <th scope="col" style="text-align:center">TEMPAT LAHIR</th>
                                <th scope="col" style="text-align:center">TANGGAL LAHIR</th>
                                <th scope="col" style="text-align:center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center">
                            <?php
                            foreach ($result as $row) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id_siswa'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nipd'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nama_siswa'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['kelas'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['kelamin'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['tempat_lahir'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['tanggal_lahir'] ?>
                                    </td>
                                    <td class="d-flex" style="justify-content: center">
                                        <a href="nilai?page=penilaian&id_siswa=<?= $row['id_siswa']?>" class="btn btn-light">Input Nilai</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- tabel akhir Kategori menu -->
                <?php
            }
            ?>
        </div>
    </div>
</div>

<script>
</script>