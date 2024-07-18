<!-- Content -->
<?php
session_start();
if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "user.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "report.php";
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
} elseif (isset($_GET['x']) && $_GET['x'] == 'siswa') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "siswa.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'pegawai') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "pegawai.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'mapel') {
    if ($_SESSION['level_simsditp'] == 1) {
        $page = "mapel.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }

} elseif (isset($_GET['x']) && $_GET['x'] == 'absen') {
    if ($_SESSION['level_simsditp'] == 1 || $_SESSION['level_simsditp'] == 2) {
        $page = "absen.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'spp') {
    if ($_SESSION['level_simsditp'] == 1 || $_SESSION['level_simsditp'] == 2) {
        $page = "spp.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'transaksi') {
    if ($_SESSION['level_simsditp'] == 1 || $_SESSION['level_simsditp'] == 2) {
        $page = "transaksi.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'nilai') {
    if ($_SESSION['level_simsditp'] == 1 || $_SESSION['level_simsditp'] == 2) {
        $page = "nilai_siswa.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'about') {
    if ($_SESSION['level_simsditp'] == 1 || $_SESSION['level_simsditp'] == 2) {
        $page = "about_us.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'guru') {
    if ($_SESSION['level_simsditp'] == 1 || $_SESSION['level_simsditp'] == 2) {
        $page = "guru.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
}
?>
<!-- End Content -->