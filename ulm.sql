-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 04:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ulm`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `nama_admin`, `username`, `password`) VALUES
(2, 'abi', 'abi', 'hasbiakbar123');

-- --------------------------------------------------------

--
-- Table structure for table `data_keseluruhan`
--

CREATE TABLE `data_keseluruhan` (
  `id` int(11) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `ruangan` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `mata_kuliah` varchar(100) NOT NULL,
  `jam` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_keseluruhan`
--

INSERT INTO `data_keseluruhan` (`id`, `fakultas`, `ruangan`, `hari`, `mata_kuliah`, `jam`) VALUES
(6, 'FKIP', '28', 'Kamis', 'Matematika Dasar', '15:45'),
(7, 'FKIP', '29', 'Selasa', 'Metode Numerik', '13:00'),
(8, 'FKIP', '30', 'Rabu', 'Sistem Pakar', '15:45'),
(9, 'FKIP', '26', 'Senin', 'Bahasa Inggris', '7:15'),
(13, 'FKIP', '25', 'Sabtu', 'Pancasila', '15:45'),
(14, 'FKIP', '25', 'Minggu', 'Aljabar Linier', '13:45'),
(15, 'FKIP', '25', 'Senin', 'Pemrograman Web', '13:15'),
(16, 'FKIP', '27', 'Senin', 'Bahasa Indonesia', '13:15'),
(17, 'FKIP', '26', 'Kamis', 'Komputer dan Masyarakat', '10:45'),
(18, 'FKIP', '25', 'jumat', 'Pendidikan Inklusi', ''),
(23, 'FKIP', '21', 'Senin', 'a', '13:00'),
(24, 'FKIP', '22', 'Senin', '2wasd', '15:45'),
(25, 'FKIP', '23', 'Senin', 'fdfs', '15:45'),
(26, 'FKIP', '24', 'Senin', 'dfs', '13:00'),
(27, 'FKIP', '31', 'Senin', 'dsad', '13:00'),
(28, 'FKIP', '32', 'Senin', 'afafs', '15:45'),
(29, 'FKIP', '33', 'Senin', 'sadas', '13:00'),
(30, 'FKIP', '34', 'Senin', 'ada', '15:45'),
(31, 'FKIP', '35', 'Senin', 'dfdf', '13:00'),
(32, 'FKIP', '38', 'Senin', 'sdfdss', '13:00'),
(33, 'FKIP', 'hasbon', 'Senin', 'fgdgf', '13:00'),
(34, 'FKIP', '26', 'Jumat', 'Struktur Data', '13:00'),
(35, 'FKIP', '36', 'Senin', 'Pengantar Pendidikan', '07:15'),
(36, 'FKIP', '25', 'Senin', 'Pengantar Organisasi Komputer', '07:15'),
(37, 'FKIP', '38', 'Senin', 'Pengantar Pendidikan', '07:15'),
(38, 'FKIP', '26', 'Senin', 'Sistem Pakar', '07:15'),
(39, 'FKIP', '27', 'Senin', 'Desain dan Analisis Algoritma ', '10:45'),
(40, 'FKIP', '27', 'Senin', 'Sistem Pakar', '13:00'),
(41, 'FKIP', '26', 'Senin', 'Rekayasa Perangkat Lunak', '15:30'),
(42, 'FKIP', '25', 'Senin', 'Praktek Lapangan Persekolahan (PLP)', '16:20'),
(43, 'FKIP', '26', 'Selasa', 'Pemrograman Visual', '07:15'),
(44, 'FKIP', '26', 'Selasa', 'Aljabar Linier', '09:50'),
(45, 'FKIP', '27', 'Selasa', 'Jaringan dan Komunikasi', '09:50'),
(46, 'FKIP', '26', 'Selasa', 'Pemrograman Visual', '13:00'),
(47, 'FKIP', '25', 'Selasa', 'Skripsi', '14:45'),
(48, 'FKIP', '26', 'Selasa', 'Jaringan dan Komunikasi', '15:30'),
(49, 'FKIP', '26', 'Selasa', 'Pemrograman Dasar', '16:20'),
(50, 'FKIP', '26', 'Rabu', 'Pemrograman Dasar', '07:15'),
(51, 'FKIP', '26', 'Rabu', 'Basis Data', '09:00'),
(52, 'FKIP', '38', 'Rabu', 'Perkembangan Peserta Didik', '10:45'),
(53, 'FKIP', '27', 'Rabu', 'Pemrograman Web', '10:45'),
(54, 'FKIP', '38', 'Rabu', 'Belajar Dan Pembelajaran', '13:00'),
(55, 'FKIP', '27', 'Rabu', 'Administrasi Sistem', '13:00'),
(56, 'FKIP', '26', 'Rabu', 'Basis Data', '15:30'),
(57, 'FKIP', '29', 'Kamis', 'Strategi Belajar Mengajar', '07:15'),
(58, 'FKIP', '26', 'Kamis', 'Proyek Perangkat Lunak', '09:50'),
(59, 'FKIP', '26', 'Kamis', 'Fisika Dasar', '09:50'),
(60, 'FKIP', '29', 'Kamis', 'Statistika dan Probabilitas', '10:50'),
(61, 'FKIP', '26', 'Kamis', 'Telaah Kurikulum SMK', '13:00'),
(62, 'FKIP', '38', 'Kamis', 'Perencanaan Pembelajaran Ilmu Komputer', '15:30'),
(63, 'FKIP', '26', 'Jumat', 'Pengantar Sistem Digital', '07:15'),
(64, 'FKIP', '26', 'Jumat', 'Statistika dan Probabilitas', '07:15'),
(65, 'FKIP', '25', 'Jumat', 'Pengantar Teknologi Informasi', '09:00'),
(66, 'FKIP', '26', 'Jumat', 'Pengajaran Berbantuan Komputer', '09:00'),
(67, 'FKIP', '26', 'Jumat', 'Pengajaran Berbantuan Komputer', '13:50'),
(68, 'FKIP', '25', 'Jumat', 'Komputer dan Masyarakat', '15:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_keseluruhan`
--
ALTER TABLE `data_keseluruhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_keseluruhan`
--
ALTER TABLE `data_keseluruhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
