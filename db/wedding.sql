-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 05:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bayar`
--

CREATE TABLE `tb_bayar` (
  `id_bayar` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `gambarbukti` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'paket pernikahan'),
(2, 'Make up & Attire'),
(4, 'Decoration'),
(5, 'Photo & Video Shooting'),
(6, 'Entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_pesan` date NOT NULL,
  `status_pesanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(300) NOT NULL,
  `harga` double NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga`, `deskripsi`, `gambar`) VALUES
(4, 1, 'Paket Akad Nikah Hemat', 8000000, '- Rias dan Busana Pengantin Pria dan Wanita\r\n- Dekorasi :\r\na. Meja akad\r\nb. Kursi akad 6 Pcs\r\nc. Backdrop akad nikah\r\nd. 1 Meja Tamu\r\ne. 1 Buku Tamu\r\n- Dokumentasi\r\na. Foto Video Shooting\r\nb. 1 Album kolase Eksklusif Uk. 20 X 30, 10 Sheet ( 20 Hal )\r\nc. 1 Flashdisk Isi Foto Video Master dan Editing\r\nd. Video Klip 1 Menit Untuk di Upload ke Sosial Media (Instagram, Facebook, dll)', 'paket1.jpg'),
(5, 2, 'Wedding Package Make Up & Attire', 4000000, 'Package for Wedding Make Up with Attire for National Wedding\r\nServices:\r\n- Make Up with retouch\r\n- Hair/Hijab Do with retouch\r\n- Free make up trial 1x\r\n- Bride & Groom Attire for Akad (not included Adat accessories)\r\n- Bride & Groom Attire for Resepsi (not included Adat accessories)\r\n- 2 pax Attire for Parents (2 Moms & 2 Dads) \r\n- 4 pax Attire for Penerima Tamu\r\n\r\nAttire Details:\r\n- Bride: Kain, longtorso, manset, kebaya, kerudung (for Hijab), veil & slop akad.\r\n- Groom: stel beskap, slop akad, jas, celana, dasi. \r\n- Dads: National beskap & kain\r\n- Moms: kain, manset, kebaya & jilbab.', 'paket2.jpg'),
(6, 4, 'Rosepetal Backdrop Decoration & Lighting', 2000000, 'decoration, lighting, and flowers variation', 'paket3.jpg'),
(7, 5, 'Paket fotografer videoshooting pernikahan murah !!!', 5000000, '- Album Mini 5r Colase Digital (laminating) Rp 350 Ribu .\r\n- Album 10rs Laser print (laminating) Cover Kayu Rp 450 Ribu.\r\n- Album 10rs Colase Digital (laminating) Cover Kayu Rp 550 Ribu.\r\n- Album 10rs Colase Digital (laminating) Magazine Rp 800 Ribu', 'paket4.jpg'),
(8, 6, 'full entertainment musik', 6000000, 'full musik, singer, mc, and sound', 'paket5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `email`, `nama_lengkap`, `password`, `level`) VALUES
(2, 'admin@gmail.com', 'admin', 'admin', 'admin'),
(3, 'rizal@gmail.com', 'rizal hidayat', 'rizal', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
