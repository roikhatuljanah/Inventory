-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2023 pada 09.49
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprojectci0013`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdsn0013`
--

CREATE TABLE `tbdsn0013` (
  `dsnnim` varchar(11) NOT NULL,
  `dsnnama` varchar(100) NOT NULL,
  `dsntempatlahir` varchar(50) NOT NULL,
  `dsntanggallahir` date NOT NULL,
  `dsnjeniskelamin` char(1) NOT NULL,
  `dsnalamat` varchar(100) NOT NULL,
  `dsntelp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbdsn0013`
--

INSERT INTO `tbdsn0013` (`dsnnim`, `dsnnama`, `dsntempatlahir`, `dsntanggallahir`, `dsnjeniskelamin`, `dsnalamat`, `dsntelp`) VALUES
('00.01.12', 'Widaya', 'Pemalang', '1985-06-01', 'L', 'Wonokerto', '08112222333'),
('00.01.15', 'Tamrin', 'Sukabumi', '1988-05-07', 'L', 'kota sukabumi', '082233665544');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmhs0013`
--

CREATE TABLE `tbmhs0013` (
  `mhsnim` char(11) NOT NULL,
  `mhsnama` varchar(100) NOT NULL,
  `mhstempatlahir` varchar(50) NOT NULL,
  `mhstanggallahir` date NOT NULL,
  `mhsjeniskelamin` char(1) NOT NULL,
  `mhsalamat` varchar(100) NOT NULL,
  `mhstelp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbmhs0013`
--

INSERT INTO `tbmhs0013` (`mhsnim`, `mhsnama`, `mhstempatlahir`, `mhstanggallahir`, `mhsjeniskelamin`, `mhsalamat`, `mhstelp`) VALUES
('22.230.0011', 'sarif', 'batang', '2003-05-01', 'L', 'kota batang', '08544422666'),
('22.230.0013', 'septian', 'pemalang', '2002-06-09', 'L', 'kota pemalang', '085771542867'),
('22.230.0022', 'Nur', 'Semarang', '2001-02-05', 'L', 'Semarang', '0854446669999'),
('22.230.0121', 'amman', 'pekalongan', '2003-06-30', 'P', 'kab pekalongan', '085711685343'),
('22.230.0554', 'Ilham', 'Tegal', '2002-07-03', 'L', 'Kota Tegal', '08779966333');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbdsn0013`
--
ALTER TABLE `tbdsn0013`
  ADD PRIMARY KEY (`dsnnim`);

--
-- Indeks untuk tabel `tbmhs0013`
--
ALTER TABLE `tbmhs0013`
  ADD PRIMARY KEY (`mhsnim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
