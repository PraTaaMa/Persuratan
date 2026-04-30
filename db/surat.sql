-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Apr 30, 2026 at 04:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persuratantu`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `no_id` int(5) NOT NULL,
  `asalSurat` varchar(20) NOT NULL,
  `ni_AsalSurat` varchar(50) NOT NULL,
  `namaPengirim` varchar(50) NOT NULL,
  `emailPengirim` varchar(50) NOT NULL,
  `noTelpSender` int(20) NOT NULL,
  `noTelpCorp` int(20) NOT NULL,
  `sifatDoc` varchar(10) NOT NULL,
  `noSurat` varchar(10) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tujuanSurat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`no_id`, `asalSurat`, `ni_AsalSurat`, `namaPengirim`, `emailPengirim`, `noTelpSender`, `noTelpCorp`, `sifatDoc`, `noSurat`, `perihal`, `tujuanSurat`) VALUES
(9, 'Swasta', 'PT Agro', 'Ian', 'rockypratama4@gmail.com', 897626689, 2133372, 'Segera', 'B-2188-3A', 'hal testing', 'Mentri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `no_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
