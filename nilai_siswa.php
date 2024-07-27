<?php
    if (isset($_GET['page']) && $_GET['page'] == 'penilaian') {
        include "module_nilai/penilaian.php";
    }else{
        include "module_nilai/list_siswa.php";
    }
?>