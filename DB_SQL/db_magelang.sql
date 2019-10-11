-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 03:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_magelang`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_10_09_004504_create_tb_user', 1),
(2, '2019_10_09_011135_create_tb_bidang', 2),
(3, '2019_10_09_011854_create_tb_sektor', 3),
(4, '2019_10_09_012146_create_tb_grafik', 4),
(5, '2019_10_09_020945_create_tb_detailbidang', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidang`
--

CREATE TABLE `tb_bidang` (
  `idBidang` int(10) NOT NULL,
  `namaBidang` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktuDibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_bidang`
--

INSERT INTO `tb_bidang` (`idBidang`, `namaBidang`, `waktuDibuat`) VALUES
(1, 'Umum', '2019-10-01 00:00:00'),
(2, 'Bidang Pendidikan', '2019-10-11 00:00:00'),
(3, 'Bidang Kesehatan', '2019-10-11 00:00:00'),
(4, 'Executive', '2019-10-11 00:00:00'),
(5, 'OPD', '2019-10-11 00:00:00'),
(6, 'Khusus', '2019-10-11 00:00:00'),
(7, 'Prioritas', '2019-10-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailbidang`
--

CREATE TABLE `tb_detailbidang` (
  `idBidang` int(11) NOT NULL,
  `idGrafik` int(11) NOT NULL,
  `waktuDibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_grafik`
--

CREATE TABLE `tb_grafik` (
  `idGrafik` int(10) NOT NULL,
  `idSektor` int(11) NOT NULL,
  `metabaseId` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulGrafik` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktuDibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_grafik`
--

INSERT INTO `tb_grafik` (`idGrafik`, `idSektor`, `metabaseId`, `judulGrafik`, `waktuDibuat`) VALUES
(1, 1, '219c9384-fccf-4a1a-b630-5d0c6e612692', 'ewewewewe', '2019-10-11 00:00:00'),
(3, 2, '92db4953-839c-4c13-a7aa-d099d39e9361', '32323233', '2019-10-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sektor`
--

CREATE TABLE `tb_sektor` (
  `idSektor` int(11) NOT NULL,
  `namaSektor` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktuDibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_sektor`
--

INSERT INTO `tb_sektor` (`idSektor`, `namaSektor`, `waktuDibuat`) VALUES
(1, 'Sektor Pendidikan', '2019-10-25 00:00:00'),
(2, 'Sektor Perizinan', '2019-10-26 00:00:00'),
(3, 'Sektor Kesehatan', '2019-10-11 00:00:00'),
(4, 'Sektor Keuangan', '2019-10-11 00:00:00'),
(5, 'Sektor Perencanaan', '2019-10-11 00:00:00'),
(6, 'Sektor Kepegawaian', '2019-10-11 00:00:00'),
(7, 'Sektor Kependudukan', '2019-10-11 00:00:00'),
(8, 'Sektor Pembangunan', '2019-10-11 00:00:00'),
(9, 'Administrator', '2019-10-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `idUser` int(10) NOT NULL,
  `idBidang` int(11) NOT NULL,
  `namaUser` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailUser` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktuDibuat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`idUser`, `idBidang`, `namaUser`, `emailUser`, `password`, `waktuDibuat`) VALUES
(1, 1, 'bombom', 'asd@gmail.com', '123', '2019-10-01 00:00:00'),
(2, 1, '123', '123', '123', '2019-10-01 00:00:00'),
(3, 1, 'qq', 'qq', 'qq', '2019-10-01 00:00:00'),
(4, 1, 'ww', 'ww', 'ww', '2019-10-01 00:00:00'),
(5, 1, 'ee', 'ee', 'ee', '2019-10-17 00:00:00'),
(6, 1, 'ff', 'ff', 'ff', '2019-10-15 00:00:00'),
(7, 1, 'tt', 'tt', 'tt', '2019-10-23 00:00:00'),
(8, 1, 'yy', 'yy', 'yy', '2019-10-18 00:00:00'),
(9, 1, 'uu', 'uu', 'uu', '2019-10-12 00:00:00'),
(10, 1, 'ii', 'ii', 'ii', '2019-10-25 00:00:00'),
(11, 1, 'oo', 'oo', 'oo', '2019-10-26 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  ADD PRIMARY KEY (`idBidang`);

--
-- Indexes for table `tb_detailbidang`
--
ALTER TABLE `tb_detailbidang`
  ADD KEY `idGrafik` (`idGrafik`),
  ADD KEY `idBidang` (`idBidang`);

--
-- Indexes for table `tb_grafik`
--
ALTER TABLE `tb_grafik`
  ADD PRIMARY KEY (`idGrafik`),
  ADD KEY `idSektor` (`idSektor`);

--
-- Indexes for table `tb_sektor`
--
ALTER TABLE `tb_sektor`
  ADD PRIMARY KEY (`idSektor`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `tb_users_emailuser_unique` (`emailUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  MODIFY `idBidang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_grafik`
--
ALTER TABLE `tb_grafik`
  MODIFY `idGrafik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_sektor`
--
ALTER TABLE `tb_sektor`
  MODIFY `idSektor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `idUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detailbidang`
--
ALTER TABLE `tb_detailbidang`
  ADD CONSTRAINT `tb_detailbidang_ibfk_1` FOREIGN KEY (`idBidang`) REFERENCES `tb_bidang` (`idBidang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detailbidang_ibfk_2` FOREIGN KEY (`idGrafik`) REFERENCES `tb_grafik` (`idGrafik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_grafik`
--
ALTER TABLE `tb_grafik`
  ADD CONSTRAINT `tb_grafik_ibfk_1` FOREIGN KEY (`idSektor`) REFERENCES `tb_sektor` (`idSektor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
