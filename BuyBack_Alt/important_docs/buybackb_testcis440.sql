-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 06:02 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buybackb_testcis440`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `AccountId` int(15) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `PhoneNum` int(10) DEFAULT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) DEFAULT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Zip` int(9) NOT NULL,
  `ReferralCode` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`AccountId`),
  KEY `ReferralCode` (`ReferralCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE IF NOT EXISTS `models` (
  `ModelId` int(10) NOT NULL AUTO_INCREMENT,
  `Brand` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Size` int(6) NOT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `Carrier` varchar(50) NOT NULL,
  PRIMARY KEY (`ModelId`),
  KEY `ModelId` (`ModelId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderId` int(15) NOT NULL AUTO_INCREMENT,
  `AccountId` int(15) NOT NULL,
  `ModelId` int(10) NOT NULL,
  `ESN` varchar(30) NOT NULL,
  `PostedPrice` float NOT NULL,
  `AdjustedPrice` float NOT NULL,
  `ShipStatus` varchar(50) NOT NULL,
  `DateReceived` datetime NOT NULL,
  `DateShipped` datetime DEFAULT NULL,
  `DateConfirmed` datetime DEFAULT NULL,
  `Payment` varchar(30) NOT NULL,
  `ReferralCode` varchar(15) DEFAULT NULL,
  `PostalRouting` varchar(255) DEFAULT NULL,
  `TrackingNumber` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`OrderId`),
  KEY `AccountId` (`AccountId`),
  KEY `ModelId` (`ModelId`),
  KEY `ReferralCode` (`ReferralCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `Id` int(10) NOT NULL,
  `Mint` int(6) NOT NULL,
  `Good` int(6) NOT NULL,
  `Poor` int(6) NOT NULL,
  `Broken` int(6) NOT NULL,
  `Dead` int(6) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_model` FOREIGN KEY (`ModelId`) REFERENCES `models` (`ModelId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_accid` FOREIGN KEY (`AccountId`) REFERENCES `accounts` (`AccountId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `fk_mdlid` FOREIGN KEY (`Id`) REFERENCES `models` (`ModelId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
