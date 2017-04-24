-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Apr 2017 pada 23.15
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakerin-2.0`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(40) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AVG_ROW_LENGTH=8192 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `asal`, `status`) VALUES
(6, '11692', 'Radio Bullet M5', 'Gudang Batam', 1),
(7, '14103', 'Radio Bullet M5', 'Gudang Batam', 1),
(9, '11103', 'Radio Bullet M5', 'Gudang Batam', 1),
(10, '11696', 'Radio Bullet M5', 'Gudang Batam', 1),
(11, '11016', 'Radio Bullet M5', 'Gudang Batam', 1),
(12, '14107', 'Radio Bullet M5', 'Gudang Batam', 1),
(13, '11016', 'Radio Bullet M5', 'Gudang Batam', 1),
(14, '17254', 'Radio Bullet M5', 'Gudang Batam', 1),
(15, '18902', 'Radio Bullet M5', 'Gudang Batam', 1),
(16, '18128', 'Acces Point', 'Gudang Batam', 1),
(17, '18115', 'Acces Point', 'Gudang Batam', 1),
(18, '18125', 'Acces Point', 'Gudang Batam', 1),
(20, '23216', 'Acces Point', 'Gudang Batam', 1),
(21, '23222', 'Acces Point', 'Gudang Batam', 1),
(22, '23219', 'Acces Point', 'Gudang Batam', 1),
(23, '23220', 'Acces Point', 'Gudang Batam', 1),
(24, '23224', 'Acces Point', 'Gudang Batam', 1),
(25, '23225', 'Acces Point', 'Gudang Batam', 1),
(26, '19746', 'Antena Sectoral', 'Gudang Batam', 1),
(27, '14000', 'Antena Sectoral', 'Gudang Batam', 1),
(28, '19747', 'Antena Sectoral', 'Gudang Batam', 1),
(29, '11567', 'Router Microtik', 'Gudang Batam', 1),
(30, '14112', 'Router Microtik', 'Gudang Batam', 1),
(31, '10601', 'Router Microtik', 'Gudang Batam', 1),
(32, '16972', 'UPS', 'Gudang Batam', 1),
(33, '16970', 'UPS', 'Gudang Batam', 1),
(34, '10546', 'UPS', 'Gudang Batam', 1),
(35, '16973', 'UPS', 'Gudang Batam', 1),
(36, '15086', 'Switch Besar', 'Gudang Batam', 1),
(37, '9977', 'Switch Besar', 'Gudang Batam', 1),
(38, '12905', 'Switch Besar', 'Gudang Batam', 1),
(39, '4958', 'Switch Kecil', 'Gudang Batam', 1),
(40, '177719', 'Unifi', 'Gudang Batam', 1),
(41, '177713', 'Unifi', 'Gudang Batam', 1),
(42, '15547', 'Unifi', 'Gudang Batam', 1),
(43, '13047', 'Antena Grid', 'Gudang Batam', 1),
(44, '13055', 'Antena Grid', 'Gudang Batam', 1),
(45, '11020', 'Antena Grid', 'Gudang Batam', 1),
(46, '13053', 'Antena Grid', 'Gudang Batam', 1),
(47, '15107', 'Antena Grid', 'Gudang Batam', 1),
(48, '8702', 'Antena Grid', 'Gudang Batam', 1),
(49, '13056', 'Antena Grid', 'Gudang Batam', 1),
(50, '17308', 'Antena Grid', 'Gudang Batam', 1),
(51, '17309', 'Antena Grid', 'Gudang Batam', 1),
(52, '17310', 'Antena Grid', 'Gudang Batam', 1),
(53, '17311', 'Antena Grid', 'Gudang Batam', 1),
(54, '11028', 'Polarisasi', 'Gudang Batam', 1),
(56, '15113', 'Polarisasi', 'Gudang Batam', 1),
(57, '17346', 'Polarisasi', 'Gudang Batam', 1),
(58, '17345', 'Polarisasi', 'Gudang Batam', 1),
(59, '8679', 'Polarisasi', 'Gudang Batam', 1),
(60, '8520', 'Polarisasi', 'Gudang Batam', 1),
(61, '17344', 'Polarisasi', 'Gudang Batam', 1),
(62, '17342', 'Polarisasi', 'Gudang Batam', 1),
(63, '17343', 'Polarisasi', 'Gudang Batam', 1),
(64, '1514', 'Polarisasi', 'Gudang Batam', 1),
(65, '9977', 'TP-Link', 'Gudang Batam', 1),
(66, '15065', 'TP-Link', 'Gudang Batam', 1),
(67, '20224', 'TP-Link', 'Gudang Batam', 1),
(68, '20503', 'Box Panel', 'Gudang Batam', 1),
(69, '23601', 'Fiber Optic Spliching Blazer', 'Gudang Batam', 1),
(70, '23599', 'Fiber Optic Spliching Blazer', 'Gudang Batam', 1),
(71, '16226', 'Antena Rocket Dish', 'Gudang Batam', 1),
(72, '16629', 'Antena Rocket Dish', 'Gudang Batam', 1),
(73, '2283', 'Converter A', 'Gudang Batam', 1),
(74, '22188', 'Converter A', 'Gudang Batam', 1),
(75, '21202', 'Converter A', 'Gudang Batam', 1),
(76, '22311', 'Converter A', 'Gudang Batam', 1),
(77, '16587', 'Converter A', 'Gudang Batam', 1),
(78, '21183', 'Converter A', 'Gudang Batam', 1),
(79, '21189', 'Converter A', 'Gudang Batam', 1),
(80, '21103', 'Converter A', 'Gudang Batam', 1),
(81, '21209', 'Converter A', 'Gudang Batam', 1),
(82, '21184', 'Converter A', 'Gudang Batam', 1),
(83, '21111', 'Converter A', 'Gudang Batam', 1),
(84, '23000', 'Converter B', 'Gudang Batam', 1),
(85, '23001', 'Converter B', 'Gudang Batam', 1),
(86, '23014', 'Converter B', 'Gudang Batam', 1),
(87, '22396', 'Converter B', 'Gudang Batam', 1),
(88, '23012', 'Converter B', 'Gudang Batam', 1),
(89, '23004', 'Converter B', 'Gudang Batam', 1),
(90, '22999', 'Converter B', 'Gudang Batam', 1),
(91, '23016', 'Converter B', 'Gudang Batam', 1),
(92, '23002', 'Converter B', 'Gudang Batam', 1),
(94, '22381', 'Converter B', 'Gudang Batam', 1),
(95, '22998', 'Converter B', 'Gudang Batam', 1),
(96, '232003', 'Converter B', 'Gudang Batam', 1),
(97, '23223', 'Acces Point', 'Gudang Batam', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `role` varchar(25) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AVG_ROW_LENGTH=8192 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `name`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Admin', 'admin', 1, '2017-01-12 12:07:57', '2017-01-12 05:07:59'),
(2, 'user@gmail.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'User One', 'user', 1, '2017-01-12 04:14:51', '2017-01-11 21:23:26'),
(3, 'chrissesario.rian@gmail.com', '8731a46cac6daa25d37d0656babe01f7', 'Rian', 'admin', 1, '2017-03-23 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
