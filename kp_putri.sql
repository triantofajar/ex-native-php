-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2017 at 08:37 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_putri`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `no` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `rincian` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`no`, `judul`, `nama`, `rincian`, `gambar`) VALUES
(8, 'kamar', 'fasfnjsan', 'asjn sjadnjasdsajdas', 'uploads/hotel2.jpg'),
(9, 'sadjsadj', 'dhasjdhaj', 'ajsdnsjadn', 'uploads/hotel.jpg'),
(6, 'hotel 2', 'hotel queen 2', 'knknknkknknkn', 'hotelmalaysia3.jpg'),
(10, 'hotel', 'hotel kaisar', 'km,;;', 'hotelmalaysia2.jpg'),
(11, 'dkasdmk', 'dasnjn', 'saknakcak', 'uploads/malang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `no` int(11) NOT NULL,
  `daerah` varchar(50) NOT NULL,
  `nama_hotel` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`no`, `daerah`, `nama_hotel`, `tarif`, `gambar`) VALUES
(2, 'jakarta ', 'horison ', 500000, 'hotel2.jpg'),
(27, '', '', 0, 'uploads/lombok1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `no` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `durasi` varchar(25) NOT NULL,
  `harga` int(10) NOT NULL,
  `min_pemesanan` varchar(10) NOT NULL,
  `masa_berlaku` varchar(20) NOT NULL,
  `sistem_pembayaran` varchar(100) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`no`, `kategori`, `durasi`, `harga`, `min_pemesanan`, `masa_berlaku`, `sistem_pembayaran`, `gambar`) VALUES
(1, 'paket wisata garut', '3 hari 2 malam', 1500000, '5 pax', '23 des 2016', 'dp 25% sebelum keberangkatan', 'uploads/rajaampat2.jpg'),
(2, 'paket wisata belitung', '4 hari 3 malam', 13500000, '19 pax', '23 des 2016', 'dp 25% sebelum keberangkatan', 'uploads/malang1.jpg'),
(3, 'paket wisata lombok', '2 hari 1 malam', 1000000, '2 pax', '2 maret 2017', 'dp 25% sebelum keberangkatan', 'uploads/garut1.jpg'),
(6, 'paket wisata semarang', '2 hari 1 malam', 1200000, '2 pax', '23 desember 2019', 'dp 25% sebelum keberangkatan', 'uploads/bali2.jpg'),
(7, 'paket pulau tidung', '2 hari 2 malam', 100000, '5', '2 April 2012', '20 % dp ', 'uploads/lombok2.jpg'),
(8, 'paket pulau tidung 2', '2 hari 2 malam', 130000, '5', '2 April 2012', '20 % dp ', 'uploads/hotel2.jpg'),
(9, 'Wisata Ziarah Wali Songo', '2 hari 2 malam', 130000, '5', '23 desember 2019', '20 % dp ', 'uploads/rajaampat1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(20) NOT NULL,
  `nik` int(30) NOT NULL,
  `total` int(30) NOT NULL,
  `bayar` int(30) NOT NULL,
  `kembali` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `nik`, `total`, `bayar`, `kembali`) VALUES
(1, 0, 17500000, 30000000, 12500000),
(2, 2133988, 17500000, 20000000, 2500000),
(3, 234, 1500000, 2000000, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(20) NOT NULL,
  `id_paket` int(20) NOT NULL,
  `nik` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `harga` int(40) NOT NULL,
  `konfirm` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_paket`, `nik`, `nama`, `tgl`, `kategori`, `harga`, `konfirm`) VALUES
(1, 1, 1234556, 'asdsdad', '0000-00-00', 'paket wisata garut', 0, 0),
(2, 1, 234, 'putri', '0000-00-00', 'paket wisata garut', 0, 0),
(3, 1, 234567, 'putri', '0000-00-00', 'paket wisata garut', 0, 0),
(4, 1, 2345, 'putri', '0000-00-00', 'paket wisata garut', 0, 0),
(5, 1, 234567, 'putri', '0000-00-00', 'paket wisata garut', 0, 0),
(6, 1, 121219934, 'fajar', '0000-00-00', 'paket wisata garut', 0, 0),
(7, 1, 32402, 'trianto', '0000-00-00', 'paket wisata garut', 0, 0),
(8, 1, 2147483647, 'bi', '0000-00-00', 'paket wisata garut', 0, 0),
(9, 1, 4930940, 'fajar', '0000-00-00', 'paket wisata garut', 0, 0),
(10, 6, 23456473, 'novi', '0000-00-00', 'paket wisata semarang', 0, 0),
(11, 1, 797979, 'fajar3', '0000-00-00', 'paket wisata garut', 0, 0),
(12, 0, 1, '2133988', '0000-00-00', '1/12/2018', 0, 0),
(13, 0, 2, '2133988', '0000-00-00', '3/3/2017', 0, 0),
(14, 1, 2133988, 'fajar', '0000-00-00', 'paket wisata garut', 1500000, 0),
(15, 3, 2133988, 'fajar', '0000-00-00', 'paket wisata lombok', 1000000, 0),
(16, 1, 2133988, 'fajar', '0000-00-00', 'paket wisata garut', 1500000, 0),
(17, 2, 2133988, 'fajar', '0000-00-00', 'paket wisata belitung', 13500000, 0),
(18, 1, 234, 'fifah', '0000-00-00', 'paket wisata garut', 1500000, 0),
(19, 1, 234, 'fifah', '0000-00-00', 'paket wisata garut', 1500000, 0),
(20, 1, 234, 'fifah', '0000-00-00', 'paket wisata garut', 1500000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_klien` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik`, `username`, `password`, `nama_klien`, `alamat`, `hak_akses`) VALUES
(1, 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'gtr', 'bintara jaya', 'admin'),
(2, 0, 'ani', '330701e54f1bf47876c4fc6b649aab0d', 'rini agusti', 'bekasi barat', 'user'),
(7, 0, 'budi', '456b39e6cf4fdc9bda6b84b0a0b557dd', 'budiman', 'bintara jaya', 'user'),
(8, 0, '1234556', 'putri', '827ccb0eea8a706c4c34a16891f84e7b', 'putri', 'bintara'),
(9, 2334333, '231414', 'fajar', '827ccb0eea8a706c4c34a16891f84e7b', 'putri', 'bintara'),
(10, 0, '33344333', 'fajar', '827ccb0eea8a706c4c34a16891f84e7b', 'putri', 'bintara'),
(11, 23141, '', 'ddsda', 'e10adc3949ba59abbe56e057f20f883e', 'putri', 'bintara'),
(12, 2233444, '', 'putri', 'e10adc3949ba59abbe56e057f20f883e', 'putri', 'bintara'),
(13, 0, '2345671', 'novi', '81dc9bdb52d04dc20036dbd8313ed055', 'putri', 'bintara'),
(14, 2345671, 'novi', '827ccb0eea8a706c4c34a16891f84e7b', 'putri', 'bintara', ''),
(15, 2345675, 'ghgh', '960d4525bf273a61960241508fd8dc90', 'putri', 'bintara', ''),
(16, 64764, 'yyy', '4093fed663717c843bea100d17fb67c8', 'putri', 'bintara', 'user'),
(17, 1234674, 'putrihdyn', '4093fed663717c843bea100d17fb67c8', 'putri', 'bintara', 'user'),
(18, 2133988, 'fajar', '24bc50d85ad8fa9cda686145cf1f8aca', 'fajar', 'duren tiga', 'user'),
(19, 2019219, 'caker', '488e48c649238538ab1bcbc761954c55', 'iwan', 'dsjadjak', 'user'),
(20, 234, 'fifah', '66c0261a4485e11b2a123d86314b5747', 'fifah', 'bintara', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
