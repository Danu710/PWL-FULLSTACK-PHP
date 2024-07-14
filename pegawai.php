<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM pegawai");
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
<div class="col-lg-11 mt-2" style="margin-right:-320px">
    <div class="card">
        <div class="card-header">
            Halaman Data Pegawai
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambahuser">
                        Tambah Data Pegawai
                    </button>
                </div>
            </div>
            <!-- Modal tambah pegawai baru -->
            <div class="modal fade" id="modaltambahuser" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pegawai</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate method="POST"
                                action="proses/proses_tambah_pegawai.php">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="nama" name="nama_pegawai" required>
                                            <label for="floatingInput">Nama</label>
                                            <div class="invalid-feedback">
                                                Masukan Nama
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="jabatan" id="">
                                                <option selected hidden value="">
                                                    Pilih Jabatan
                                                </option>
                                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                                                <option value="Guru Kelas">Guru Kelas</option>
                                                <option value="Guru Penjasorkes">Guru Penjasorkes</option>
                                                <option value="Guru PAI">Guru PAI</option>
                                                <option value="Operator Sekolah">Operator Sekolah</option>
                                                <option value="Penjaga Sekolah">Penjaga Sekolah</option>
                                            </select>
                                            <label for="floatingInput">Jabatan</label>
                                            <div class="invalid-feedback">
                                                Masukan Jenis Jabatan
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="jenis_pegawai" id="">
                                                <option selected hidden value="">
                                                    Pilih Jenis Pegawai
                                                </option>
                                                <option value="PNS">PNS</option>
                                                <option value="PPPK">PPPK</option>
                                                <option value="KKI">KKI</option>
                                                <option value="HONOR">HONOR</option>
                                            </select>
                                            <label for="floatingInput">Jenis Pegawai</label>
                                            <div class="invalid-feedback">
                                                Masukan Jenis Pegawai
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="nip"
                                                name="nip" required>
                                            <label for="floatingInput">NIP</label>
                                            <div class="invalid-feedback">
                                                Masukan NIP
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary" name="input_pegawai_validate"
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
                    <div class="modal fade" id="modaledit<?php echo $row['nama_pegawai'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pegawai</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate method="POST"
                                        action="proses/proses_edit_pegawai.php">
                                        <input type="hidden" value="<?php echo $row['id_pegawai'] ?>" name="id_pegawai">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="nama" name="nama_pegawai" required
                                                        value="<?php echo $row['nama_pegawai'] ?>">
                                                    <label for="floatingInput">Nama</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Nama
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" name="jabatan" id="">
                                                        <option value="Kepala Sekolah" <?php echo ($row['jabatan'] == 'Kepala Sekolah') ? 'selected' : ''; ?>>Kepala Sekolah</option>
                                                        <option value="Wakil Kepala Sekolah" <?php echo ($row['jabatan'] == 'Wakil Kepala Sekolah') ? 'selected' : ''; ?>>Wakil Kepala Sekolah</option>
                                                        <option value="Guru Kelas" <?php echo ($row['jabatan'] == 'Guru Kelas') ? 'selected' : ''; ?>>Guru Kelas</option>
                                                        <option value="Guru Penjasorkes" <?php echo ($row['jabatan'] == 'Guru Penjasorkes') ? 'selected' : ''; ?>>Guru Penjasorkes</option>
                                                        <option value="Guru PAI" <?php echo ($row['jabatan'] == 'Guru PAI') ? 'selected' : ''; ?>>Guru PAI</option>
                                                        <option value="Operator Sekolah" <?php echo ($row['jabatan'] == 'Operator Sekolah') ? 'selected' : ''; ?>>Operator Sekolah</option>
                                                        <option value="Penjaga Sekolah" <?php echo ($row['jabatan'] == 'Penjaga Sekolah') ? 'selected' : ''; ?>>Penjaga Sekolah</option>
                                                    </select>
                                                    <label for="floatingInput">Jabatan</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Jenis Jabatan
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" name="jenis_pegawai" id="">
                                                        <option value="PNS" <?php echo ($row['jenis_pegawai'] == 'PNS') ? 'selected' : ''; ?>>PNS</option>
                                                        <option value="PPPK" <?php echo ($row['jenis_pegawai'] == 'PPPK') ? 'selected' : ''; ?>>PPPK</option>
                                                        <option value="KKI" <?php echo ($row['jenis_pegawai'] == 'KKI') ? 'selected' : ''; ?>>KKI</option>
                                                        <option value="HONOR" <?php echo ($row['jenis_pegawai'] == 'HONOR') ? 'selected' : ''; ?>>HONOR</option>
                                                    </select>
                                                    <label for="floatingInput">Jenis Pegawai</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Jenis Pegawai
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="nip"
                                                        name="nip" required value="<?php echo $row['nip'] ?>">
                                                    <label for="floatingInput">NIP</label>
                                                    <div class="invalid-feedback">
                                                        Masukan NIP
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary" name="edit_pegawai_validate"
                                                value="12345">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal akhir Edit -->

                    <!-- Modal Delete -->
                    <div class="modal fade" id="modaldelet<?php echo $row['nama_pegawai'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Pegawai</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate method="POST"
                                        action="proses/proses_hapus_pegawai.php">
                                        <input type="hidden" value="<?php echo $row['id_pegawai'] ?>" name="id_pegawai">
                                        Apakah Anda Ingin Menghapus Data Pegawai yang bernama
                                        <b><?php echo $row['nama_pegawai'] ?></b> ?
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger hapus" name="hapus_pegawai_validate"
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
                echo "Data Pegawai Tidak Ada";
            } else {
                ?>
                <!-- Tabel daftar Kategori -->
                <div class="table-responsive mt-1">
                    <table class="table table-bordered" id="example">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align:center">ID</th>
                                <th scope="col" style="text-align:center">Nama Pegawai</th>
                                <th scope="col" style="text-align:center">Jabatan</th>
                                <th scope="col" style="text-align:center">Jenis Pegawai</th>
                                <th scope="col" style="text-align:center">NIP</th>
                                <th scope="col" style="text-align:center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center">
                            <?php
                            foreach ($result as $row) {
                                ?>
                                <tr style="text-align:center">
                                    <td>
                                        <?php echo $row['id_pegawai'] ?>
                                    </td>
                                    <td style="font-size:15px">
                                        <?php echo $row['nama_pegawai'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['jabatan'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['jenis_pegawai'] ?>
                                    </td>
                                    <td style="text-align:center">
                                        <?php echo $row['nip'] ?>
                                    </td>
                                    <td class="d-flex" style="justify-content: center">
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#modaledit<?php echo $row['nama_pegawai'] ?>"><i
                                                class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#modaldelet<?php echo $row['nama_pegawai'] ?>">
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