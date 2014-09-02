-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2014 at 06:05 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forextrader_1.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `tel`, `fax`, `email`, `facebook`, `link`) VALUES
(1, 'IRONFX GLOBAL • CONTACTS', '357 25027000', '357 25027001', 'info@ironfx.com', NULL, NULL),
(2, 'CUSTOMER SUPPORT', '44(0) 203 282 7777', NULL, 'support@ironfx.com', NULL, NULL),
(3, 'INTRODUCERS', '357 25027800', NULL, 'introducers@ironfx.com', NULL, NULL),
(4, 'CLIENT FUNDING', '357 25027555', NULL, 'funding@ironfx.com', NULL, NULL),
(5, 'SALES DEPARTMENT', '357 25027888', NULL, 'sales@ironfx.com', NULL, NULL),
(6, 'TRADING DESK', '357 25027222', NULL, 'trading@ironfx.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `loai` int(10) unsigned NOT NULL,
  `thoidiemdang` datetime NOT NULL,
  `thoidiemsua` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `noidung`, `loai`, `thoidiemdang`, `thoidiemsua`) VALUES
(1, 'Tầm Nhìn Thế Giới Corporation', 'Forextrader.vn là website cung cấp chiến luợc giao dịch và hệ thống quản lý vốn hàng đầu tại Việt Nam. Sứ mệnh của chúng tôi là trở thành tổ chức đứng đầu trong lĩnh vực tư vấn tài chính và là sự lựa chọn số 1 của nhà đầu tư cá nhân và tổ chức.', 0, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `lastlogin`) VALUES
(1, 'admin', '$2y$08$Gk90IbUq.sTuHdet6UdMv.K8zrrL3QxYCfci5xmvcNJ8PQFXLVilm', '2014-08-10 13:13:53'),
(2, 'forex', '$2y$08$OpT7OnEZ583AFkxsJIw/B.XDHGSt1O65iDKpNxgVDTawJKEG5/j0i', '2014-08-10 13:16:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
