-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2013 at 02:23 AM
-- Server version: 5.5.33-31.1
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vulinh_quanly`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameArea` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `nameArea`) VALUES
(1, 'TP. Hồ Chí Minh'),
(2, 'Đà Nẵng'),
(3, 'Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idTypeBill` int(10) unsigned NOT NULL,
  `time` datetime DEFAULT NULL,
  `total` double DEFAULT NULL,
  `idUser` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idTypeBill` (`idTypeBill`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=115 ;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `idTypeBill`, `time`, `total`, `idUser`, `status`) VALUES
(50, 1, NULL, NULL, 1, 0),
(51, 1, NULL, NULL, 1, 0),
(52, 2, NULL, NULL, 1, 0),
(53, 2, NULL, 2000000, 1, 0),
(54, 2, NULL, NULL, 1, 0),
(55, 2, NULL, 3000000, 1, 0),
(56, 2, NULL, 1000, 1, 0),
(57, 2, NULL, 1001000, 1, 0),
(58, 1, NULL, 0, 1, 0),
(59, 1, NULL, 1000000, 1, 0),
(60, 1, NULL, 1002000, 1, 0),
(61, 2, NULL, NULL, 1, 0),
(63, 2, NULL, 1000000, 1, 1),
(64, 2, NULL, 1001000, 1, 1),
(65, 2, NULL, 1000000, 1, 1),
(66, 2, NULL, 1000, 1, 1),
(67, 2, NULL, 1001000, 1, 1),
(68, 1, NULL, 1000000, 1, 1),
(69, 1, NULL, 1000000, 1, 1),
(70, 1, NULL, 1021000, 1, 1),
(72, 2, NULL, 1000000, 1, 0),
(73, 1, NULL, 1000000, 1, 0),
(74, 1, NULL, 1000000, 1, 0),
(75, 1, NULL, 1000000, 1, 0),
(76, 1, NULL, 2000000, 1, 0),
(77, 1, NULL, 1000000, 1, 0),
(78, 1, NULL, 22000, 1, 0),
(79, 1, NULL, 1000, 1, 1),
(80, 2, NULL, 50000000, 3, 0),
(81, 2, NULL, NULL, 1, 0),
(82, 2, NULL, NULL, 1, 0),
(83, 2, NULL, 40000000, 1, 0),
(84, 2, NULL, 50000000, 1, 0),
(85, 2, NULL, 850000000, 1, 0),
(86, 2, NULL, 50000000, 1, 0),
(87, 2, NULL, 150000000, 1, 0),
(88, 1, NULL, NULL, 1, 0),
(90, 2, NULL, 110000000, 1, 0),
(91, 2, NULL, 50000000, 1, 1),
(92, 2, NULL, 7000000, 1, 1),
(93, 2, NULL, 3000000, 1, 1),
(94, 2, NULL, 9000000, 1, 1),
(95, 2, NULL, 250000000, 1, 1),
(96, 2, NULL, 7000000, 1, 1),
(97, 2, NULL, 1700000000, 1, 1),
(98, 2, NULL, 70000000, 1, 1),
(99, 2, NULL, 7000000, 1, 1),
(100, 1, NULL, 170000000, 1, 1),
(101, 1, NULL, NULL, 1, 0),
(102, 2, NULL, 50000000, 1, 1),
(103, 2, NULL, 50000000, 1, 1),
(104, 2, NULL, 150000000, 1, 1),
(105, 1, NULL, 3000000, 1, 1),
(106, 1, NULL, NULL, 1, 0),
(107, 1, NULL, 3000000, 1, 1),
(108, 2, NULL, NULL, 1, 0),
(109, 1, NULL, NULL, 1, 0),
(110, 2, NULL, NULL, 1, 0),
(111, 1, NULL, NULL, 1, 0),
(112, 2, NULL, 330000000, 1, 1),
(113, 1, NULL, 58000000, 1, 0),
(114, 1, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categoryproducts`
--

CREATE TABLE IF NOT EXISTS `categoryproducts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameCategoryProduct` varchar(255) NOT NULL,
  `idParent` int(11) NOT NULL,
  `enable` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `categoryproducts`
--

INSERT INTO `categoryproducts` (`id`, `nameCategoryProduct`, `idParent`, `enable`) VALUES
(1, 'abc', 0, 1),
(2, 'Máy Tính Bảng', 0, 1),
(3, 'Laptop', 0, 1),
(4, 'Điện Thoại', 0, 1),
(5, 'Khác', 0, 1),
(6, 'Mainboard for Intel', 0, 1),
(7, 'Mainboard for AMD', 0, 1),
(8, 'Phần Mềm', 0, 1),
(9, 'Máy Chơi Game', 0, 1),
(10, 'Mainboard Server', 0, 1),
(11, 'CPU- Bộ Vi Xử Lí', 0, 1),
(12, 'VGA - Card Màn Hình', 0, 1),
(13, 'Ram for Desktop', 0, 1),
(14, 'Ram for Laptop', 0, 1),
(15, 'SSD', 0, 1),
(16, 'Ổ Cứng Gắn  Trong', 0, 1),
(17, 'Ổ Cứng Gắn Ngoài', 0, 1),
(18, 'Ổ Cứng Laptop', 0, 1),
(19, 'HDD Box & Docking', 0, 1),
(20, 'USB - Flash Disk', 0, 1),
(21, 'Màn Hình LCD', 0, 1),
(22, 'Kit Keyboard & Mouse', 0, 1),
(23, 'Keyboard - Bàn Phím', 0, 1),
(24, 'Mouse - Chuột', 0, 1),
(25, 'Mouse Pads', 0, 1),
(26, 'Tai Nghe', 0, 1),
(27, 'Card Âm Thanh', 0, 1),
(28, 'Network - Thiết Bị Mạng', 0, 1),
(29, 'Case - Thùng Máy', 0, 1),
(30, 'PSU - Nguồn', 0, 1),
(31, 'UPS - Bộ Lưu Điện', 0, 1),
(32, 'Máy in - Printer', 0, 1),
(33, 'Loa - Speaker', 0, 1),
(34, 'Tản Nhiệt Nước', 0, 1),
(35, 'Tản Nhiệt Cho Laptop', 0, 1),
(36, 'Tản Nhiệt Khí - Air Cooling', 0, 1),
(37, 'Quản Tản Nhiệt Case', 0, 1),
(38, 'Kem Tản Nhiệt - Thermal Pad', 0, 1),
(39, 'Ổ Quang - ODD', 0, 1),
(40, 'Các Loại Linh Kiện Khác', 0, 1),
(41, 'kho Hàng Cũ', 0, 1),
(42, 'Acer', 3, 1),
(43, 'ASUS', 3, 1),
(44, 'Ultrabook', 43, 1),
(45, 'i7', 44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categoryservices`
--

CREATE TABLE IF NOT EXISTS `categoryservices` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nameCategoryService` varchar(200) NOT NULL,
  `enable` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `debited`
--

CREATE TABLE IF NOT EXISTS `debited` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idBill` int(10) unsigned NOT NULL,
  `moneyDebit` double unsigned NOT NULL,
  `description` text,
  `idUser` int(11) unsigned NOT NULL,
  `time` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idBill` (`idBill`),
  KEY `idSupplier` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `debited`
--

INSERT INTO `debited` (`id`, `idBill`, `moneyDebit`, `description`, `idUser`, `time`, `status`) VALUES
(7, 105, 3000000, NULL, 5, '2013-12-03', 1),
(8, 107, 3000000, NULL, 5, '2013-12-03', 1),
(9, 113, 58000000, NULL, 5, '2013-12-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `debits`
--

CREATE TABLE IF NOT EXISTS `debits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idBill` int(10) unsigned NOT NULL,
  `moneyDebit` double unsigned NOT NULL,
  `description` text,
  `idSupplier` int(11) unsigned NOT NULL,
  `time` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idBill` (`idBill`),
  KEY `idSupplier` (`idSupplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `debits`
--

INSERT INTO `debits` (`id`, `idBill`, `moneyDebit`, `description`, `idSupplier`, `time`, `status`) VALUES
(2, 91, 50000000, NULL, 1, '2013-11-30', 0),
(3, 92, 7000000, NULL, 1, '2013-11-30', 0),
(4, 93, 3000000, NULL, 1, '2013-11-30', 0),
(5, 96, 7000000, NULL, 1, '2013-11-30', 1),
(6, 97, 1700000000, NULL, 1, '2013-11-30', 1),
(7, 98, 70000000, NULL, 1, '2013-11-30', 1),
(8, 99, 7000000, NULL, 1, '2013-11-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameDepartment` varchar(100) NOT NULL,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `nameDepartment`, `note`) VALUES
(1, 'abc', NULL),
(2, 'xyz', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detailbill`
--

CREATE TABLE IF NOT EXISTS `detailbill` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idProduct` int(10) unsigned NOT NULL,
  `quatity` int(10) unsigned NOT NULL,
  `price` double unsigned NOT NULL,
  `idBill` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idBill` (`idBill`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detailcat`
--

CREATE TABLE IF NOT EXISTS `detailcat` (
  `idCategoryProduct` int(11) NOT NULL,
  `idManufacturer` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`idCategoryProduct`,`idManufacturer`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detailcat`
--

INSERT INTO `detailcat` (`idCategoryProduct`, `idManufacturer`, `count`) VALUES
(13, 14, 4),
(12, 7, 5),
(12, 5, 4),
(11, 4, 7),
(11, 3, 8),
(4, 1, 1),
(2, 5, 2),
(2, 3, 1),
(1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detailstocks`
--

CREATE TABLE IF NOT EXISTS `detailstocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idProduct` int(10) unsigned DEFAULT NULL,
  `quatity` int(10) unsigned DEFAULT '0',
  `quantityExport` int(10) unsigned DEFAULT '0',
  `idStock` int(10) unsigned NOT NULL,
  `idBill` int(10) unsigned NOT NULL,
  `timeImport` datetime NOT NULL,
  `timeExport` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idProduct` (`idProduct`),
  KEY `idStock` (`idStock`),
  KEY `idBill` (`idBill`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=300 ;

--
-- Dumping data for table `detailstocks`
--

INSERT INTO `detailstocks` (`id`, `idProduct`, `quatity`, `quantityExport`, `idStock`, `idBill`, `timeImport`, `timeExport`) VALUES
(273, 12, 10, 0, 1, 86, '2013-11-30 17:41:15', '0000-00-00 00:00:00'),
(274, 14, 10, 0, 1, 87, '2013-11-30 17:42:21', '0000-00-00 00:00:00'),
(275, 10, 10, 0, 1, 90, '2013-11-30 17:45:33', '0000-00-00 00:00:00'),
(276, 24, 10, 0, 1, 90, '2013-11-30 17:45:33', '0000-00-00 00:00:00'),
(277, 12, 10, 0, 1, 91, '2013-11-30 17:50:56', '0000-00-00 00:00:00'),
(278, 9, 1, 0, 1, 92, '2013-11-30 17:52:35', '0000-00-00 00:00:00'),
(279, 25, 1, 0, 1, 92, '2013-11-30 17:52:35', '0000-00-00 00:00:00'),
(280, 9, 1, 0, 1, 93, '2013-11-30 17:55:06', '0000-00-00 00:00:00'),
(281, 9, 3, 0, 2, 94, '2013-11-30 17:55:27', '0000-00-00 00:00:00'),
(282, 13, 10, 0, 2, 95, '2013-11-30 17:56:27', '0000-00-00 00:00:00'),
(283, 10, 1, 0, 2, 96, '2013-11-30 17:56:45', '0000-00-00 00:00:00'),
(284, 7, 10, 0, 1, 97, '2013-11-30 17:57:07', '0000-00-00 00:00:00'),
(285, 10, 10, 0, 1, 98, '2013-11-30 17:57:30', '0000-00-00 00:00:00'),
(286, 10, 1, 0, 2, 99, '2013-11-30 18:01:06', '0000-00-00 00:00:00'),
(287, 7, 0, 1, 1, 100, '0000-00-00 00:00:00', '2013-11-30 18:02:03'),
(288, 12, 10, 0, 1, 102, '2013-12-02 09:43:12', '0000-00-00 00:00:00'),
(289, 12, 10, 0, 1, 103, '2013-12-02 09:44:01', '0000-00-00 00:00:00'),
(290, 11, 10, 0, 2, 104, '2013-12-02 18:04:17', '0000-00-00 00:00:00'),
(291, 12, 10, 0, 2, 104, '2013-12-02 18:04:17', '0000-00-00 00:00:00'),
(292, 18, 10, 0, 2, 104, '2013-12-02 18:04:17', '0000-00-00 00:00:00'),
(293, 9, 0, 1, 1, 105, '0000-00-00 00:00:00', '2013-12-03 12:08:03'),
(294, 9, 0, 1, 1, 107, '0000-00-00 00:00:00', '2013-12-03 12:10:55'),
(295, 12, 11, 0, 1, 112, '2013-12-10 16:28:40', '0000-00-00 00:00:00'),
(296, 15, 11, 0, 1, 112, '2013-12-10 16:28:40', '0000-00-00 00:00:00'),
(297, 9, 0, 1, 1, 113, '2013-12-11 13:30:04', '0000-00-00 00:00:00'),
(298, 12, 0, 1, 2, 113, '2013-12-11 13:30:04', '0000-00-00 00:00:00'),
(299, 18, 0, 10, 2, 113, '2013-12-11 13:30:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(10) unsigned NOT NULL,
  `idDeparment` int(11) unsigned NOT NULL,
  `position` varchar(50) DEFAULT NULL,
  `isManagerSale` tinyint(4) NOT NULL DEFAULT '0',
  `isManagerFinance` tinyint(4) NOT NULL DEFAULT '0',
  `isManagerStock` tinyint(4) NOT NULL DEFAULT '0',
  `isManagerHuman` tinyint(4) NOT NULL DEFAULT '0',
  `idSalary` int(10) unsigned NOT NULL,
  `bonus` double unsigned DEFAULT NULL,
  `seniority` int(10) DEFAULT NULL,
  `percentage` int(11) DEFAULT NULL,
  `totalSalary` double DEFAULT NULL,
  KEY `idDeparment` (`idDeparment`),
  KEY `idUser` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `idDeparment`, `position`, `isManagerSale`, `isManagerFinance`, `isManagerStock`, `isManagerHuman`, `idSalary`, `bonus`, `seniority`, `percentage`, `totalSalary`) VALUES
(1, 2, 'Admin', 1, 1, 1, 1, 0, NULL, NULL, NULL, NULL),
(2, 2, NULL, 0, 0, 1, 0, 2, 3000000, 10, NULL, 8500000),
(3, 2, NULL, 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL),
(4, 2, NULL, 0, 0, 0, 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exchangerates`
--

CREATE TABLE IF NOT EXISTS `exchangerates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameExchangeRate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `exchangerates`
--

INSERT INTO `exchangerates` (`id`, `nameExchangeRate`) VALUES
(1, 'USD'),
(2, 'VND');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `money` double unsigned NOT NULL,
  `description` text,
  `idBill` int(10) unsigned NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idBill` (`idBill`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `money`, `description`, `idBill`, `time`) VALUES
(5, 9000000, NULL, 94, '2013-11-30 17:55:27'),
(6, 250000000, NULL, 95, '2013-11-30 17:56:27'),
(7, 50000000, NULL, 102, '2013-12-02 09:43:12'),
(8, 50000000, NULL, 103, '2013-12-02 09:44:01'),
(9, 150000000, NULL, 104, '2013-12-02 18:04:17'),
(10, 7000000, NULL, 96, '2013-12-02 18:24:09'),
(11, 1700000000, NULL, 97, '2013-12-02 18:58:18'),
(12, 330000000, NULL, 112, '2013-12-10 16:28:40'),
(13, 70000000, NULL, 98, '2013-12-10 16:29:55'),
(14, 7000000, NULL, 99, '2013-12-10 16:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `finances`
--

CREATE TABLE IF NOT EXISTS `finances` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `receipt` double unsigned NOT NULL,
  `expense` double unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `taxID` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `businessLicense` varchar(50) NOT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `field` varchar(400) NOT NULL,
  `president` varchar(100) DEFAULT NULL,
  `logo` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` int(10) unsigned NOT NULL,
  `IP` varchar(50) NOT NULL,
  `time` datetime DEFAULT NULL,
  `nameTask` varchar(100) NOT NULL,
  `namObject` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE IF NOT EXISTS `mails` (
  `idMail` int(36) NOT NULL AUTO_INCREMENT,
  `idUserSent` int(10) NOT NULL,
  `idUserReceipt` int(10) NOT NULL,
  `subject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`idMail`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`idMail`, `idUserSent`, `idUserReceipt`, `subject`, `content`, `date`, `status`) VALUES
(1, 1, 2, 'test 1', 'asjdhas dad', '0000-00-00 00:00:00', 1),
(2, 1, 3, 'test 2', 'asdak asd ad saga asuas', '2013-11-21 16:25:24', 1),
(3, 1, 1, 'test 3', 'ashd asdka 313123', '2013-11-21 17:05:03', 1),
(4, 2, 1, 'test 5', 'asdj asjdn1 2j321', '2013-11-21 17:23:31', 1),
(5, 2, 3, 'dah', 'asdasudad aud asjdad asjd asjd \r\nasd asid asd asd asdnasd d saj asjd\r\nsadasdja dasd asd jasd, asdhsakd ', '2013-11-22 13:49:14', 1),
(6, 3, 1, 'test 1', 'j k l l', '2013-11-22 14:00:15', 1),
(7, 2, 1, 'qweqwe', 'asd adiadja daa dja dad\r\nasdkaod asjdnasjd ', '2013-11-22 14:31:20', 1),
(8, 2, 1, 'sdhj asdja', 'ahjsdg adabd', '2013-11-22 15:28:09', 1),
(9, 2, 1, 'sdhj asdja', 'ahjsdg adabd', '2013-11-22 15:28:09', 1),
(10, 2, 1, 'sdhj asdja', 'ahjsdg adabd', '2013-11-22 15:28:09', 1),
(11, 1, 3, 'test', 'hehehehehe', '2013-11-30 01:43:50', 1),
(12, 3, 1, 'dajkshd', 'sadh sajdasdjasd', '2013-11-30 01:44:22', 1),
(13, 3, 1, 'test', 'asdy as iasd id ad', '2013-11-30 01:46:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE IF NOT EXISTS `manufacturers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nameManufacturer` varchar(255) NOT NULL,
  `logo` varchar(400) DEFAULT NULL,
  `enable` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `nameManufacturer`, `logo`, `enable`) VALUES
(1, 'Samsung', 'http://www.samsung.com/common/img/logo.png', 1),
(2, 'Sony', 'http://www.sony.com.vn/HP/images/common/sony_logo.jpg', 1),
(3, 'Intel', '', 1),
(4, 'AMD', '', 1),
(5, 'Asus', '', 1),
(6, 'MSI', '', 1),
(7, 'Gigabyte', '', 1),
(8, 'EVGA', '', 1),
(9, 'HIS', '', 1),
(10, 'Sparkle', '', 1),
(11, 'Thương Hiệu Khác', '', 1),
(12, 'Ram for Server', '', 1),
(13, 'Mushkin USA', '', 1),
(14, 'Corsair', '', 1),
(15, 'OCZ', '', 1),
(16, 'Kingston', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameProduct` varchar(255) NOT NULL,
  `idCategoryProduct` int(10) unsigned NOT NULL,
  `idExchangeRate` int(10) unsigned DEFAULT NULL,
  `idUnit` int(10) unsigned DEFAULT NULL,
  `retail` double unsigned DEFAULT NULL,
  `wholesale` double unsigned DEFAULT NULL,
  `price` double NOT NULL,
  `quantity` int(11) DEFAULT '0',
  `made_in` varchar(50) NOT NULL,
  `idManufacturer` int(10) unsigned DEFAULT NULL,
  `idSupplier` int(10) unsigned NOT NULL,
  `import_time` datetime NOT NULL,
  `warranty_time` varchar(100) NOT NULL,
  `tag` varchar(400) DEFAULT NULL,
  `promotion` varchar(255) DEFAULT NULL,
  `enable` tinyint(4) DEFAULT NULL,
  `idProductManufacturer` varchar(10) DEFAULT NULL,
  `idSite` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUnit` (`idUnit`),
  KEY `idExchangeRate` (`idExchangeRate`),
  KEY `idSupplier` (`idSupplier`),
  KEY `idCategoryProduct` (`idCategoryProduct`),
  KEY `idManufacturer` (`idManufacturer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nameProduct`, `idCategoryProduct`, `idExchangeRate`, `idUnit`, `retail`, `wholesale`, `price`, `quantity`, `made_in`, `idManufacturer`, `idSupplier`, `import_time`, `warranty_time`, `tag`, `promotion`, `enable`, `idProductManufacturer`, `idSite`) VALUES
(7, 'Iphone 5s', 1, 1, 1, 170000000, 17500000, 170000000, 15, 'USA', NULL, 2, '0000-00-00 00:00:00', '1 năm', 'smartphone', '', 1, '543211', 'SP_7'),
(9, 'Samsung Galaxy Mini', 4, 2, 1, 3100000, 2900000, 3000000, 2, 'Hàn Quốc', 1, 1, '2013-11-28 15:12:37', '12 tháng', 'galaxy', '', 1, '12345abcxy', 'SP_9'),
(10, 'Asus Memopad HD7', 2, 2, 1, 7500000, 7300000, 7000000, 22, 'CN', 5, 3, '2013-11-30 12:35:06', '12', '', '', 1, 'ahd7 ', 'SP_10'),
(11, 'Intel IRISS-TM105A - 10.1" Tablet', 2, 2, 1, 5500000, 5300000, 5000000, 10, 'Tàu', 3, 3, '2013-11-30 12:42:55', '12', '', '', 1, ' IRISS-TM1', 'SP_11'),
(12, 'Asus FonePad', 2, 2, 1, 5500000, 5300000, 5000000, 70, 'Tàu', 5, 2, '2013-11-30 12:44:13', '12', '', '', 1, 'FonePad', 'SP_12'),
(13, 'Intel Core i7-4960X 3.6GHz (4.0GHz Turbo) Ivy Bridge Extreme LGA 2011', 11, 2, 1, 26000000, 25200000, 25000000, 12, 'Tàu', 3, 3, '2013-11-30 12:46:02', '24', 'Core i7', '', 1, '4960X ', 'SP_13'),
(14, 'Intel Core i7-4930K 3.4GHz Ivy Bridge LGA 2011', 11, 2, 1, 15600000, 152000000, 15000000, 10, 'Tàu', 3, 2, '2013-11-30 12:49:32', '24', 'i7', '', 1, '4930K', 'SP_14'),
(15, 'Intel Core i7-3960X 3.3GHz (3.9GHz Turbo) Sandy Bridge-E LGA 2011', 11, 2, 1, 25500000, 25300000, 25000000, 11, 'Tàu', 3, 3, '2013-11-30 12:51:40', '24', 'i7', '', 1, '3960X', 'SP_15'),
(16, 'Intel Xeon E3-1230V3 3.3GHz (3.7GHz Turbo Boost ) Haswell LGA 1150', 11, 2, 1, 5500000, 5300000, 5000000, 0, 'Tàu', 3, 3, '2013-11-30 12:53:33', '24', 'Xeon', '', 1, 'LGA 1150', 'SP_16'),
(17, 'Intel Core i5-4430 3.0GHz (3.4GHz Turbo Boost ) Haswell LGA 1150', 11, 2, 1, 5500000, 5300000, 5000000, 0, 'Tàu', 3, 3, '2013-11-30 12:54:56', '24', 'i5', '', 1, 'i5-4430', 'SP_17'),
(18, 'Intel Xeon E3-1230V2 3.3GHz (3.7GHz Turbo Boost ) Ivy Bridge LGA 1155', 11, 2, 1, 5500000, 5300000, 5000000, 0, 'Tàu', 3, 3, '2013-11-30 12:58:45', '24', 'Xeon E3', '', 1, 'E3-1230', 'SP_18'),
(19, 'Intel Core i5-3570K 3.4GHz (3.8GHz Turbo Boost ) Ivy Bridge LGA 1155', 11, 2, 1, 5500000, 5299996, 5000000, 0, 'Tàu', 3, 3, '2013-11-30 13:00:17', '24', 'i5', '', 1, '3570K ', 'SP_19'),
(20, 'Intel Core i3-3220 (3.3GHz) Ivy Bridge LGA 1155', 11, 2, 1, 2500000, 2300000, 2000000, 0, 'Tàu', 3, 3, '2013-11-30 13:01:59', '24', 'i3', '', 1, '3220', 'SP_20'),
(21, 'AMD Vishera FXV2 8350 4.0GHz ( 4.2GHz Turbo ) AM3+ 8 Cores - Box ( Chính hãng )', 11, 2, 1, 4500000, 4300000, 4000000, 0, 'Tàu', 4, 3, '2013-11-30 13:26:44', '24', 'Socket AM3+ FX', '', 1, 'FXV2', 'SP_21'),
(22, 'AMD Vishera FXV2 8320 3.5GHz ( 4.0GHz Turbo ) AM3+ 8 Cores - Box ( Chính hãng )', 11, 2, 1, 4500000, 4300000, 4000000, 0, 'Tàu', 4, 3, '2013-11-30 13:29:29', '24', 'Socket AM3+ FX', '', 1, 'FXV2 8320', 'SP_22'),
(23, 'AMD Richland A10-6800K Black Edition 3.9 GHz Quad-Core - Box ( Chính hãng )', 11, 2, 1, 4500000, 4300000, 4000000, 0, 'Tàu', 4, 3, '2013-11-30 13:29:49', '24', 'Socket AM3+ FX', '', 1, 'A10-6800K', 'SP_23'),
(24, 'AMD Richland A8-6600K Black Edition 3.9 GHz Quad-Core - Box ( Chính hãng )', 11, 2, 1, 4500000, 4300000, 4000000, 10, 'Tàu', 4, 3, '2013-11-30 13:30:16', '24', 'Socket AM3+ FX', '', 1, ' A8-6600K', 'SP_24'),
(25, 'AMD Richland A4-4000 3.2GHz Dual-Core - Box ( Chính hãng )', 11, 2, 1, 4500000, 4300000, 4000000, 11, 'Tàu', 4, 3, '2013-11-30 13:30:38', '24', 'Socket AM3+ FX', '', 1, 'A4-4000', 'SP_25'),
(26, 'AMD Trinity A4-5300 3.4GHz ( 3.6GHz Turbo ) Dual-Core - Box ( Chính hãng )', 11, 2, 1, 4500000, 4300000, 4000000, 0, 'Tàu', 4, 3, '2013-11-30 13:31:26', '24', 'Socket FM2', '', 1, 'A4-5300', 'SP_26'),
(27, 'AMD Trinity A6-5400K Black Edition 3.6GHz ( 3.8GHz Turbo ) Dual-Core - Box ( Chính hãng )', 11, 2, 1, 4500000, 4300000, 4000000, 0, 'Tàu', 4, 3, '2013-11-30 13:31:45', '24', 'Socket FM2', '', 1, 'A6-5400K', 'SP_27'),
(28, 'Nvidia Quadro Fermi 4000', 12, 2, 1, 18000000, 17900000, 17000000, 0, 'Tàu', 5, 3, '2013-11-30 13:33:13', '24', '', '', 1, 'Fermi 4000', 'SP_28'),
(29, 'Asus HD 7750 V2 1GB ( 128 Bit ) DDR5 PCI Gen 3', 12, 2, 1, 1800000, 1790000, 1700000, 0, 'Tàu', 5, 3, '2013-11-30 13:33:51', '24', '', '', 1, 'Asus HD 77', 'SP_29'),
(30, 'Asus HD 7790 Direct CU II OC 1GB (128 bit ) DDR5', 12, 2, 1, 1800000, 1790000, 1700000, 0, 'Tàu', 5, 3, '2013-11-30 13:34:14', '24', '', '', 1, 'Asus HD 77', 'SP_30'),
(31, 'Asus Nvidia GTX 760 OC Direct CU OC 2GB ( 256 Bit ) DDR5', 12, 2, 1, 1800000, 1790000, 1700000, 0, 'Tàu', 5, 3, '2013-11-30 13:34:33', '24', '', '', 1, ' Nvidia GT', 'SP_31'),
(32, 'Gigabyte GTX 780 Windforce OC 3GB ( 384 bit ) DDR5', 12, 2, 1, 17000000, 16700000, 16000000, 0, 'Tàu', 7, 3, '2013-11-30 13:35:46', '24', '', '', 1, ' GTX 780', 'SP_32'),
(33, 'Gigabyte GTX 770 Windforce OC 2GB ( 256 bit ) DDR5', 12, 2, 1, 17000000, 16700000, 16000000, 0, 'Tàu', 7, 3, '2013-11-30 13:36:13', '24', '', '', 1, 'GTX 770', 'SP_33'),
(34, 'Gigabyte GTX 760 Windforce OC 2GB ( 256 bit ) DDR5', 12, 2, 1, 17000000, 16700000, 16000000, 0, 'Tàu', 7, 3, '2013-11-30 13:36:32', '24', '', '', 1, 'GTX 760', 'SP_34'),
(35, 'Gigabyte GTX 660 Windforce OC 2GB ( 192 bit ) DDR5 PCI Gen 3', 12, 2, 1, 17000000, 16700000, 16000000, 0, 'Tàu', 7, 3, '2013-11-30 13:36:49', '24', '', '', 1, 'GTX 660', 'SP_35'),
(36, 'Gigabyte HD 7950 Windforce 3 OC 3GB ( 384 bit ) DDR5 PCI Gen 3', 12, 2, 1, 17000000, 16700000, 16000000, 0, 'Tàu', 7, 3, '2013-11-30 13:37:08', '24', '', '', 1, ' HD 7950 ', 'SP_36'),
(37, 'Corsair Dominator Platinium 16GB ( 4x4GB ) Bus 1866 Cas 9', 13, 2, 2, 6500000, 6300000, 6000000, 0, 'Tàu', 14, 2, '2013-11-30 13:38:38', '24', '', '', 1, 'Corsair Do', 'SP_37'),
(38, 'Corsair Dominator Platinium 16GB ( 2x8GB ) Bus 1866 Cas 9', 13, 2, 2, 6500000, 6300000, 6000000, NULL, 'Tàu', 14, 2, '2013-11-30 13:39:03', '24', '', '', 1, 'Corsair Do', 'SP_38'),
(39, 'Corsair Dominator Platinium 8GB ( 2x4GB ) Bus 2133 Cas 9', 13, 2, 2, 6500000, 6300000, 6000000, NULL, 'Tàu', 14, 2, '2013-11-30 13:40:43', '24', '', '', 1, 'Corsair Do', 'SP_39'),
(40, 'Corsair Vengeance 8GB ( 1x8GB ) DDR3 bus 1600', 13, 2, 1, 17000000, 16700000, 16000000, NULL, 'Tàu', 14, 3, '2013-11-30 13:41:15', '24', '', '', 1, 'Corsair Ve', 'SP_40'),
(41, 'Test1', 2, 1, 1, 22000, 22000, 22000, NULL, 'Hàn Quốc', 1, 1, '0000-00-00 00:00:00', '12 tháng', '', '', 1, '12345677', NULL),
(43, 'Test1', 39, 1, 1, 22000, 22000, 22000, NULL, 'Hàn Quốc', 15, 1, '0000-00-00 00:00:00', '1 năm', '', '', 1, 'afdsf', NULL),
(44, 'Test1', 2, 2, 1, 22000, 22000, 22000, NULL, 'Hàn Quốc', 3, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(45, 'Test1', 18, 1, 1, 22000, 22000, 22000, NULL, 'Mỹ', 15, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '543211', NULL),
(46, 'Test1', 2, 1, 2, 22000, 22000, 22000, NULL, 'Mỹ', 2, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(48, 'Test1', 2, 2, 1, 22000, 22000, 22000, NULL, 'Hàn Quốc', 3, 1, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(49, 'Test1', 3, 1, 1, 22000, 22000, 22000, NULL, 'Hàn Quốc', 3, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(50, 'Test1', 3, 2, 2, 22000, 22000, 22000, NULL, 'Hàn Quốc', 2, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(51, 'Test1', 3, 2, 2, 22000, 22000, 22000, NULL, 'Hàn Quốc', 2, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(52, 'Test1', 16, 1, 2, 22000, 22000, 22000, NULL, 'Hàn Quốc', 13, 1, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(53, 'Test1', 3, 1, 1, 22000, 22000, 22000, NULL, 'USA', 2, 3, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(54, 'Test1', 18, 2, 1, 22000, 22000, 22000, NULL, 'Việt Nam', 12, 1, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(55, 'Test1', 2, 2, 1, 22000, 22000, 22000, 22000, 'Hàn Quốc', 3, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(56, 'Test1', 2, 1, 2, 22000, 22000, 22000, NULL, 'Hàn Quốc', 3, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(57, 'Test1', 42, 1, 2, 22000, 22000, 22000, NULL, 'USA', 3, 1, '0000-00-00 00:00:00', '12 tháng', '', '', 1, '12345677', NULL),
(58, 'Test1', 18, 2, 1, 22000, 22000, 22000, NULL, 'USA', 14, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(59, 'Test1', 18, 2, 1, 22000, 22000, 22000, NULL, 'Mỹ', 10, 1, '0000-00-00 00:00:00', '12 tháng', '', '', 1, '12345677', NULL),
(60, 'Test1', 4, 2, 1, 22000, 22000, 22000, NULL, 'Hàn Quốc', 2, 1, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(61, 'Test1', 2, 2, 2, 22000, 22000, 22000, NULL, 'Hàn Quốc', 2, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(62, 'Test1', 18, 1, 1, 22000, 22000, 22000, NULL, 'Mỹ', 15, 2, '0000-00-00 00:00:00', '12 tháng', '', '', 1, '12345677', NULL),
(63, 'Test1', 18, 2, 1, 2220000, 2220000, 2220000, NULL, 'Hàn Quốc', 15, 1, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(65, 'Test1', 17, 1, 1, 222222, 222222, 222222, NULL, 'Hàn Quốc', 14, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(66, 'Test1', 17, 1, 1, 222222222, 222222222, 222222222, NULL, 'Hàn Quốc', 12, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(67, 'Test1', 2, 2, 1, 23000, 23000, 23000, NULL, 'Hàn Quốc', 1, 2, '0000-00-00 00:00:00', '12 tháng', '', '', 1, '12345677', NULL),
(68, 'Test1', 11, 1, 1, 230000, 230000, 230000, NULL, 'Hàn Quốc', 13, 1, '0000-00-00 00:00:00', '1 năm', '', '', 1, '12345677', NULL),
(69, 'Test1', 12, 2, 1, 29000, 29000, 29000, NULL, 'Hàn Quốc', 13, 2, '0000-00-00 00:00:00', '1 năm', '', '', 1, '543211', NULL),
(70, 'Test1', 12, 1, 1, 23000, 23000, 23000, NULL, 'Hàn Quốc', 14, 2, '0000-00-00 00:00:00', '1 năm', 'laptop', '', 1, '12345677', NULL),
(71, 'Test1', 12, 1, 1, 23000, 23000, 23000, NULL, 'Hàn Quốc', 14, 2, '0000-00-00 00:00:00', '1 năm', 'laptop', '', 1, '12345677', NULL),
(72, 'Test1', 12, 1, 1, 23000, 23000, 23000, NULL, 'Hàn Quốc', 14, 2, '0000-00-00 00:00:00', '1 năm', 'laptop', '', 1, '12345677', NULL),
(73, 'Test1', 12, 1, 1, 23000, 23000, 23000, NULL, 'Hàn Quốc', 14, 2, '0000-00-00 00:00:00', '1 năm', 'laptop', '', 1, '12345677', NULL),
(74, 'Test1', 12, 1, 1, 23000, 23000, 23000, NULL, 'Hàn Quốc', 14, 2, '0000-00-00 00:00:00', '1 năm', 'laptop', '', 1, '12345677', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE IF NOT EXISTS `receipt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `money` double unsigned NOT NULL,
  `description` text,
  `idBill` int(10) unsigned NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idBill` (`idBill`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id`, `money`, `description`, `idBill`, `time`) VALUES
(4, 170000000, NULL, 100, '2013-11-30 18:02:03'),
(5, 3000000, NULL, 105, '2013-12-03 12:08:24'),
(6, 3000000, NULL, 107, '2013-12-03 12:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `amount` double unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `name`, `amount`) VALUES
(1, 'Bậc 1', 4000000),
(2, 'Bậc 2', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL DEFAULT '0',
  `nameService` varchar(100) DEFAULT NULL,
  `idCategoryService` int(10) unsigned DEFAULT NULL,
  `price` double DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `enable` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idCategoryService` (`idCategoryService`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idTypeStock` int(10) unsigned NOT NULL,
  `nameStock` varchar(200) DEFAULT NULL,
  `idUser` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idTypeStock` (`idTypeStock`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `idTypeStock`, `nameStock`, `idUser`) VALUES
(1, 1, 'Kho 01', 3),
(2, 1, 'Kho 02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameSupplier` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `accountBank` varchar(50) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `nickYahoo` varchar(255) DEFAULT NULL,
  `nickSkype` varchar(255) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `nameSupplier`, `phone`, `mobile`, `email`, `accountBank`, `bank`, `website`, `nickYahoo`, `nickSkype`, `fax`) VALUES
(1, 'abc', '12345678910', '12345678910', 'abc123@yahoo.com', '12345678910', 'abc', 'abc.com', 'abc', 'abc', '12345678910'),
(2, 'xyz', '10987654321', '10987654321', 'xyz@yahoo.com', '10987654321', 'tèo', 'xyz.com', 'xyz', 'xyz', '10987654321'),
(3, 'Công Ty Anfa', '8437155555', '0902947998', 'Saler1@anfa.com', '21039823082', 'Sacombank', 'anfa.com', 'anfa1', 'anfa2', '09826415555');

-- --------------------------------------------------------

--
-- Table structure for table `typebills`
--

CREATE TABLE IF NOT EXISTS `typebills` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nameTypeBill` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `typebills`
--

INSERT INTO `typebills` (`id`, `nameTypeBill`) VALUES
(1, 'Xuất'),
(2, 'Nhập'),
(3, 'Dịch Vụ'),
(4, 'Chi Sinh Hoạt');

-- --------------------------------------------------------

--
-- Table structure for table `typestocks`
--

CREATE TABLE IF NOT EXISTS `typestocks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nameTypeStock` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `typestocks`
--

INSERT INTO `typestocks` (`id`, `nameTypeStock`) VALUES
(1, 'Lưu trữ'),
(2, 'Hàng Tồn'),
(3, 'Hàng Đổi Trả');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameUnit` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `nameUnit`) VALUES
(1, 'cái'),
(2, 'Bộ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `pword` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(300) NOT NULL,
  `idArea` int(10) unsigned DEFAULT NULL,
  `taxID` varchar(50) DEFAULT NULL,
  `accountBank` varchar(30) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `website` varchar(150) DEFAULT NULL,
  `debtLimit` double DEFAULT NULL,
  `debtCurrent` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `nickYahoo` varchar(200) DEFAULT NULL,
  `nickSkype` varchar(200) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `isCustomer` tinyint(4) DEFAULT '1',
  `isPartner` tinyint(4) DEFAULT '0',
  `isEmployee` tinyint(4) DEFAULT '0',
  `isGavePosition` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idArea` (`idArea`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pword`, `name`, `address`, `phone`, `mobile`, `email`, `idArea`, `taxID`, `accountBank`, `bank`, `website`, `debtLimit`, `debtCurrent`, `discount`, `nickYahoo`, `nickSkype`, `fax`, `isCustomer`, `isPartner`, `isEmployee`, `isGavePosition`) VALUES
(1, 'admin', 'admin', 'Nguyễn Văn ABC', '', '01698616831', '', '', 1, '', '', '', '', NULL, NULL, NULL, '', '', '', 0, 0, 1, 1),
(2, 'nv1', 'abc', 'nv1', '', '', '', '', 1, '', '', '', '', NULL, NULL, NULL, '', '', '', 0, 0, 1, 1),
(3, 'nv2', 'abc', 'nv2', NULL, NULL, NULL, '', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1),
(4, 'nv3', 'abc', 'nv3', NULL, NULL, NULL, '', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1),
(5, 'kh1', 'xyz', 'Khách Vãng Lai', NULL, NULL, NULL, 'hoangvietanh@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 0),
(6, 'nv4', 'abc', 'nv4', '', '', '', '', 1, '', '', '', '', NULL, NULL, NULL, '', '', '', 0, 0, 1, 0),
(7, 'nv5', 'abc', 'Lung Thị Linh', '', '', '', '', 2, '', '', '', '', NULL, NULL, NULL, '', '', '', 0, 0, 1, 0),
(8, 'nv6', 'abc', 'Lung Thị Linh', '', '', '', '', 1, '', '', '', '', NULL, NULL, NULL, '', '', '', 0, 0, 1, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`idTypeBill`) REFERENCES `typebills` (`id`);

--
-- Constraints for table `debited`
--
ALTER TABLE `debited`
  ADD CONSTRAINT `debited_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Constraints for table `debits`
--
ALTER TABLE `debits`
  ADD CONSTRAINT `debits_ibfk_1` FOREIGN KEY (`idSupplier`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `detailbill`
--
ALTER TABLE `detailbill`
  ADD CONSTRAINT `detailbill_ibfk_1` FOREIGN KEY (`idBill`) REFERENCES `bills` (`id`);

--
-- Constraints for table `detailstocks`
--
ALTER TABLE `detailstocks`
  ADD CONSTRAINT `detailstocks_ibfk_7` FOREIGN KEY (`idBill`) REFERENCES `bills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailstocks_ibfk_3` FOREIGN KEY (`idBill`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `detailstocks_ibfk_5` FOREIGN KEY (`idProduct`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailstocks_ibfk_6` FOREIGN KEY (`idStock`) REFERENCES `stocks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_4` FOREIGN KEY (`idDeparment`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_3` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`idBill`) REFERENCES `bills` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_10` FOREIGN KEY (`idSupplier`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_6` FOREIGN KEY (`idCategoryProduct`) REFERENCES `categoryproducts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_7` FOREIGN KEY (`idExchangeRate`) REFERENCES `exchangerates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_8` FOREIGN KEY (`idUnit`) REFERENCES `units` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_9` FOREIGN KEY (`idManufacturer`) REFERENCES `manufacturers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`idBill`) REFERENCES `bills` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`idCategoryService`) REFERENCES `categoryservices` (`id`);

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`idTypeStock`) REFERENCES `typestocks` (`id`),
  ADD CONSTRAINT `stocks_ibfk_3` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`idArea`) REFERENCES `areas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
