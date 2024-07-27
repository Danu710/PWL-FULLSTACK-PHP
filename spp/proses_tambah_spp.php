<?php
session_start();
include "../proses/connect.php";


$nipd = (isset($_POST['nipd'])) ? htmlentities($_POST['nipd']) : "";
$nama_siswa = (isset($_POST['nama_siswa'])) ? htmlentities($_POST['nama_siswa']) : "";
$kelas = (isset($_POST['kelas'])) ? htmlentities($_POST['kelas']) : "";
$bulan = (isset($_POST['bulan'])) ? htmlentities($_POST['bulan']) : "";
$tanggal = date("Y-m-d");
$bayar = (isset($_POST['bayar'])) ? htmlentities($_POST['bayar']) : "";
$status = (isset($_POST['transaction_status'])) ? htmlentities($_POST['transaction_status']) : "";
$order_id = rand();
$transaction_id="";

mysqli_query($conn, "INSERT INTO spp VALUES ('$nipd', '$nama_siswa', '$kelas', '$bulan', '$bayar', '$tanggal', '$status', '$order_id', '$transaction_id')");


header("Location: ../midtrans/examples/snap/checkout-process-simple-version.php?order_id=$order_id");

