<?php
    if (isset($_GET['page']) && $_GET['page'] == 'penilaian') {
        include "penilaian.php";
    }else{
        include "list_siswa.php";
    }
?>