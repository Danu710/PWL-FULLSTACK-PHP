<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            height: 100vh; /* Menyesuaikan tinggi layar */
            padding-top: 20px;
            box-sizing: border-box;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center; /* Pusatkan isi di sidebar */
        }
        .sidebar .logo {
            margin-bottom: 20px;
        }
        .sidebar .logo img {
            width: 150px; /* Sesuaikan ukuran logo */
            height: auto;
            border-radius: 50%; /* Opsional: memberi sudut bulat pada logo */
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .sidebar ul li {
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .sidebar ul li:hover {
            background-color: #555;
        }
        .content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-wrap: wrap; /* Memastikan card dapat wrap jika perlu */
            justify-content: space-between; /* Menyebar card dengan jarak yang sama */
            align-items: flex-start; /* Mulai dari atas ke bawah */
        }
        .content h2 {
            margin-bottom: 20px;
            width: 100%; /* Lebar penuh */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        td input[type="radio"] {
            margin: 0;
            vertical-align: middle;
        }
        td label {
            margin: 0 10px;
            vertical-align: middle;
        }
        td label:hover {
            cursor: pointer;
        }
        .center {
            text-align: center;
        }
        .submit-btn {
            margin-top: 20px;
            text-align: center;
        }
        .submit-btn button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .submit-btn button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="sidebar">
        <div class="logo">
            <img src="img/tut.png" alt="Logo">
        </div>
        <ul>
            <li>Absen Siswa</li>
            <li>Rekap Absen Siswa</li>
            <li>Cetak Absen Siswa</li>
        </ul>
    </div>
    <h2>Absen Siswa</h2>
    <form action="submit_absen.php" method="post">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Hadir</th>
                    <th>Izin</th>
                    <th>Sakit</th>
                    <th>Alfa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>123456</td>
                    <td>9876543210</td>
                    <td>John Doe</td>
                    <td>Laki-laki</td>
                    <td><input type="radio" id="hadir1" name="status1" value="H"><label for="hadir1">Hadir</label></td>
                    <td><input type="radio" id="izin1" name="status1" value="I"><label for="izin1">Izin</label></td>
                    <td><input type="radio" id="sakit1" name="status1" value="S"><label for="sakit1">Sakit</label></td>
                    <td><input type="radio" id="alfa1" name="status1" value="A"><label for="alfa1">Alfa</label></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>654321</td>
                    <td>0123456789</td>
                    <td>Jane Doe</td>
                    <td>Perempuan</td>
                    <td><input type="radio" id="hadir2" name="status2" value="H"><label for="hadir2">Hadir</label></td>
                    <td><input type="radio" id="izin2" name="status2" value="I"><label for="izin2">Izin</label></td>
                    <td><input type="radio" id="sakit2" name="status2" value="S"><label for="sakit2">Sakit</label></td>
                    <td><input type="radio" id="alfa2" name="status2" value="A"><label for="alfa2">Alfa</label></td>
                </tr>
                <!-- Contoh data siswa lainnya -->
            </tbody>
        </table>
        <div class="submit-btn">
            <button type="submit">Simpan Absen</button>
        </div>
    </form>
</body>
</html>
