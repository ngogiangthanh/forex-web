-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2014 at 05:11 PM
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
  `vitri` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `tel`, `fax`, `email`, `facebook`, `link`, `vitri`) VALUES
(1, 'IRONFX GLOBAL • CONTACTS', '357 25027000', '357 25027001', 'info@ironfx.com', '', '', b'0'),
(2, 'CUSTOMER SUPPORT', '44(0) 203 282 7777', '', 'support@ironfx.com', 'www.facebook.com/support', '', b'0'),
(3, 'INTRODUCERS', '357 25027800', '', 'introducers@ironfx.com', '', '', b'0'),
(4, 'CLIENT FUNDING', '357 25027555', '', 'funding@ironfx.com', '', '', b'0'),
(5, 'SALES DEPARTMENT', '357 25027888', '', 'sales@ironfx.com', '', '', b'0'),
(6, 'TRADING DESK', '357 25027222', '', 'trading@ironfx.com', '', '', b'0'),
(7, 'Liên hệ', '0946344233', '0946344233', 'thanhthanh1516@gmail.com', 'www.facebook.com/thanhengineer', 'www.facebook.com/thanhengineer', b'1');

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
  `trangthai` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=40 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `anhnho`, `noidung`, `loai`, `thoidiemdang`, `thoidiemsua`, `luotxem`) VALUES
(1, 'Tầm Nhìn Thế Giới Corporation', '', 'Forextrader.vn là website cung cấp chiến luợc giao dịch và hệ thống quản lý vốn hàng đầu tại Việt Nam. Sứ mệnh của chúng tôi là trở thành tổ chức đứng đầu trong lĩnh vực tư vấn tài chính và là sự lựa chọn số 1 của nhà đầu tư cá nhân và tổ chức.', 0, '2014-09-02 23:30:58', '2014-09-04 12:45:20', 11),
(2, '<b>Chiến lược Forex 1</b>', '', 'Nội dung chiến lược Forex 1', 1, '2014-08-31 23:31:30', '2014-09-04 15:01:39', 64),
(3, 'Chiến lược Forex 2', '', 'Nội dung chiến lược Forex 2', 1, '2014-09-01 23:31:59', '2014-09-04 12:59:13', 34),
(4, 'Chiến lược Forex 3', '', 'Nội dung chiến lược Forex 3', 1, '2014-09-02 23:32:40', '2014-09-04 12:59:19', 17),
(5, 'Chiến lược Forex 4', '', 'Nội dung chiến lược Forex 4', 1, '2014-09-03 23:33:04', '2014-09-04 12:57:43', 15),
(6, 'Kim loại quý 1', '', 'Nội dung kim loại quý 1', 2, '2014-08-31 23:34:35', '2014-09-04 13:17:23', 17),
(7, 'Kim loại quý 2', '', 'Nội dung kim loại quý 2', 2, '2014-09-02 23:35:00', '2014-09-04 13:02:13', 11),
(8, 'Kim loại quý 3', '', 'Nội dung kim loại quý 3', 2, '2014-09-02 23:35:21', '2014-09-04 12:45:20', 10),
(9, 'Kim loại quý 4', '', 'Nội dung kim loại quý 4', 2, '2014-09-03 23:35:41', '2014-09-04 13:02:01', 12),
(10, 'Hàng hóa 1', '', 'Nội dung hàng hóa 1', 3, '2014-08-31 23:36:20', '2014-09-04 12:45:20', 10),
(11, 'Hàng hóa 2', '', 'Nội dung hàng hóa 2', 3, '2014-09-02 23:36:47', '2014-09-04 12:45:20', 10),
(12, 'Hàng hóa 3', '', 'Nội dung hàng hóa 3', 3, '2014-09-01 23:37:13', '2014-09-04 12:45:20', 10),
(13, 'Hàng hóa 4', '', 'Nội dung hàng hóa 4', 3, '2014-09-03 23:37:17', '2014-09-04 13:06:44', 11),
(14, 'Cổ phiếu 1', '', 'Nội dung cổ phiếu 1', 4, '2014-08-31 23:38:23', '2014-09-04 12:45:20', 10),
(15, 'Cổ phiếu 2', '', 'Nội dung cổ phiếu 2', 4, '2014-09-01 23:38:27', '2014-09-04 13:12:31', 11),
(16, 'Cổ phiếu 3', '', 'Nội dung cổ phiếu 3', 4, '2014-09-02 23:38:31', '2014-09-04 12:45:20', 10),
(17, 'Cổ phiếu 4', '', 'Nội dung cổ phiếu 4', 4, '2014-09-03 23:38:35', '2014-09-04 13:12:01', 11),
(18, 'Sàn giao dịch bài 1', '', 'Nội dung sàn giao dịch bài 1', 5, '2014-08-31 23:40:04', '2014-09-04 14:51:47', 12),
(19, 'Sàn giao dịch bài 2', '', 'Nội dung sàn giao dịch bài 2', 5, '2014-09-01 23:40:07', '2014-09-04 12:45:20', 10),
(20, 'Sàn giao dịch bài 3', '', 'Nội dung sàn giao dịch bài 3', 5, '2014-09-02 23:40:10', '2014-09-04 14:51:58', 12),
(21, 'Sàn giao dịch bài 4', '', 'Nội dung sàn giao dịch bài 4', 5, '2014-09-03 23:40:14', '2014-09-04 14:52:07', 11),
(22, 'Tin tức trong nước 1', '', 'Nội dung dung tin tức trong nước 1', 6, '2014-08-31 20:04:27', '2014-09-04 14:29:17', 16),
(23, 'Tin tức trong nước 2', '', 'Nội dung dung tin tức trong nước 2', 6, '2014-09-01 20:04:31', '2014-09-04 14:11:48', 11),
(24, 'Tin tức trong nước 3', '', 'Nội dung dung tin tức trong nước 3', 6, '2014-09-02 20:04:34', '2014-09-04 12:45:20', 10),
(25, 'Tin tức trong nước 4', '', 'Nội dung dung tin tức trong nước 4', 6, '2014-09-03 20:04:37', '2014-09-04 12:45:20', 10),
(26, 'Tin tức ngoài nước 1', '', 'Nội dung dung tin tức ngoài nước 1', 7, '2014-08-31 20:06:20', '2014-09-04 12:45:20', 10),
(27, 'Tin tức ngoài nước 2', '', 'Nội dung dung tin tức ngoài nước 2', 7, '2014-09-01 20:06:23', '2014-09-04 14:07:08', 11),
(28, 'Tin tức ngoài nước 3', '', 'Nội dung dung tin tức ngoài nước 3', 7, '2014-09-02 20:06:26', '2014-09-04 14:10:50', 11),
(29, 'Tin tức ngoài nước 4', '', 'Nội dung dung tin tức ngoài nước 4', 7, '2014-09-03 20:06:30', '2014-09-04 12:45:20', 10),
(30, 'Sản phẩm giao dịch 1', '', 'Nội dung sản phẩm giao dịch 1', 8, '2014-08-31 20:07:44', '2014-09-04 14:38:36', 20),
(31, 'Sản phẩm giao dịch 2', '', 'Nội dung sản phẩm giao dịch 2', 8, '2014-09-01 20:07:48', '2014-09-04 14:34:36', 14),
(32, 'Sản phẩm giao dịch 3', '', 'Nội dung sản phẩm giao dịch 3', 8, '2014-09-02 20:07:51', '2014-09-04 14:31:39', 12),
(33, 'Sản phẩm giao dịch 4', '', 'Nội dung sản phẩm giao dịch 4', 8, '2014-09-03 20:07:54', '2014-09-04 14:38:31', 11),
(34, 'Kiến thức giao dịch 1', '', 'Nội dung kiến thức giao dịch 1', 9, '2014-08-31 01:05:25', '2014-09-04 14:48:39', 11),
(35, 'Kiến thức giao dịch 2', '', 'Nội dung kiến thức giao dịch 2', 9, '2014-09-01 01:05:28', '2014-09-04 14:48:14', 11),
(36, 'Kiến thức giao dịch 3', '', 'Nội dung kiến thức giao dịch 3', 9, '2014-09-02 01:05:32', '2014-09-04 12:45:20', 10),
(37, 'Kiến thức giao dịch 4', '', 'Nội dung kiến thức giao dịch 4', 9, '2014-09-04 01:05:35', '2014-09-04 14:48:24', 12),
(38, 'Kinh nghiệm giao dịch 1', '', 'Nội dung kinh nghiệm giao dịch 1', 10, '2014-09-01 13:43:11', '2014-09-04 12:45:20', 10),
(39, 'Kinh nghiệm giao dịch 2', '', 'Nội dung kinh nghiệm giao dịch 2', 10, '2014-09-01 13:43:17', '2014-09-04 12:45:20', 10),
(40, 'Kinh nghiệm giao dịch 3', '', 'Nội dung kinh nghiệm giao dịch 3', 10, '2014-09-03 13:43:19', '2014-09-04 14:45:12', 11),
(41, 'Kinh nghiệm giao dịch 4', '', 'Nội dung kinh nghiệm giao dịch 4', 10, '2014-09-04 13:43:23', '2014-09-04 14:45:29', 12);

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
