-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2018 at 10:02 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berat`
--

-- --------------------------------------------------------

--
-- Table structure for table `berat`
--

CREATE TABLE `berat` (
  `id_berat` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `berat_max` int(11) NOT NULL,
  `berat_min` int(11) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berat`
--

INSERT INTO `berat` (`id_berat`, `tanggal`, `berat_max`, `berat_min`, `hasil`) VALUES
(4, '2018-11-08', 40, 32, 8),
(6, '2018-11-02', 39, 332, -293);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berat`
--
ALTER TABLE `berat`
  ADD PRIMARY KEY (`id_berat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berat`
--
ALTER TABLE `berat`
  MODIFY `id_berat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
