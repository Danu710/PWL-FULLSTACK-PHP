<?php 
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM spp");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
$query_spp = mysqli_query($conn, "SELECT nipd, nama_siswa FROM spp");


$spp = [];
while ($row = mysqli_fetch_assoc($query_spp)) {
    $spp[] = $row;
} 
?>
<script>
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">

<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman SPP
        </div>
        <div class="card-body">
        <?php 
        if(empty($result)){
            echo "Data SPP Tidak Ada";
        } else {
             ?>
                <!-- Tabel daftar Spp -->
                <div class="table-responsive mt-1">
                    <table class="table table-bordered" id="example">
                        <thead>
                            <tr style="text-align:center">
                                <th scope="col" style="text-align:center">NIPD</th>
                                <th scope="col" style="text-align:center">Nama Siswa</th>
                                <th scope="col" style="text-align:center">Kelas</th>
                                <th scope="col" style="text-align:center">Bulan</th>
                                <th scope="col" style="text-align:center">Bayar</th>
                                <th scope="col" style="text-align:center">Tanggal</th>
                                <th scope="col" style="text-align:center">Status</th>
                                <th scope="col" style="text-align:center">Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center">
                            <?php
                            foreach ($result as $row) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['nipd'] ?>
                                    </td>
                                    <td style="text-align:center">
                                        <?php echo $row['nama_siswa'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['kelas'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['bulan'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['bayar'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['tanggal'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['status'] ?>
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