-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 07:33 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coviddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `idacc` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) COLLATE utf8_bin NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `datastatus`
--

CREATE TABLE `datastatus` (
  `idstatus` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `notestswap` int(11) NOT NULL,
  `tgltestswap` int(11) NOT NULL,
  `tmptrawat` int(11) NOT NULL,
  `puskesmas` int(11) NOT NULL,
  `statuscovid` int(11) NOT NULL,
  `tgldata` date NOT NULL,
  `kasusbaru` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `datatracing`
--

CREATE TABLE `datatracing` (
  `idtracing` int(11) NOT NULL,
  `idtr1` int(11) NOT NULL,
  `idtr2` int(11) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `gampong`
--

CREATE TABLE `gampong` (
  `idgampong` int(11) NOT NULL,
  `namagampong` varchar(50) COLLATE utf8_bin NOT NULL,
  `idkec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `idkec` int(11) NOT NULL,
  `namakec` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `namastatus`
--

CREATE TABLE `namastatus` (
  `id` int(11) NOT NULL,
  `namastatus` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `idpus` int(11) NOT NULL,
  `namapuskesmas` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `idrs` int(11) NOT NULL,
  `namars` varchar(100) COLLATE utf8_bin NOT NULL,
  `lat` decimal(12,9) NOT NULL,
  `longitude` decimal(12,9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `statussemprot`
--

CREATE TABLE `statussemprot` (
  `idsemprot` int(11) NOT NULL,
  `idtempat` int(11) NOT NULL,
  `tglsemprot` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `idtempat` varchar(100) COLLATE utf8_bin NOT NULL,
  `namatempat` varchar(100) COLLATE utf8_bin NOT NULL,
  `nik` varchar(32) COLLATE utf8_bin NOT NULL,
  `kec` int(11) NOT NULL,
  `gampong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `nik` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(100) COLLATE utf8_bin NOT NULL,
  `jk` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `kec` int(11) NOT NULL,
  `gamp` int(11) NOT NULL,
  `ttl` date NOT NULL,
  `hp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`nik`, `nama`, `alamat`, `jk`, `umur`, `kec`, `gamp`, `ttl`, `hp`) VALUES
(321312, 'fsdfsd', 'fsdfsd', 1, 12, 2, 4, '2020-09-02', 12121);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datastatus`
--
ALTER TABLE `datastatus`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `datatracing`
--
ALTER TABLE `datatracing`
  ADD PRIMARY KEY (`idtracing`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`idpus`);

--
-- Indexes for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`idrs`);

--
-- Indexes for table `statussemprot`
--
ALTER TABLE `statussemprot`
  ADD PRIMARY KEY (`idsemprot`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`idtempat`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datatracing`
--
ALTER TABLE `datatracing`
  MODIFY `idtracing` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statussemprot`
--
ALTER TABLE `statussemprot`
  MODIFY `idsemprot` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
