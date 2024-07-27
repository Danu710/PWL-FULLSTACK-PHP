<!-- Content -->
<?php
session_start();
if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'userr') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "user/user.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'reportt') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "report/report.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }

} elseif (isset($_GET['x']) && $_GET['x'] == 'master') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "master.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }

} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    include "proses/proses_logout.php";

} elseif (isset($_GET['x']) && $_GET['x'] == 'transaksi') {
    if ($_SESSION['level_simsditp'] == 1 || $_SESSION['level_simsditp'] == 2) {
        $page = "transaksi.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'siswaa') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "siswa/siswa.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'pegawaii') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "pegawai/pegawai.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'mapell') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "mapel/mapel.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'guruu') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "guru/guru.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }

} elseif (isset($_GET['x']) && $_GET['x'] == 'absenn') {
    if ($_SESSION['level_simsditp'] == 1 || $_SESSION['level_simsditp'] == 2) {
        $page = "absen/absen.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'spp1') {
    if ($_SESSION['level_simsditp'] == 1 || $_SESSION['level_simsditp'] == 2) {
        $page = "spp/spp.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'transaksii') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "spp/transaksi_spp.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'nilai') {
    if ($_SESSION['level_simsditp'] == 1 || $_SESSION['level_simsditp'] == 2) {
        $page = "module_nilai/nilai_siswa.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'aboutt') {
    if ($_SESSION['level_simsditp'] == 1 || $_SESSION['level_simsditp'] == 2) {
        $page = "about_us/about_us.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'guruu') {
    if ($_SESSION['level_simsditp'] == 1 || $_SESSION['level_simsditp'] == 2) {
        $page = "guru/guru.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
}
?>
<!-- End Content -->