-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 06:23 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `address_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `No` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Notelp` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`No`, `Nama`, `Email`, `Notelp`, `Alamat`, `Catatan`) VALUES
(1, 'Milan Naraya Estungkara', 'pmr3milan@gmail.com', '081364632432', 'Jl. Belitung no.8 Bandung, Jawa Barat', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`No`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
