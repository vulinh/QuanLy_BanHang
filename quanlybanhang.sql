-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2013 at 07:52 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quanlybanhang`
--
CREATE DATABASE IF NOT EXISTS `quanlybanhang` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `quanlybanhang`;

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
  `time` datetime NOT NULL,
  `total` double NOT NULL,
  `idUser` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idTypeBill` (`idTypeBill`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categoryproducts`
--

CREATE TABLE IF NOT EXISTS `categoryproducts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameCategoryProduct` varchar(255) NOT NULL,
  `idManufacture` int(11) unsigned NOT NULL,
  `enable` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idManufacture` (`idManufacture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
-- Table structure for table `debit`
--

CREATE TABLE IF NOT EXISTS `debit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idBill` int(10) unsigned NOT NULL,
  `moneyDebit` double unsigned NOT NULL,
  `moneyDebited` double unsigned NOT NULL,
  `description` text,
  `idSupplier` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idBill` (`idBill`),
  KEY `idSupplier` (`idSupplier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
-- Table structure for table `detailstocks`
--

CREATE TABLE IF NOT EXISTS `detailstocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idProduct` int(10) unsigned DEFAULT NULL,
  `quatity` int(10) unsigned DEFAULT NULL,
  `quatityExport` int(10) unsigned DEFAULT NULL,
  `idStock` int(10) unsigned NOT NULL,
  `idBill` int(10) unsigned NOT NULL,
  `timeImport` datetime NOT NULL,
  `timeExport` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idProduct` (`idProduct`),
  KEY `idStock` (`idStock`),
  KEY `idBill` (`idBill`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `idSalary` int(10) unsigned NOT NULL,
  `bonus` double unsigned DEFAULT NULL,
  KEY `idDeparment` (`idDeparment`),
  KEY `idUser` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `idDeparment`, `position`, `isManagerSale`, `isManagerFinance`, `isManagerStock`, `idSalary`, `bonus`) VALUES
(1, 2, 'Admin', 1, 1, 1, 0, NULL),
(2, 1, NULL, 0, 0, 1, 0, NULL),
(3, 2, NULL, 0, 0, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exchangerates`
--

CREATE TABLE IF NOT EXISTS `exchangerates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameExchangeRate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
-- Table structure for table `manufacturers`
--

CREATE TABLE IF NOT EXISTS `manufacturers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nameManufacturer` varchar(255) NOT NULL,
  `logo` varchar(400) DEFAULT NULL,
  `enable` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `nameManufacturer`, `logo`, `enable`) VALUES
(1, 'Samsung', 'http://www.samsung.com/common/img/logo.png', 1),
(2, 'Sony', 'http://www.sony.com.vn/HP/images/common/sony_logo.jpg', 1);

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
  `price` double NOT NULL,
  `retail` double NOT NULL,
  `wholesale` double NOT NULL,
  `made_in` varchar(50) NOT NULL,
  `idSupplier` int(10) unsigned NOT NULL,
  `import_time` datetime NOT NULL,
  `warranty_time` varchar(100) NOT NULL,
  `tag` varchar(400) DEFAULT NULL,
  `promotion` varchar(255) DEFAULT NULL,
  `enable` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUnit` (`idUnit`),
  KEY `idExchangeRate` (`idExchangeRate`),
  KEY `idSupplier` (`idSupplier`),
  KEY `idCategoryProduct` (`idCategoryProduct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` double unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `idTypeStock`, `nameStock`, `idUser`) VALUES
(1, 1, 'abc', 3);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `typebills`
--

CREATE TABLE IF NOT EXISTS `typebills` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nameTypeBill` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `typestocks`
--

CREATE TABLE IF NOT EXISTS `typestocks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nameTypeStock` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `typestocks`
--

INSERT INTO `typestocks` (`id`, `nameTypeStock`) VALUES
(1, 'abc'),
(2, 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameUnit` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pword`, `name`, `address`, `phone`, `mobile`, `idArea`, `taxID`, `accountBank`, `bank`, `website`, `debtLimit`, `debtCurrent`, `discount`, `nickYahoo`, `nickSkype`, `fax`, `isCustomer`, `isPartner`, `isEmployee`, `isGavePosition`) VALUES
(1, 'admin', 'admin', 'admin', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1),
(2, 'nv1', 'abc', 'nv1', '', '', '', 1, '', '', '', '', NULL, NULL, NULL, '', '', '', 0, 0, 1, 1),
(3, 'nv2', 'abc', 'nv2', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1),
(4, 'nv3', 'abc', 'nv3', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`idTypeBill`) REFERENCES `typebills` (`id`);

--
-- Constraints for table `categoryproducts`
--
ALTER TABLE `categoryproducts`
  ADD CONSTRAINT `categoryproducts_ibfk_1` FOREIGN KEY (`idManufacture`) REFERENCES `manufacturers` (`id`);

--
-- Constraints for table `debit`
--
ALTER TABLE `debit`
  ADD CONSTRAINT `debit_ibfk_1` FOREIGN KEY (`idBill`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `debit_ibfk_2` FOREIGN KEY (`idSupplier`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `detailbill`
--
ALTER TABLE `detailbill`
  ADD CONSTRAINT `detailbill_ibfk_1` FOREIGN KEY (`idBill`) REFERENCES `bills` (`id`);

--
-- Constraints for table `detailstocks`
--
ALTER TABLE `detailstocks`
  ADD CONSTRAINT `detailstocks_ibfk_1` FOREIGN KEY (`idProduct`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `detailstocks_ibfk_2` FOREIGN KEY (`idStock`) REFERENCES `stocks` (`id`),
  ADD CONSTRAINT `detailstocks_ibfk_3` FOREIGN KEY (`idBill`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `detailstocks_ibfk_4` FOREIGN KEY (`idBill`) REFERENCES `bills` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`idDeparment`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`idBill`) REFERENCES `bills` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`idUnit`) REFERENCES `units` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`idExchangeRate`) REFERENCES `exchangerates` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`idSupplier`) REFERENCES `suppliers` (`id`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`idCategoryProduct`) REFERENCES `categoryproducts` (`id`);

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
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idArea`) REFERENCES `areas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
