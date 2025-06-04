-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2025 at 09:19 AM
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
-- Database: `challange`
--

-- --------------------------------------------------------

--
-- Table structure for table `petsalon`
--

CREATE TABLE `petsalon` (
  `idm` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pet` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tlp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petsalon`
--

INSERT INTO `petsalon` (`idm`, `nama`, `pet`, `alamat`, `tlp`) VALUES
('CSM5231', 'wdsadsa', 'cxzczdf', 'jl. padasuka', '081268057342'),
('CSM5733', 'tgb', 'clarisa', 'jl. padasuka', '6784567'),
('CSM7605', 'aaaa', 'aaaa', 'aaaa', '11111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petsalon`
--
ALTER TABLE `petsalon`
  ADD PRIMARY KEY (`idm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
