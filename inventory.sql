-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Jul 2018 pada 15.00
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `binner`
--

CREATE TABLE `binner` (
  `id` int(11) NOT NULL,
  `scanner_upn` varchar(250) NOT NULL,
  `series` varchar(255) NOT NULL,
  `ref_upn` int(11) NOT NULL,
  `lot_no` varchar(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `rack` varchar(255) NOT NULL,
  `binner` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `binner`
--

INSERT INTO `binner` (`id`, `scanner_upn`, `series`, `ref_upn`, `lot_no`, `qty`, `rack`, `binner`, `tgl_input`) VALUES
(29, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(30, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(31, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(32, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(33, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(34, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(35, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(36, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(37, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(38, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(39, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(40, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(41, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(42, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07'),
(43, '01208845210394351721063010d6f2006x', 'VP-871-X', 2147483647, 'd6f2006x', 1, 'A-1-2-1', 'David', '2018-09-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `scanner_upn` varchar(255) NOT NULL,
  `series` varchar(255) NOT NULL,
  `ref_upn` varchar(255) NOT NULL,
  `lot_no` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL,
  `deliveryto` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `no_transfer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `delivery`
--

INSERT INTO `delivery` (`id`, `scanner_upn`, `series`, `ref_upn`, `lot_no`, `qty`, `admin`, `tgl_input`, `deliveryto`, `status`, `no_transfer`) VALUES
(1, '01208845210394351721063010d6f2006xxx', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'David', '0000-00-00', 'EMID', 'TERKIRIM', ''),
(2, '01208845210394351721063010d6f2006xxx', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'Admin', '2018-07-12', 'DATA', 'TERKIRIM', ''),
(3, '01208845210394351721063010d6f2006xxx', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'Admin', '2018-07-12', 'DATA', 'TERKIRIM', ''),
(4, '01208845210394351721063010d6f2006x', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'David', '2018-07-12', 'HAAAS', 'TERKIRIM', ''),
(5, '01208845210394351721063010d6f2006x', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'David', '2018-07-12', 'HAAAS', 'TERKIRIM', ''),
(6, '01208845210394351721063010d6f2006x', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'David', '2018-07-12', 'HAAAS', 'TERKIRIM', ''),
(7, '01208845210394351721063010d6f2006xxx', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'Daus', '2018-07-12', 'EMID', 'TERKIRIM', ''),
(8, '01208845210394351721063010d6f2006x', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'Admin', '2018-07-12', 'EMID', 'TERKIRIM', ''),
(9, '01208845210394351721063010d6f2006x', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'Admin', '2018-07-12', 'EMID', 'TERKIRIM', ''),
(10, '01208845210394351721063010d6f2006x', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'Admin', '2018-07-12', 'EMID', 'TERKIRIM', ''),
(11, '01208845210394351721063010d6f2006x', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'David', '2018-07-12', 'EMID', 'TERKIRIM', 'TRD1234'),
(12, '01208845210394351721063010d6f2006x', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'David', '2018-07-12', 'EMID', 'TERKIRIM', 'TRD1234'),
(13, '01208845210394351721063010d6f2006x', 'VP-871-X', '2147483647', 'd6f2006x', 1, 'David', '2018-07-12', 'EMID', 'TERKIRIM', 'TRD1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `picker`
--

CREATE TABLE `picker` (
  `id` int(11) NOT NULL,
  `series` varchar(255) NOT NULL,
  `scanner_upn` varchar(255) NOT NULL,
  `ref_upn` bigint(11) NOT NULL,
  `lot_no` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `rack` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `picker` varchar(255) DEFAULT NULL,
  `for` varchar(255) NOT NULL,
  `no_transfer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `picker`
--

INSERT INTO `picker` (`id`, `series`, `scanner_upn`, `ref_upn`, `lot_no`, `qty`, `rack`, `tgl_input`, `status`, `picker`, `for`, `no_transfer`) VALUES
(1, 'VP-871-X', '01208845210394351721063010d6f2006xxx', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', NULL, '', '0'),
(2, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', NULL, '', '0'),
(3, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', NULL, '', '0'),
(4, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', NULL, '', '0'),
(5, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', NULL, '', '0'),
(6, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', NULL, '', '0'),
(7, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', NULL, '', '0'),
(8, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', NULL, '', '0'),
(9, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', NULL, '', '0'),
(10, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', NULL, '', '0'),
(11, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-11', '2018-07-12', 'DONE', 'Admin', '', '0'),
(12, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', 'Admin', '', '0'),
(13, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', 'Daus', '', 'PKR1111'),
(14, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', 'Daus', '', 'PKR1111'),
(15, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', 'Daus', '', 'PKR1111'),
(16, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', 'Daus', '', 'PKR222'),
(17, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', 'Daus', '', 'PKR222'),
(18, 'VP-871-X', '01208845210394351721063010d6f2006x', 2147483647, 'd6f2006x', 1, 'A-1-2-1', '2018-07-12', 'DONE', 'Daus', '', 'PKR222');

-- --------------------------------------------------------

--
-- Struktur dari tabel `receiving`
--

CREATE TABLE `receiving` (
  `id` int(11) NOT NULL,
  `scanner_lot` varchar(250) NOT NULL,
  `series` varchar(250) NOT NULL,
  `ref_upn` bigint(11) NOT NULL,
  `lot_no` varchar(250) NOT NULL,
  `pickup_name` varchar(11) NOT NULL,
  `description` text NOT NULL,
  `tgl_masuk` date NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `receiving`
--

INSERT INTO `receiving` (`id`, `scanner_lot`, `series`, `ref_upn`, `lot_no`, `pickup_name`, `description`, `tgl_masuk`, `qty`, `status`) VALUES
(1, '01208845210394351721063010d6f2006xaw', 'VP-871-X', 20884521039435, 'd6f2006x', 'David', 'surgipro 11 monofilament polyproplyn 4-0 1,5 metric ', '0000-00-00', 30, ''),
(2, '01208845210394351721063010d6f2006x', 'VP-871-X', 20884521039435, 'd6f2006x', 'David', 'test ', '2018-06-07', 12, 'Done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binner`
--
ALTER TABLE `binner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picker`
--
ALTER TABLE `picker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiving`
--
ALTER TABLE `receiving`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binner`
--
ALTER TABLE `binner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `picker`
--
ALTER TABLE `picker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `receiving`
--
ALTER TABLE `receiving`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
