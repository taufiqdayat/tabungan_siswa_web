-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Apr 2018 pada 17.32
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabungan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `password_admin` varchar(500) NOT NULL,
  `level` enum('author','petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'author');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nabung`
--

CREATE TABLE `nabung` (
  `id_nabung` int(100) NOT NULL,
  `nis_siswa` int(100) NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `keterangan` enum('setor','tarik') NOT NULL,
  `nominal_nabung` int(100) NOT NULL,
  `tanggal_nabung` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nabung`
--

INSERT INTO `nabung` (`id_nabung`, `nis_siswa`, `petugas`, `keterangan`, `nominal_nabung`, `tanggal_nabung`) VALUES
(2, 1111, 'Taufiq', 'setor', 32000, '2018-04-19 17:08:32'),
(3, 1111, 'Taufiq', 'tarik', 2000, '2018-04-19 17:10:21'),
(4, 1111, 'Taufiq', 'setor', 10000, '2018-04-19 17:10:16'),
(5, 1122, 'Taufiq', 'setor', 10000, '2018-04-19 17:10:11'),
(6, 1111, 'Taufiq', 'setor', 15000, '2018-04-19 17:10:07'),
(8, 1111, 'Taufiq', 'tarik', 1000, '2018-04-19 17:10:01'),
(9, 1111, 'Taufiq', 'setor', 10000, '2018-04-19 17:09:54'),
(10, 1111, 'Taufiq', 'tarik', 1000, '2018-04-19 17:09:51'),
(11, 1111, 'Taufiq', 'tarik', 10000, '2018-04-19 17:09:45'),
(12, 1111, 'Taufiq', 'tarik', 40000, '2018-04-19 17:09:40'),
(15, 1111, 'Taufiq', 'tarik', 1000, '2018-04-19 17:09:35'),
(16, 1111, 'Taufiq', 'tarik', 1000, '2018-04-19 17:09:26'),
(17, 1135, 'Taufiq', 'setor', 10000, '2018-04-19 17:09:18'),
(18, 1135, 'Melli', 'setor', 10000, '2018-04-19 17:08:55'),
(19, 1135, 'Taufiq', 'setor', 12000, '2018-04-19 17:09:08'),
(20, 1135, 'Melli', 'tarik', 5000, '2018-04-19 17:13:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(20) NOT NULL,
  `nis_siswa` int(5) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `tgl_lahir_siswa` date NOT NULL,
  `jk_siswa` enum('L','P') NOT NULL,
  `pin_siswa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis_siswa`, `nama_siswa`, `tgl_lahir_siswa`, `jk_siswa`, `pin_siswa`) VALUES
(3, 1111, 'taufiq', '1999-06-30', 'L', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 1122, 'dayat', '1999-02-02', 'L', '3b712de48137572f3849aabd5666a4e3'),
(13, 1123, 'daffa', '1999-06-30', 'L', '2cfd4560539f887a5e420412b370b361'),
(14, 1135, 'bayok', '1999-06-01', 'L', 'fd2c5e4680d9a01dba3aada5ece22270');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `nabung`
--
ALTER TABLE `nabung`
  ADD PRIMARY KEY (`id_nabung`),
  ADD KEY `nabung_ibfk_1` (`nis_siswa`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis_siswa` (`nis_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nabung`
--
ALTER TABLE `nabung`
  MODIFY `id_nabung` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nabung`
--
ALTER TABLE `nabung`
  ADD CONSTRAINT `nabung_ibfk_1` FOREIGN KEY (`nis_siswa`) REFERENCES `siswa` (`nis_siswa`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
