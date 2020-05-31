-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 04:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fahp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alternatif`
--

CREATE TABLE `tbl_alternatif` (
  `id_alternatif` varchar(64) NOT NULL,
  `kode_alternatif` varchar(11) NOT NULL,
  `nama_alternatif` varchar(255) DEFAULT NULL,
  `kec_alternatif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`id_alternatif`, `kode_alternatif`, `nama_alternatif`, `kec_alternatif`) VALUES
('5ed212e92610a', 'A1', 'Dadapayam', 'Suruh'),
('5ed212f2d1ce3', 'A2', 'Gogodalem', 'Bringin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` varchar(64) NOT NULL,
  `kode_kriteria` varchar(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `nilai_l` float NOT NULL,
  `nilai_m` float NOT NULL,
  `nilai_u` float NOT NULL,
  `nilai_param` varchar(255) NOT NULL,
  `param_kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `nilai_l`, `nilai_m`, `nilai_u`, `nilai_param`, `param_kriteria`) VALUES
('5ed21292ca073', 'K1', 'Luas daerah yang akan dibebaskan', 0.123, 0.242, 0.176, '3,2,1', '< 40000 m3,< 20000 m3,< 10000 m3'),
('5ed212de4717d', 'K2', 'Luas daerah yang akan dibebaskan', 0.109, 0.242, 0.176, '3,2,1', '> 3 Ha,1.5 Ha <= X < 3 Ha,< 1.5 Ha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` varchar(64) NOT NULL,
  `kode_alternatif` varchar(11) NOT NULL,
  `nilai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `kode_alternatif`, `nilai`) VALUES
('5ed21315a33d6', 'A2', '3,1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(64) NOT NULL,
  `nama_user` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `role` enum('administrator','operator') NOT NULL,
  `foto` varchar(64) NOT NULL DEFAULT 'default.jpg',
  `tanggal_dibuat` date NOT NULL,
  `login_terakhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `role`, `foto`, `tanggal_dibuat`, `login_terakhir`) VALUES
('5ec62d0539ced', 'Ahmad Rindhoni', 'arind', '9cf3ce9a2d2fe6d86901459c98a9bba9', 'administrator', '5ec62d0539ced.jpg', '2020-05-21', '2020-05-31'),
('5ec63572bbcd0', 'Operator Pusat', 'oppusat', '347f5597ae33d3879b53f5c81eb421c4', 'operator', '5ec63572bbcd0.png', '2020-05-21', '2020-05-31'),
('5ed3b49fc60a5', 'Admin Utama', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', '5ed3b49fc60a5.jpg', '2020-05-31', NULL),
('5ed3b4c5d4e0c', 'Operator utama', 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator', '5ed3b4c5d4e0c.png', '2020-05-31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
