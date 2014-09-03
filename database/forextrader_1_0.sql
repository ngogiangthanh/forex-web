-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2014 at 04:12 PM
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
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `tel`, `fax`, `email`, `facebook`, `link`) VALUES
(1, 'IRONFX GLOBAL • CONTACTS', '357 25027000', '357 25027001', 'info@ironfx.com', '', ''),
(2, 'CUSTOMER SUPPORT', '44(0) 203 282 7777', '', 'support@ironfx.com', 'www.facebook.com/support', ''),
(3, 'INTRODUCERS', '357 25027800', '', 'introducers@ironfx.com', '', ''),
(4, 'CLIENT FUNDING', '357 25027555', '', 'funding@ironfx.com', '', ''),
(5, 'SALES DEPARTMENT', '357 25027888', '', 'sales@ironfx.com', '', ''),
(6, 'TRADING DESK', '357 25027222', '', 'trading@ironfx.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `tieude` varchar(200) COLLATE utf8_bin NOT NULL,
  `noidung` text COLLATE utf8_bin NOT NULL,
  `thoidiemgui` datetime NOT NULL,
  `thoidiemxuly` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `trangthai` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `email`, `tieude`, `noidung`, `thoidiemgui`, `thoidiemxuly`, `trangthai`) VALUES
(1, 'Ngô Giang Thanh', 'nguoigui0@gmail.com', 'liên hệ 1', 'nội dung liên hệ 1', '2014-09-01 23:41:46', '2014-09-02 16:45:46', b'1'),
(2, 'người gửi 1', 'nguoigui1@gmail.com', 'liên hệ 2', 'nội dung liên hệ 2', '2014-08-31 23:43:55', '2014-09-02 16:45:33', b'0'),
(3, 'người gửi 2', 'nguoigui2@gmail.com', 'liên hệ 3', 'nội dung liên hệ 3', '2014-09-01 23:43:58', '2014-09-02 16:45:50', b'1'),
(4, 'người gửi 3', 'nguoigui3@gmail.com', 'liên hệ 4', 'nội dung liên hệ 4', '2014-09-01 23:44:02', '2014-09-02 16:45:52', b'0'),
(5, 'người gửi 4', 'nguoigui4@gmail.com', 'liên hệ 5', 'nội dung liên hệ 5', '2014-09-02 23:44:05', '2014-09-02 16:45:55', b'1'),
(6, 'người gửi 5', 'nguoigui5@gmail.com', 'liên hệ 6', 'nội dung liên hệ 6', '2014-09-03 23:44:09', '2014-09-02 16:45:58', b'0'),
(7, 'người gửi 6', 'nguoigui6@gmail.com', 'liên hệ 7', 'nội dung liên hệ 7', '2014-09-03 23:44:12', '2014-09-02 16:46:01', b'1'),
(8, 'người gửi 7', 'nguoigui7@gmail.com', 'liên hệ 8', 'nội dung liên hệ 8', '2014-09-03 23:44:16', '2014-09-02 16:46:04', b'0'),
(9, 'người gửi 8', 'nguoigui8@gmail.com', 'liên hệ 9', 'nội dung liên hệ 9', '2014-08-31 23:44:20', '2014-09-02 16:46:07', b'1'),
(10, 'người gửi 9', 'nguoigui9@gmail.com', 'liên hệ 10', 'nội dung liên hệ 10', '2014-09-04 23:44:24', '2014-09-02 16:46:10', b'0'),
(11, 'người gửi 10', 'nguoigui10@gmail.com', 'liên hệ 11', 'nội dung liên hệ 11', '2014-09-03 23:44:28', '2014-09-02 16:46:13', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anhnho` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `loai` int(10) unsigned NOT NULL,
  `thoidiemdang` datetime NOT NULL,
  `thoidiemsua` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `luotxem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `anhnho`, `noidung`, `loai`, `thoidiemdang`, `thoidiemsua`, `luotxem`) VALUES
(1, 'Tầm Nhìn Thế Giới Corporation', '', 'Forextrader.vn là website cung cấp chiến luợc giao dịch và hệ thống quản lý vốn hàng đầu tại Việt Nam. Sứ mệnh của chúng tôi là trở thành tổ chức đứng đầu trong lĩnh vực tư vấn tài chính và là sự lựa chọn số 1 của nhà đầu tư cá nhân và tổ chức.', 0, '2014-09-02 23:30:58', '2014-09-02 16:31:02', 1),
(2, 'Chiến lược Forex 1', '', 'Nội dung chiến lược Forex 1', 1, '2014-08-31 23:31:30', '2014-09-02 16:33:50', 2),
(3, 'Chiến lược Forex 2', '', 'Nội dung chiến lược Forex 2', 1, '2014-09-01 23:31:59', '2014-09-02 16:33:51', 1),
(4, 'Chiến lược Forex 3', '', 'Nội dung chiến lược Forex 3', 1, '2014-09-02 23:32:40', '2014-09-02 16:33:52', 1),
(5, 'Chiến lược Forex 4', '', 'Nội dung chiến lược Forex 4', 1, '2014-09-03 23:33:04', '2014-09-02 16:33:54', 1),
(6, 'Chiến lược Vàng KN 1', '', 'Nội dung chiến lược vàng KN 1', 2, '2014-08-31 23:34:35', '2014-09-02 16:34:39', 0),
(7, 'Chiến lược Vàng KN 2', '', 'Nội dung chiến lược vàng KN 2', 2, '2014-09-02 23:35:00', '2014-09-02 16:35:04', 0),
(8, 'Chiến lược Vàng KN 3', '', 'Nội dung chiến lược vàng KN 3', 2, '2014-09-02 23:35:21', '2014-09-02 16:35:27', 0),
(9, 'Chiến lược Vàng KN 4', '', 'Nội dung chiến lược vàng KN 4', 2, '2014-09-03 23:35:41', '2014-09-02 16:36:18', 0),
(10, 'Phân tích cơ bản - FA 1', '', 'Nội dung phân tích cơ bản - FA 1', 3, '2014-08-31 23:36:20', '2014-09-02 16:36:26', 0),
(11, 'Phân tích cơ bản - FA 2', '', 'Nội dung phân tích cơ bản - FA 2', 3, '2014-09-02 23:36:47', '2014-09-02 16:36:50', 0),
(12, 'Phân tích cơ bản - FA 3', '', 'Nội dung phân tích cơ bản - FA 3', 3, '2014-09-01 23:37:13', '2014-09-02 16:38:43', 0),
(13, 'Phân tích cơ bản - FA 4', '', 'Nội dung phân tích cơ bản - FA 4', 3, '2014-09-03 23:37:17', '2014-09-02 16:38:45', 0),
(14, 'Phân tích kỹ thuật - TA 1', '', 'Nội dung phân tích kỹ thuật - TA 1', 4, '2014-08-31 23:38:23', '2014-09-02 16:38:46', 0),
(15, 'Phân tích kỹ thuật - TA 2', '', 'Nội dung phân tích kỹ thuật - TA 2', 4, '2014-09-01 23:38:27', '2014-09-02 16:38:47', 0),
(16, 'Phân tích kỹ thuật - TA 3', '', 'Nội dung phân tích kỹ thuật - TA 3', 4, '2014-09-02 23:38:31', '2014-09-02 16:38:47', 0),
(17, 'Phân tích kỹ thuật - TA 4', '', 'Nội dung phân tích kỹ thuật - TA 4', 4, '2014-09-03 23:38:35', '2014-09-02 16:38:48', 0),
(18, 'Sàn giao dịch bài 1', '', 'Nội dung sàn giao dịch bài 1', 5, '2014-08-31 23:40:04', '2014-09-02 16:40:06', 0),
(19, 'Sàn giao dịch bài 2', '', 'Nội dung sàn giao dịch bài 2', 5, '2014-09-01 23:40:07', '2014-09-02 16:40:41', 0),
(20, 'Sàn giao dịch bài 3', '', 'Nội dung sàn giao dịch bài 3', 5, '2014-09-02 23:40:10', '2014-09-02 16:40:42', 0),
(21, 'Sàn giao dịch bài 4', '', 'Nội dung sàn giao dịch bài 4', 5, '2014-09-03 23:40:14', '2014-09-02 16:40:44', 0),
(22, 'Tin tức trong nước 1', '', 'Nội dung dung tin tức trong nước 1', 6, '2014-08-31 20:04:27', '2014-09-03 13:04:30', 0),
(23, 'Tin tức trong nước 2', '', 'Nội dung dung tin tức trong nước 2', 6, '2014-09-01 20:04:31', '2014-09-03 13:04:33', 0),
(24, 'Tin tức trong nước 3', '', 'Nội dung dung tin tức trong nước 3', 6, '2014-09-02 20:04:34', '2014-09-03 13:04:36', 0),
(25, 'Tin tức trong nước 4', '', 'Nội dung dung tin tức trong nước 4', 6, '2014-09-03 20:04:37', '2014-09-03 13:04:43', 0),
(26, 'Tin tức ngoài nước 1', '', 'Nội dung dung tin tức ngoài nước 1', 7, '2014-08-31 20:06:20', '2014-09-03 13:06:22', 0),
(27, 'Tin tức ngoài nước 2', '', 'Nội dung dung tin tức ngoài nước 2', 7, '2014-09-01 20:06:23', '2014-09-03 13:06:26', 0),
(28, 'Tin tức ngoài nước 3', '', 'Nội dung dung tin tức ngoài nước 3', 7, '2014-09-02 20:06:26', '2014-09-03 13:06:29', 0),
(29, 'Tin tức ngoài nước 4', '', 'Nội dung dung tin tức ngoài nước 4', 7, '2014-09-03 20:06:30', '2014-09-03 13:06:32', 0),
(30, 'Sản phẩm giao dịch 1', '', 'Nội dung sản phẩm giao dịch 1', 8, '2014-08-31 20:07:44', '2014-09-03 13:07:47', 0),
(31, 'Sản phẩm giao dịch 2', '', 'Nội dung sản phẩm giao dịch 2', 8, '2014-09-01 20:07:48', '2014-09-03 13:07:50', 0),
(32, 'Sản phẩm giao dịch 3', '', 'Nội dung sản phẩm giao dịch 3', 8, '2014-09-02 20:07:51', '2014-09-03 13:07:53', 0),
(33, 'Sản phẩm giao dịch 4', '', 'Nội dung sản phẩm giao dịch 4', 8, '2014-09-03 20:07:54', '2014-09-03 13:07:56', 0);

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
