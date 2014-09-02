-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mer 27 Août 2014 à 23:01
-- Version du serveur: 5.6.14
-- Version de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `forextrader`
--

-- --------------------------------------------------------

--
-- Structure de la table `chitiet_dangtin`
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
-- Structure de la table `chitiet_xemtin`
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
-- Structure de la table `congty`
--

CREATE TABLE IF NOT EXISTS `congty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_cty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota_cty` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `congty`
--

INSERT INTO `congty` (`id`, `ten_cty`, `mota_cty`) VALUES
(1, 'Tầm Nhìn Thế Giới Corporation', 'Forextrader.vn là website cung cấp chiến luợc giao dịch và hệ thống quản lý vốn hàng đầu tại Việt Nam. Sứ mệnh của chúng tôi là trở thành tổ chức đứng đầu trong lĩnh vực tư vấn tài chính và là sự lựa chọn số 1 của nhà đầu tư cá nhân và tổ chức.');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
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
-- Contenu de la table `contact`
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
-- Structure de la table `giaodich`
--

CREATE TABLE IF NOT EXISTS `giaodich` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `magd` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tengd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `giaodich`
--

INSERT INTO `giaodich` (`id`, `magd`, `mota`, `tengd`) VALUES
(1, 'chienluocgd', 'Chiến lược giao dịch', ''),
(2, 'kienthucgd', 'Kiến thức giao dịch', ''),
(5, 'sanphamgd', 'Sản phẩm giao dịch', ''),
(6, 'nentanggd', 'Nền tảng giao dịch', ''),
(7, 'tintuc', 'Tin tức', '');

-- --------------------------------------------------------

--
-- Structure de la table `hethong`
--

CREATE TABLE IF NOT EXISTS `hethong` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tentc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `motatc` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giatri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `hethong`
--

INSERT INTO `hethong` (`id`, `tentc`, `motatc`, `giatri`) VALUES
(1, 'text_product', 'Tiêu đề sản phẩm', 'Forex Trader'),
(2, 'text_user', 'Người sở hửu', 'Admin manager system');

-- --------------------------------------------------------

--
-- Structure de la table `khachhang`
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
-- Contenu de la table `khachhang`
--

INSERT INTO `khachhang` (`id`, `makh`, `hoten`, `gioitinh`, `diachi`, `email`, `dienthoai`, `ngaysinh`) VALUES
(1, 'forex', 'Forex', 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `loaitin`
--

CREATE TABLE IF NOT EXISTS `loaitin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `giaodich_id` int(10) unsigned NOT NULL,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `loaitin`
--

INSERT INTO `loaitin` (`id`, `giaodich_id`, `ten`, `mota`) VALUES
(1, 1, 'Chiến lược vàng', ''),
(2, 1, 'Chiến lược Forex', ''),
(3, 0, 'Kinh nghiệm giao dịch', ''),
(4, 2, 'Phân tích cơ bản - FA', ''),
(5, 2, 'Phân tích kỹ thuật - TA', NULL),
(6, 7, 'Tin quốc tế', NULL),
(7, 7, 'Tin trong nước', NULL),
(8, 5, 'Forex', NULL),
(9, 5, 'Kim loại quý', NULL),
(10, 5, 'Tương lai', NULL),
(11, 5, 'Cổ phiếu', NULL),
(12, 6, 'PC - Web - Mac', NULL),
(13, 6, 'Mobile', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `nhomquyen`
--

CREATE TABLE IF NOT EXISTS `nhomquyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manq` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tennq` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `motanq` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `nhomquyen`
--

INSERT INTO `nhomquyen` (`id`, `manq`, `tennq`, `motanq`) VALUES
(1, 'admin', 'Quản trị hệ thống', 'Nhóm người có toàn quyền sử dụng và quản trị hệ thống'),
(2, 'khachhang', 'Quyền khách hàng', 'Nhóm người dùng là khách hàng');

-- --------------------------------------------------------

--
-- Structure de la table `quanly`
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
-- Contenu de la table `quanly`
--

INSERT INTO `quanly` (`id`, `maql`, `hoten`, `gioitinh`, `diachi`, `email`, `dienthoai`, `ngaysinh`, `nhomq_id`) VALUES
(1, 'admin', 'admin', 1, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tintuc`
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
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `lastlogin`) VALUES
(1, 'admin', '$2y$08$cdb8/oE6kCq1kdMY2AXQOuRE9fSyYHfVs04BMT8dtrlvoZcQcllaK', '2014-08-10 13:13:53'),
(2, 'forex', '$2y$08$OpT7OnEZ583AFkxsJIw/B.XDHGSt1O65iDKpNxgVDTawJKEG5/j0i', '2014-08-10 13:16:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
