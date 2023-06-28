-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 06:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelola_riwayat_kesehatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kesehatan`
--

CREATE TABLE `riwayat_kesehatan` (
  `id_kesehatan` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nama_orang_tua` varchar(100) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `golongan_darah` varchar(10) NOT NULL,
  `riwayat_penyakit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_kesehatan`
--

INSERT INTO `riwayat_kesehatan` (`id_kesehatan`, `nama_lengkap`, `nama_orang_tua`, `ttl`, `umur`, `golongan_darah`, `riwayat_penyakit`) VALUES
(1, 'Budi Saepuloh', 'Imam', 'Bandung, 31 Oktober 2002', '20', 'A', 'Asma'),
(2, 'Abila Syahla', 'NeniKartini', 'Cimahi, 15 Juli 2001', '21', 'AB', 'RAdang Paru - Paru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riwayat_kesehatan`
--
ALTER TABLE `riwayat_kesehatan`
  ADD PRIMARY KEY (`id_kesehatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
