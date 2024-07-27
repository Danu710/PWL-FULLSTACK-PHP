-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 05:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobasimsditp`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `nipd` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelamin` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `presensi` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`nipd`, `nama_siswa`, `kelamin`, `kelas`, `presensi`, `keterangan`, `tanggal`) VALUES
('3384', 'ABDUL WAHAB', 'Laki - Laki', '1 A', 'Alpa', '', '2024-05-19'),
('3385 ', 'ADZKIYYA TALITA SAKHI ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3386 ', 'AISAH TUNARSIH ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3387 ', 'AL HASBI AZIZ SUJANA ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3388 ', 'ANINDITA AQEELA AZZAHRA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3389', 'ARYO BIMO WICHAKSONO', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3390 ', 'DAMAR ARKHANANTA ALFAQIH ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3391', 'FARA DISA PUTRI AMALIA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3392', 'GILANG RIZKY ADITYA ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3393', 'GLADIS PRILIYANTI ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3394', 'HARYANTI ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3395', 'INSAN KAMIL ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3396', 'JUAN ADRIANSA ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3397', 'JULIAN ALFATIH ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3398', 'KAIHAN ADYATAMA VIRENDRA ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3399', 'KHANSA SENNA AVRELLA RIDWAN ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3400 ', 'MARWAH IZATI PRATAMA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3401', 'MUHAMAD RAFFA ASKA PUTRA ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3402', 'MUHAMMAD HIKMAL ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3403', 'MUHAMMAD MIRZA KAMARUDIN ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3404', 'MUTIARA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3405', 'NADIA OCTAVIYANI PUTRI ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3406', 'NURHADI SAPUTRA ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3407', 'RAIHAN FADHLURRAHMAN ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3408', 'RAUDHATUL JANNAH ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3409', 'SANIYAH ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3410', 'SHAHIDA CITRA KANAYYA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3411', 'SIENNA ALZAINA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3412', 'SYAIFUL ROHMAN ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-19'),
('3413', 'SYFA KAMILA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3414', 'UMMI MARYAM ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('3415', 'VIRA FAUZIAH ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-19'),
('12323', 'rahman', 'Laki - Laki', '2 A', 'Alpa', 'mabal', '2024-05-20'),
('3384', 'ABDUL WAHAB', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3385 ', 'ADZKIYYA TALITA SAKHI ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3386 ', 'AISAH TUNARSIH ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3387 ', 'AL HASBI AZIZ SUJANA ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3388 ', 'ANINDITA AQEELA AZZAHRA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3389', 'ARYO BIMO WICHAKSONO', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3390 ', 'DAMAR ARKHANANTA ALFAQIH ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3391', 'FARA DISA PUTRI AMALIA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3392', 'GILANG RIZKY ADITYA ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3393', 'GLADIS PRILIYANTI ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3394', 'HARYANTI ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3395', 'INSAN KAMIL ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3396', 'JUAN ADRIANSA ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3397', 'JULIAN ALFATIH ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3398', 'KAIHAN ADYATAMA VIRENDRA ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3399', 'KHANSA SENNA AVRELLA RIDWAN ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3400 ', 'MARWAH IZATI PRATAMA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3401', 'MUHAMAD RAFFA ASKA PUTRA ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3402', 'MUHAMMAD HIKMAL ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3403', 'MUHAMMAD MIRZA KAMARUDIN ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3404', 'MUTIARA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3405', 'NADIA OCTAVIYANI PUTRI ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3406', 'NURHADI SAPUTRA ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3407', 'RAIHAN FADHLURRAHMAN ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3408', 'RAUDHATUL JANNAH ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3409', 'SANIYAH ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3410', 'SHAHIDA CITRA KANAYYA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3411', 'SIENNA ALZAINA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3412', 'SYAIFUL ROHMAN ', 'Laki - Laki', '1 A', 'Pilih Status', '', '2024-05-20'),
('3413', 'SYFA KAMILA ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3414', 'UMMI MARYAM ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3415', 'VIRA FAUZIAH ', 'Perempuan', '1 A', 'Pilih Status', '', '2024-05-20'),
('3416 ', 'ADELIA MAKAILAH PUTRI ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3417 ', 'AHMAD FAUZAN KHOIRUL ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3418 ', 'AINAYYA FATHIYYATURAHMA ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3419 ', 'AISYAH NABILA ZAHRA ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3420 ', 'AMINURDIN ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3421 ', 'ANISA RAESAH PUTRI ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3422 ', 'AZKA ABQORI ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3423 ', 'ELZIO SATRIA ANGGARA ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3424 ', 'FATIHMAH ALMAIRA SYAFI\'I ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3425', 'HABIBUL HADID ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3426 ', 'HANAN ZIKRIYA SUPRIYADI ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3427 ', 'HAZNA ADIBAH SUPRIYADI ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3428 ', 'IRSYAAD ALFIANSYAH ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3429 ', 'JUAN BEZALEEL GULO ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3430 ', 'LATIFAH SUHANTRI ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3431 ', 'MEY SENTIANDINI ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3432 ', 'MUHAMAD IRHAM AFANDI ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3433 ', 'MUHAMMAD AGAM NUR ABDILLAH ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3434 ', 'MUHAMMAD FAJAR RUDIN ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3435 ', 'MUHAMMAD FIRDAUS ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3436 ', 'MUHAMMAD IRFAN ARSYAD AFRIZA ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3437 ', 'MUHAMMAD REYHAN AL BANA ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3438 ', 'MUTIARA PUTRI ANINDYA ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3439 ', 'NAFISA MELIANA PUTRI ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3440 ', 'RAGIL AHMAD NURKHOLIK ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3441 ', 'SAKILLA ANGGRAINI ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3442 ', 'SASKIA REVALINA ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3443 ', 'SHENNA KHUMAIRAH ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3444 ', 'SHIHAB AL MA\'I ', 'Laki - Laki', '1 B', 'Pilih Status', '', '2024-05-20'),
('3445 ', 'SYAKILLAH KHAIRUNNISA ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('3446 ', 'UMI HUMAIROH SALSABILA ', 'Perempuan', '1 B', 'Pilih Status', '', '2024-05-20'),
('4402', 'MUHAMMAD HIKMAL ', 'Laki - Laki', '2 B', 'Hadir', '', '2024-05-20'),
('4403', 'MUHAMMAD MIRZA KAMARUDIN ', 'Laki - Laki', '2 B', 'Hadir', '', '2024-05-20'),
('4404', 'MUTIARA ', 'Perempuan', '2 B', 'Hadir', '', '2024-05-20'),
('4405', 'NADIA OCTAVIYANI PUTRI ', 'Perempuan', '2 B', 'Hadir', '', '2024-05-20'),
('4406', 'NURHADI SAPUTRA ', 'Laki - Laki', '2 B', 'Hadir', '', '2024-05-20'),
('4407', 'RAIHAN FADHLURRAHMAN ', 'Laki - Laki', '2 B', 'Hadir', '', '2024-05-20'),
('4408', 'RAUDHATUL JANNAH ', 'Perempuan', '2 B', 'Hadir', '', '2024-05-20'),
('4409', 'SANIYAH ', 'Perempuan', '2 B', 'Hadir', '', '2024-05-20'),
('4410', 'SHAHIDA CITRA KANAYYA ', 'Perempuan', '2 B', 'Hadir', '', '2024-05-20'),
('3384', 'ABDUL WAHAB', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3385 ', 'ADZKIYYA TALITA SAKHI ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3386 ', 'AISAH TUNARSIH ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3387 ', 'AL HASBI AZIZ SUJANA ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3388 ', 'ANINDITA AQEELA AZZAHRA ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3389', 'ARYO BIMO WICHAKSONO', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3390 ', 'DAMAR ARKHANANTA ALFAQIH ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3391', 'FARA DISA PUTRI AMALIA ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3392', 'GILANG RIZKY ADITYA ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3393', 'GLADIS PRILIYANTI ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3394', 'HARYANTI ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3395', 'INSAN KAMIL ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3396', 'JUAN ADRIANSA ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3397', 'JULIAN ALFATIH ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3398', 'KAIHAN ADYATAMA VIRENDRA ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3399', 'KHANSA SENNA AVRELLA RIDWAN ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3400 ', 'MARWAH IZATI PRATAMA ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3401', 'MUHAMAD RAFFA ASKA PUTRA ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3402', 'MUHAMMAD HIKMAL ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3403', 'MUHAMMAD MIRZA KAMARUDIN ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3404', 'MUTIARA ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3405', 'NADIA OCTAVIYANI PUTRI ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3406', 'NURHADI SAPUTRA ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3407', 'RAIHAN FADHLURRAHMAN ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3408', 'RAUDHATUL JANNAH ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3409', 'SANIYAH ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3410', 'SHAHIDA CITRA KANAYYA ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3411', 'SIENNA ALZAINA ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3412', 'SYAIFUL ROHMAN ', 'Laki - Laki', '1 A', 'Hadir', '', '2024-05-21'),
('3413', 'SYFA KAMILA ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3414', 'UMMI MARYAM ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3415', 'VIRA FAUZIAH ', 'Perempuan', '1 A', 'Hadir', '', '2024-05-21'),
('3416 ', 'ADELIA MAKAILAH PUTRI ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3417 ', 'AHMAD FAUZAN KHOIRUL ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3418 ', 'AINAYYA FATHIYYATURAHMA ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3419 ', 'AISYAH NABILA ZAHRA ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3420 ', 'AMINURDIN ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3421 ', 'ANISA RAESAH PUTRI ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3422 ', 'AZKA ABQORI ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3423 ', 'ELZIO SATRIA ANGGARA ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3424 ', 'FATIHMAH ALMAIRA SYAFI\'I ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3425', 'HABIBUL HADID ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3426 ', 'HANAN ZIKRIYA SUPRIYADI ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3427 ', 'HAZNA ADIBAH SUPRIYADI ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3428 ', 'IRSYAAD ALFIANSYAH ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3429 ', 'JUAN BEZALEEL GULO ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3430 ', 'LATIFAH SUHANTRI ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3431 ', 'MEY SENTIANDINI ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3432 ', 'MUHAMAD IRHAM AFANDI ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3433 ', 'MUHAMMAD AGAM NUR ABDILLAH ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3434 ', 'MUHAMMAD FAJAR RUDIN ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3435 ', 'MUHAMMAD FIRDAUS ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3436 ', 'MUHAMMAD IRFAN ARSYAD AFRIZA ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3437 ', 'MUHAMMAD REYHAN AL BANA ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3438 ', 'MUTIARA PUTRI ANINDYA ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3439 ', 'NAFISA MELIANA PUTRI ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3440 ', 'RAGIL AHMAD NURKHOLIK ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3441 ', 'SAKILLA ANGGRAINI ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3442 ', 'SASKIA REVALINA ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3443 ', 'SHENNA KHUMAIRAH ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3444 ', 'SHIHAB AL MA\'I ', 'Laki - Laki', '1 B', 'Hadir', '', '2024-05-21'),
('3445 ', 'SYAKILLAH KHAIRUNNISA ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('3446 ', 'UMI HUMAIROH SALSABILA ', 'Perempuan', '1 B', 'Hadir', '', '2024-05-21'),
('12323', 'rahman', 'Laki - Laki', '2 A', 'Alpa', 'mabal', '2024-05-22'),
('4484', 'ABDUL WAHAB', 'Laki - Laki', '2 A', 'Hadir', '', '2024-05-22'),
('4485 ', 'ADZKIYYA TALITA SAKHI ', 'Perempuan', '2 A', 'Hadir', '', '2024-05-22'),
('4486 ', 'AISAH TUNARSIH ', 'Perempuan', '2 A', 'Hadir', '', '2024-05-22'),
('4487 ', 'AL HASBI AZIZ SUJANA ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-05-22'),
('4488 ', 'ANINDITA AQEELA AZZAHRA ', 'Perempuan', '2 A', 'Hadir', '', '2024-05-22'),
('4489', 'ARYO BIMO WICHAKSONO', 'Laki - Laki', '2 A', 'Hadir', '', '2024-05-22'),
('4490 ', 'DAMAR ARKHANANTA ALFAQIH ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-05-22'),
('4491', 'FARA DISA PUTRI AMALIA ', 'Perempuan', '2 A', 'Hadir', '', '2024-05-22'),
('4492', 'GILANG RIZKY ADITYA ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-05-22'),
('4493', 'GLADIS PRILIYANTI ', 'Perempuan', '2 A', 'Hadir', '', '2024-05-22'),
('4494', 'HARYANTI ', 'Perempuan', '2 A', 'Hadir', '', '2024-05-22'),
('4495', 'INSAN KAMIL ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-05-22'),
('4496', 'JUAN ADRIANSA ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-05-22'),
('4497', 'JULIAN ALFATIH ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-05-22'),
('4498', 'KAIHAN ADYATAMA VIRENDRA ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-05-22'),
('4499', 'KHANSA SENNA AVRELLA RIDWAN ', 'Perempuan', '2 A', 'Hadir', '', '2024-05-22'),
('4400 ', 'MARWAH IZATI PRATAMA ', 'Perempuan', '2 A', 'Hadir', '', '2024-05-22'),
('4401', 'MUHAMAD RAFFA ASKA PUTRA ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-05-22'),
('4411', 'SIENNA ALZAINA ', 'Perempuan', '2 A', 'Hadir', '', '2024-05-22'),
('4412', 'SYAIFUL ROHMAN ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-05-22'),
('4413', 'SYFA KAMILA ', 'Perempuan', '2 A', 'Hadir', '', '2024-05-22'),
('4414', 'UMMI MARYAM ', 'Perempuan', '2 A', 'Hadir', '', '2024-05-22'),
('4415', 'VIRA FAUZIAH ', 'Perempuan', '2 A', 'Hadir', '', '2024-05-22'),
('12323', 'rahman', 'Laki - Laki', '2 A', 'Alpa', 'mabal', '2024-06-11'),
('4484', 'ABDUL WAHAB', 'Laki - Laki', '2 A', 'Izin', 'sakit', '2024-06-11'),
('4485 ', 'ADZKIYYA TALITA SAKHI ', 'Perempuan', '2 A', 'Hadir', '', '2024-06-11'),
('4486 ', 'AISAH TUNARSIH ', 'Perempuan', '2 A', 'Hadir', '', '2024-06-11'),
('4487 ', 'AL HASBI AZIZ SUJANA ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-06-11'),
('4488 ', 'ANINDITA AQEELA AZZAHRA ', 'Perempuan', '2 A', 'Hadir', '', '2024-06-11'),
('4489', 'ARYO BIMO WICHAKSONO', 'Laki - Laki', '2 A', 'Hadir', '', '2024-06-11'),
('4490 ', 'DAMAR ARKHANANTA ALFAQIH ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-06-11'),
('4491', 'FARA DISA PUTRI AMALIA ', 'Perempuan', '2 A', 'Hadir', '', '2024-06-11'),
('4492', 'GILANG RIZKY ADITYA ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-06-11'),
('4493', 'GLADIS PRILIYANTI ', 'Perempuan', '2 A', 'Hadir', '', '2024-06-11'),
('4494', 'HARYANTI ', 'Perempuan', '2 A', 'Hadir', '', '2024-06-11'),
('4495', 'INSAN KAMIL ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-06-11'),
('4496', 'JUAN ADRIANSA ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-06-11'),
('4497', 'JULIAN ALFATIH ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-06-11'),
('4498', 'KAIHAN ADYATAMA VIRENDRA ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-06-11'),
('4499', 'KHANSA SENNA AVRELLA RIDWAN ', 'Perempuan', '2 A', 'Hadir', '', '2024-06-11'),
('4400 ', 'MARWAH IZATI PRATAMA ', 'Perempuan', '2 A', 'Hadir', '', '2024-06-11'),
('4401', 'MUHAMAD RAFFA ASKA PUTRA ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-06-11'),
('4411', 'SIENNA ALZAINA ', 'Perempuan', '2 A', 'Hadir', '', '2024-06-11'),
('4412', 'SYAIFUL ROHMAN ', 'Laki - Laki', '2 A', 'Hadir', '', '2024-06-11'),
('4413', 'SYFA KAMILA ', 'Perempuan', '2 A', 'Hadir', '', '2024-06-11'),
('4414', 'UMMI MARYAM ', 'Perempuan', '2 A', 'Hadir', '', '2024-06-11'),
('4415', 'VIRA FAUZIAH ', 'Perempuan', '2 A', 'Hadir', '', '2024-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nama_guru` varchar(50) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nama_guru`, `wali_kelas`) VALUES
('Risiyana Larici, S.Pd ', '1 A'),
('Ponco Aprianto, S.Pd ', '1 B'),
('Agus Wimbono, S.Pd ', '2 A'),
('Arif Rachman, S.Pd ', '2 B'),
('Nurul Fijriyah, S.Pd ', '3 A');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, '1 A'),
(2, '1 B'),
(3, '2 A'),
(4, '2 B'),
(5, '3 A'),
(6, '3 B'),
(7, '4 A'),
(8, '4 B'),
(9, '5 A'),
(10, '5 B'),
(11, '6 A'),
(12, '6 B');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `level`, `password`, `nohp`, `alamat`) VALUES
('ID001', 'Admin', 'admin@admin.com', '1', '21232f297a57a5a743894a0e4a801fc3', '089653051713', 'Bali'),
('ID002', 'Guru', 'guru@gmail.com', '2', '77e69c137812518e359196bb2f5e9bb9', '089517259583', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(50) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `kategori`) VALUES
('MP003', 'PJOK', 'MUATAN LOKAL'),
('MP004', 'Komputer', 'WAJIB'),
('MP005', 'IPS', 'MUATAN LOKAL'),
('MP006', 'Biologi', 'MUATAN LOKAL');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `mapel_id` varchar(255) DEFAULT NULL,
  `siswa_id` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `tahun_ajaran` varchar(255) DEFAULT NULL,
  `nilai_mapel` double DEFAULT NULL,
  `nilai_tugas` double DEFAULT NULL,
  `nilai_uts` double DEFAULT NULL,
  `nilai_uas` double DEFAULT NULL,
  `predikat_uts` varchar(255) DEFAULT NULL,
  `predikat_uas` varchar(255) DEFAULT NULL,
  `predikat_sikap` varchar(255) DEFAULT NULL,
  `predikat_keterampilan` varchar(255) DEFAULT NULL,
  `predikat_kompetensi` varchar(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `mapel_id`, `siswa_id`, `semester`, `tahun_ajaran`, `nilai_mapel`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `predikat_uts`, `predikat_uas`, `predikat_sikap`, `predikat_keterampilan`, `predikat_kompetensi`, `catatan`) VALUES
(1, 'MP001', 'S005', 'Ganjil', '2021', 90, 90, 90, 90, NULL, NULL, 'B', 'C', 'B', ''),
(7, 'MP002', 'S005', 'Ganjil', '2024', 90, 90, 90, 90, NULL, NULL, 'A', 'A', 'A', ''),
(10, 'MP005', 'S005', 'Ganjil', '2024', 90, 90, 90, 90, NULL, NULL, 'A', 'A', 'A', ''),
(13, 'MP008', 'S005', 'Ganjil', '2024', 90, 90, 90, 90, NULL, NULL, 'A', 'A', 'A', ''),
(14, 'MP006', 'S001', 'Ganjil', '2021', 90, 80, 90, 70, NULL, NULL, 'A', 'A', 'A', ''),
(15, 'MP002', 'S001', 'Ganjil', '2021', 60, 40, 70, 67, NULL, NULL, 'A', 'C', 'B', 'belajar lagi'),
(16, 'MP004', 'S001', 'Ganjil', '2021', 80, 80, 90, 80, NULL, NULL, 'B', 'A', 'A', 'ulah nyontek');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(50) NOT NULL,
  `nama_pegawai` varchar(300) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jenis_pegawai` varchar(100) NOT NULL,
  `nip` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jabatan`, `jenis_pegawai`, `nip`) VALUES
('P002', 'Wahyu', 'Wakil Kepala Sekolah', 'PNS', '202143500640'),
('P003', 'ARAFI', 'Guru Kelas', 'PPPK', '202143500640');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_dibayar` varchar(8) NOT NULL,
  `tahun_dibayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`) VALUES
('TRS0001', 1, '12345', '2022-02-02', 'januari', '2022', 1, 100000),
('TRS0002', 2, '121212', '2023-01-31', 'januari', '2022', 1, 100000),
('TRS0003', 1, '12345', '2023-01-31', 'februari', '2022', 1, 100000),
('TRS0004', 1, '1111', '2023-02-01', 'januari', '2022', 1, 100000),
('TRS0005', 2, '12345', '2023-02-01', 'maret', '2022', 1, 100000),
('TRS0006', 1, '12345', '2023-02-01', 'april', '2022', 1, 100000),
('TRS0007', 2, '1111', '2023-02-01', 'februari', '2022', 1, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` varchar(11) NOT NULL,
  `nipd` varchar(50) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `kelamin` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nipd`, `nama_siswa`, `kelas`, `kelamin`, `tempat_lahir`, `tanggal_lahir`) VALUES
('S001', '3384', 'ABDUL WAHAB', '1 A', 'Laki - Laki', 'Jakarta', '2016-05-10'),
('S002', '3385 ', 'ADZKIYYA TALITA SAKHI ', '1 A', 'Perempuan', 'JAKARTA ', '2016-05-17'),
('S003', '3386 ', 'AISAH TUNARSIH ', '1 A', 'Perempuan', 'JAKARTA ', '2015-08-21'),
('S004', '3387 ', 'AL HASBI AZIZ SUJANA ', '1 A', 'Laki - Laki', 'JAKARTA ', '2015-12-30'),
('S005', '3388 ', 'ANINDITA AQEELA AZZAHRA ', '1 A', 'Perempuan', 'LEBAK', '2013-12-15'),
('S006', '3389', 'ARYO BIMO WICHAKSONO', '1 A', 'Laki - Laki', 'JAKARTA ', '2015-12-20'),
('S007', '3390 ', 'DAMAR ARKHANANTA ALFAQIH ', '1 A', 'Laki - Laki', 'JAKARTA ', '2016-04-20'),
('S008', '3391', 'FARA DISA PUTRI AMALIA ', '1 A', 'Perempuan', 'JAKARTA ', '2016-04-13'),
('S009', '3392', 'GILANG RIZKY ADITYA ', '1 A', 'Laki - Laki', 'JAKARTA ', '2015-08-06'),
('S010', '3393', 'GLADIS PRILIYANTI ', '1 A', 'Perempuan', 'BREBES', '2015-08-28'),
('S011', '3394', 'HARYANTI ', '1 A', 'Perempuan', 'JAKARTA', '2015-11-16'),
('S012', '3395', 'INSAN KAMIL ', '1 A', 'Laki - Laki', 'JAKARTA', '2016-01-24'),
('S013', '3396', 'JUAN ADRIANSA ', '1 A', 'Laki - Laki', 'JAKARTA', '2015-12-07'),
('S014', '3397', 'JULIAN ALFATIH ', '1 A', 'Laki - Laki', 'JAKARTA', '2016-07-02'),
('S015', '3398', 'KAIHAN ADYATAMA VIRENDRA ', '1 A', 'Laki - Laki', 'PEMALANG ', '2016-05-01'),
('S017', '3400 ', 'MARWAH IZATI PRATAMA ', '1 A', 'Perempuan', 'JAKARTA', '2016-02-22'),
('S018', '3401', 'MUHAMAD RAFFA ASKA PUTRA ', '1 A', 'Laki - Laki', 'JAKARTA', '2015-12-15'),
('S019', '3402', 'MUHAMMAD HIKMAL ', '1 A', 'Laki - Laki', 'JAKARTA', '2015-01-01'),
('S020', '3403', 'MUHAMMAD MIRZA KAMARUDIN ', '1 A', 'Laki - Laki', 'JAKARTA', '2016-05-24'),
('S021', '3404', 'MUTIARA ', '1 A', 'Perempuan', 'JAKARTA', '2016-03-13'),
('S022', '3405', 'NADIA OCTAVIYANI PUTRI ', '1 A', 'Perempuan', 'JAKARTA', '2015-10-29'),
('S023', '3406', 'NURHADI SAPUTRA ', '1 A', 'Laki - Laki', 'JAKARTA', '2015-09-06'),
('S024', '3407', 'RAIHAN FADHLURRAHMAN ', '1 A', 'Laki - Laki', 'JAKARTA', '2016-01-26'),
('S025', '3408', 'RAUDHATUL JANNAH ', '1 A', 'Perempuan', 'JAKARTA', '2016-06-15'),
('S026', '3409', 'SANIYAH ', '1 A', 'Perempuan', 'JAKARTA', '2014-04-30'),
('S027', '3410', 'SHAHIDA CITRA KANAYYA ', '1 A', 'Perempuan', 'JAKARTA', '2015-10-14'),
('S028', '3411', 'SIENNA ALZAINA ', '1 A', 'Perempuan', 'JAKARTA', '2016-04-13'),
('S029', '3412', 'SYAIFUL ROHMAN ', '1 A', 'Laki - Laki', 'BEKASI', '2015-09-26'),
('S030', '3413', 'SYFA KAMILA ', '1 A', 'Perempuan', 'JAKARTA', '2015-10-08'),
('S031', '3414', 'UMMI MARYAM ', '1 A', 'Perempuan', 'JAKARTA', '2016-05-17'),
('S032', '3415', 'VIRA FAUZIAH ', '1 A', 'Perempuan', 'JAKARTA', '2016-04-17'),
('S033', '3416 ', 'ADELIA MAKAILAH PUTRI ', '1 B', 'Perempuan', 'JAKARTA', '2016-03-03'),
('S034', '3417 ', 'AHMAD FAUZAN KHOIRUL ', '1 B', 'Laki - Laki', 'JAKARTA', '2016-05-28'),
('S035', '3418 ', 'AINAYYA FATHIYYATURAHMA ', '1 B', 'Perempuan', 'JAKARTA ', '2016-05-17'),
('S036', '3419 ', 'AISYAH NABILA ZAHRA ', '1 B', 'Perempuan', 'JAKARTA ', '2016-03-28'),
('S037', '3420 ', 'AMINURDIN ', '1 B', 'Laki - Laki', 'JAKARTA ', '2016-01-28'),
('S038', '3421 ', 'ANISA RAESAH PUTRI ', '1 B', 'Perempuan', 'JAKARTA ', '2015-12-08'),
('S039', '3422 ', 'AZKA ABQORI ', '1 B', 'Laki - Laki', 'JAKARTA', '2016-04-08'),
('S040', '3423 ', 'ELZIO SATRIA ANGGARA ', '1 B', 'Laki - Laki', 'JAKARTA ', '2016-03-05'),
('S041', '3424 ', 'FATIHMAH ALMAIRA SYAFI\'I ', '1 B', 'Perempuan', 'JAKARTA ', '2016-01-14'),
('S042', '3425', 'HABIBUL HADID ', '1 B', 'Laki - Laki', 'BANGKALAN ', '2016-03-15'),
('S043', '3426 ', 'HANAN ZIKRIYA SUPRIYADI ', '1 B', 'Perempuan', 'JAKARTA ', '2016-01-12'),
('S044', '3427 ', 'HAZNA ADIBAH SUPRIYADI ', '1 B', 'Perempuan', 'JAKARTA', '2016-01-12'),
('S045', '3428 ', 'IRSYAAD ALFIANSYAH ', '1 B', 'Laki - Laki', 'JAKARTA ', '2015-12-22'),
('S046', '3429 ', 'JUAN BEZALEEL GULO ', '1 B', 'Laki - Laki', 'BEKASI ', '2016-03-12'),
('S047', '3430 ', 'LATIFAH SUHANTRI ', '1 B', 'Perempuan', 'JAKARTA ', '2015-11-09'),
('S048', '3431 ', 'MEY SENTIANDINI ', '1 B', 'Perempuan', 'JAKARTA ', '2016-05-02'),
('S049', '3432 ', 'MUHAMAD IRHAM AFANDI ', '1 B', 'Laki - Laki', 'JAKARTA ', '2016-05-02'),
('S050', '3433 ', 'MUHAMMAD AGAM NUR ABDILLAH ', '1 B', 'Laki - Laki', 'JAKARTA ', '2016-06-23'),
('S051', '3434 ', 'MUHAMMAD FAJAR RUDIN ', '1 B', 'Laki - Laki', 'JAKARTA ', '2016-05-16'),
('S052', '3435 ', 'MUHAMMAD FIRDAUS ', '1 B', 'Laki - Laki', 'JAKARTA ', '2016-02-06'),
('S053', '3436 ', 'MUHAMMAD IRFAN ARSYAD AFRIZA ', '1 B', 'Laki - Laki', 'JAKARTA', '2016-06-21'),
('S054', '3437 ', 'MUHAMMAD REYHAN AL BANA ', '1 B', 'Laki - Laki', 'JAKARTA', '2016-05-20'),
('S055', '3438 ', 'MUTIARA PUTRI ANINDYA ', '1 B', 'Perempuan', 'Giri Tunggal ', '2015-11-06'),
('S056', '3439 ', 'NAFISA MELIANA PUTRI ', '1 B', 'Perempuan', 'JAKARTA ', '2016-01-21'),
('S057', '3440 ', 'RAGIL AHMAD NURKHOLIK ', '1 B', 'Laki - Laki', 'Jakarta ', '2014-10-23'),
('S058', '3441 ', 'SAKILLA ANGGRAINI ', '1 B', 'Perempuan', 'JAKARTA ', '2015-11-02'),
('S059', '3442 ', 'SASKIA REVALINA ', '1 B', 'Perempuan', 'JAKARTA ', '2016-03-11'),
('S060', '3443 ', 'SHENNA KHUMAIRAH ', '1 B', 'Perempuan', 'JAKARTA ', '2016-06-03'),
('S061', '3444 ', 'SHIHAB AL MA\'I ', '1 B', 'Laki - Laki', 'JAKARTA ', '2016-02-27'),
('S062', '3445 ', 'SYAKILLAH KHAIRUNNISA ', '1 B', 'Perempuan', 'JAKARTA ', '2015-11-16'),
('S063', '3446 ', 'UMI HUMAIROH SALSABILA ', '1 B', 'Perempuan', 'JAKARTA ', '2016-05-09'),
('S064', '12323', 'rahman', '2 A', 'Laki - Laki', 'Bogor', '2012-05-11'),
('S065', '4484', 'ABDUL WAHAB', '2 A', 'Laki - Laki', 'Jakarta', '2016-05-10'),
('S066', '4485 ', 'ADZKIYYA TALITA SAKHI ', '2 A', 'Perempuan', 'JAKARTA ', '2016-05-17'),
('S067', '4486 ', 'AISAH TUNARSIH ', '2 A', 'Perempuan', 'JAKARTA ', '2015-08-21'),
('S068', '4487 ', 'AL HASBI AZIZ SUJANA ', '2 A', 'Laki - Laki', 'JAKARTA ', '2015-12-30'),
('S069', '4488 ', 'ANINDITA AQEELA AZZAHRA ', '2 A', 'Perempuan', 'LEBAK', '2013-12-15'),
('S070', '4489', 'ARYO BIMO WICHAKSONO', '2 A', 'Laki - Laki', 'JAKARTA ', '2015-12-20'),
('S071', '4490 ', 'DAMAR ARKHANANTA ALFAQIH ', '2 A', 'Laki - Laki', 'JAKARTA ', '2016-04-20'),
('S072', '4491', 'FARA DISA PUTRI AMALIA ', '2 A', 'Perempuan', 'JAKARTA ', '2016-04-13'),
('S073', '4492', 'GILANG RIZKY ADITYA ', '2 A', 'Laki - Laki', 'JAKARTA ', '2015-08-06'),
('S074', '4493', 'GLADIS PRILIYANTI ', '2 A', 'Perempuan', 'BREBES', '2015-08-28'),
('S075', '4494', 'HARYANTI ', '2 A', 'Perempuan', 'JAKARTA', '2015-11-16'),
('S076', '4495', 'INSAN KAMIL ', '2 A', 'Laki - Laki', 'JAKARTA', '2016-01-24'),
('S077', '4496', 'JUAN ADRIANSA ', '2 A', 'Laki - Laki', 'JAKARTA', '2015-12-07'),
('S078', '4497', 'JULIAN ALFATIH ', '2 A', 'Laki - Laki', 'JAKARTA', '2016-07-02'),
('S079', '4498', 'KAIHAN ADYATAMA VIRENDRA ', '2 A', 'Laki - Laki', 'PEMALANG ', '2016-05-01'),
('S080', '4499', 'KHANSA SENNA AVRELLA RIDWAN ', '2 A', 'Perempuan', 'JAKARTA', '2016-04-08'),
('S081', '4400 ', 'MARWAH IZATI PRATAMA ', '2 A', 'Perempuan', 'JAKARTA', '2016-02-22'),
('S082', '4401', 'MUHAMAD RAFFA ASKA PUTRA ', '2 A', 'Laki - Laki', 'JAKARTA', '2015-12-15'),
('S083', '4402', 'MUHAMMAD HIKMAL ', '2 B', 'Laki - Laki', 'JAKARTA', '2015-01-01'),
('S084', '4403', 'MUHAMMAD MIRZA KAMARUDIN ', '2 B', 'Laki - Laki', 'JAKARTA', '2016-05-24'),
('S085', '4404', 'MUTIARA ', '2 B', 'Perempuan', 'JAKARTA', '2016-03-13'),
('S086', '4405', 'NADIA OCTAVIYANI PUTRI ', '2 B', 'Perempuan', 'JAKARTA', '2015-10-29'),
('S087', '4406', 'NURHADI SAPUTRA ', '2 B', 'Laki - Laki', 'JAKARTA', '2015-09-06'),
('S088', '4407', 'RAIHAN FADHLURRAHMAN ', '2 B', 'Laki - Laki', 'JAKARTA', '2016-01-26'),
('S089', '4408', 'RAUDHATUL JANNAH ', '2 B', 'Perempuan', 'JAKARTA', '2016-06-15'),
('S090', '4409', 'SANIYAH ', '2 B', 'Perempuan', 'JAKARTA', '2014-04-30'),
('S091', '4410', 'SHAHIDA CITRA KANAYYA ', '2 B', 'Perempuan', 'JAKARTA', '2015-10-14'),
('S092', '4411', 'SIENNA ALZAINA ', '2 A', 'Perempuan', 'JAKARTA', '2016-04-13'),
('S093', '4412', 'SYAIFUL ROHMAN ', '2 A', 'Laki - Laki', 'BEKASI', '2015-09-26'),
('S094', '4413', 'SYFA KAMILA ', '2 A', 'Perempuan', 'JAKARTA', '2015-10-08'),
('S095', '4414', 'UMMI MARYAM ', '2 A', 'Perempuan', 'JAKARTA', '2016-05-17'),
('S096', '4415', 'VIRA FAUZIAH ', '2 A', 'Perempuan', 'JAKARTA', '2016-04-17'),
('S097', '4416 ', 'ADELIA MAKAILAH PUTRI ', '3 A', 'Perempuan', 'JAKARTA', '2016-03-03'),
('S098', '4417 ', 'AHMAD FAUZAN KHOIRUL ', '3 A', 'Laki - Laki', 'JAKARTA', '2016-05-28'),
('S099', '4418 ', 'AINAYYA FATHIYYATURAHMA ', '3 A', 'Perempuan', 'JAKARTA ', '2016-05-17'),
('S100', '4419 ', 'AISYAH NABILA ZAHRA ', '3 A', 'Perempuan', 'JAKARTA ', '2016-03-28'),
('S101', '4420 ', 'AMINURDIN ', '3 A', 'Laki - Laki', 'JAKARTA ', '2016-01-28'),
('S102', '4421 ', 'ANISA RAESAH PUTRI ', '3 A', 'Perempuan', 'JAKARTA ', '2015-12-08'),
('S103', '4422 ', 'AZKA ABQORI ', '3 A', 'Laki - Laki', 'JAKARTA', '2016-04-08'),
('S104', '4423 ', 'ELZIO SATRIA ANGGARA ', '3 A', 'Laki - Laki', 'JAKARTA ', '2016-03-05'),
('S105', '4424 ', 'FATIHMAH ALMAIRA SYAFI\'I ', '3 A', 'Perempuan', 'JAKARTA ', '2016-01-14'),
('S106', '4425', 'HABIBUL HADID ', '3 A', 'Laki - Laki', 'BANGKALAN ', '2016-03-15'),
('S107', '4426 ', 'HANAN ZIKRIYA SUPRIYADI ', '3 B', 'Perempuan', 'JAKARTA ', '2016-01-12'),
('S108', '4427 ', 'HAZNA ADIBAH SUPRIYADI ', '3 B', 'Perempuan', 'JAKARTA', '2016-01-12'),
('S109', '4428 ', 'IRSYAAD ALFIANSYAH ', '3 B', 'Laki - Laki', 'JAKARTA ', '2015-12-22'),
('S110', '4429 ', 'JUAN BEZALEEL GULO ', '3 B', 'Laki - Laki', 'BEKASI ', '2016-03-12'),
('S111', '4430 ', 'LATIFAH SUHANTRI ', '3 B', 'Perempuan', 'JAKARTA ', '2015-11-09'),
('S112', '4431 ', 'MEY SENTIANDINI ', '3 B', 'Perempuan', 'JAKARTA ', '2016-05-02'),
('S113', '4432 ', 'MUHAMAD IRHAM AFANDI ', '3 B', 'Laki - Laki', 'JAKARTA ', '2016-05-02'),
('S114', '4444 ', 'MUHAMMAD AGAM NUR ABDILLAH ', '3 B', 'Laki - Laki', 'JAKARTA ', '2016-06-23'),
('S115', '4444 ', 'MUHAMMAD FAJAR RUDIN ', '3 B', 'Laki - Laki', 'JAKARTA ', '2016-05-16'),
('S116', '4435 ', 'MUHAMMAD FIRDAUS ', '3 B', 'Laki - Laki', 'JAKARTA ', '2016-02-06'),
('S117', '4436 ', 'MUHAMMAD IRFAN ARSYAD AFRIZA ', '4 A', 'Laki - Laki', 'JAKARTA', '2016-06-21'),
('S118', '4437 ', 'MUHAMMAD REYHAN AL BANA ', '4 A', 'Laki - Laki', 'JAKARTA', '2016-05-20'),
('S119', '4438 ', 'MUTIARA PUTRI ANINDYA ', '4 A', 'Perempuan', 'Giri Tunggal ', '2015-11-06'),
('S120', '4439 ', 'NAFISA MELIANA PUTRI ', '4 A', 'Perempuan', 'JAKARTA ', '2016-01-21'),
('S121', '4440 ', 'RAGIL AHMAD NURKHOLIK ', '4 A', 'Laki - Laki', 'Jakarta ', '2014-10-23'),
('S122', '4441 ', 'SAKILLA ANGGRAINI ', '4 A', 'Perempuan', 'JAKARTA ', '2015-11-02'),
('S123', '4442 ', 'SASKIA REVALINA ', '4 A', 'Perempuan', 'JAKARTA ', '2016-03-11'),
('S124', '4443 ', 'SHENNA KHUMAIRAH ', '4 A', 'Perempuan', 'JAKARTA ', '2016-06-03'),
('S125', '4444 ', 'SHIHAB AL MA\'I ', '4 A', 'Laki - Laki', 'JAKARTA ', '2016-02-27'),
('S126', '4445 ', 'SYAKILLAH KHAIRUNNISA ', '4 B', 'Perempuan', 'JAKARTA ', '2015-11-16'),
('S127', '4446 ', 'UMI HUMAIROH SALSABILA ', '4 B', 'Perempuan', 'JAKARTA ', '2016-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `nipd` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `bayar` int(100) NOT NULL,
  `tanggal` date DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`nipd`, `nama_siswa`, `kelas`, `bulan`, `bayar`, `tanggal`, `status`) VALUES
('3384', 'ABDUL WAHAB', '1 A', 'Januari', 300000, '2024-05-21', 'Lunas'),
('3385 ', 'ADZKIYYA TALITA SAKHI ', '1 A', 'Januari', 300000, '2024-05-21', 'Lunas'),
('3386 ', 'AISAH TUNARSIH ', '1 A', 'Januari', 300000, '2024-05-21', 'Lunas'),
('3387 ', 'AL HASBI AZIZ SUJANA ', '1 A', 'Januari', 200000, '2024-05-20', 'Belum Lunas'),
('3387 ', 'AL HASBI AZIZ SUJANA ', '1 A', 'Januari', 100000, '2024-05-21', 'Lunas'),
('3388 ', 'ANINDITA AQEELA AZZAHRA ', '1 A', 'Januari', 200000, '2024-05-20', 'Belum Lunas'),
('3388 ', 'ANINDITA AQEELA AZZAHRA ', '1 A', 'Januari', 100000, '2024-05-21', 'Lunas'),
('3389', 'ARYO BIMO WICHAKSONO', '1 A', 'Januari', 300000, '2024-05-22', 'Lunas'),
('3384', 'ABDUL WAHAB', '1 A', 'Januari', 300000, '2024-06-06', 'Lunas'),
('4492', 'GILANG RIZKY ADITYA ', '2 A', 'Januari', 200000, '2024-06-07', 'Belum Lunas'),
('4492', 'GILANG RIZKY ADITYA ', '2 A', 'Januari', 100000, '2024-06-11', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
