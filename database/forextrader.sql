-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2014 at 02:47 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forextrader`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_dangtin`
--

CREATE TABLE IF NOT EXISTS `chitiet_dangtin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `tintuc_id` int(10) unsigned NOT NULL,
  `tg_dang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_xemtin`
--

CREATE TABLE IF NOT EXISTS `chitiet_xemtin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `thoigian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `solanxem` int(11) NOT NULL,
  `tintuc_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `congty`
--

CREATE TABLE IF NOT EXISTS `congty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_cty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota_cty` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `congty`
--

INSERT INTO `congty` (`id`, `ten_cty`, `mota_cty`) VALUES
(1, 'Tầm Nhìn Thế Giới Corporation', 'Forextrader.vn là website cung cấp chiến luợc giao dịch và hệ thống quản lý vốn hàng đầu tại Việt Nam. Sứ mệnh của chúng tôi là trở thành tổ chức đứng đầu trong lĩnh vực tư vấn tài chính và là sự lựa chọn số 1 của nhà đầu tư cá nhân và tổ chức.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

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
-- Table structure for table `hethong`
--

CREATE TABLE IF NOT EXISTS `hethong` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tentc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `motatc` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giatri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hethong`
--

INSERT INTO `hethong` (`id`, `tentc`, `motatc`, `giatri`) VALUES
(1, 'text_product', 'Tiêu đề sản phẩm', 'Forex Trader'),
(2, 'text_user', 'Người sở hửu', 'Admin manager system');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `makh` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL DEFAULT '1',
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `makh`, `hoten`, `gioitinh`, `diachi`, `email`, `dienthoai`, `ngaysinh`) VALUES
(1, 'forex', 'Forex', 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `loaitin`
--

CREATE TABLE IF NOT EXISTS `loaitin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `loaitin`
--

INSERT INTO `loaitin` (`id`, `ten`, `mota`) VALUES
(1, 'Chiến lược vàng', ''),
(2, 'Chiến lược Forex', ''),
(3, 'Kinh nghiệm giao dịch', ''),
(4, 'Phân tích cơ bản - FA', ''),
(5, 'Phân tích kỹ thuật - TA', NULL),
(6, 'Tin quốc tế', NULL),
(7, 'Tin trong nước', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhomquyen`
--

CREATE TABLE IF NOT EXISTS `nhomquyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manq` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tennq` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `motanq` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nhomquyen`
--

INSERT INTO `nhomquyen` (`id`, `manq`, `tennq`, `motanq`) VALUES
(1, 'admin', 'Quản trị hệ thống', 'Nhóm người có toàn quyền sử dụng và quản trị hệ thống'),
(2, 'khachhang', 'Quyền khách hàng', 'Nhóm người dùng là khách hàng');

-- --------------------------------------------------------

--
-- Table structure for table `quanly`
--

CREATE TABLE IF NOT EXISTS `quanly` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `maql` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) DEFAULT '1',
  `diachi` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nhomq_id` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quanly`
--

INSERT INTO `quanly` (`id`, `maql`, `hoten`, `gioitinh`, `diachi`, `email`, `dienthoai`, `ngaysinh`, `nhomq_id`) VALUES
(1, 'admin', 'admin', 1, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thongtin_ht` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitt_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
(1, 'admin', '$2y$08$H3Jor48tFK2A4aljzZ5P1.G9gXv9oc6G2ByKHNGetMNOe0XJ6Ws5m', '2014-08-10 13:13:53'),
(2, 'forex', '$2y$08$qn9/sN/2Uu8A6CFb.F5iPOaG7bO2nCg0NRtaSNpqT9HnZSpXwPVue', '2014-08-10 13:16:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
