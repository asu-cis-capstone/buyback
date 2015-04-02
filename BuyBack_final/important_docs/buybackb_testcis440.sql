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
(30, 'samsung', 'Note 4 Edge', 32, NULL, 'AT&T'),
('31', 'iPhone', '4', '16', NULL, 'TMOBILE'),
		   ('32', 'iPhone', '4', '32', NULL, 'TMOBILE'),
		   ('33', 'iPhone', '4S', '16', NULL, 'TMOBILE'),
		   ('34', 'iPhone', '4S', '32', NULL, 'TMOBILE'),
		   ('35', 'iPhone', '4S', '64', NULL, 'TMOBILE'),
		   ('36', 'iPhone', '5', '16', NULL, 'TMOBILE'),
		   ('37', 'iPhone', '5', '32', NULL, 'TMOBILE'),
		   ('38', 'iPhone', '5', '64', NULL, 'TMOBILE'),
		   ('39', 'iPhone', '5C', '16', NULL, 'TMOBILE'),
		   ('40', 'iPhone', '5C', '32', NULL, 'TMOBILE'),
		   ('41', 'iPhone', '5S', '16', NULL, 'TMOBILE'),
		   ('42', 'iPhone', '5S', '32', NULL, 'TMOBILE'),
		   ('43', 'iPhone', '5S', '64', NULL, 'TMOBILE'),
		   ('44', 'iPhone', '6', '16', NULL, 'TMOBILE'),
		   ('45', 'iPhone', '6', '64', NULL, 'TMOBILE'),
		   ('46', 'iPhone', '6', '128', NULL, 'TMOBILE'),
		   ('47', 'iPhone', '6+', '16', NULL, 'TMOBILE'),
		   ('48', 'iPhone', '6+', '64', NULL, 'TMOBILE'),
		   ('49', 'iPhone', '6+', '128', NULL, 'TMOBILE'),

			('51', 'iPhone', '4', '16', NULL, 'VERIZON'),
		   ('52', 'iPhone', '4', '32', NULL, 'VERIZON'),
		   ('53', 'iPhone', '4S', '16', NULL, 'VERIZON'),
		   ('54', 'iPhone', '4S', '32', NULL, 'VERIZON'),
		   ('55', 'iPhone', '4S', '64', NULL, 'VERIZON'),
		   ('56', 'iPhone', '5', '16', NULL, 'VERIZON'),
		   ('57', 'iPhone', '5', '32', NULL, 'VERIZON'),
		   ('58', 'iPhone', '5', '64', NULL, 'VERIZON'),
		   ('59', 'iPhone', '5C', '16', NULL, 'VERIZON'),
		   ('60', 'iPhone', '5C', '32', NULL, 'VERIZON'),
		   ('61', 'iPhone', '5S', '16', NULL, 'VERIZON'),
		   ('62', 'iPhone', '5S', '32', NULL, 'VERIZON'),
		   ('63', 'iPhone', '5S', '64', NULL, 'VERIZON'),
		   ('64', 'iPhone', '6', '16', NULL, 'VERIZON'),
		   ('65', 'iPhone', '6', '64', NULL, 'VERIZON'),
		   ('66', 'iPhone', '6', '128', NULL, 'VERIZON'),
		   ('67', 'iPhone', '6+', '16', NULL, 'VERIZON'),
		   ('68', 'iPhone', '6+', '64', NULL, 'VERIZON'),
		   ('69', 'iPhone', '6+', '128', NULL, 'VERIZON'),

		   ('71', 'iPhone', '4', '16', NULL, 'SPRINT'),
		   ('72', 'iPhone', '4', '32', NULL, 'SPRINT'),
		   ('73', 'iPhone', '4S', '16', NULL, 'SPRINT'),
		   ('74', 'iPhone', '4S', '32', NULL, 'SPRINT'),
		   ('75', 'iPhone', '4S', '64', NULL, 'SPRINT'),
		   ('76', 'iPhone', '5', '16', NULL, 'SPRINT'),
		   ('77', 'iPhone', '5', '32', NULL, 'SPRINT'),
		   ('78', 'iPhone', '5', '64', NULL, 'SPRINT'),
		   ('79', 'iPhone', '5C', '16', NULL, 'SPRINT'),
		   ('80', 'iPhone', '5C', '32', NULL, 'SPRINT'),
		   ('81', 'iPhone', '5S', '16', NULL, 'SPRINT'),
		   ('82', 'iPhone', '5S', '32', NULL, 'SPRINT'),
		   ('83', 'iPhone', '5S', '64', NULL, 'SPRINT'),
		   ('84', 'iPhone', '6', '16', NULL, 'SPRINT'),
		   ('85', 'iPhone', '6', '64', NULL, 'SPRINT'),
		   ('86', 'iPhone', '6', '128', NULL, 'SPRINT'),
		   ('87', 'iPhone', '6+', '16', NULL, 'SPRINT'),
		   ('88', 'iPhone', '6+', '64', NULL, 'SPRINT'),
		   ('89', 'iPhone', '6+', '128', NULL, 'SPRINT'),

  	           ('91', 'iPhone', '4', '16', NULL, 'UNLOCKED'),
		   ('92', 'iPhone', '4', '32', NULL, 'UNLOCKED'),
		   ('93', 'iPhone', '4S', '16', NULL, 'UNLOCKED'),
		   ('94', 'iPhone', '4S', '32', NULL, 'UNLOCKED'),
		   ('95', 'iPhone', '4S', '64', NULL, 'UNLOCKED'),
		   ('96', 'iPhone', '5', '16', NULL, 'UNLOCKED'),
		   ('97', 'iPhone', '5', '32', NULL, 'UNLOCKED'),
		   ('98', 'iPhone', '5', '64', NULL, 'UNLOCKED'),
		   ('99', 'iPhone', '5C', '16', NULL, 'UNLOCKED'),
		   ('100', 'iPhone', '5C', '32', NULL, 'UNLOCKED'),
		   ('101', 'iPhone', '5S', '16', NULL, 'UNLOCKED'),
		   ('102', 'iPhone', '5S', '32', NULL, 'UNLOCKED'),
		   ('103', 'iPhone', '5S', '64', NULL, 'UNLOCKED'),
		   ('104', 'iPhone', '6', '16', NULL, 'UNLOCKED'),
		   ('105', 'iPhone', '6', '64', NULL, 'UNLOCKED'),
		   ('106', 'iPhone', '6', '128', NULL, 'UNLOCKED'),
		   ('107', 'iPhone', '6+', '16', NULL, 'UNLOCKED'),
		   ('108', 'iPhone', '6+', '64', NULL, 'UNLOCKED'),
		   ('109', 'iPhone', '6+', '128', NULL, 'UNLOCKED');
		   

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderId` int(15) NOT NULL AUTO_INCREMENT,
  `AccountId` int(15) NOT NULL,
  `ModelId` int(10) NOT NULL,
  `PostedPrice` int(10) NOT NULL,
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
(30, 400, 370, 210, 100, 40),

(31, 73, 63, 33, 23, 3),
(32, 83, 73, 43, 33, 13),
(33, 103, 93, 53, 33, 23),
(34, 103, 93, 63, 33, 23),
(35, 113, 103, 73, 33, 23),
(36, 143, 133, 113, 73, 53),
(37, 153, 143, 133, 73, 53),
(38, 173, 163, 143, 83, 53),
(39, 153, 143, 123, 73, 53),
(40, 163, 153, 133, 83, 53),
(41, 213, 203, 153, 103, 53),
(42, 223, 213, 173, 113, 53),
(43, 243, 233, 193, 123, 53),
(44, 403, 393, 213, 133, 63),
(45, 423, 403, 233, 133, 63),
(46, 443, 413, 253, 133, 63),
(47, 473, 453, 353, 183, 83),
(48, 493, 473, 363, 183, 83),
(49, 503, 483, 373, 183, 83),

(51, 76, 66, 36, 26, 6),
(52, 86, 76, 46, 36, 16),
(53, 106, 96, 56, 36, 26),
(54, 106, 96, 66, 36, 26),
(55, 116, 106, 76, 36, 26),
(56, 146, 136, 116, 76, 56),
(57, 156, 146, 136, 76, 56),
(58, 176, 166, 146, 86, 56),
(59, 156, 146, 126, 76, 56),
(60, 166, 156, 136, 86, 56),
(61, 216, 206, 156, 106, 56),
(62, 226, 216, 176, 116, 56),
(63, 246, 236, 196, 126, 56),
(64, 406, 396, 216, 136, 66),
(65, 426, 406, 236, 136, 66),
(66, 446, 416, 256, 136, 66),
(67, 476, 456, 356, 186, 86),
(68, 496, 476, 366, 186, 86),
(69, 506, 486, 376, 186, 86),

(71, 77, 67, 37, 27, 7),
(72, 87, 77, 47, 37, 17),
(73, 107, 97, 57, 37, 27),
(74, 107, 97, 67, 37, 27),
(75, 117, 107, 77, 37, 27),
(76, 147, 137, 117, 77, 57),
(77, 157, 147, 137, 77, 57),
(78, 177, 167, 147, 87, 57),
(79, 157, 147, 127, 77, 57),
(80, 167, 157, 137, 83, 57),
(81, 217, 207, 157, 107, 57),
(82, 227, 217, 177, 117, 57),
(83, 247, 237, 197, 127, 57),
(84, 407, 397, 217, 137, 67),
(85, 427, 407, 237, 137, 67),
(86, 447, 417, 257, 137, 67),
(87, 477, 457, 357, 187, 87),
(88, 497, 477, 367, 187, 87),
(89, 507, 487, 377, 187, 87),

(91, 79, 69, 39, 29, 9),
(92, 89, 79, 49, 39, 19),
(93, 109, 99, 59, 39, 29),
(94, 109, 99, 69, 39, 29),
(95, 119, 109, 79, 39, 29),
(96, 149, 139, 119, 79, 59),
(97, 159, 149, 139, 79, 59),
(98, 179, 169, 149, 89, 59),
(99, 159, 149, 129, 79, 59),
(100, 169, 159, 139, 89, 59),
(101, 219, 209, 159, 109, 59),
(102, 229, 219, 179, 119, 59),
(103, 249, 239, 199, 129, 59),
(104, 409, 399, 219, 139, 69),
(105, 429, 409, 239, 139, 69),
(106, 449, 419, 259, 139, 69),
(107, 479, 459, 359, 189, 89),
(108, 499, 479, 369, 189, 89),
(109, 509, 489, 379, 189, 89);

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
