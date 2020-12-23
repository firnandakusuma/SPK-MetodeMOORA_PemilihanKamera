-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 13, 2020 at 05:42 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moora_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

DROP TABLE IF EXISTS `alternatif`;
CREATE TABLE IF NOT EXISTS `alternatif` (
  `id_alternatif` varchar(50) NOT NULL,
  `nama_alternatif` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `deskripsi`) VALUES
('1', 'EOS-1D X Mark III', 'Sensor CMOS 20,1MP + prosesor gambar DIGIC X\r\nSensor AF beresolusi tinggi hingga 191 titik (AF Viewfinder\r\nPemotretan beruntun hingga 16 fps (OVF)/20 fps (Live View) dengan pelacakan AF/AE'),
('2', 'EOS 5DS R (Bodi)', 'Sensor CMOS frame penuh 50,6 megapiksel\r\nDIGIC 6 Ganda\r\nSensor pengukuran RGB + IR 150,000 piksel, 252 area'),
('3', 'EOS 5DS (Bodi)', 'Sensor CMOS frame penuh 50,6 megapiksel\r\nDIGIC 6 Ganda\r\nSensor pengukuran RGB + IR 150,000 piksel, 252 area'),
('4', 'EOS 5D Mark IV (Bodi)', 'AF CMOS Piksel Ganda\r\nSensor CMOS frame penuh 30.4MP\r\nPembuatan Film 4K (25 / 30p) dengan Pengambilan Frame 4K'),
('5', 'EOS 5D Mark IV Kit (EF 24 - 105 IS II USM)', 'AF CMOS Piksel Ganda\r\nSensor CMOS frame penuh 30.4MP\r\nPembuatan Film 4K (25 / 30p) dengan Pengambilan Frame 4K'),
('6', 'EOS 5D Mark IV Kit (EF 24 - 70 IS USM)', 'AF CMOS Piksel Ganda\r\nSensor CMOS frame penuh 30.4MP\r\nPembuatan Film 4K (25 / 30p) dengan Pengambilan Frame 4K');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_kriteria`
--

DROP TABLE IF EXISTS `alternatif_kriteria`;
CREATE TABLE IF NOT EXISTS `alternatif_kriteria` (
  `id_alternatif_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `id_alternatif` varchar(50) DEFAULT NULL,
  `id_kriteria` varchar(50) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  PRIMARY KEY (`id_alternatif_kriteria`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif_kriteria`
--

INSERT INTO `alternatif_kriteria` (`id_alternatif_kriteria`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(70, '6', '5', 7),
(69, '6', '4', 61),
(68, '6', '3', 2),
(67, '6', '2', 6720),
(66, '6', '1', 12800),
(65, '5', '6', 70000000),
(64, '5', '5', 7),
(63, '5', '4', 61),
(62, '5', '3', 1),
(61, '5', '2', 6720),
(60, '5', '1', 32000),
(59, '4', '6', 56000000),
(58, '4', '5', 7),
(57, '4', '4', 61),
(56, '4', '3', 1),
(55, '4', '2', 6720),
(54, '4', '1', 32000),
(53, '3', '6', 47500000),
(52, '3', '5', 5),
(51, '3', '4', 61),
(50, '3', '3', 1),
(49, '3', '2', 8688),
(48, '3', '1', 6400),
(47, '2', '6', 56000000),
(46, '2', '5', 5),
(45, '2', '4', 61),
(44, '2', '3', 1),
(43, '2', '2', 8688),
(42, '2', '1', 6400),
(41, '1', '6', 90000000),
(40, '1', '5', 16),
(39, '1', '4', 525),
(38, '1', '3', 1),
(37, '1', '2', 5472),
(36, '1', '1', 102400),
(71, '6', '6', 66000000);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` varchar(50) NOT NULL,
  `nama_kriteria` varchar(100) DEFAULT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  `bobot` double DEFAULT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `tipe`, `bobot`) VALUES
('5', 'Shutter speed maksimum', 'benefit', 1),
('4', 'Titik fokus', 'benefit', 1),
('3', 'Ukuran sensor (1. Full Frame, 2.APSC) ', 'benefit', 2),
('2', 'Resolusi foto', 'benefit', 1),
('1', 'ISO maksimum', 'benefit', 2),
('6', 'Harga', 'cost', 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
