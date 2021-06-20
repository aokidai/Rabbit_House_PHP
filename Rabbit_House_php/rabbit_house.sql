-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 01:48 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rabbit_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblhoadon`
--

CREATE TABLE `tblhoadon` (
  `iHhoadon` int(11) NOT NULL,
  `idKhachhang` int(11) NOT NULL,
  `idMon` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhoadon`
--

INSERT INTO `tblhoadon` (`iHhoadon`, `idKhachhang`, `idMon`, `soLuong`) VALUES
(1, 2, 1, 3),
(2, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblkhachhang`
--

CREATE TABLE `tblkhachhang` (
  `idKhachhang` int(11) NOT NULL,
  `tenKH` text NOT NULL,
  `SDT` text DEFAULT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblkhachhang`
--

INSERT INTO `tblkhachhang` (`idKhachhang`, `tenKH`, `SDT`, `username`, `password`) VALUES
(1, 'Sakura', '0917186537', 'sakura', '1111'),
(2, 'Shizuku', '0123456789', 'shizuku', '1111'),
(5, 'Kawasaki Sakura', '4547645875', 'Sunny_Sakura', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `tblloai`
--

CREATE TABLE `tblloai` (
  `idLoai` int(11) NOT NULL,
  `tenLoai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblloai`
--

INSERT INTO `tblloai` (`idLoai`, `tenLoai`) VALUES
(1, 'Cafe'),
(2, 'Ăn vặt'),
(3, 'Nước ngọt');

-- --------------------------------------------------------

--
-- Table structure for table `tblmon`
--

CREATE TABLE `tblmon` (
  `idMon` int(11) NOT NULL,
  `tenMon` text NOT NULL,
  `gia` double NOT NULL,
  `idLoai` int(11) NOT NULL,
  `hinhAnh` text DEFAULT NULL,
  `moTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmon`
--

INSERT INTO `tblmon` (`idMon`, `tenMon`, `gia`, `idLoai`, `hinhAnh`, `moTa`) VALUES
(2, 'Mira', 22000, 2, 'IMG_20200613_144417.jpg', ''),
(3, 'Coca', 10000, 3, 'coca.jpg', NULL),
(6, 'Kawasaki Sakura', 100000000000, 3, 'c2_main_a2_pc.png', ''),
(7, 'Black Cafe', 10000, 1, 'unnamed.jpg', ''),
(8, 'Kotono', 100000000000, 2, 'c1_main_a2_pc.png', ''),
(9, 'shizuku', 100000000000, 1, 'E2KV2GVVUAgHh2G.jpg', ''),
(10, 'fđfd', 10000, 1, 'c2_img.jpg', 'dtgctyh');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id_user` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '1111'),
(2, 'sunny_sakura', '1111'),
(5, 'kawasaki', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblhoadon`
--
ALTER TABLE `tblhoadon`
  ADD PRIMARY KEY (`iHhoadon`);

--
-- Indexes for table `tblkhachhang`
--
ALTER TABLE `tblkhachhang`
  ADD PRIMARY KEY (`idKhachhang`);

--
-- Indexes for table `tblloai`
--
ALTER TABLE `tblloai`
  ADD PRIMARY KEY (`idLoai`);

--
-- Indexes for table `tblmon`
--
ALTER TABLE `tblmon`
  ADD PRIMARY KEY (`idMon`),
  ADD UNIQUE KEY `hinhAnh` (`idMon`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblhoadon`
--
ALTER TABLE `tblhoadon`
  MODIFY `iHhoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblkhachhang`
--
ALTER TABLE `tblkhachhang`
  MODIFY `idKhachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblloai`
--
ALTER TABLE `tblloai`
  MODIFY `idLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblmon`
--
ALTER TABLE `tblmon`
  MODIFY `idMon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
