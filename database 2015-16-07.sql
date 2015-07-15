-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2015 at 05:57 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zadmin_toni`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`, `nama`, `email`, `type`) VALUES
(1, 'thoni', '827ccb0eea8a706c4c34a16891f84e7b', 'sulthoni', 'sulthonimachfud@gmail.com', 'admin'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_divisi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `nama_divisi`) VALUES
(13, 'Kepala Departemen VTL dan EHS'),
(18, 'Divisi Produksi'),
(19, 'Divisi Pemasaran'),
(20, 'Divisi Quality Qontrol'),
(21, 'DIvisi Personalia'),
(22, 'Divisi Maintanance');

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan_kalori`
--

CREATE TABLE IF NOT EXISTS `kebutuhan_kalori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `kalori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kebutuhan_kalori`
--

INSERT INTO `kebutuhan_kalori` (`id`, `id_user`, `kalori`) VALUES
(1, 11, '100'),
(2, 52, '10000');

-- --------------------------------------------------------

--
-- Table structure for table `makanan_buah`
--

CREATE TABLE IF NOT EXISTS `makanan_buah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `makanan_buah`
--

INSERT INTO `makanan_buah` (`id`, `nama_makanan`) VALUES
(1, 'Semangka'),
(2, 'Melon'),
(3, 'Pepaya'),
(4, 'Pisang');

-- --------------------------------------------------------

--
-- Table structure for table `makanan_lauk_pauk`
--

CREATE TABLE IF NOT EXISTS `makanan_lauk_pauk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `makanan_lauk_pauk`
--

INSERT INTO `makanan_lauk_pauk` (`id`, `nama_makanan`) VALUES
(1, 'Ayam'),
(2, 'Daging'),
(3, 'Telur'),
(4, 'Tempe'),
(5, 'Tahu');

-- --------------------------------------------------------

--
-- Table structure for table `makanan_minuman`
--

CREATE TABLE IF NOT EXISTS `makanan_minuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `makanan_minuman`
--

INSERT INTO `makanan_minuman` (`id`, `nama_makanan`) VALUES
(1, 'Air Putih'),
(2, 'Susu');

-- --------------------------------------------------------

--
-- Table structure for table `makanan_pokok`
--

CREATE TABLE IF NOT EXISTS `makanan_pokok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `makanan_pokok`
--

INSERT INTO `makanan_pokok` (`id`, `nama_makanan`) VALUES
(8, 'Nasi Putih'),
(9, 'Nasi Kuning'),
(10, 'Nasi Merah');

-- --------------------------------------------------------

--
-- Table structure for table `makanan_sayur`
--

CREATE TABLE IF NOT EXISTS `makanan_sayur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `makanan_sayur`
--

INSERT INTO `makanan_sayur` (`id`, `nama_makanan`) VALUES
(1, 'Sayur Sop'),
(2, 'Sayur Lodeh'),
(3, 'Sayur Asem');

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE IF NOT EXISTS `menu_makanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_makanan_pokok` varchar(255) DEFAULT NULL,
  `id_makanan_lauk_pauk` varchar(255) DEFAULT NULL,
  `id_makanan_sayur` varchar(255) DEFAULT NULL,
  `id_makanan_buah` varchar(255) DEFAULT NULL,
  `id_minuman` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notifikasi` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_induk` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `berat_badan` varchar(255) DEFAULT NULL,
  `tinggi_badan` varchar(255) DEFAULT NULL,
  `umur` varchar(255) DEFAULT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `kode_pendaftaran` varchar(11) DEFAULT NULL,
  `reset_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nomor_induk`, `nama`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `umur`, `id_divisi`, `username`, `password`, `email`, `kode_pendaftaran`, `reset_url`) VALUES
(11, '00', 'Fachruddin', 'l', NULL, NULL, NULL, 13, NULL, NULL, NULL, '68919', NULL),
(28, '01', 'Ahmad sakroni', 'l', NULL, NULL, NULL, 18, NULL, NULL, NULL, '62526', NULL),
(29, '02', 'Dedik Suratno', 'l', NULL, NULL, NULL, 18, NULL, NULL, NULL, '15130', NULL),
(30, '03', 'Dian Islamtoro', 'l', NULL, NULL, NULL, 18, NULL, NULL, NULL, '94412', NULL),
(31, '04', 'Firjun', 'l', NULL, NULL, NULL, 18, NULL, NULL, NULL, '71800', NULL),
(32, '05', 'Very Triawan', 'l', NULL, NULL, NULL, 18, NULL, NULL, NULL, NULL, NULL),
(33, '06', 'Syafrizal Firdaus', 'l', NULL, NULL, NULL, 19, NULL, NULL, NULL, NULL, NULL),
(34, '07', 'Bram Zaenal', 'l', NULL, NULL, NULL, 19, NULL, NULL, NULL, NULL, NULL),
(35, '08', 'Fajar Indra', 'l', NULL, NULL, NULL, 19, NULL, NULL, NULL, NULL, NULL),
(36, '09', 'Susanto Budi', 'l', NULL, NULL, NULL, 19, NULL, NULL, NULL, NULL, NULL),
(37, '10', 'Samsul Rizal', 'l', NULL, NULL, NULL, 19, NULL, NULL, NULL, NULL, NULL),
(38, '11', 'Irmawati', 'p', NULL, NULL, NULL, 20, NULL, NULL, NULL, NULL, NULL),
(39, '12', 'Pris Mujaidi', 'l', NULL, NULL, NULL, 20, NULL, NULL, NULL, NULL, NULL),
(40, '13', 'Hariyono', 'l', NULL, NULL, NULL, 20, NULL, NULL, NULL, NULL, NULL),
(41, '14', 'Edi Putranto', 'l', NULL, NULL, NULL, 20, NULL, NULL, NULL, NULL, NULL),
(42, '15', 'Dwijoko', 'l', NULL, NULL, NULL, 20, NULL, NULL, NULL, NULL, NULL),
(43, '16', 'Desy Intan', 'p', NULL, NULL, NULL, 21, NULL, NULL, NULL, NULL, NULL),
(44, '17', 'Tohirin', 'l', NULL, NULL, NULL, 21, NULL, NULL, NULL, NULL, NULL),
(45, '18', 'Sumarno', 'l', NULL, NULL, NULL, 21, NULL, NULL, NULL, NULL, NULL),
(46, '19', 'Totok Effendi', 'l', NULL, NULL, NULL, 21, NULL, NULL, NULL, NULL, NULL),
(47, '20', 'Ratna Dwi', 'p', NULL, NULL, NULL, 21, NULL, NULL, NULL, NULL, NULL),
(48, '21', 'Sa''adi', 'l', NULL, NULL, NULL, 22, NULL, NULL, NULL, NULL, NULL),
(49, '22', 'Putut Sentosa', 'l', NULL, NULL, NULL, 22, NULL, NULL, NULL, NULL, NULL),
(50, '23', 'Suhadi', 'l', NULL, NULL, NULL, 22, NULL, NULL, NULL, NULL, NULL),
(51, '24', 'Edi Zaenal', 'l', NULL, NULL, NULL, 22, NULL, NULL, NULL, NULL, NULL),
(52, '25', 'Aang Suhendang', 'l', NULL, NULL, NULL, 22, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
