-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2019 pada 11.26
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.2.22

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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_10_09_004504_create_tb_user', 1),
(2, '2019_10_09_011135_create_tb_bidang', 2),
(3, '2019_10_09_011854_create_tb_sektor', 3),
(4, '2019_10_09_012146_create_tb_grafik', 4),
(5, '2019_10_09_020945_create_tb_detailbidang', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bidang`
--

CREATE TABLE `tb_bidang` (
  `idBidang` int(10) NOT NULL,
  `namaBidang` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktuDibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detailbidang`
--

CREATE TABLE `tb_detailbidang` (
  `idBidang` int(11) NOT NULL,
  `idGrafik` int(11) NOT NULL,
  `waktuDibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_grafik`
--

CREATE TABLE `tb_grafik` (
  `idGrafik` int(10) NOT NULL,
  `idSektor` int(11) NOT NULL,
  `metabaseId` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulGrafik` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktuDibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_grafik`
--

INSERT INTO `tb_grafik` (`idGrafik`, `idSektor`, `metabaseId`, `judulGrafik`, `waktuDibuat`) VALUES
(1, 1, '219c9384-fccf-4a1a-b630-5d0c6e612692', 'ewewewewe', '2019-10-11 00:00:00'),
(3, 2, '92db4953-839c-4c13-a7aa-d099d39e9361', '32323233', '2019-10-18 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sektor`
--

CREATE TABLE `tb_sektor` (
  `idSektor` int(11) NOT NULL,
  `namaSektor` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktuDibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_sektor`
--

INSERT INTO `tb_sektor` (`idSektor`, `namaSektor`, `waktuDibuat`) VALUES
(1, 'KESEHATAN', '2019-10-25 00:00:00'),
(2, 'PENDIDIKAN', '2019-10-26 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_bidang`
--
ALTER TABLE `tb_bidang`
  ADD PRIMARY KEY (`idBidang`);

--
-- Indeks untuk tabel `tb_detailbidang`
--
ALTER TABLE `tb_detailbidang`
  ADD KEY `idGrafik` (`idGrafik`),
  ADD KEY `idBidang` (`idBidang`);

--
-- Indeks untuk tabel `tb_grafik`
--
ALTER TABLE `tb_grafik`
  ADD PRIMARY KEY (`idGrafik`),
  ADD KEY `idSektor` (`idSektor`);

--
-- Indeks untuk tabel `tb_sektor`
--
ALTER TABLE `tb_sektor`
  ADD PRIMARY KEY (`idSektor`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `tb_users_emailuser_unique` (`emailUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_bidang`
--
ALTER TABLE `tb_bidang`
  MODIFY `idBidang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_grafik`
--
ALTER TABLE `tb_grafik`
  MODIFY `idGrafik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_sektor`
--
ALTER TABLE `tb_sektor`
  MODIFY `idSektor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `idUser` int(10) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detailbidang`
--
ALTER TABLE `tb_detailbidang`
  ADD CONSTRAINT `tb_detailbidang_ibfk_1` FOREIGN KEY (`idBidang`) REFERENCES `tb_bidang` (`idBidang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detailbidang_ibfk_2` FOREIGN KEY (`idGrafik`) REFERENCES `tb_grafik` (`idGrafik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_grafik`
--
ALTER TABLE `tb_grafik`
  ADD CONSTRAINT `tb_grafik_ibfk_1` FOREIGN KEY (`idSektor`) REFERENCES `tb_sektor` (`idSektor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
