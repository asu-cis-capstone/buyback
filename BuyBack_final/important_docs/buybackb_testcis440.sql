-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2015 at 05:02 AM
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
  `PhoneNum` varchar(10) DEFAULT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) DEFAULT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Zip` int(9) NOT NULL,
  `ReferralCode` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`AccountId`),
  KEY `ReferralCode` (`ReferralCode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`AccountId`, `Email`, `LastName`, `FirstName`, `PhoneNum`, `Address1`, `Address2`, `City`, `State`, `Zip`, `ReferralCode`) VALUES
(9, 'kylesalomo@me.com', 'Salomon', 'Kyle', '2147483647', '1111 8th St', '13', 'Scottsdale', 'Arizona', 85253, '1324656'),
(10, 'kingsalomone@cox.net', 'Salomon', 'Kyle', '2147483647', '1111 8th St', '14', 'Phoenix', 'Arizona', 85253, '1234568'),
(11, 'kingme@coxnet', 'Salomon', 'Kyle', '1111111111', '1123 n. 90th street', '178', 'Tempe', 'Ariz', 85253, '777898'),
(12, 'kylesalomo@me.com', 'Salomon', 'Kyle', '2147483647', '1111 8th St', '44', 'Phoenix', 'Arizona', 66669, '232342334'),
(13, 'kylesalomo@me.com', 'Salomon', 'Kyle', '2147483647', '1111 8th St', '44', 'Phoenix', 'Arizona', 66669, '232342334'),
(14, 'dennis.anderson@asu.edu', 'Salomon', 'Denise', '2147483647', '1123 n. 90th street', 'asd', 'Scottsdale', 'Arizona', 85256, '35216'),
(15, 'kylesalomo@me.com', 'Salomon', 'Kyle', '2147483647', '1123 n. 90th street', '66', 'Phoenix', 'Arizona', 85253, '12414564'),
(16, 'kylesalomo@me.com', 'Salomon', 'Kyle', '2147483647', '1123 n. 90th street', '66', 'Phoenix', 'Arizona', 85253, '12414564'),
(17, 'jd@me.com', 'Doan', 'Jane', '2147483647', '1111 nt 9th st', '44', 'Phoenix', 'Arizona', 11111, '85254'),
(18, 'aefef@dsfsvs', 'asdfasces', 'asdfaefe', '1234567890', 'zSXdcasca', '', 'ascbs', 'sadvasv', 85258, 'oepk9t'),
(19, 'asdo@sorvnsa', 'asdvlajsd', 'sfvna', '1123456789', 'slfkjefn', '', 'nrvei', 'nwevnce', 85214, 'fp9bk1'),
(20, 'eoisdnsef@sdlocn', 'sldvkjvnw', 'asdlfkjasdf', '1234567890', 'advnadrvnwe', '', 'sveon', 'fsdvjonsd ', 64646, 'ml51lk'),
(21, 'aefef@dsfsvs.com', 'ASDADVA', 'sfvna', '1123456789', 'hello st', '', 'mea', 'IL', 65454, 'c4pgbb'),
(22, 'aefef@dsfsvs.com', 'ASDADVA', 'sfvna', '1123456789', 'hello st', '', 'mea', 'IL', 65454, '4q2ljm'),
(23, 'aefef@dsfsvs.com', 'Dean', 'asdlfkjasdf', '1123456789', 'slfkjefn', '', 'ascbs', 'AZ', 85214, 'fykwqt'),
(24, 'whoowhooo@yahoo.com', 'asdfasces', 'sfvna', '1123456789', 'asdfjsj2', '', 'nrvei', 'GA', 65464, '3wkfpq'),
(25, 'aefef@dsfsvs.com', 'asdvlajsd', 'sfvna', '1123456789', 'advnadrvnwe', '', 'ascbs', 'DE', 54862, 'incen8'),
(26, 'asdo@sorvnsa.com', 'asdvlajsd', 'Jimmy', '1234567890', 'zSXdcasca', '', 'nrvei', 'IA', 85214, 'dzb2ec'),
(27, 'whoowhooo@yahoo.com', 'sldvkjvnw', 'jonk', '1123456789', 'asdfjsj2', '', 'mea', 'DE', 65454, 'oll2pa');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`ModelId`, `Brand`, `Model`, `Size`, `Color`, `Carrier`) VALUES
(1, 'iPhone', '4', 16, NULL, 'AT&T'),
(2, 'iPhone', '4', 32, NULL, 'AT&T'),
(3, 'iPhone', '4S', 16, NULL, 'AT&T'),
(4, 'iPhone', '4S', 32, NULL, 'AT&T'),
(5, 'iPhone', '4S', 64, NULL, 'AT&T'),
(6, 'iPhone', '5', 16, NULL, 'AT&T'),
(7, 'iPhone', '5', 32, NULL, 'AT&T'),
(8, 'iPhone', '5', 64, NULL, 'AT&T'),
(9, 'iPhone', '5C', 16, NULL, 'AT&T'),
(10, 'iPhone', '5C', 32, NULL, 'AT&T'),
(11, 'iPhone', '5S', 16, NULL, 'AT&T'),
(12, 'iPhone', '5S', 32, NULL, 'AT&T'),
(13, 'iPhone', '5S', 64, NULL, 'AT&T'),
(14, 'iPhone', '6', 16, NULL, 'AT&T'),
(15, 'iPhone', '6', 64, NULL, 'AT&T'),
(16, 'iPhone', '6', 128, NULL, 'AT&T'),
(17, 'iPhone', '6+', 16, NULL, 'AT&T'),
(18, 'iPhone', '6+', 64, NULL, 'AT&T'),
(19, 'iPhone', '6+', 128, NULL, 'AT&T'),
(20, 'samsung', 'S4', 16, NULL, 'AT&T'),
(21, 'samsung', 'S4', 32, NULL, 'AT&T'),
(22, 'samsung', 'S4', 64, NULL, 'AT&T'),
(23, 'samsung', 'S4 Mini', 16, NULL, 'AT&T'),
(24, 'samsung', 'S5', 16, NULL, 'AT&T'),
(25, 'samsung', 'S5', 32, NULL, 'AT&T'),
(26, 'samsung', 'S5 Mini', 16, NULL, 'AT&T'),
(27, 'samsung', 'S5 Sport', 16, NULL, 'AT&T'),
(28, 'samsung', 'S5 Sport', 32, NULL, 'AT&T'),
(29, 'samsung', 'Note 4', 32, NULL, 'AT&T'),
(30, 'samsung', 'Note 4 Edge', 32, NULL, 'AT&T');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderId` int(15) NOT NULL AUTO_INCREMENT,
  `AccountId` int(15) NOT NULL,
  `ModelId` int(10) NOT NULL,
  `PostedPrice` float NOT NULL,
  `ShipStatus` varchar(50) NOT NULL,
  `ShipMethod` varchar(50) NOT NULL,
  `DateReceived` datetime NOT NULL,
  `DateShipped` datetime DEFAULT NULL,
  `DateConfirmed` datetime DEFAULT NULL,
  `Payment` varchar(30) NOT NULL,
  `ReferralCode` varchar(15) DEFAULT NULL,
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
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`Id`, `Mint`, `Good`, `Poor`, `Broken`, `Dead`) VALUES
(1, 70, 65, 30, 20, 5),
(2, 80, 75, 40, 30, 10),
(3, 100, 90, 50, 30, 20),
(4, 105, 95, 60, 30, 20),
(5, 115, 100, 70, 30, 20),
(6, 140, 130, 110, 70, 50),
(7, 155, 145, 135, 75, 50),
(8, 170, 160, 145, 80, 50),
(9, 150, 140, 120, 75, 50),
(10, 160, 150, 130, 80, 50),
(11, 210, 200, 150, 100, 50),
(12, 220, 210, 170, 110, 50),
(13, 240, 230, 190, 120, 50),
(14, 400, 390, 210, 130, 60),
(15, 420, 400, 230, 130, 60),
(16, 440, 410, 250, 130, 60),
(17, 475, 455, 350, 180, 80),
(18, 490, 470, 360, 180, 80),
(19, 500, 480, 370, 180, 80),
(20, 250, 240, 130, 80, 30),
(21, 260, 250, 140, 80, 30),
(22, 270, 260, 150, 80, 30),
(23, 280, 270, 160, 80, 30),
(24, 330, 300, 170, 80, 30),
(25, 350, 320, 180, 80, 30),
(26, 320, 290, 160, 70, 30),
(27, 350, 320, 180, 90, 30),
(28, 360, 330, 190, 80, 30),
(29, 370, 350, 200, 100, 40),
(30, 400, 370, 210, 100, 40);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_accid` FOREIGN KEY (`AccountId`) REFERENCES `accounts` (`AccountId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_model` FOREIGN KEY (`ModelId`) REFERENCES `models` (`ModelId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `fk_mdlid` FOREIGN KEY (`Id`) REFERENCES `models` (`ModelId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
