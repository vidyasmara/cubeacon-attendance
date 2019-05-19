-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2019 at 07:27 AM
-- Server version: 10.1.38-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jsn`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `nrp` varchar(128) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `nrp`, `timestamp`) VALUES
(58, '07211640000029', '2019-04-28 23:35:59'),
(59, '07211640000032', '2019-04-28 23:38:54'),
(60, '07211640000053', '2019-04-28 23:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` varchar(128) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `name`, `password`) VALUES
('dfd584979135', '197409072002121001', 'Arief Kurniawan, ST., MT.', '1234asdf'),
('eee0afd16a3e', '19610706198701100', 'Ir. Hanny Boedinoegroho, MT.', '1234asdf');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` varchar(128) NOT NULL,
  `nrp` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `name`, `password`) VALUES
('c3216883200b', '07211640000003', 'Retno Wulandari', '1234asdf'),
('d882ede90615', '07211640000042', 'Faradina Ayu Prawindyastuti', '1234asdf'),
('db6f1febaa48', '07211640000029', 'Muhammad Rusydi Al Affan', '1234asdf'),
('e276aaf09308', '07211640000053', 'Aisyah Nurul Hidayah', '1234asdf'),
('e5cdb7495177', '07211640000032', 'Atyantagratia Vidyasmara Daryanto', '1234asdf'),
('ee302387116a', '07211640000015', 'Firdaus Nanda Pradanggapasti', '1234asdf'),
('f86aa0d4ae18', '07211640000005', 'Izzatul Masruroh', '1234asdf'),
('fd830fa79c85', '07211640000009', 'Fernanda Daymara Hasna', '1234asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
