-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 01:01 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotik`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `kode` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `dokter` enum('Jamilatul Aisyiah','Bambang Priyambodo','Bilqis Faridah','Arisa Yanuarima','Galih Gumelar S.K.P','Ria Alfina') NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `umur` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `obat` varchar(100) NOT NULL,
  `kunci` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`kode`, `nama`, `kategori`, `dokter`, `tanggal`, `umur`, `foto`, `obat`, `kunci`) VALUES
('123', 'Galih Gumelar SKP', 'demam', 'Bambang Priyambodo', '29', 21, 'rm1d-highres_original.jpeg', 'Vacijktluvr', 'galih'),
('151', 'Bambang Priyambodo', 'Gila', 'Galih Gumelar S.K.P', '23', 22, 'New canvas.png', 'Wifbcvsjn', 'bambang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('bambang', '123456'),
('galih', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
