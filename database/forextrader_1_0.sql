-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2014 at 01:09 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forextrader_1_0`
--
CREATE DATABASE IF NOT EXISTS `forextrader_1_0` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `forextrader_1_0`;

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
  `vitri` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `tel`, `fax`, `email`, `facebook`, `link`, `vitri`) VALUES
(1, 'IRONFX GLOBAL • CONTACTS', '357 25027000', '357 25027001', 'info@ironfx.com', '', '', 0),
(2, 'Hỗ trợ khách hàng', '44(0) 203 282 7777', '44(0) 203 282 7777', 'support@ironfx.com', 'www.facebook.com/support', 'http://www.facebook.com/support', 0),
(3, 'INTRODUCERS', '357 25027800', '', 'introducers@ironfx.com', '', '', 0),
(4, 'CLIENT FUNDING', '357 25027555', '', 'funding@ironfx.com', '', '', 0),
(5, 'SALES DEPARTMENT', '357 25027888', '', 'sales@ironfx.com', '', '', 0),
(7, 'Liên hệ', '0946344233', '', '', '', '', 1);

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
  `thoidiemxuly` datetime DEFAULT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT '0',
  `noidungtraloi` text COLLATE utf8_bin,
  `tieudetraloi` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `email`, `tieude`, `noidung`, `thoidiemgui`, `thoidiemxuly`, `trangthai`, `noidungtraloi`, `tieudetraloi`) VALUES
(3, 'người gửi 2', 'leemoonlovely@gmail.com', 'liên hệ 3', 'nội dung liên hệ 3', '2014-09-01 23:43:58', '2014-09-06 00:12:50', 0, 'anh yêu em', 'gửi em yêu'),
(4, 'người gửi 3', 'nguoigui3@gmail.com', 'liên hệ 4', 'nội dung liên hệ 4', '2014-09-01 23:44:02', '2014-09-06 00:12:51', 1, NULL, NULL),
(5, 'người gửi 4', 'nguoigui4@gmail.com', 'liên hệ 5', 'nội dung liên hệ 5', '2014-09-02 23:44:05', '2014-09-06 00:12:54', 1, NULL, NULL),
(6, 'người gửi 5', 'nguoigui5@gmail.com', 'liên hệ 6', 'nội dung liên hệ 6', '2014-09-03 23:44:09', '2014-09-10 21:59:22', 1, NULL, NULL),
(7, 'người gửi 6', 'nguoigui6@gmail.com', 'liên hệ 7', 'nội dung liên hệ 7', '2014-09-03 23:44:12', '2014-09-08 13:19:48', 0, '&aacute;dsad&aacute;', 'sadsad'),
(8, 'người gửi 7', 'trungthonglong@gmail.com', 'liên hệ 8', 'nội dung liên hệ 8', '2014-09-03 23:44:16', '2014-09-10 22:59:19', 1, '<u><strong><span style="font-family:comic sans ms,cursive">Ch&agrave;o bạn,</span><br />\r\nThực ra tui đẹp trai hơn bạn nhiều lắm!<br />\r\nCảm ơn đ&atilde; đọc mail n&agrave;y hehehe</strong></u>', 'admin website'),
(9, 'người gửi 8', 'nguoigui8@gmail.com', 'liên hệ 9', 'nội dung liên hệ 9', '2014-08-31 23:44:20', '2014-09-06 00:13:23', 1, NULL, NULL),
(10, 'người gửi 9', 'nguoigui9@gmail.com', 'tra loi', 'nội dung liên hệ 10', '2014-09-04 23:44:24', '2014-09-10 21:59:13', 1, 'noi dung traloi', NULL),
(11, 'người gửi 10', 'nguoigui10@gmail.com', 'liên hệ 11', 'nội dung liên hệ 11', '2014-09-03 23:44:28', '2014-09-10 22:59:10', 1, 'thanh123', 'thanh123'),
(12, '4334', 'thnh@gmail.com', 'dsds', 'sdsds', '2014-09-11 14:00:18', NULL, 0, NULL, NULL),
(13, 'fdsfs', 'thanh@gmal.com', 'đéhgf', 'hfhfg', '2014-09-11 14:01:49', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE IF NOT EXISTS `nguoidung` (
  `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `roles` tinyint(4) NOT NULL,
  `status` bit(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_NGUOIDUNG` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `username`, `password`, `updated_at`, `roles`, `status`, `remember_token`, `email`, `create_at`) VALUES
(00000000001, 'admin', '$2y$08$Vwwnk7krSgBigyiS9L0t9u8wbClMqQ2ZVq4VnBYfWs/azWhE2LB8W', '2014-09-11 10:54:16', 1, b'1', 'xQ35fT3mUdGdPoh2fZRwfqyFBWaIKzoAVW3rZ9BBqMwyPam1RzFjM63ACOGa', NULL, NULL),
(00000000002, 'forex', '$2y$08$9t8l1XGVuZeD0x8fBSqnPOeu.nPJdBEFqM5FSQCIFAkljm.TG0K2O', '2014-09-11 11:02:26', 0, b'1', 'Cw5Fubw3hjvtIwPIL6enUsTFscJ81C8AUhrTzJA0UJ1qkq3SjEfRuqngKX06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anhnho` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `loai` int(10) unsigned NOT NULL,
  `thoidiemdang` datetime NOT NULL,
  `thoidiemsua` datetime DEFAULT '0000-00-00 00:00:00',
  `luotxem` int(11) NOT NULL,
  `xem` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=128 ;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `anhnho`, `noidung`, `loai`, `thoidiemdang`, `thoidiemsua`, `luotxem`, `xem`) VALUES
(1, 'Tầm Nhìn Thế Giới Corporation', '', 'Forextrader.vn là website cung cấp chiến luợc giao dịch và hệ thống quản lý vốn hàng đầu tại Việt Nam. Sứ mệnh của chúng tôi là trở thành tổ chức đứng đầu trong lĩnh vực tư vấn tài chính và là sự lựa chọn số 1 của nhà đầu tư cá nhân và tổ chức.', 0, '2014-09-02 23:30:58', '2014-09-04 19:45:20', 11, 0),
(2, '<b>Chiến lược Forex 1</b>', '', 'Nội dung chiến lược Forex 1', 1, '2014-08-31 23:31:30', '2014-09-08 22:55:59', 71, 0),
(3, 'Chiến lược Forex 2', '', 'Nội dung chiến lược Forex 2', 1, '2014-09-01 23:31:59', '2014-09-05 00:42:22', 42, 1),
(4, 'Chiến lược Forex 3', '', 'Nội dung chiến lược Forex 3', 1, '2014-09-02 23:32:40', '2014-09-08 22:53:04', 25, 1),
(5, 'Chiến lược Forex 4', '', 'Nội dung chiến lược Forex 4', 1, '2014-09-03 23:33:04', '2014-09-04 23:47:15', 18, 1),
(6, 'Kim loại quý 1', '', 'Nội dung kim loại quý 1', 2, '2014-08-31 23:34:35', '2014-09-06 01:05:39', 22, 1),
(7, 'Kim loại quý 2', '', 'Nội dung kim loại quý 2', 2, '2014-09-02 23:35:00', '2014-09-06 16:14:38', 15, 1),
(9, 'Kim loại quý 4', '', 'Nội dung kim loại quý 4', 2, '2014-09-03 23:35:41', '2014-09-04 20:02:01', 15, 1),
(10, 'Hàng hóa 1', '', 'Nội dung hàng hóa 1', 3, '2014-08-31 23:36:20', '2014-09-08 13:35:40', 12, 1),
(11, 'Hàng hóa 2', '', 'Nội dung hàng hóa 2', 3, '2014-09-02 23:36:47', '2014-09-04 19:45:20', 10, 1),
(12, 'Hàng hóa 3', '', 'Nội dung hàng hóa 3', 3, '2014-09-01 23:37:13', '2014-09-04 19:45:20', 12, 1),
(13, 'Hàng hóa 4', '', 'Nội dung hàng hóa 4', 3, '2014-09-03 23:37:17', '2014-09-04 20:06:44', 12, 1),
(14, 'Cổ phiếu 1', '', 'Nội dung cổ phiếu 1', 4, '2014-08-31 23:38:23', '2014-09-05 14:16:07', 13, 1),
(15, 'Cổ phiếu 2', '', 'Nội dung cổ phiếu 2', 4, '2014-09-01 23:38:27', '2014-09-04 20:12:31', 11, 1),
(16, 'Cổ phiếu 3', '', 'Nội dung cổ phiếu 3', 4, '2014-09-02 23:38:31', '2014-09-04 19:45:20', 11, 1),
(17, 'Cổ phiếu 4', '', 'Nội dung cổ phiếu 4', 4, '2014-09-03 23:38:35', '2014-09-04 20:12:01', 13, 1),
(18, 'Sàn giao dịch bài 1', '', 'Nội dung sàn giao dịch bài 1', 5, '2014-08-31 23:40:04', '2014-09-05 01:21:55', 15, 0),
(19, 'Sàn giao dịch bài 2', '', 'Nội dung sàn giao dịch bài 2', 5, '2014-09-01 23:40:07', '2014-09-04 19:45:20', 10, 0),
(20, 'Sàn giao dịch bài 3', '', 'Nội dung sàn giao dịch bài 3', 5, '2014-09-02 23:40:10', '2014-09-04 21:51:58', 14, 0),
(21, 'Sàn giao dịch bài 4', '', 'Nội dung sàn giao dịch bài 4', 5, '2014-09-03 23:40:14', '2014-09-05 22:34:39', 18, 0),
(22, 'Tin tức trong nước 1', '', 'Nội dung dung tin tức trong nước 1', 6, '2014-08-31 20:04:27', '2014-09-04 21:29:17', 16, 0),
(23, 'Tin tức trong nước 2', '', 'Nội dung dung tin tức trong nước 2', 6, '2014-09-01 20:04:31', '2014-09-04 21:11:48', 14, 0),
(24, 'Tin tức trong nước 3', '', 'Nội dung dung tin tức trong nước 3', 6, '2014-09-02 20:04:34', '2014-09-04 19:45:20', 10, 0),
(25, 'Tin tức trong nước 4', '', 'Nội dung dung tin tức trong nước 4', 6, '2014-09-03 20:04:37', '2014-09-04 19:45:20', 17, 0),
(27, 'Tin tức ngoài nước 2', '', 'Nội dung dung tin tức ngoài nước 2', 7, '2014-09-01 20:06:23', '2014-09-04 21:07:08', 13, 0),
(28, 'Tin tức ngoài nước 3', '', 'Nội dung dung tin tức ngoài nước 3', 7, '2014-09-02 20:06:26', '2014-09-04 21:10:50', 12, 0),
(29, 'Tin tức ngoài nước 4', '', 'Nội dung dung tin tức ngoài nước 4', 7, '2014-09-03 20:06:30', '2014-09-10 01:08:55', 11, 0),
(30, 'Sản phẩm giao dịch 1', '', 'Nội dung sản phẩm giao dịch 1', 8, '2014-08-31 20:07:44', '2014-09-05 00:40:41', 22, 0),
(31, 'Sản phẩm giao dịch 2', '', 'Nội dung sản phẩm giao dịch 2', 8, '2014-09-01 20:07:48', '2014-09-04 21:34:36', 14, 0),
(32, 'Sản phẩm giao dịch 3', '', 'Nội dung sản phẩm giao dịch 3', 8, '2014-09-02 20:07:51', '2014-09-04 21:31:39', 12, 0),
(33, 'Sản phẩm giao dịch 4', '', 'Nội dung sản phẩm giao dịch 4', 8, '2014-09-03 20:07:54', '2014-09-04 21:38:31', 11, 0),
(34, 'Kiến thức giao dịch 1', '', 'Nội dung kiến thức giao dịch 1', 9, '2014-08-31 01:05:25', '2014-09-04 23:51:04', 14, 0),
(35, 'Kiến thức giao dịch 2', '', 'Nội dung kiến thức giao dịch 2', 9, '2014-09-01 01:05:28', '2014-09-04 21:48:14', 11, 0),
(36, 'Kiến thức giao dịch 3', '', 'Nội dung kiến thức giao dịch 3', 9, '2014-09-02 01:05:32', '2014-09-04 19:45:20', 11, 0),
(37, 'Kiến thức giao dịch 4', '', 'Nội dung kiến thức giao dịch 4', 9, '2014-09-04 01:05:35', '2014-09-04 21:48:24', 17, 0),
(38, 'Kinh nghiệm giao dịch 1', '', 'Nội dung kinh nghiệm giao dịch 1', 10, '2014-09-01 13:43:11', '2014-09-04 23:41:42', 12, 0),
(39, 'Kinh nghiệm giao dịch 2', '', 'Nội dung kinh nghiệm giao dịch 2', 10, '2014-09-01 13:43:17', '2014-09-04 19:45:20', 13, 0),
(40, 'Kinh nghiệm giao dịch 3', '', 'Nội dung kinh nghiệm giao dịch 3', 10, '2014-09-03 13:43:19', '2014-09-04 23:42:31', 13, 0),
(41, 'Kinh nghiệm giao dịch 4', '', 'Nội dung kinh nghiệm giao dịch 4', 10, '2014-09-04 13:43:23', '2014-09-04 23:41:39', 17, 0),
(121, 'Hoa hậu Việt Nam từ chối thi Miss World', 'uploads//1dc5d00d633d7e8b8fcce95b1bdee4e2.jpg', '<h1><strong>&Ocirc;ng L&ecirc; Xu&acirc;n Sơn - Tổng bi&ecirc;n tập b&aacute;o Tiền Phong - cho biết, đơn vị giữ bản quyền cử th&iacute; sinh đi thi quốc tế nhiều lần li&ecirc;n hệ nhờ &ocirc;ng t&aacute;c động nhưng Đặng Thu Thảo từ chối.</strong></h1>\r\n\r\n<div class="content" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 1.16em; vertical-align: baseline; font-family: ''Times New Roman'', Times, serif; line-height: 1.4; background: transparent;">\r\n<p><em>- Thời gian qua, th&ocirc;ng tin về quy định cấm cửa th&iacute; sinh sống thử tại cuộc thi Hoa hậu Việt Nam 2014 g&acirc;y nhiều tranh c&atilde;i. Điều n&agrave;y l&agrave;m ảnh hưởng thế n&agrave;o đến lượng th&iacute; sinh đăng k&yacute; tham gia, thưa &ocirc;ng?</em></p>\r\n\r\n<p>- T&ocirc;i nghĩ l&agrave; sẽ c&oacute; một số người người định đăng k&yacute; dự thi nhưng phải th&ocirc;i v&igrave; quy định về t&igrave;nh trạng h&ocirc;n nh&acirc;n trong Thể lệ cuộc thi, nhưng những trường như thế chắc chắn kh&ocirc;ng nhiều.</p>\r\n\r\n<p>Bởi thể lệ cuộc thi d&ugrave;ng thuật ngữ ph&aacute;p l&yacute; &ldquo;chưa chung sống với ai như vợ chồng&rdquo;&nbsp; m&agrave; đ&aacute;p ứng ti&ecirc;u ch&iacute; &ldquo;chung sống với nhau như vợ chồng&rdquo; th&igrave; phải theo khoản d điều 2 Th&ocirc;ng tư li&ecirc;n tịch số 01/2001/TTLT- TAND- VKS- BTP: Nam v&agrave; nữ được coi l&agrave; chung sống với nhau như vợ chồng nếu: &ldquo;Họ c&oacute; đủ điều kiện để kết h&ocirc;n theo quy định của Luật h&ocirc;n nh&acirc;n v&agrave; gia đ&igrave;nh năm 2000 v&agrave; thuộc một trong c&aacute;c trường hợp sau đ&acirc;y (t&ocirc;i nhấn mạnh): C&oacute; tổ chức lễ cưới khi về chung sống với nhau; Việc họ chung sống với nhau được gia đ&igrave;nh (một hoặc cả hai b&ecirc;n) chấp nhận; Việc họ về chung sống với nhau được người kh&aacute;c hay tổ chức chứng kiến; Họ thực sự c&oacute; chung sống với nhau, chăm s&oacute;c, gi&uacute;p đỡ nhau, c&ugrave;ng nhau x&acirc;y dựng gia đ&igrave;nh&rdquo;.</p>\r\n\r\n<div class="inner-article" style="box-sizing: border-box; margin: 10px 0px; padding: 0px; border: 1px solid rgb(221, 221, 221); outline: 0px; vertical-align: baseline; float: left; width: 480px; height: 120px; overflow: hidden; clear: both; position: relative; background: transparent;">\r\n<p style="margin-left:0px; margin-right:10px !important">&nbsp;</p>\r\n\r\n<h1><a href="http://news.zing.vn/Hoa-hau-Viet-Nam-2014-cam-tiet-thi-sinh-song-thu-post455579.html#inner-article" style="box-sizing: border-box; margin: 0px; padding: 0px 10px 0px 181.625px; vertical-align: baseline; text-decoration: none; color: rgb(0, 0, 0); display: block; width: 478px; height: 118px; float: left; background: rgb(247, 247, 247);" target="_blank">Hoa hậu Việt Nam 2014 cấm tiệt th&iacute; sinh sống thử</a></h1>\r\n\r\n<p><a href="http://news.zing.vn/Hoa-hau-Viet-Nam-2014-cam-tiet-thi-sinh-song-thu-post455579.html#inner-article" style="box-sizing: border-box; margin: 0px; padding: 0px 10px 0px 181.625px; vertical-align: baseline; text-decoration: none; color: rgb(0, 0, 0); display: block; width: 478px; height: 118px; float: left; background: rgb(247, 247, 247);" target="_blank">Cuộc thi nhan sắc lớn nhất nước sẽ mở rộng những điều khoản trong quy chế cuộc thi nhằm thanh lọc những th&iacute; sinh kh&ocirc;ng đủ ti&ecirc;u chuẩn tham gia.</a></p>\r\n</div>\r\n\r\n<table cellpadding="0" cellspacing="0" class="picture" style="background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; clear:both; color:rgb(51, 51, 51); font-family:arial,helvetica,sans-serif; font-size:12px; line-height:14px; margin:8px 0px; outline:0px; padding:0px; position:relative; vertical-align:baseline; width:480px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="vertical-align:baseline"><img alt="''Hoa hậu Việt Nam từ chối thi Miss World''" src="http://img.v3.news.zdn.vn/w660/Uploaded/ayhtaau/2014_09_10/_DSC6339.jpg" style="background:transparent; border:0px; box-sizing:border-box; cursor:pointer; height:auto; margin:0px 0px -3px; max-width:100%; outline:0px; padding:0px; vertical-align:baseline; width:480px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:baseline">&Ocirc;ng L&ecirc; Xu&acirc;n Sơn - Tổng bi&ecirc;n tập b&aacute;o Tiền Phong.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><em>- Từ suy nghĩ n&agrave;o m&agrave; BTC quyết định đưa điều n&agrave;y v&agrave;o quy chế thi năm nay?</em></p>\r\n\r\n<p>- Bởi thể lệ cuộc thi Hoa hậu Việt Nam từ trước đến nay đều quy định th&iacute; sinh chưa lập gia đ&igrave;nh lần n&agrave;o. M&agrave; việc chung sống như vợ chồng như tr&ecirc;n tuy hiện nay kh&ocirc;ng được ph&aacute;p luật c&ocirc;ng nhận l&agrave; h&ocirc;n nh&acirc;n thực tế nhưng theo quan niệm trong văn h&oacute;a Việt Nam th&igrave; người như thế vẫn l&agrave; đ&atilde; c&oacute; gia đ&igrave;nh. V&agrave; hiện tượng tr&ecirc;n kh&ocirc;ng&nbsp; được ph&aacute;p luật thừa nhận v&agrave;&nbsp; khuyến kh&iacute;ch.</p>\r\n\r\n<p>Ti&ecirc;u ch&iacute; cuộc thi l&agrave; lựa chọn những thiếu nữ t&agrave;i sắc ti&ecirc;u biểu cho vẻ đẹp của người con g&aacute;i Việt Nam cả về h&igrave;nh thức lẫn t&acirc;m hồn. Th&iacute; sinh dự thi phải đ&aacute;p ứng cả c&aacute;c quy định của ph&aacute;p luật lẫn văn h&oacute;a, đạo đức truyền thống của d&acirc;n tộc.</p>\r\n\r\n<p><em>- Năm 2012 đ&atilde; c&oacute; trường hợp th&iacute; sinh Vương Thu Phương v&agrave;o tận v&ograve;ng chung kết v&agrave; tới gần ng&agrave;y chung kết BTC mới ph&aacute;t hiện vi phạm quy chế, năm nay, BTC sẽ l&agrave;m thế n&agrave;o để hạn chế rủi ro?&nbsp;</em></p>\r\n\r\n<p>- Phải l&agrave;m kỹ hơn nữa kh&acirc;u thẩm tra nh&acirc;n th&acirc;n của th&iacute; sinh. Nếu để lọt th&igrave; phải ki&ecirc;n quyết xử l&yacute; theo c&aacute;c quy định của ph&aacute;p luật v&agrave; Thể lệ cuộc thi.</p>\r\n\r\n<p><em>- Chung khảo ph&iacute;a Nam hằng năm đều được tổ chức tại TP.HCM, năm nay lại chọn Bạc Li&ecirc;u, v&igrave; sao vậy?</em></p>\r\n\r\n<p>- Việc n&agrave;y nằm trong nỗ lực của BTC n&acirc;ng cấp cuộc thi năm nay. Nhiều kỳ thi Hoa hậu Việt Nam li&ecirc;n tiếp, v&ograve;ng chung khảo đều l&agrave;m theo phương thức &ldquo;nội bộ&rdquo;, kh&ocirc;ng tr&igrave;nh diễn ra c&ocirc;ng ch&uacute;ng. Năm nay, BTC c&oacute; điều kiện để &nbsp;tổ chức kỹ hơn v&agrave; tr&igrave;nh diễn v&ograve;ng chung khảo ra c&ocirc;ng ch&uacute;ng.</p>\r\n\r\n<p>Chung khảo ph&iacute;a Nam chọn Bạc Li&ecirc;u v&igrave; ở thời điểm hiện tại, tỉnh n&agrave;y c&oacute; những điều kiện thuận lợi để tổ chức, l&atilde;nh đạo tỉnh v&agrave; c&aacute;c cơ quan chức năng của tỉnh ủng hộ mạnh mẽ việc cuộc thi về với Bạc Li&ecirc;u. Từ ph&iacute;a m&igrave;nh, b&aacute;o Tiền Phong v&agrave; BTC cuộc thi muốn bằng h&agrave;nh động thiết thực ủng hộ chủ trương của tỉnh &ldquo;Bạc Li&ecirc;u đi l&ecirc;n từ văn h&oacute;a&rdquo;.</p>\r\n\r\n<p><em>- Trước sức &eacute;p của một cuộc thi t&igrave;m kiếm hoa hậu qua truyền h&igrave;nh, BTC Hoa hậu Việt Nam 2014 c&oacute; g&igrave; lo lắng?</em></p>\r\n\r\n<p>- Ch&uacute;ng t&ocirc;i tin v&agrave;o uy t&iacute;n, sức thu h&uacute;t v&agrave; hấp dẫn của cuộc thi Hoa hậu Việt Nam. Đ&acirc;y l&agrave; năm thứ 26 v&agrave; cuộc thi lần thứ 14. Cuộc thi Hoa hậu đầu ti&ecirc;n của nước Việt Nam thống nhất c&oacute; lịch sử d&agrave;i l&acirc;u, sự ổn định v&agrave; uy t&iacute;n m&agrave; t&ocirc;i d&aacute;m n&oacute;i l&agrave; kh&ocirc;ng cuộc thi sắc đẹp n&agrave;o ở nước ta s&aacute;nh được.</p>\r\n\r\n<p>V&agrave; danh vị &ldquo;Hoa hậu Việt Nam&rdquo; cũng l&agrave; một sự kh&aacute;c biệt.</p>\r\n\r\n<p><em>- Theo th&ocirc;ng lệ, lu&ocirc;n c&oacute; một cựu hoa hậu trong th&agrave;nh phần ban gi&aacute;m khảo. Năm nay th&igrave; sao?</em></p>\r\n\r\n<p>- Ch&uacute;ng t&ocirc;i vẫn l&agrave;m đ&uacute;ng theo truyền thống.</p>\r\n\r\n<table cellpadding="0" cellspacing="0" class="picture" style="background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; clear:both; color:rgb(51, 51, 51); font-family:arial,helvetica,sans-serif; font-size:12px; line-height:14px; margin:8px 0px; outline:0px; padding:0px; position:relative; vertical-align:baseline; width:480px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="vertical-align:baseline"><img alt="Đương kim Hoa hậu Việt Nam 2012 Đặng Thu Thảo" src="http://img.v3.news.zdn.vn/w660/Uploaded/ayhtaau/2014_09_10/thu_thao.jpg" style="background:transparent; border:0px; box-sizing:border-box; cursor:pointer; height:auto; margin:0px 0px -3px; max-width:100%; outline:0px; padding:0px; vertical-align:baseline; width:480px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:baseline">Đương kim Hoa hậu Việt Nam 2012 Đặng Thu Thảo</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><em>- Thời gian vừa qua Diễm Hương của Hoa hậu thế giới người Việt v&agrave; Triệu Thị H&agrave; của Hoa hậu c&aacute;c d&acirc;n tộc Việt Nam đều bị tố n&oacute;i dối, c&oacute; c&aacute;c quan hệ t&igrave;nh &aacute;i kh&ocirc;ng trong s&aacute;ng v&agrave; bị đề nghị tước vương miện hoa hậu nhưng lại kh&ocirc;ng bị tước do chưa c&oacute; nghị định cụ thể. Nếu Hoa hậu Việt Nam gặp trường hợp tương tự, BTC sẽ xử l&yacute; thế n&agrave;o?</em></p>\r\n\r\n<p>- C&aacute;ch đ&uacute;ng nhất l&agrave; BTC phải tu&acirc;n theo theo đ&uacute;ng c&aacute;c quy định của ph&aacute;p luật v&agrave; thể lệ của cuộc thi.</p>\r\n\r\n<p><em>- Đương kim Hoa hậu Việt Nam Đặng Thu Thảo được đ&aacute;nh gi&aacute; rất cao nhưng lại kh&ocirc;ng phải ứng vi&ecirc;n Hoa hậu Thế giới, Ho&agrave;n vũ trong cả hai năm 2013, 2014. &Ocirc;ng giải th&iacute;ch ra sao?</em></p>\r\n\r\n<p>- Hầu hết c&aacute;c hoa hậu v&agrave; một số &Aacute; hậu của cuộc thi Hoa hậu Việt Nam đều được mời đại diện cho Việt Nam tại c&aacute;c cuộc thi hoa hậu quốc tế c&oacute; uy t&iacute;n nhất. Việc họ nhận lời hay kh&ocirc;ng phụ thuộc v&agrave;o &yacute; nguyện v&agrave; kế hoạch c&aacute; nh&acirc;n, điều kiện học tập, c&ocirc;ng việc ở thời điểm cụ thể.</p>\r\n\r\n<p>Trường hợp Hoa hậu Đặng Thu Thảo, c&aacute; nh&acirc;n t&ocirc;i đ&atilde; tiếp một vị đại diện đơn vị đưa th&iacute; sinh đi một trong hai cuộc thi kể tr&ecirc;n đến đề nghị t&aacute;c động th&ecirc;m để Thảo nhận lời đi thi. Tuy nhi&ecirc;n,&nbsp; Hoa hậu ưu ti&ecirc;n việc học tiếp v&agrave; chưa muốn thử sức ở &ldquo;đấu trường&rdquo; đ&oacute;.</p>\r\n</div>\r\n', 1, '2014-09-10 21:01:13', '2014-09-10 21:56:23', 87, 0),
(127, 'Cầu thủ bị loại khỏi U19 Việt Nam tới động viên các đồng đội', 'uploads//1dc5d00d633d7e8b8fcce95b1bdee4e2.jpg', '<h1>Cầu thủ bị loại khỏi U19 Việt Nam tới động vi&ecirc;n c&aacute;c đồng đội</h1>\r\n\r\n<div class="summary zing" style="box-sizing: border-box; margin: 0px; padding: 8px 0px; border: 0px; outline: 0px; font-size: 1.16em; vertical-align: baseline; color: rgb(68, 68, 68); line-height: 1.4; font-family: ''Times New Roman'', Times, serif; font-weight: bold; background: transparent;">\r\n<p>Hai cầu thủ đ&atilde; bị HLV Graechen gạch t&ecirc;n khỏi th&agrave;nh phần U19 Việt Nam c&oacute; mặt tại s&acirc;n tập VFF để động vi&ecirc;n c&aacute;c đồng đội trước trận b&aacute;n kết giải U19 ĐNA.</p>\r\n</div>\r\n\r\n<div class="content" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 1.16em; vertical-align: baseline; font-family: ''Times New Roman'', Times, serif; line-height: 1.4; background: transparent;">\r\n<div class="inner-video" style="box-sizing: border-box; margin: 4px 0px 10px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; float: left; width: 660px; height: 371px; overflow: hidden; background: transparent;">\r\n<p><a href="http://news.zing.vn/Cau-thu-U19-Viet-Nam-tich-cuc-dut-diem-post456222.html" style="box-sizing: border-box; margin: 0px; padding: 0px; vertical-align: baseline; text-decoration: none; color: rgb(0, 0, 0); display: block; width: 660px; height: 371px; float: left; position: relative; background: transparent;" target="_blank">Video</a></p>\r\n\r\n<h1><a href="http://news.zing.vn/Cau-thu-U19-Viet-Nam-tich-cuc-dut-diem-post456222.html" style="box-sizing: border-box; margin: 0px; padding: 0px; vertical-align: baseline; text-decoration: none; color: rgb(0, 0, 0); display: block; width: 660px; height: 371px; float: left; position: relative; background: transparent;" target="_blank">Cầu thủ U19 Việt Nam t&iacute;ch cực dứt điểm</a></h1>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<table cellpadding="0" cellspacing="0" class="picture" style="background:rgb(240, 240, 240); border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; clear:both; color:rgb(51, 51, 51); font-family:arial,helvetica,sans-serif; font-size:12px; line-height:14px; margin:8px 0px 25px; outline:0px; padding:0px; position:relative; vertical-align:baseline; width:660px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="vertical-align:baseline"><img alt="Cầu thủ bị loại khỏi U19 Việt Nam tới động viên các đồng đội" src="http://img.v3.news.zdn.vn/w660/Uploaded/zatmrs/2014_09_10/113_8943_zing_1.JPG" style="background:transparent; border:0px; box-sizing:border-box; cursor:pointer; height:auto; margin:0px 0px -3px; max-width:100%; outline:0px; padding:0px; vertical-align:baseline; width:660px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:baseline">Trung vệ Trương Văn Thiết sau khi trở về từ Brunei đ&atilde; kh&ocirc;ng được tiếp tục tập luyện c&ugrave;ng ĐT U19 Việt Nam. Thay thế v&agrave;o đ&oacute; HLV Graechen triệu tập Anh Thi của T&acirc;y Ninh để bổ sung cho h&agrave;ng thủ.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellpadding="0" cellspacing="0" class="picture" style="background:rgb(240, 240, 240); border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; clear:both; color:rgb(51, 51, 51); font-family:arial,helvetica,sans-serif; font-size:12px; line-height:14px; margin:8px 0px 25px; outline:0px; padding:0px; position:relative; vertical-align:baseline; width:660px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="vertical-align:baseline"><img alt="Cầu thủ bị loại khỏi U19 Việt Nam tới động viên các đồng đội" src="http://img.v3.news.zdn.vn/w660/Uploaded/zatmrs/2014_09_10/Van_Thiet_zing.jpg" style="background:transparent; border:0px; box-sizing:border-box; cursor:pointer; height:auto; margin:0px 0px -3px; max-width:100%; outline:0px; padding:0px; vertical-align:baseline; width:660px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:baseline">Trương Văn Thiết tr&ograve; truyện c&ugrave;ng Trường &#39;H&iacute;p&#39; v&agrave; kh&iacute;ch lệ c&aacute;c đồng đội quyết t&acirc;m gi&agrave;nh chiến thắng để lần thứ 2 li&ecirc;n tiếp lọt v&agrave;o trận chung kết giải U19 Đ&ocirc;ng Nam &Aacute;. Tại giải đấu n&agrave;y năm ngo&aacute;i, Văn Thiết cũng đ&atilde; g&oacute;p c&ocirc;ng kh&ocirc;ng nhỏ đưa U19 Việt Nam đi tới trận đấu cuối c&ugrave;ng.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellpadding="0" cellspacing="0" class="picture" style="background:rgb(240, 240, 240); border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; clear:both; color:rgb(51, 51, 51); font-family:arial,helvetica,sans-serif; font-size:12px; line-height:14px; margin:8px 0px 25px; outline:0px; padding:0px; position:relative; vertical-align:baseline; width:660px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="vertical-align:baseline"><img alt="Cầu thủ bị loại khỏi U19 Việt Nam tới động viên các đồng đội" src="http://img.v3.news.zdn.vn/w660/Uploaded/zatmrs/2014_09_10/Luu_Cong_Son_zing.jpg" style="background:transparent; border:0px; box-sizing:border-box; cursor:pointer; height:auto; margin:0px 0px -3px; max-width:100%; outline:0px; padding:0px; vertical-align:baseline; width:660px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:baseline">Lưu C&ocirc;ng Sơn (số 20) cũng đ&atilde; từng được HLV Graechen triệu tập l&ecirc;n ĐT U19 Việt Nam, nhưng lối chơi của cầu thủ n&agrave;y kh&ocirc;ng hợp với sơ đồ chiến thuật của vị chiến lược gia người Ph&aacute;p n&ecirc;n anh đ&agrave;nh phải trở về tiếp tục tập luyện c&ugrave;ng CLB chủ quản.&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellpadding="0" cellspacing="0" class="picture" style="background:rgb(240, 240, 240); border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; clear:both; color:rgb(51, 51, 51); font-family:arial,helvetica,sans-serif; font-size:12px; line-height:14px; margin:8px 0px 25px; outline:0px; padding:0px; position:relative; vertical-align:baseline; width:660px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="vertical-align:baseline"><img alt="Cầu thủ bị loại khỏi U19 Việt Nam tới động viên các đồng đội" src="http://img.v3.news.zdn.vn/w660/Uploaded/zatmrs/2014_09_10/Toan_doi_2_zing.jpg" style="background:transparent; border:0px; box-sizing:border-box; cursor:pointer; height:auto; margin:0px 0px -3px; max-width:100%; outline:0px; padding:0px; vertical-align:baseline; width:660px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:baseline">Đội h&igrave;nh thi đấu ch&iacute;nh trong trận đấu ng&agrave;y h&ocirc;m qua (9/9) gặp U19 Nhật Bản chạy thả lỏng để hồi phục.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n', 7, '2014-09-10 23:35:50', '0000-00-00 00:00:00', 68, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
