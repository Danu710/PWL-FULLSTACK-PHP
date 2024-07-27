<?php
include "./proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM mapel");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
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
            Halaman Data Mata Pelajaran
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambahuser">
                        Tambah Data Mapel
                    </button>
                </div>
            </div>
            <!-- Modal tambah kategori menu baru -->
            <div class="modal fade" id="modaltambahuser" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Mapel</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate method="POST"
                                action="mapel/proses_tambah_mapel.php">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Mata Pelajaran" name="nama_mapel" required>
                                            <label for="floatingInput">Nama Mata Pelajaran</label>
                                            <div class="invalid-feedback">
                                                Masukan Mata Pelajaran
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="kategori" id="" required>
                                                <option selected hidden value="">
                                                    Pilih Kategori
                                                </option>
                                                <option value="WAJIB">WAJIB</option>
                                                <option value="MUATAN LOKAL">MUATAN LOKAL</option>
                                            </select>
                                            <label for="floatingInput">Kategori Mata Pelajaran</label>
                                            <div class="invalid-feedback">
                                                Pilih Jenis Kategori
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary" name="input_mapel_validate"
                                        value="12345">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir Modal tambah kategori menu baru -->

            <?php
            if (!empty($result)) {
                foreach ($result as $row) {
                    ?>
                    <!-- Modal Edit -->
                    <div class="modal fade" id="modaledit<?php echo $row['id_mapel'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Mata Pelajaran</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate method="POST"
                                        action="mapel/proses_edit_mapel.php">
                                        <input type="hidden" value="<?php echo $row['id_mapel'] ?>" name="id_mapel">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Mata Pelajaran" name="nama_mapel" required
                                                        value="<?php echo $row['nama_mapel'] ?>">
                                                    <label for="floatingInput">Nama Mata Pelajaran</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Mata Pelajaran
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" name="kategori" id="" required>
                                                        <option value="WAJIB" <?php echo ($row['kategori'] == 'WAJIB') ? 'selected' : ''; ?>>WAJIB</option>
                                                        <option value="MUATAN LOKAL" <?php echo ($row['kategori'] == 'MUATAN LOKAL') ? 'selected' : ''; ?>>MUATAN LOKAL</option>
                                                    </select>
                                                    <label for="floatingInput">Kategori Mata Pelajaran</label>
                                                    <div class="invalid-feedback">
                                                        Pilih Jenis Kategori
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary" name="edit_mapel_validate"
                                                value="12345">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal akhir Edit -->

                    <!-- Modal Delete -->
                    <div class="modal fade" id="modaldelet<?php echo $row['id_mapel'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Mata Pelajaran</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate method="POST"
                                        action="mapel/proses_hapus_mapel.php">
                                        <input type="hidden" value="<?php echo $row['id_mapel'] ?>" name="id_mapel">
                                        Apakah Anda Ingin Menghapus Mata Pelajaran
                                        <b><?php echo $row['nama_mapel'] ?></b> ?
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger hapus" name="hapus_mapel_validate"
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
                echo "Data Mata Pelajaran Tidak Ada";
            } else {
                ?>
                <!-- Tabel daftar Kategori -->
                <div class="table-responsive mt-1">
                    <table class="table table-bordered" id="example">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align:center">ID</th>
                                <th scope="col" style="text-align:center">Nama Mata Pelajaran</th>
                                <th scope="col" style="text-align:center">Kategori</th>
                                <th scope="col" style="text-align:center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center">
                            <?php
                            foreach ($result as $row) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id_mapel'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nama_mapel'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['kategori'] ?>
                                    </td>
                                    <td class="d-flex" style="justify-content: center">
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#modaledit<?php echo $row['id_mapel'] ?>"><i
                                                class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#modaldelet<?php echo $row['id_mapel'] ?>">
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