<?php
include "./proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM guru");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

#data kelas
$query_kelas = mysqli_query($conn, "SELECT id_kelas, kelas FROM kelas");

// Ambil hasil query
$kelas = [];
while ($row = mysqli_fetch_assoc($query_kelas)) {
    $kelas[] = $row;
}

// Query untuk mengambil data guru kelas
$query_guru = mysqli_query($conn, "SELECT id_pegawai, nama_pegawai FROM pegawai WHERE jabatan = 'Guru Kelas'");

// Ambil hasil query
$guru = [];
while ($row = mysqli_fetch_assoc($query_guru)) {
    $guru[] = $row;
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

<div class="col-lg-10 mt-2" style="margin-right:-320px">
    <div class="card">
        <div class="card-header">
            Halaman Data Guru
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambahguru">
                        Tambah Data Guru
                    </button>
                </div>
            </div>

            <!-- Modal tambah guru baru -->
            <div class="modal fade" id="modaltambahguru" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Guru</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate method="POST"
                                action="guru/proses_tambah_guru.php">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="nama_guru" id="nama_guru" required>
                                                <option selected hidden value="">Pilih Wali Kelas</option>
                                                <?php foreach ($guru as $g): ?>
                                                    <option value="<?php echo $g['nama_pegawai']; ?>">
                                                        <?php echo $g['nama_pegawai']; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <label for="kelas">Wali Kelas</label>
                                            <div class="invalid-feedback">
                                                Masukan Wali Kelas
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="wali_kelas" id="wali_kelas" required>
                                                <option selected hidden value="">Pilih Kelas</option>
                                                <?php foreach ($kelas as $k): ?>
                                                    <option value="<?php echo $k['kelas']; ?>"><?php echo $k['kelas']; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <label for="kelas">Kelas</label>
                                            <div class="invalid-feedback">
                                                Masukan Wali Kelas
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary" name="input_guru_validate"
                                        value="12345">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir Modal tambah guru baru -->

            <?php
            if (!empty($result)) {
                foreach ($result as $row) {
                    ?>
                    <!-- Modal Edit -->
                    <div class="modal fade" id="modaledit<?php echo $row['nama_guru'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Guru</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate method="POST"
                                        action="guru/proses_edit_guru.php">
                                        <input type="hidden" value="<?php echo $row['nama_guru'] ?>" name="nama_guru">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="nama" name="nama_guru" required
                                                        value="<?php echo $row['nama_guru'] ?>">
                                                    <label for="floatingInput">Nama</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Nama
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" name="wali_kelas" id="kelas" required>
                                                        <?php foreach ($kelas as $k): ?>
                                                            <option value="<?php echo $k['kelas']; ?>" <?php echo ($row['wali_kelas'] == $k['kelas']) ? 'selected' : ''; ?>>
                                                                <?php echo $k['kelas']; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <label for="kelas">Wali Kelas</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Wali Kelas
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary" name="edit_guru_validate"
                                                value="12345">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal akhir Edit -->

                    <!-- Modal Delete -->
                    <div class="modal fade" id="modaldelet<?php echo $row['nama_guru'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Guru</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate method="POST"
                                        action="guru/proses_hapus_guru.php">
                                        <input type="hidden" value="<?php echo $row['nama_guru'] ?>" name="nama_guru">
                                        Apakah Anda Ingin Menghapus Data Guru yang bernama
                                        <b><?php echo $row['nama_guru'] ?></b> ?
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger hapus" name="hapus_guru_validate"
                                                value="12345">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal akhir Delete -->
                    <?php
                }
            }

            if (empty($result)) {
                echo "Data Guru Tidak Ada";
            } else {
                ?>
                <!-- Tabel daftar Guru -->
                <div class="table-responsive mt-1">
                    <table class="table table-bordered" id="example">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align:center">Nama Guru</th>
                                <th scope="col" style="text-align:center">Wali Kelas</th>
                                <th scope="col" style="text-align:center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center">
                            <?php
                            foreach ($result as $row) {
                                ?>
                                <tr style="text-align:center">
                                    <td style="font-size:15px"><?php echo $row['nama_guru'] ?></td>
                                    <td><?php echo $row['wali_kelas'] ?></td>
                                    <td class="d-flex" style="justify-content: center">
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#modaledit<?php echo $row['nama_guru'] ?>"><i
                                                class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#modaldelet<?php echo $row['nama_guru'] ?>"><i
                                                class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- tabel akhir Guru -->
                <?php
            }
            ?>
        </div>
    </div>
</div>