-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 04:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rs`
--
CREATE DATABASE IF NOT EXISTS `db_rs` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_rs`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id` int(11) NOT NULL,
  `jam_masuk` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `jam_pulang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id`, `jam_masuk`, `tanggal`, `jam_pulang`, `id_dokter`) VALUES
(12, '21:35', '2021-07-09', '09:35', 2),
(13, '21:36', '2021-07-09', '23:36', 2),
(14, '00:00', 'Jumat, 09 Juli 2021', '12:00', 5),
(15, '21:40', 'Jumat, 09 Juli 2021', '09:40', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'admin1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `poliklinik` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id`, `nama_lengkap`, `jenis_kelamin`, `no_telp`, `alamat`, `poliklinik`) VALUES
(2, 'Bayu', 'L', '0843234244', 'asdadad', 'Gigi'),
(4, 'Bambang', 'L', '082122992192', 'burung', 'burung'),
(5, 'Buyung', 'L', '089122229999', 'burung', 'burung'),
(6, 'Wahyudi', 'L', '08774545222', 'burung', 'Penyakit Kulit dan Kelamin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_dokter`
--

CREATE TABLE `tb_jadwal_dokter` (
  `id` int(11) NOT NULL,
  `hari` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jam_mulai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `jam_selesai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_jadwal_dokter`
--

INSERT INTO `tb_jadwal_dokter` (`id`, `hari`, `jam_mulai`, `jam_selesai`, `id_dokter`) VALUES
(2, 'Senin', '07:00', '10:00', 2),
(4, 'Selasa', '00:12', '03:12', 2),
(6, 'Kamis', '20:49', '08:49', 2),
(7, 'Kamis', '08:49', '14:02', 4),
(8, 'Senin', '07:55', '20:56', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id`, `nama_obat`, `keterangan`) VALUES
(1, 'Panadol', ' Pereda Nyeri Yang Cepat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `kategori` enum('NON-COVID','COVID') COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id`, `nama_pasien`, `umur`, `tgl_lahir`, `alamat`, `kategori`, `keterangan`) VALUES
(1, 'dandy', 19, '2002-07-01', 'Bekasi', 'COVID', 'Meriang butuh kasih sayang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `kategori` enum('pemasukan','pengeluaran') COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `kategori`, `jumlah`, `keterangan`) VALUES
(1, 'pemasukan', 1000, 'sdada'),
(2, 'pemasukan', 2000, 'sdadda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dokter` (`id_dokter`) USING BTREE;

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal_dokter`
--
ALTER TABLE `tb_jadwal_dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dokter` (`id_dokter`) USING BTREE;

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jadwal_dokter`
--
ALTER TABLE `tb_jadwal_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `tb_absensi_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jadwal_dokter`
--
ALTER TABLE `tb_jadwal_dokter`
  ADD CONSTRAINT `tb_jadwal_dokter_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
