-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 05:37 PM
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
('5ed9cabf22f8d', 'A1', 'Dadapayam', 'Bancak'),
('5ed9caccf20f4', 'A2', 'Mluweh', 'Ungaran Timur'),
('5ed9cad9af18a', 'A3', 'Lebak', 'Bringin'),
('5ed9cae6650a2', 'A4', 'Pakis', 'Pabelan'),
('5ed9caf395a13', 'A5', 'Jatikurung', 'Pringapus'),
('5ed9cb0152710', 'A6', 'Gogodalem', 'Bringin'),
('5ed9cb10e2f9b', 'A7', 'Kandangan', 'Pringapus'),
('5ed9cb1dda19b', 'A8', 'Ngrawan', 'Getasan');

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
('5ed9b95f34260', 'K1', 'Vegetasi area genangan embung', 0.09, 0.153, 0.254, '5,4,3,2,1', 'Hutan,Semak Belukar,Ladang/tegalan,Sawah tadah hujan,Perkampungan'),
('5ed9ba2616274', 'K2', 'Volume material timbunan', 0.067, 0.092, 0.143, '5,4,3,2,1', '< 40000 m3,40000 m3 <= X < 80000 m3,80000 m3 <= X < 120000 m3,120000 m3 <= X < 160000 m3,160000 m3 <= X < 200000 m3'),
('5ed9bb2d3b5a3', 'K3', 'Luas daerah yang akan dibebaskan', 0.123, 0.242, 0.419, '5,4,3,2,1', '1.5 Ha <= X < 3 Ha,3 Ha <= X < 4.5 Ha,4.5 Ha <= X < 6 Ha,6 Ha <= X < 7.5 Ha,>= 7.5 Ha'),
('5ed9bba757734', 'K4', 'Volume tampungan efektif', 0.087, 0.112, 0.154, '5,4,3,2,1', '>= 1500000 m3,750000 m3 <= X < 1500000 m3,500000 m3 <= X < 750000 m3,250000 m3 <= X < 500000 m3,< 250000 m3'),
('5ed9bcd720a23', 'K5', 'Lama operasi', 0.1, 0.164, 0.265, '5,4,3,2,1', '>= 100 hari,80 hari <= X < 100 hari,60 hari <= X < 80 hari,40 hari <= X < 60 hari,< 40 hari'),
('5ed9bda1cfc53', 'K6', 'Harga air /m3', 0.087, 0.13, 0.199, '5,4,3,2,1', '< Rp10.000,Rp10.000 <= X < Rp20.000,Rp20.000 <= X < Rp30.000,Rp30.000 <= X < Rp40.000,>= Rp40.000'),
('5ed9be1218da2', 'K7', 'Akses jalan menuju site bendungan', 0.066, 0.107, 0.176, '4,3,2,1', 'Tersedia jalan aspal sampai site,Jalan makadam/tanah sampai site,Jalan setapak,Tidak tersedia jalan');

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
('5ed9dcdd1ed57', 'A1', '2,4,4,3,2,2,2'),
('5ed9dd3cc8fce', 'A2', '5,5,5,5,5,5,3'),
('5ed9dd957cb38', 'A3', '2,3,5,4,2,5,2'),
('5ed9ddf59fcf9', 'A4', '2,5,4,4,2,4,2'),
('5ed9de52b0c67', 'A5', '5,5,3,2,1,1,2'),
('5ed9deb47f58e', 'A6', '5,4,2,2,3,1,2'),
('5ed9def164045', 'A7', '3,4,5,2,1,1,2'),
('5ed9df43bc5be', 'A8', '3,5,4,1,1,1,3');

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
('5ed3b49fc60a5', 'Admin Utama', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', '5ed3b49fc60a5.jpg', '2020-05-31', '2020-06-05'),
('5ed3b4c5d4e0c', 'Operator utama', 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator', '5ed3b4c5d4e0c.png', '2020-05-31', '2020-06-05');

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
