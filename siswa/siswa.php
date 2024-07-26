<?php
include "./proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM siswa");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

$query_kelas = mysqli_query($conn, "SELECT id_kelas, kelas FROM kelas");

// Ambil hasil query
$kelas = [];
while ($row = mysqli_fetch_assoc($query_kelas)) {
    $kelas[] = $row;
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
            Halaman Data Siswa
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambahuser">
                        Tambah Data Siswa
                    </button>
                </div>
            </div>
            <!-- Modal tambah Siswa baru -->
            <div class="modal fade" id="modaltambahuser" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Siswa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate method="POST"
                                action="siswa/proses_tambah_siswa.php">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="NIPD" name="nipd" required>
                                            <label for="floatingInput">NIPD</label>
                                            <div class="invalid-feedback">
                                                Masukan NIPD
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Nama Siswa" name="nama_siswa" required>
                                            <label for="floatingInput">Nama Siswa</label>
                                            <div class="invalid-feedback">
                                                Masukan Nama Siswa
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="kelas" id="kelas" required>
                                                <option selected hidden value="">
                                                    Pilih Kelas
                                                </option>
                                                <?php foreach ($kelas as $k): ?>
                                                    <option value="<?php echo $k['kelas']; ?>">
                                                        <?php echo $k['kelas']; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <label for="kelas">Kelas</label>
                                            <div class="invalid-feedback">
                                                Pilih Kelas
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="kelamin" id="">
                                                <option selected hidden value="">
                                                    Pilih Jenis Kelamin
                                                </option>
                                                <option value="Laki - Laki">Laki - Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <label for="floatingInput">Jenis Kelamin</label>
                                            <div class="invalid-feedback">
                                                Masukan Jenis Kelamin
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Tempat Lahir" name="tempatlahir" required>
                                            <label for="floatingInput">Tempat Lahir</label>
                                            <div class="invalid-feedback">
                                                Masukan Tempat Lahir
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="floatingInput"
                                                placeholder="Tanggal Lahir" name="tanggal" required>
                                            <label for="floatingInput">Tanggal Lahir</label>
                                            <div class="invalid-feedback">
                                                Masukan Tanggal Lahir
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary" name="input_siswa_validate"
                                        value="12345">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir Modal tambah Siswa baru -->

            <?php
            if (!empty($result)) {
                foreach ($result as $row) {
                    ?>
                    <!-- Modal Edit -->
                    <div class="modal fade" id="modaledit<?php echo $row['nipd'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Siswa</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate method="POST"
                                        action="siswa/proses_edit_siswa.php">
                                        <input type="hidden" value="<?php echo $row['id_siswa'] ?>" name="id_siswa">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="NIPD" name="nipd" required
                                                        value="<?php echo $row['nipd'] ?>">
                                                    <label for="floatingInput">NIPD</label>
                                                    <div class="invalid-feedback">
                                                        Masukan NIPD
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Nama Siswa" name="nama_siswa" required
                                                        value="<?php echo $row['nama_siswa'] ?>">
                                                    <label for="floatingInput">Nama Siswa</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Nama Siswa
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" name="kelas" id="kelas" required>
                                                        <?php foreach ($kelas as $k): ?>
                                                            <option value="<?php echo $k['kelas']; ?>" <?php echo ($row['kelas'] == $k['kelas']) ? 'selected' : ''; ?>>
                                                                <?php echo $k['kelas']; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <label for="kelas">Kelas</label>
                                                    <div class="invalid-feedback">Pilih Kelas</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" name="kelamin" id="kelamin" required>
                                                        <option value="Laki - Laki" <?php echo ($row['kelamin'] == 'Laki - Laki') ? 'selected' : ''; ?>>Laki - Laki</option>
                                                        <option value="Perempuan" <?php echo ($row['kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                                    </select>
                                                    <label for="kelamin">Jenis Kelamin</label>
                                                    <div class="invalid-feedback">Pilih Jenis Kelamin</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Tempat Lahir" name="tempatlahir" required
                                                        value="<?php echo $row['tempat_lahir'] ?>">
                                                    <label for="floatingInput">Tempat Lahir</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Tempat Lahir
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <input type="date" class="form-control" id="floatingInput"
                                                        placeholder="Tanggal Lahir" name="tanggal" required
                                                        value="<?php echo $row['tanggal_lahir'] ?>">
                                                    <label for="floatingInput">Tanggal Lahir</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Tanggal Lahir
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary" name="edit_siswa_validate"
                                                value="12345">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal akhir Edit -->

                    <!-- Modal Delete -->
                    <div class="modal fade" id="modaldelet<?php echo $row['nipd'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Siswa</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate method="POST"
                                        action="siswa/proses_hapus_siswa.php">
                                        <input type="hidden" value="<?php echo $row['id_siswa'] ?>" name="id_siswa">
                                        Apakah Anda Ingin Menghapus Data Siswa yang bernama
                                        <b><?php echo $row['nama_siswa'] ?></b> ?
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger hapus" name="hapus_siswa_validate"
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
                echo "Data Siswa Tidak Ada";
            } else {
                ?>
                <!-- Tabel daftar Kategori -->
                <div class="table-responsive mt-1">
                    <table class="table table-bordered" id="example">
                        <thead>
                            <tr style="text-align:center">
                                <th scope="col" style="text-align:center">ID</th>
                                <th scope="col" style="text-align:center">NIPD</th>
                                <th scope="col" style="text-align:center">Nama Siswa</th>
                                <th scope="col" style="text-align:center">Kelas</th>
                                <th scope="col" style="text-align:center">Jenis Kelamin</th>
                                <th scope="col" style="text-align:center">Tempat Lahir</th>
                                <th scope="col" style="text-align:center">Tanggal Lahir</th>
                                <th scope="col" style="text-align:center">Aksi</th>
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
                                    <td style="text-align:center">
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
                                    <td style="text-align:center">
                                        <?php echo $row['tanggal_lahir'] ?>
                                    </td>
                                    <td class="d-flex" style="justify-content: center">
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#modaledit<?php echo $row['nipd'] ?>"><i
                                                class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#modaldelet<?php echo $row['nipd'] ?>">
                                            <i class="bi bi-trash"></i>
                                        </button>
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