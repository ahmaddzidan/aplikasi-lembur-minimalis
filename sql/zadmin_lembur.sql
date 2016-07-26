-- phpMyAdmin SQL Dump
-- version 4.0.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2016 at 04:10 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zadmin_lembur`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lembur`
--

CREATE TABLE IF NOT EXISTS `tbl_lembur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `status` enum('Menikah','Belum Menikah') NOT NULL,
  `jabatan` enum('Supervisor','Kepala Regu','Mekanik','Helper') NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
