-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jul 2018 pada 09.46
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10115104_aplikasitokoonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` smallint(6) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `status` enum('admin','pelanggan','','') NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `nama`, `alamat`, `no_telp`, `status`, `foto`) VALUES
(1, 'master', '4f26aeafdb2367620a393c973eddbe8f8b846ebd', 'Master', 'jl. tubagus ismail bawah oke', '089942382322', 'admin', ''),
(2, 'khamsir', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'UNIKOM 123', 'jd. dipatiukur bandung', '80999', 'pelanggan', '003unclecreepy_465_591_in'),
(3, 'unikom', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'UNIKOM 123', 'jd. dipatiukur bandung', '0899927321', 'pelanggan', 'UNIKOM Logo.jpg'),
(4, 'abdull', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'badull', 'jl jkt ', '9021894729479', 'pelanggan', '4a6451b2534bce654b899fb1a'),
(5, 'secret', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'james', 'secret', '0921876', 'pelanggan', '002gotosleepforever_465_5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
