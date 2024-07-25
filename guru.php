<?php
include "proses/connect.php";

// Query untuk mengambil data dari tabel guru
$query_guru = mysqli_query($conn, "SELECT * FROM guru");
while ($record = mysqli_fetch_array($query_guru)) {
    $result[] = $record;
}

// Query untuk mengambil data dari tabel kelas
$query_kelas = mysqli_query($conn, "SELECT * FROM kelas");
while ($record = mysqli_fetch_array($query_kelas)) {
    $kelas[] = $record;
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
            Halaman Data Guru
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
