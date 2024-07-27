<?php
include "proses/connect.php";

$id_siswa = $_GET['id_siswa'];
$queryKelas = "SELECT id_siswa, nipd, nama_siswa, kelas FROM siswa WHERE id_siswa = '$id_siswa'";

$query = mysqli_query($conn, $queryKelas);
$data_siswa = mysqli_fetch_assoc($query);

// Query untuk mengambil data dari tabel kelas
$query_kelas = mysqli_query($conn, "SELECT * FROM kelas");
while ($record = mysqli_fetch_array($query_kelas)) {
    $kelas[] = $record;
}

//mapel
$query_kelas = mysqli_query($conn, "SELECT id_mapel, nama_mapel FROM mapel");
while ($record = mysqli_fetch_array($query_kelas)) {
    $mapel[] = $record;
}

$predikat = [
    'A' => 'A',
    'B' => 'B',
    'C' => 'C',
    'D' => 'D',
    'E' => 'E',
];

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

    <a href="nilai" class="btn btn-primary">Kembali</a>
    <div class="card">
        <div class="card-header">
            Input Nilai Kelas <?= $data_siswa['kelas'] ?> (<?= $data_siswa['nama_siswa'] ." - ". $data_siswa['nipd'] ?>)
        </div>
        <div class="card-body">

            <div class="container my-5">
                <form action="proses/proses_penilaian.php" method="POST">
                    <input type="hidden" name="id_siswa" value="<?= $id_siswa; ?>">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="idSiswa" class="form-label">ID Siswa</label>
                            <input type="text" class="form-control" id="idSiswa" value="S002" disabled>
                        </div>
                        <div class="col">
                            <label for="namaSiswa" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="namaSiswa" value="ADZKIYYA TALITA SAKHI" disabled>
                        </div>
                        <div class="col">
                            <label for="nipd" class="form-label">NIPD</label>
                            <input type="text" class="form-control" id="nipd" value="3385" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-select" id="semester" name="semester" required>
                                <option selected>-- Pilih Semester --</option>
                                <option value="Ganjil">Ganjil</option>
                                <option value="Genap">Genap</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col">
                            <label for="tahunAjaran" class="form-label">Tahun Ajaran</label>
                            <input type="text" class="form-control" name="tahun_ajaran" id="tahunAjaran" required>
                        </div>
                    </div>

                    <br>
                    <hr>
                    <br>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="sikap" class="form-label">Sikap</label>
                            <select class="form-select" id="sikap" name="sikap" required>
                                <option selected>-- Pilih Predikat --</option>
                                <?php foreach ($predikat as $key => $val): ?>
                                    <option
                                        value="<?php echo $key; ?>"
                                    >
                                        <?php echo $key;?>
                                    </option>
                                <?php endforeach; ?>
                                <!-- Add options for Predikat -->
                            </select>
                        </div>
                        <div class="col">
                            <label for="kompetensi" class="form-label">Kompetensi</label>
                            <select class="form-select" id="kompetensi" name="kompetensi" required>
                                <option selected>-- Pilih Predikat --</option>
                                <?php foreach ($predikat as $key => $val): ?>
                                    <option
                                        value="<?php echo $key; ?>"
                                    >
                                        <?php echo $key;?>
                                    </option>
                                <?php endforeach; ?>
                                <!-- Add options for Predikat -->
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="keterampilan" class="form-label">Keterampilan</label>
                            <select class="form-select" id="keterampilan" name="keterampilan" required>
                                <option selected>-- Pilih Predikat --</option>
                                <?php foreach ($predikat as $key => $val): ?>
                                    <option
                                        value="<?php echo $key; ?>"
                                    >
                                        <?php echo $key;?>
                                    </option>
                                <?php endforeach; ?>
                                <!-- Add options for Predikat -->
                            </select>
                        </div>
                        <div class="col"></div>
                    </div>

                    <br>
                    <hr>
                    <br>
                    
                    <table class="table table-bordered">
                        <thead>
                            <th>NO.</th>
                            <th>Nama Mapel</th>
                            <th>Nilai Mapel</th>
                            <th>Tugas</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>CATATAN</th>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            foreach ($mapel as $row) {
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $no++ ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nama_mapel'] ?>
                                        <input type="hidden" name="id_mapel[]" value="<?=$row['id_mapel']?>">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="nilai_mapel[<?=$row['id_mapel']?>]" required>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="nilai_tugas[<?=$row['id_mapel']?>]" required>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="nilai_uts[<?=$row['id_mapel']?>]" required>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="nilai_uas[<?=$row['id_mapel']?>]" required>
                                    </td>
                                    <td>
                                        <textarea name="catatan[<?=$row['id_mapel']?>]" class="form-control"></textarea>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
</script>