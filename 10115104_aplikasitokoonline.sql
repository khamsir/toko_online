-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jul 2018 pada 03.44
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
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `nama`, `alamat`, `no_telp`, `status`, `foto`) VALUES
(1, 'master', '4f26aeafdb2367620a393c973eddbe8f8b846ebd', 'Master', 'jl. tubagus ismail bawah oke', '089942382322', 'admin', ''),
(2, 'khamsir', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'UNIKOM 123', 'jd. dipatiukur bandung', '80999', 'pelanggan', '003unclecreepy_465_591_in'),
(3, 'unikom', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'UNIKOM 123', 'jd. dipatiukur bandung', '0899927321', 'pelanggan', 'UNIKOM Logo.jpg'),
(4, 'abdull', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'badull', 'jl jkt ', '9021894729479', 'pelanggan', '4a6451b2534bce654b899fb1a'),
(5, 'secret', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'james', 'secret', '0921876', 'pelanggan', '002gotosleepforever_465_5'),
(6, 'raafi', 'b6fcb9154185958f36469a78137e3051ba9ce181', 'Muhamad Raafi', 'jl. moch toha gang pa uca', '9999999999', 'pelanggan', '4a6451b2534bce654b899fb1a'),
(7, 'dadang', 'b6fcb9154185958f36469a78137e3051ba9ce181', 'dadangs', 'jl dipatiukur', '08994238232', 'pelanggan', '8b233b62b36f19684ed59d69f'),
(8, 'dadang2', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'dadang', 'jl. moch toha gang pa uca', '892187124', 'pelanggan', '33363806_608724492838066_'),
(9, 'jajangs', 'b6fcb9154185958f36469a78137e3051ba9ce181', 'james', 'jd. dipatiukur bandung', '9182762987', 'pelanggan', '33363806_608724492838066_'),
(10, 'masteroke', '4f26aeafdb2367620a393c973eddbe8f8b846ebd', 'master', 'akfdsh', '12323', 'pelanggan', '33674514_609951436048705_'),
(11, 'kadir', 'b6fcb9154185958f36469a78137e3051ba9ce181', 'uhmad', 'jd. dipatiukur bandung', '898800', 'pelanggan', 'apQ0zdE_460s.jpg'),
(12, 'odin', 'a12bf2c17c422acccb707fa811f07e743a9293d8', 'asdfsdaf', 'jaems', '98609', 'pelanggan', 'arah-mata-angin-wind-dire'),
(14, 'kuman', '9efbbff433808f3de2d8b3676dedb36b16caf502', 'kuman', 'kuman', '123123', 'pelanggan', 'arah-mata-angin-tengah.jp'),
(15, 'samad', '63a0cb7a53c83f2623f43f43f486ab4aaa1c1e6f', 'samad', 'samad', '889990', 'pelanggan', 'holy sheet.jpg.jpg'),
(16, 'ujang', '8b472fb6809c09b2a3174ad5ce952390d0006cc6', 'ujang asep', 'ujangeun', '8768789900', 'pelanggan', '8b233b62b36f19684ed59d69f'),
(17, 'bego', '139e669cab843e822b8b07f19bcb0456927fc366', 'bego', 'bego', '09876545678', 'pelanggan', 'arah-mata-angin-wind-direction.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` smallint(6) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` int(6) NOT NULL,
  `stok` tinyint(4) NOT NULL,
  `kategori` enum('kaos','long sleeve','kemeja','') NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `stok`, `kategori`, `foto`) VALUES
(2, 'Baju 1', 200000, 4, 'long sleeve', 'baju7.jpg'),
(3, 'kaos polos', 120000, 10, 'kemeja', 'baju9.jpg'),
(4, 'kaos marllo', 120000, 4, 'long sleeve', 'baju6.jpg'),
(5, 'ahmed', 13000, 4, 'kaos', 'baju4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` smallint(6) NOT NULL,
  `tgl_ditambah` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_akun` smallint(6) NOT NULL,
  `id_barang` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `tgl_ditambah`, `id_akun`, `id_barang`) VALUES
(14, '2018-07-28 17:00:00', 5, 2),
(15, '2018-07-28 17:00:00', 5, 2),
(16, '2018-07-28 17:00:00', 5, 2),
(17, '2018-07-29 17:00:00', 6, 2),
(18, '2018-07-29 17:00:00', 6, 3),
(19, '2018-07-29 17:00:00', 6, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` smallint(6) NOT NULL,
  `tgl_beli` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_dikirim` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jumlah` tinyint(4) NOT NULL,
  `total_harga` int(9) NOT NULL,
  `foto_bukti` varchar(25) NOT NULL,
  `status_transaksi` enum('belum dikirim','sudah dikirim') NOT NULL,
  `id_akun` smallint(6) NOT NULL,
  `id_barang` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
