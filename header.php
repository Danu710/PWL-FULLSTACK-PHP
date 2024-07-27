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
<link rel="stylesheet" type="text/css" href="assets/css/header.css">
<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM login WHERE username='$_SESSION[username_simsditp]'");
$records = mysqli_fetch_array($query);
?>
<nav class="navbar navbar-expand navbar-dark sticky-top" style="background-color:#0d95e8">
    <div class="container-lg">
        <a class="navbar-brand" href="home" style="font-size:20px"> <img src="assets/img/sekolah.png" alt=""
                style="width: 15%"> SIMSDITP</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <div class="dropdown">
                    <button class="btn nav-link dropdown-toggle mt-1" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="color: white; font-size: 17px">
                        <i class="bi bi-brightness-high-fill theme-icon-active"
                            data-theme-icon-active="bi-brightness-high-fill"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end mt-3 rounded"
                        aria-labelledby="dropdownMenuButtonLight">
                        <li>
                            <button class="dropdown-item d-flex align-items-center" type="button"
                                data-bs-theme-value="light">
                                <i class="bi bi-brightness-high-fill me-2 opacity-60"
                                    data-theme-icon="bi-brightness-high-fill"></i>Light
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center" type="button"
                                data-bs-theme-value="dark">
                                <i class="bi bi-moon-stars-fill me-2 opacity-60"
                                    data-theme-icon="bi-moon-stars-fill"></i>Dark
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center" type="button"
                                data-bs-theme-value="auto">
                                <i class="bi bi-circle-half me-2 opacity-60" data-theme-icon="bi-circle-half"></i>Auto
                            </button>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
    </div>
</nav>

<!-- Modal ubah profile -->
<div class="modal fade" id="modalubahprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen-md-down">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate method="POST" action="proses/proses_update_profile.php">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input disabled type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="username" required
                                    value="<?php echo $_SESSION['username_simsditp'] ?>">
                                <label for="floatingInput">Username</label>
                                <div class="invalid-feedback">
                                    Masukan username
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingNama" name="nama" required
                                    value="<?php echo $records['nama'] ?>">
                                <label for="floatingInput">Nama</label>
                                <div class="invalid-feedback">
                                    Masukan Nama Anda
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" name="nohp" required
                                    value="<?php echo $records['nohp'] ?>">
                                <label for="floatingInput">Nomor HP</label>
                                <div class="invalid-feedback">
                                    Masukan Nomor HP Anda
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="alamat" id="" style="height:100px">
                                <?php echo $records['alamat'] ?></textarea>
                                <label for="floatingInput">Alamat</label>
                                <div class="invalid-feedback">
                                    Masukan Alamat Anda
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" name="ubah_profile_validate"
                            value="12345">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal akhir ubah profile -->

<!-- Modal logout -->
<div class="modal fade" id="modallogout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Log Out</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin Ingin Log Out?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a type="button" class="btn btn-danger" href="logout">Ya, Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Akhir Logout -->