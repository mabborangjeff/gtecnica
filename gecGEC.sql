-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 05:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gec`
--

-- --------------------------------------------------------

--
-- Table structure for table `body`
--

CREATE TABLE `body` (
  `id` int(10) NOT NULL,
  `code` varchar(20) NOT NULL,
  `bodytype` varchar(20) NOT NULL,
  `availability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `body`
--

INSERT INTO `body` (`id`, `code`, `bodytype`, `availability`) VALUES
(2, 'JG17H16', 'ORDINARY DROPSIDE', 'AVAILABLE'),
(3, 'GHKL17', 'WINGVAN', 'AVAILABLE'),
(4, 'LKJP123', 'ORDINARY DROPSIDE', 'AVAILABLE'),
(5, 'NAK90123', 'DUMP', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `cabinmodel`
--

CREATE TABLE `cabinmodel` (
  `id` int(10) NOT NULL,
  `length` varchar(20) NOT NULL,
  `cabinmodel` varchar(20) NOT NULL,
  `chassis` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `availability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cabinmodel`
--

INSERT INTO `cabinmodel` (`id`, `length`, `cabinmodel`, `chassis`, `code`, `availability`) VALUES
(2, '12', 'G600', 'NPR', 'JG17H16', 'AVAILABLE'),
(3, '16', 'G650', 'NQR', 'GHKL17', 'AVAILABLE'),
(4, '20FT', 'G700', 'NQR', 'LKJP123', 'AVAILABLE'),
(5, '10FT', 'G700', 'NKR', 'NAK90123', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `engine`
--

CREATE TABLE `engine` (
  `id` int(10) NOT NULL,
  `code` varchar(20) NOT NULL,
  `engine` varchar(20) NOT NULL,
  `availability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `engine`
--

INSERT INTO `engine` (`id`, `code`, `engine`, `availability`) VALUES
(2, 'JG17H16', '4HF1', 'AVAILABLE'),
(3, 'GHKL17', '4HE1', 'AVAILABLE'),
(4, 'LKJP123', '', 'AVAILABLE'),
(5, 'NAK90123', '4JJ1', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `truckcode`
--

CREATE TABLE `truckcode` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `availability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `truckcode`
--

INSERT INTO `truckcode` (`id`, `code`, `availability`) VALUES
(4, 'JG17H16', 'AVAILABLE'),
(5, 'GHKL17', 'AVAILABLE'),
(6, 'LKJP123', 'AVAILABLE'),
(7, 'NAK90123', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `truckinv`
--

CREATE TABLE `truckinv` (
  `id` int(10) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `cabinmodel` varchar(20) NOT NULL,
  `chassis` varchar(20) NOT NULL,
  `length` varchar(10) NOT NULL,
  `bodytype` varchar(20) NOT NULL,
  `engine` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `truckinv`
--

INSERT INTO `truckinv` (`id`, `availability`, `code`, `cabinmodel`, `chassis`, `length`, `bodytype`, `engine`, `location`) VALUES
(5, 'AVAILABLE', 'JG17H16', 'G600', 'NPR', '12 ft', 'ORDINARY DROPSIDE', '4HF1', 'MARILAO'),
(6, 'AVAILABLE', 'GHKL17', 'G650', 'NQR', '16 ft', 'WINGVAN', '4HE1', 'CABANATUAN'),
(7, 'AVAILABLE', 'LKJP123', 'G700', 'NQR', '20FT ft', 'ORDINARY DROPSIDE', '', ''),
(8, 'AVAILABLE', 'NAK90123', 'G700', 'NKR', '10FT ft', 'DUMP', '4JJ1', 'IMUS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `body`
--
ALTER TABLE `body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabinmodel`
--
ALTER TABLE `cabinmodel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engine`
--
ALTER TABLE `engine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truckcode`
--
ALTER TABLE `truckcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truckinv`
--
ALTER TABLE `truckinv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `body`
--
ALTER TABLE `body`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cabinmodel`
--
ALTER TABLE `cabinmodel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `engine`
--
ALTER TABLE `engine`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `truckcode`
--
ALTER TABLE `truckcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `truckinv`
--
ALTER TABLE `truckinv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
