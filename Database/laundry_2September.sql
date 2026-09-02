-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2026 at 02:38 AM
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
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', '123', 1),
(2, 'admin1', '202cb962ac59075b964b07152d234b70', 2),
(3, 'admin2', '202cb962ac59075b964b07152d234b70', 2);

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `harga_per_kilo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`harga_per_kilo`) VALUES
(7000);

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `pakaian_id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `pakaian_jenis` varchar(255) NOT NULL,
  `pakaian_jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`pakaian_id`, `transaksi_id`, `pakaian_jenis`, `pakaian_jumlah`) VALUES
(1, 1, 'Kemeja', 10),
(2, 2, 'Kaos', 18),
(3, 3, 'Jaket', 5),
(4, 4, 'Kaos', 20),
(5, 5, 'Kemeja', 7),
(6, 6, 'Rok', 8),
(7, 7, 'Celana jens', 10),
(8, 8, 'Jaket', 15),
(9, 9, 'Kerudung', 9),
(10, 10, 'Kaos Panjang', 19),
(11, 11, 'Kemeja', 17),
(12, 12, 'Kerudung', 15),
(13, 13, 'Celana Pendek', 13),
(14, 14, 'Sweter', 10),
(15, 15, 'Kemeja ', 12),
(16, 1, 'Jaket', 10),
(17, 8, 'Celana Jeans', 19),
(18, 2, 'Rok', 12),
(19, 5, 'Kaos', 10),
(20, 3, 'Jaket', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(11) NOT NULL,
  `pelanggan_nama` varchar(255) NOT NULL,
  `pelanggan_hp` varchar(20) NOT NULL,
  `pelanggan_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `pelanggan_nama`, `pelanggan_hp`, `pelanggan_alamat`) VALUES
(1, 'Nisa', '08878900134', 'Boja'),
(2, 'Santi', '099765123687', 'Limbangan'),
(3, 'Riko', '082152430986', 'Nglimut'),
(4, 'Asti', '076142509863', 'Tampingan'),
(5, 'Satrio', '067412360985', 'Blimbing'),
(6, 'Ranti', '076199244571', 'Puguh'),
(7, 'Kyko', '097761182340', 'singorojo'),
(8, 'Mira', '0112456728401', 'Gonoharjo'),
(9, 'Dika', '078126791024', 'Jetis'),
(10, 'Tian', '017245791824', 'Boja');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_tgl` date NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_berat` int(11) NOT NULL,
  `transaksi_tgl_selesai` date NOT NULL,
  `transaksi_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_tgl`, `pelanggan_id`, `transaksi_harga`, `transaksi_berat`, `transaksi_tgl_selesai`, `transaksi_status`) VALUES
(1, '2025-12-29', 1, 14000, 2, '2026-01-01', 1),
(2, '2026-01-02', 2, 7000, 1, '2026-01-05', 0),
(3, '2026-01-08', 3, 21000, 3, '2026-01-12', 2),
(4, '2026-01-12', 4, 7000, 1, '2026-01-17', 0),
(5, '2026-02-09', 5, 21000, 3, '2026-02-13', 2),
(6, '2026-02-15', 6, 7000, 1, '2026-02-17', 0),
(7, '2026-02-18', 7, 14000, 2, '2026-02-21', 1),
(8, '2026-03-15', 8, 14000, 2, '2026-03-19', 1),
(9, '2026-03-21', 9, 7000, 1, '2026-03-24', 0),
(10, '2026-04-05', 10, 21000, 3, '2026-04-09', 2),
(11, '2026-04-10', 1, 7000, 1, '2026-04-13', 0),
(12, '2026-04-15', 3, 7000, 1, '2026-04-18', 0),
(13, '2026-05-01', 5, 21000, 3, '2026-05-04', 2),
(14, '2026-05-05', 7, 21000, 3, '2026-05-09', 2),
(15, '2026-05-10', 8, 7000, 1, '2026-05-14', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`pakaian_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `pakaian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
