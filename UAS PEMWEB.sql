-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 02:03 AM
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
-- Database: `tugasminggu7`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` bigint(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kodeprodi` varchar(50) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `kodeprodi`, `umur`, `status`) VALUES
(12114079, 'Bunga Lili', 'IF', '20 ', 'aktif'),
(121110011, 'Andii ', 'HMM', '20', 'aktif'),
(121110032, 'Kishori Jo', 'RK', '20', 'aktif'),
(121110055, 'Phoibos Feliks', 'RK', '20', 'tidak aktif'),
(121120003, 'Daniel Ricciardo', 'TP', '20', 'aktif'),
(121120022, 'Checo Perez', 'MS', '20', 'aktif'),
(121120024, 'Juliska Ruth ', 'SI', '20', 'aktif'),
(121120078, 'Hermine Ismene', 'PWK', '20', 'aktif'),
(121120123, 'Simran Alisa', 'PWK', '20', 'aktif'),
(121120233, 'Yuki Tsunoda', 'TP', '20', 'tidak aktif'),
(121140042, 'Vania Angelica', 'IF', '20', 'aktif'),
(121140055, 'Carlos Sainz', 'IF', '20', 'tidak aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
