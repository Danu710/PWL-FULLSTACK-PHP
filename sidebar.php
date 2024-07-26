<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="assets/css/sidebar.css" />
<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="width:280px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="assets/img/sekolah.png"
                            style="width:50px">
                        SIMSDITP
                        <p style="font-size:12px"> Sistem Informasi Manajemen
                            Sekolah Dasar Islam Teladan Pulogadung</p>
                        <hr style="margin-top:-5px;">
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                        style="margin-top:-100px">
                    </button>
                </div>
                <div class="offcanvas-body" style="background-color: var(--bs-dark-text); color: var(--bs-body-bg)">
                    <ul class="navbar-nav flex-column nav-pills justify-content-end flex-grow-1 pe">
                        <li class="nav-item">
                            <img src="assets/img/tut.png" alt=""
                                style="width:130px; display: block; margin-left: auto; margin-right: auto;margin-bottom:10px">
                            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x'])) ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                aria-current="page" href="home">
                                <i class="bi bi-house-door"></i> Dashboard
                            </a>
                        </li>
                        <?php if (!empty($hasil) && isset($hasil['level'])) { ?>
                            <?php if ($hasil['level'] == 1) { ?>
                                <li class="nav-item">
                                    <a class="nav-link ps-2 dropdown-btn <?php echo (isset($_GET['x']) && ($_GET['x'] == 'master' || $_GET['x'] == 'siswa' || $_GET['x'] == 'pegawai')) ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                        href="#">
                                        <i class="bi bi-folder"></i> Master
                                    </a>
                                    <div class="dropdown-container"
                                        style="<?php echo (isset($_GET['x']) && ($_GET['x'] == 'siswaa' || $_GET['x'] == 'pegawaii' || $_GET['x'] == 'mapell'|| $_GET['x'] == 'guruu')) ? 'display: block;' : ''; ?>">
                                        <a class="nav-link ps-3 <?php echo (isset($_GET['x']) && $_GET['x'] == 'siswaa') ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                            href="siswaa"><i class="bi bi-mortarboard"></i> Siswa</a>
                                        <a class="nav-link ps-3 <?php echo (isset($_GET['x']) && $_GET['x'] == 'pegawaii') ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                            href="pegawaii"><i class="bi bi-person-lines-fill"></i> Pegawai</a>
                                        <a class="nav-link ps-3 <?php echo (isset($_GET['x']) && $_GET['x'] == 'mapell') ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                            href="mapell"><i class="bi bi-book"></i> Mata Pelajaran</a>
                                        <a class="nav-link ps-3 <?php echo (isset($_GET['x']) && $_GET['x'] == 'guruu') ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                            href="guruu"><i class="bi bi-person-square"></i> Guru</a>
                                    </div>
                                </li>
                            <?php } ?>
                            <?php if ($hasil['level'] == 1) { ?>
                                <li class="nav-item">
                                    <a class="nav-link ps-2 dropdown-btn <?php echo (isset($_GET['x']) && ($_GET['x'] == 'transaksi' || $_GET['x'] == 'absen')) ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                        href="#">
                                        <i class="bi bi-tags"></i> Transaksi
                                    </a>
                                    <div class="dropdown-container"
                                        style="<?php echo (isset($_GET['x']) && ($_GET['x'] == 'spp1' || $_GET['x'] == 'absenn' || $_GET['x'] == 'nilaii')) ? 'display: block;' : ''; ?>">
                                        <a class="nav-link ps-3 <?php echo (isset($_GET['x']) && $_GET['x'] == 'spp1') ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                            href="spp1"><i class="bi bi-cash-stack"></i> SPP</a>
                                        <a class="nav-link ps-3 <?php echo (isset($_GET['x']) && $_GET['x'] == 'absenn') ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                            href="absenn"><i class="bi bi-journal-check"></i> Absen</a>
                                        <a class="nav-link ps-3 <?php echo (isset($_GET['x']) && $_GET['x'] == 'nilaii') ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                            href="nilaii"><i class="bi bi-file-earmark-bar-graph"></i> Nilai Siswa</a>
                                    </div>
                                </li>
                            <?php } ?>
                            <?php if ($hasil['level'] == 2) { ?>
                                <li class="nav-item">
                                    <a class="nav-link ps-2 dropdown-btn <?php echo (isset($_GET['x']) && ($_GET['x'] == 'transaksi' || $_GET['x'] == 'absen')) ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                        href="#">
                                        <i class="bi bi-tags"></i> Transaksi
                                    </a>
                                    <div class="dropdown-container"
                                        style="<?php echo (isset($_GET['x']) && ($_GET['x'] == 'spp' || $_GET['x'] == 'absen' || $_GET['x'] == 'nilai')) ? 'display: block;' : ''; ?>">
                                        <a class="nav-link ps-3 <?php echo (isset($_GET['x']) && $_GET['x'] == 'absen') ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                            href="absen"><i class="bi bi-journal-check"></i> Absen</a>
                                    </div>
                                </li>
                            <?php } ?>
                        <?php } ?>

                        <?php if (!empty($hasil) && isset($hasil['level']) && $hasil['level'] == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'reportt') ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                    href="reportt">
                                    <i class="bi bi-clipboard-data"></i> Report
                                </a>
                            </li>
                        <?php } ?>

                        <?php if (!empty($hasil) && isset($hasil['level']) && $hasil['level'] == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'aboutt') ? 'active link-light' : 'link--bs-emphasis-color'; ?>"
                                    href="aboutt">
                                    <i class="bi bi-file-earmark-person-fill"></i> About Us
                                </a>
                            </li>
                        <?php } ?>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="." role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                                <?php echo isset($hasil['nama']) ? $hasil['nama'] : 'Nama Pengguna'; ?>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-start mt-3">
                                <?php if ($hasil['level'] == 1) { ?>
                                    <li>
                                        <a class="dropdown-item sidebar" href="userr"><i class="bi bi-person-fill-gear"></i> User</a>
                                    </li>
                                <?php } ?>
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        data-bs-target="#modalubahprofile"><i class="bi bi-person-fill"></i> Profile</a>
                                </li>
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        data-bs-target="#modallogout"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<script src="assets/js/sidebar.js"></script>