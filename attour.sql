-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Apr 2019 pada 12.14
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attour`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_user`
--

CREATE TABLE IF NOT EXISTS `auth_user` (
`id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `level` varchar(6) NOT NULL,
  `no_nik` varchar(14) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `auth_user`
--

INSERT INTO `auth_user` (`id_user`, `username`, `password`, `level`, `no_nik`, `nama_lengkap`, `jenis_kelamin`, `no_hp`, `email`) VALUES
(1, 'admin', 'admin1234', 'admin', '', '', '', '', '0'),
(12, 'zaqijr7', 'zaqijr7', 'user', '08081001000808', 'Muhammad Zaqi A', 'Laki-laki', '085871222987', 'zaqijr7@gmail.com'),
(13, 'ibam123', 'ibam123', 'user', '08081001454808', 'Hibram Ahmad', 'Laki-laki', '085871222987', 'ibam123@gmail.com'),
(14, 'jenal24', 'kunpayakun24', 'user', '55566664433222', 'jenal arifin', 'Laki-laki', '089652535739', 'jenalarifin211@gmail.com'),
(15, 'agen', 'agen123', 'agen', '', '', '', '', ''),
(16, 'yuli siti jamilah', 'yulisiti18', 'user', '62543789657789', 'yuli sii jamilah', 'Perempuan', '085106810945', 'yulisitijamilah@gmail.com'),
(17, 'ristafatimahazzahra', 'rista', 'user', '123456789', 'rista fatimah azzahra', 'Perempuan', '085763439838', 'ristafatimah04@gmail.com'),
(18, 'siti sumi kulsum', 'november', 'user', '675430095319', 'siti sumi kulsum', 'Perempuan', '08344495645', 'sitisumi@gmail.com'),
(19, 'Fitri kurniasih31', 'fitri', 'user', '0123456798', 'Fitri kurniasih', 'Perempuan', '0895369860577', 'Fitrikurniasih31@gmail.co'),
(20, 'diyana dianti', 'rabu', 'user', '0987654321', 'diyana dianti', 'Perempuan', '089646986669', 'diyanadianti@gmail.com'),
(21, 'diyana dianti', 'diyana', 'user', '0987654321', 'diyana dianti', 'Perempuan', '089646986669', 'diyanadianti@gmail.com'),
(22, 'Arifin24', 'admin', 'user', '0987654321', 'Arifin', 'Laki-laki', '089652535739', 'arifin211211@gmal.com'),
(23, 'qwertyuiuytr', 'qwertyuiop', 'user', '1234567', '12345', 'Laki-laki', '345678', 'qwety@gmail.com'),
(24, 'jenal', '12345123', 'user', '1234567', 'jenal', 'Laki-laki', '0987654321', 'jenal@gmail.com'),
(25, 'jamal123', 'jamal', 'user', '08888897997977', 'jamaludin', 'Laki-laki', '085872889', 'jamal123@gmail.com'),
(26, 'liska123', '12345', 'user', '0987788', 'liska almadii', 'Perempuan', '0897686', 'liska23@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE IF NOT EXISTS `rute` (
`id_rute` int(30) NOT NULL,
  `maskapai` varchar(20) NOT NULL,
  `negara_tujuan` varchar(20) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_pulang` date NOT NULL,
  `harga` varchar(20) NOT NULL,
  `kelas` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id_rute`, `maskapai`, `negara_tujuan`, `tanggal_berangkat`, `tanggal_pulang`, `harga`, `kelas`) VALUES
(1, 'Garuda Indonesia', 'Thailand', '2019-03-22', '2019-03-28', '1002030', 'ekonomi'),
(6, 'Aviastar', 'Filiphine', '2019-04-06', '2019-04-20', '1134500', 'bussines'),
(8, 'Lion Air', 'Malaysia', '2019-04-02', '2019-04-06', '987000', 'ekonomi'),
(11, 'Garuda Indonesia', 'Kamboja', '2019-03-30', '2019-04-02', '1000000', 'ekonomi'),
(12, 'Garuda Indonesia', 'Laos', '2019-04-01', '2019-04-03', '1200000', 'ekonomi'),
(13, 'Lion Air', 'Malaysia', '2019-04-01', '2019-04-04', '180000', 'ekonomi'),
(14, 'Aviastar', 'Malaysia', '2019-04-06', '2019-04-08', '1500000', 'ekonomi'),
(15, 'Lion Air', 'Malaysia', '2019-04-07', '2019-04-10', '1500000', 'ekonomi'),
(16, 'Batik Air', 'Malaysia', '2019-04-06', '2019-04-08', '1500000', 'ekonomi'),
(17, 'Aviastar', 'Thailand', '2019-04-06', '2019-04-08', '1400000', 'ekonomi'),
(18, 'Garuda Indonesia', 'Thailand', '2019-04-06', '2019-04-08', '1400000', 'ekonomi'),
(19, 'Citilink', 'Singapore', '2019-04-03', '2019-04-17', '700000', 'ekonomi'),
(21, 'Susi Air', 'Filiphine', '2019-05-03', '2019-04-30', '432123', 'bussines'),
(22, 'Lion Air', 'Kamboja', '2019-04-05', '2019-04-19', '1200000', 'ekonomi'),
(23, 'Susi Air', 'Timor Leste', '2019-04-19', '2019-05-04', '980000', 'ekonomi'),
(24, 'Batik Air', 'Brunei', '2019-04-12', '2019-04-17', '1200000', 'bussines');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tiket`
--

CREATE TABLE IF NOT EXISTS `tb_tiket` (
`id_tiket` int(20) NOT NULL,
  `id_transaksi` int(30) NOT NULL,
  `kode_transaksi` varchar(30) NOT NULL,
  `kode_tiket` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tiket`
--

INSERT INTO `tb_tiket` (`id_tiket`, `id_transaksi`, `kode_transaksi`, `kode_tiket`) VALUES
(1, 0, '', 'KTKT1554117827'),
(2, 0, '', 'KTKT1554124828');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(20) NOT NULL,
  `id_rute` int(30) NOT NULL,
  `id_user` int(30) NOT NULL,
  `kode_transaksi` varchar(30) NOT NULL,
  `kode_tiket` varchar(30) NOT NULL,
  `jumlah_tiket` int(3) NOT NULL,
  `jumlah_bayar` int(30) NOT NULL,
  `status_bayar` varchar(3) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_rute`, `id_user`, `kode_transaksi`, `kode_tiket`, `jumlah_tiket`, `jumlah_bayar`, `status_bayar`) VALUES
(28, 16, 12, 'JNTGW1554165402', 'Q5R1I7G3B4L0J8D', 3, 4500000, 'yes'),
(29, 6, 13, 'ZSYQA1554165751', 'P0C3V9Q2G6T8Z7U', 2, 2269000, 'yes'),
(30, 12, 12, 'VIZBO1554305309', 'U9R0D3B5Y2W1V7T', 1, 1200000, 'no'),
(31, 15, 12, 'IRZCK1554305566', 'T2U1V0C9M8S6I3Q', 1, 1500000, 'no'),
(32, 15, 12, 'TPXZG1554305584', 'K2A0L6Z8M3B4T1E', 1, 1500000, 'no'),
(33, 15, 12, 'FDGPN1554368636', 'Q8L5Z9P7S2B0F4T', 1, 1500000, 'no'),
(34, 16, 14, 'KXDLE1554438359', 'N5W2A4L3U1V9K6H', 1, 1500000, 'yes'),
(35, 19, 16, 'VEZTY1554439020', 'R6B2X0T9S4K7V8F', 1, 700000, 'yes'),
(36, 18, 17, 'COPHS1554439538', 'N6A2T5H4Q3M8C9I', 10, 14000000, 'no'),
(37, 19, 18, 'EHANU1554439753', 'Q3J7W1N6F0Z2E4R', 2, 1400000, 'no'),
(38, 15, 14, 'NHADI1554445099', 'M5L1F8D4K2T3N9J', 9, 13500000, 'yes'),
(39, 18, 19, 'FIZWM1554446095', 'N9B2O4W1T0S7F8Q', 2, 2800000, 'yes'),
(40, 1, 12, 'JUDKH1554467073', 'F9T6Q0K1Z5B4J8S', 6, 6012180, 'yes'),
(41, 18, 24, 'BRKLS1554480611', 'X4H9C8L5E7Y0B1P', 9, 12600000, 'yes'),
(42, 16, 25, 'IEWQY1554525751', 'M4N2B0Q7A5P1I8U', 2, 3000000, 'yes'),
(43, 16, 26, 'PLHIA1554527755', 'O5Y0D7I8J9T4P1V', 1, 1500000, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
 ADD PRIMARY KEY (`id_rute`);

--
-- Indexes for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
 ADD PRIMARY KEY (`id_tiket`), ADD KEY `id_tiket` (`id_tiket`), ADD KEY `kode_transaksi` (`kode_transaksi`), ADD KEY `id_transaksi` (`id_transaksi`), ADD KEY `id_transaksi_2` (`id_transaksi`), ADD KEY `id_tiket_2` (`id_tiket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `id_rute` (`id_rute`), ADD KEY `id_user` (`id_user`), ADD KEY `id_transaksi` (`id_transaksi`), ADD KEY `kode_transaksi` (`kode_transaksi`), ADD KEY `id_transaksi_2` (`id_transaksi`), ADD KEY `id_transaksi_3` (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
MODIFY `id_rute` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
MODIFY `id_tiket` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`) ON UPDATE CASCADE,
ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `auth_user` (`id_user`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
