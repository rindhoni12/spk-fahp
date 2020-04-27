-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 04:25 PM
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
('5e950ce3c1aae', 'A1', 'Dadapayam', 'Bancak'),
('5e950ced867e7', 'A2', 'Mluweh', 'Ungaran Timur'),
('5e950cf73c2e5', 'A3', 'Lebak', 'Bringin'),
('5e950d0143cf3', 'A4', 'Pakis', 'Pabelan'),
('5e950d0de5ba5', 'A5', 'Jatikurung', 'Pringapus'),
('5e950d1a2cce4', 'A6', 'Gogodalem', 'Bringin'),
('5e950d2308658', 'A7', 'Kandangan', 'Pringapus'),
('5e950d2e022f4', 'A8', 'Ngrawan', 'Getasan');

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
('5e97f1ddeb0ab', 'K1', 'Vegetasi area genangan embung', 0.1, 0.2, 0.3, '5,4,3,2,1', 'Hutan,Semak belukar,Ladang/tegalan,Sawah tadah hujan,Perkampungan'),
('5e97f32ecbee2', 'K2', 'Volume material timbunan', 0.1, 0.2, 0.3, '5,4,3,2,1', '< 40000 m3,40000 m3 <= X < 80000 m3,80000 m3 <= X < 120000 m3,120000 m3 <= X < 160000 m3,160000 m3 <= X < 200000 m3'),
('5e97f3b44a4dc', 'K3', 'Luas daerah yang akan dibebaskan', 0.1, 0.2, 0.3, '5,4,3,2,1', '1.5 Ha <= X < 3 Ha,3 Ha <= X < 4.5 Ha,4.5 Ha <= X < 6 Ha,6 Ha <= X < 7.5 Ha,>= 7.5 Ha'),
('5e97f466566fa', 'K4', 'Volume tampungan efektif', 0.1, 0.2, 0.3, '5,4,3,2,1', '>= 1500000 m3,750000 m3 <= X < 1500000 m3,500000 m3 <= X < 750000 m3,250000 m3 <= X < 500000 m3,< 250000 m3'),
('5e97f50eaa8b9', 'K5', 'Lama operasi', 0.1, 0.2, 0.3, '5,4,3,2,1', '>=100 hari,80 hari <= X < 100 hari,60 hari <= X < 80 hari,40 hari <= X < 60 hari,< 40 hari'),
('5e97f5e092bc8', 'K6', 'Harga air per m3', 0.1, 0.2, 0.3, '5,4,3,2,1', '< Rp10.000,Rp10.000 <= X < Rp20.000,Rp20.000 <= X < Rp30.000,Rp30.000 <= X < Rp40.000,>= Rp40.000'),
('5e97f649c0c20', 'K7', 'Akses jalan menuju site bendungan', 0.1, 0.2, 0.3, '4,3,2,1', 'Tersedia jalan aspal sampai site,Jalan makadam/tanah sampai site,Jalan setapak,Tidak tersedia jalan');

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
('5ea104118567f', 'A1', '2,5,4,3,2,2,2'),
('5ea11ddbd47bf', 'A2', '5,5,5,5,5,5,3'),
('5ea11e87c79c1', 'A3', '2,3,5,4,2,5,2'),
('5ea11eeae5649', 'A4', '2,5,4,4,2,4,2'),
('5ea11f9fe29ab', 'A5', '5,5,3,1,1,1,2'),
('5ea1202797b52', 'A6', '5,4,2,2,3,1,2'),
('5ea12077be0b4', 'A7', '3,4,5,2,1,1,2'),
('5ea120b21cc73', 'A8', '3,5,4,1,1,1,3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
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
(31, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'default.jpg', '0000-00-00', '2020-04-27'),
(32, 'op1', 'op1', '4736b2b496ba3de748c6eea6c6b9ca65', 'operator', 'default.jpg', '2020-04-13', '2020-04-27');

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
