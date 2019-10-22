-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 06:58 AM
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
(7, 'Prioritas', '2019-10-11 00:00:00'),
(99, 'Administrator', '2019-10-19 01:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailbidang`
--

CREATE TABLE `tb_detailbidang` (
  `idGrafik` int(11) NOT NULL,
  `detBidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktuDibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_detailbidang`
--

INSERT INTO `tb_detailbidang` (`idGrafik`, `detBidang`, `waktuDibuat`) VALUES
(11, '1,4,6,99', '2019-10-14 08:58:45'),
(12, '1,4,6,99', '2019-10-14 08:59:17'),
(13, '1,4,99', '2019-10-14 08:59:53'),
(14, '1,4,99', '2019-10-14 09:01:07'),
(15, '1,4,99', '2019-10-14 09:01:41'),
(16, '1,4,99', '2019-10-14 09:02:12'),
(17, '1,4,5,99', '2019-10-14 09:04:04'),
(18, '1,4,99', '2019-10-14 09:04:36'),
(19, '1,2,5,99', '2019-10-14 09:05:19'),
(20, '1,99', '2019-10-14 09:05:51'),
(21, '99', '2019-10-17 02:26:46'),
(22, '1,99', '2019-10-19 01:52:48'),
(23, '1,99', '2019-10-14 09:08:22'),
(24, '1,99', '2019-10-14 09:08:57'),
(25, '1,99', '2019-10-14 09:10:25'),
(26, '1,99', '2019-10-14 09:11:00'),
(27, '1,99', '2019-10-14 09:12:22'),
(28, '1,99', '2019-10-14 09:13:23'),
(29, '1,99', '2019-10-14 09:13:54'),
(30, '1,99', '2019-10-14 09:14:53'),
(31, '1,99', '2019-10-14 09:15:39'),
(32, '1,99', '2019-10-14 09:16:10'),
(33, '1,99', '2019-10-14 09:16:40'),
(34, '1,99', '2019-10-14 09:17:26'),
(35, '1,99', '2019-10-14 09:17:58'),
(36, '1,99', '2019-10-14 09:18:40'),
(37, '1,99', '2019-10-14 09:19:11'),
(38, '1,99', '2019-10-14 09:19:38'),
(39, '1,99', '2019-10-14 09:20:10'),
(40, '1,99', '2019-10-14 09:21:28'),
(41, '1,99', '2019-10-14 09:22:04'),
(42, '1,99', '2019-10-14 09:23:11'),
(43, '1,99', '2019-10-14 09:23:43'),
(44, '1,99', '2019-10-14 09:24:19'),
(45, '1,99', '2019-10-14 09:24:47'),
(46, '1,99', '2019-10-14 09:25:15'),
(47, '1,99', '2019-10-14 09:25:51'),
(48, '1,99', '2019-10-14 09:26:21'),
(49, '1,99', '2019-10-14 09:27:27'),
(50, '1,99', '2019-10-14 09:28:45'),
(51, '1,99', '2019-10-14 09:29:22'),
(52, '1,99', '2019-10-14 09:29:50'),
(53, '1,99', '2019-10-14 09:30:30'),
(63, '2,99', '2019-10-22 04:53:45');

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
(11, 3, '219c9384-fccf-4a1a-b630-5d0c6e612692', 'Rekapitulasi Pelayanan Kesehatan dan Dokter Spesialis', '2019-10-14 08:58:45'),
(12, 3, '464c059d-0cd3-43c6-b1af-3cabfb58a8c5', 'Rekapitulasi SDM Kesehatan', '2019-10-14 08:59:17'),
(13, 1, '92db4953-839c-4c13-a7aa-d099d39e9361', 'Rekapitulasi Guru SD & SMP Berdasarkan Golongan', '2019-10-14 08:59:53'),
(14, 1, 'd0311422-2e20-44f0-a3e8-974c6c907d26', 'Rekapitulasi Unit Sekolah Dasar & Menengah Pertama', '2019-10-14 09:01:07'),
(15, 1, 'afc124f3-6f78-4dbd-a4d0-5cfb09785218', 'Rekapitulasi Jumlah Siswa SD & SMP Berdasarkan Gender', '2019-10-14 09:01:41'),
(16, 1, 'a4b07465-bd0c-4d4b-a50f-7b2b37dc363f', 'Rekapitulasi Unit Sekolah Menengah Pertama', '2019-10-14 09:02:12'),
(17, 2, '49c487f3-80e4-434b-84e9-6cd718ba89b2', 'Jumlah Permohonan Izin', '2019-10-14 09:04:04'),
(18, 2, '1158e60e-e466-4be2-92aa-456cf93faa26', 'Jumlah Retribusi Perizinan', '2019-10-14 09:04:36'),
(19, 1, 'e7d39029-780d-4546-86c4-b402c1c30f44', 'Rekapitulasi Unit Sekolah Dasar', '2019-10-14 09:05:19'),
(20, 2, '6de5ddd4-d018-46bf-957c-8694d7ac6d8e', 'Timeline Perijinan', '2019-10-14 09:05:51'),
(21, 9, '12917503-f9ec-4a8b-a424-bf424503f3e5', 'Daftar Koneksi', '2019-10-17 02:26:46'),
(22, 6, 'b37914cb-514e-45e3-8a5a-eb6695007ccf', 'Detail Pegawai dan Jejak Jabatan', '2019-10-19 01:52:48'),
(23, 6, '9066c15f-f7e6-4409-9953-8ffc65e59d0e', 'Jumlah Pegawai Berdasarkan Eselon', '2019-10-14 09:08:22'),
(24, 6, '2e428c2a-8ccd-4a2a-aa7b-dc63d5e2da50', 'Jumlah Pegawai Berdasarkan Gender', '2019-10-14 09:08:57'),
(25, 6, '60f3892c-d498-4b00-ae00-13fc7fa7ac5c', 'Jumlah Pegawai Berdasarkan Golongan', '2019-10-14 09:10:25'),
(26, 6, '3c390d35-ac17-49a3-a1ac-498a57a7f2cc', 'Jumlah Pegawai Berdasarkan Tingkat Pendidikan', '2019-10-14 09:11:00'),
(27, 6, '0681fe73-ce29-4a57-ab20-b5afb3332adc', 'Jumlah Pegawai Berdasarkan Umur', '2019-10-14 09:12:22'),
(28, 6, 'a950e953-06b4-4eef-9def-6752d1fde244', 'Jumlah Pegawai Berdasarkan Unit Kerja', '2019-10-14 09:13:23'),
(29, 6, '9c9d7b54-2e65-4b57-ba8e-8fa80afb2ff8', 'Jumlah Pegawai Struktural/Fungsional Berdasarkan Eselon', '2019-10-14 09:13:54'),
(30, 6, '5c04d17b-de17-47ac-911e-68e3f7be0928', 'Jumlah Pegawai Struktural/Fungsional Berdasarkan Gender', '2019-10-14 09:14:53'),
(31, 6, '98d94a45-c773-43bd-9993-33223ec2bcaa', 'Jumlah Pegawai Struktural/Fungsional Berdasarkan Golongan', '2019-10-14 09:15:39'),
(32, 6, '246220c1-ae09-4f2e-9331-de098a655d03', 'Jumlah Pegawai Struktural/Fungsional Berdasarkan Tingkat Pendidikan', '2019-10-14 09:16:10'),
(33, 6, '7f49da11-e296-4ee4-a040-705fcb36f6e4', 'Jumlah Pegawai Struktural/Fungsional Berdasarkan Tingkat Pendidikan dan Gender', '2019-10-14 09:16:40'),
(34, 6, '2001fcbe-6d3d-40c0-b72a-907c5bb22c57', 'Jumlah Pegawai Struktural/Fungsional Berdasarkan Tingkat Pendidikan, Gender dan Umur', '2019-10-14 09:17:26'),
(35, 6, 'f899c44a-cc97-4a36-9d34-fd7a27a3a353', 'Jumlah Pegawai Struktural/Fungsional Berdasarkan Unit Kerja', '2019-10-14 09:17:58'),
(36, 4, '342c2b2f-7dbb-4eb1-b167-eeb14bea2c90', 'Dimensi Waktu', '2019-10-14 09:18:40'),
(37, 4, 'd738fdd9-c041-429f-a228-307e6d7fe6cd', 'Dimensi Waktu Berdasarkan Jenis Pajak', '2019-10-14 09:19:11'),
(38, 4, 'faaf58ca-46fd-4464-ba34-8f557b7c546a', 'Dimensi Waktu Berdasarkan Wilayah', '2019-10-14 09:19:38'),
(39, 4, 'f7ea0078-fe11-4753-a262-3ef1bdbc8a64', 'Jumlah Pajak Berdasarkan Jenis Pajak dan Wilayah', '2019-10-14 09:20:10'),
(40, 4, 'caef8214-4f01-45f5-b108-3bbec624079c', 'Jumlah Pajak Berdasarkan Waktu, Jenis Pajak dan Wilayah', '2019-10-14 09:21:28'),
(41, 4, 'b3256a55-0c92-4c9c-bbde-cb0fc68e4d0c', 'Jumlah Pendapatan berdasarkan Wilayah', '2019-10-14 09:22:04'),
(42, 4, '76b8d942-d70b-4149-afe9-0e47cb097ded', 'Jumlah Pendapatan Sudah Terbayar', '2019-10-14 09:23:11'),
(43, 4, '2a2a8557-889d-40da-9d3f-c1eed0603767', 'Jumlah Pendapatan Sudah Terbayar dan Belum Terbayar', '2019-10-14 09:23:43'),
(44, 4, 'dc95947c-784d-4f05-bf5f-edb39bcb834d', 'Jumlah Wajib Pajak Yang Harus Dibayar Per Kecamatan', '2019-10-14 09:24:19'),
(45, 4, 'c8ac25d4-12e0-4bfd-a8b9-6f9dc3588c83', 'Jumlah Wajib Pajak Yang Harus Dibayar Per Periode Waktu', '2019-10-14 09:24:47'),
(46, 3, '5f8698c3-1a4c-44de-aac2-fc52e46669ca', 'Rekapitulasi Tenaga Keperawatan', '2019-10-14 09:25:15'),
(47, 4, 'a9e07a0c-23b3-437f-a0fa-ea83552f84c1', 'Realisasi Per Jenis Pajak', '2019-10-14 09:25:51'),
(48, 1, '0f424eb3-aa97-47c6-90bd-24a749f22ee4', 'Rekapitulasi Pendidikan Guru SD & SMP', '2019-10-14 09:26:21'),
(49, 1, '709a94b1-44c7-4ffb-9b4f-1ad582376e5a', 'Rekapitulasi Jumlah Siswa SD & SMP Berdasarkan Agama', '2019-10-14 09:27:27'),
(50, 8, 'b7827e83-738b-4580-8f55-a130144a8fad', 'Rekapitulasi Anggaran SIMPOK', '2019-10-14 09:28:45'),
(51, 8, '7d9995bb-284c-4c1d-8e37-1307ae84506e', 'Realisasi Anggaran Per OPD', '2019-10-14 09:29:22'),
(52, 4, '2acb95a8-d5ce-4849-a811-013c787ce908', 'Rekapitulasi Total Anggaran dan Realisasi SIMDA', '2019-10-14 09:29:50'),
(53, 6, '9ab1b682-1df1-441f-b5d3-701232324678', 'Jumlah Pegawai Berdasrkan Agama dan Golongan Darah', '2019-10-14 09:30:30'),
(63, 1, 'qweqwe', 'qwqwe', '2019-10-22 04:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sektor`
--

CREATE TABLE `tb_sektor` (
  `idSektor` int(11) NOT NULL,
  `namaSektor` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktuDibuat` datetime NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_sektor`
--

INSERT INTO `tb_sektor` (`idSektor`, `namaSektor`, `waktuDibuat`, `icon`, `color`) VALUES
(1, 'Sektor Pendidikan', '2019-10-25 00:00:00', 'school', '#4caf50'),
(2, 'Sektor Perizinan', '2019-10-26 00:00:00', 'verified_user', '#ff9800'),
(3, 'Sektor Kesehatan', '2019-10-11 00:00:00', 'favorite_border', '#2196f3'),
(4, 'Sektor Keuangan', '2019-10-11 00:00:00', 'attach_money', '#f44336'),
(5, 'Sektor Perencanaan', '2019-10-11 00:00:00', 'book', '#9c27b0'),
(6, 'Sektor Kepegawaian', '2019-10-11 00:00:00', 'account_box', '#e91e63'),
(7, 'Sektor Kependudukan', '2019-10-11 00:00:00', 'child_friendly', '#ffeb3b'),
(8, 'Sektor Pembangunan', '2019-10-11 00:00:00', 'nature_people', '#cddc39'),
(9, 'Administrator', '2019-10-21 16:01:49', 'android', '#424242');

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
(16, 99, 'Super Administrator Sistem', 'superadmin@cc.magelangkota.go.id', 'e807f1fcf82d132f9bb018ca6738a19f', '2019-10-14 09:34:59'),
(17, 2, 'mimin', 'mimin@cc.magelangkota.go.id', 'e807f1fcf82d132f9bb018ca6738a19f', '2019-10-14 09:36:58');

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
  ADD UNIQUE KEY `idGrafik_2` (`idGrafik`),
  ADD KEY `idGrafik` (`idGrafik`);

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
  MODIFY `idBidang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tb_grafik`
--
ALTER TABLE `tb_grafik`
  MODIFY `idGrafik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tb_sektor`
--
ALTER TABLE `tb_sektor`
  MODIFY `idSektor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `idUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detailbidang`
--
ALTER TABLE `tb_detailbidang`
  ADD CONSTRAINT `tb_detailbidang_ibfk_1` FOREIGN KEY (`idGrafik`) REFERENCES `tb_grafik` (`idGrafik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
