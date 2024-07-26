<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$db = "cobasimsditp";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

/*include "proses/connect.php";*/
// Query untuk mengambil data siswa dan status pembayaran mereka
$sql = "SELECT * FROM spp ORDER BY nama_siswa ASC";

$result = $conn->query($sql);

?>
<html>
<head>
    <title>Report Pembayaran Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .lunas {
            color: green;
            font-weight: bold;
        }
        .belum-lunas {
            color: red;
            font-weight: bold;
        }
		.print-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-bottom: 20px;
            display: inline-block;
        }
        .print-button:hover {
            background-color: #45a049;
        }
        @media print {
            .print-button {
                display: none;
            }
            body {
                background-color: white;
            }
            .container {
                width: 100%;
                box-shadow: none;
                margin: 0;
                padding: 0;
            }
            table, th, td {
                border: 1px solid #000;
            }
            th {
                background-color: #ccc;
            }
    </style>
	<script>
        function printReport() {
            window.print();
        }
    </script>
</head>
<body>
    <div class="container">
		<img src="../assets/img/logo.jpg" width="84" height="66">
        <h2>Report Pembayaran Siswa</h2>
        <?php

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>NIP</th>
                <th>Nama Siswa</th>
				<th>Bulan</th>
                <th>Status Pembayaran</th>
            </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['nipd'] . "</td>
                <td>" . $row['nama_siswa'] . "</td>
				<td>" . $row['bulan'] . "</td>
                <td>" . $row['status'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data siswa.";
}

$conn->close();
?>
<button class="print-button" onclick="printReport()">Print</button>
    </div>
</body>
</html>


