-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 04:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_flight`
--

CREATE TABLE `tb_flight` (
  `flight_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `flight_kode` varchar(10) NOT NULL,
  `flight_nama` varchar(25) NOT NULL,
  `flight_tgl_pergi` date NOT NULL,
  `flight_tgl_pulang` date NOT NULL,
  `flight_pergi` time NOT NULL,
  `flight_tiba` time NOT NULL,
  `flight_type` enum('Sekali Jalan','Pulang Pergi','','') NOT NULL,
  `flight_harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_flight`
--

INSERT INTO `tb_flight` (`flight_id`, `flight_kode`, `flight_nama`, `flight_tgl_pergi`, `flight_tgl_pulang`, `flight_pergi`, `flight_tiba`, `flight_type`, `flight_harga`) VALUES
(00001, 'QZ-7534', 'Air Asia', '2016-11-17', '2016-11-23', '10:00:00', '11:00:00', 'Sekali Jalan', 750000),
(00002, 'QZ-8534', 'Garuda Indonesia', '2016-11-08', '2016-11-23', '14:00:00', '17:00:00', 'Sekali Jalan', 500000),
(00003, 'QZ-921', 'Lion Air', '2016-11-02', '2016-11-17', '06:00:00', '09:00:00', 'Pulang Pergi', 400000),
(00004, 'QD-928', 'Sriwijaya Air', '2016-11-02', '2016-11-16', '03:00:00', '05:00:00', 'Sekali Jalan', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_resort`
--

CREATE TABLE `tb_resort` (
  `resort_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `resort_nama` varchar(15) NOT NULL,
  `resort_masuk` date NOT NULL,
  `resort_keluar` date NOT NULL,
  `resort_lama` enum('1 Malam','2 Malam','3 Malam','4 Malam','5 Malam') NOT NULL,
  `resort_harga` int(25) NOT NULL,
  `resort_kab` enum('Yogyakarta','Sleman','Bantul','Kulon Progo','Gunung Kidul') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_resort`
--

INSERT INTO `tb_resort` (`resort_id`, `resort_nama`, `resort_masuk`, `resort_keluar`, `resort_lama`, `resort_harga`, `resort_kab`) VALUES
(00001, 'Hotel Santika', '2016-11-17', '2016-11-18', '1 Malam', 900000, 'Sleman'),
(00002, 'Hotel Jaya', '2016-11-18', '2016-11-21', '3 Malam', 900000, 'Yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_flight`
--
ALTER TABLE `tb_flight`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `tb_resort`
--
ALTER TABLE `tb_resort`
  ADD PRIMARY KEY (`resort_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_flight`
--
ALTER TABLE `tb_flight`
  MODIFY `flight_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_resort`
--
ALTER TABLE `tb_resort`
  MODIFY `resort_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
