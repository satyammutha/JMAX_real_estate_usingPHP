-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2015 at 04:48 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jmax`
--
CREATE DATABASE `jmax` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jmax`;

-- --------------------------------------------------------

--
-- Table structure for table `addeuro`
--

CREATE TABLE IF NOT EXISTS `addeuro` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `FlatsType` varchar(40) DEFAULT NULL,
  `propertytitle` varchar(40) DEFAULT NULL,
  `addres` varchar(50) DEFAULT NULL,
  `FlatsSize` varchar(50) DEFAULT NULL,
  `FlatsLocation` varchar(50) DEFAULT NULL,
  `FlatsCost` double DEFAULT NULL,
  `bedroom` varchar(50) DEFAULT NULL,
  `moneytype` varchar(30) NOT NULL,
  `FlatsFloor` varchar(50) DEFAULT NULL,
  `FlatsImageName` varchar(50) DEFAULT NULL,
  `propertyCat` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `mobileNo` varchar(35) DEFAULT NULL,
  `emailId` varchar(50) DEFAULT NULL,
  `phoneNo` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `prop_desc` varchar(500) DEFAULT NULL,
  `vedio` mediumtext,
  `enable` varchar(10) DEFAULT NULL,
  `dt_tim` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `addeuro`
--

INSERT INTO `addeuro` (`id`, `FlatsType`, `propertytitle`, `addres`, `FlatsSize`, `FlatsLocation`, `FlatsCost`, `bedroom`, `moneytype`, `FlatsFloor`, `FlatsImageName`, `propertyCat`, `state`, `city`, `pincode`, `mobileNo`, `emailId`, `phoneNo`, `Name`, `prop_desc`, `vedio`, `enable`, `dt_tim`) VALUES
(81, 'Residential Plot', 'R zone', 'at chaop', '5000', 'Noida', 2, '0', 'Crores', '1st', '1429311276.gif', 'Sell', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '0000-00-00'),
(80, 'Residential flat', 'Castlea Z', 'at vishalcolony', '3000sqft', 'Gurgaon', 1, '5', 'Crores', '2nd', '1429310456.gif', 'Sell', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '0000-00-00'),
(83, 'School Space', 'School', 'at schl', '20000', 'Delhi/NCR', 40, '0', 'Thousand', '1st', '1429311498.jpg', 'Rent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '0000-00-00'),
(82, 'Commercial Plot', 'C zone', 'at industrial area', '10000', 'Noida', 6, '0', 'Crores', '1st', '1429311382.gif', 'Sell', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `ContactId` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `CellNo` varchar(15) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Descraption` varchar(500) DEFAULT NULL,
  `dt_tim` date NOT NULL,
  PRIMARY KEY (`ContactId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactId`, `Name`, `Address`, `CellNo`, `EmailId`, `Descraption`, `dt_tim`) VALUES
(50, 'ninja', 'at china street', '0987654321', 'ninja@mail.com', 'i want to purchase 1bhk flat', '2015-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Desc` varchar(500) NOT NULL,
  `dt_posted` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackId` int(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `cellNo` varchar(20) DEFAULT NULL,
  `EmailId` varchar(20) DEFAULT NULL,
  `Feedtype` varchar(20) DEFAULT NULL,
  `Massage` varchar(80) DEFAULT NULL,
  `dt_tim` date NOT NULL,
  PRIMARY KEY (`feedbackId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackId`, `Name`, `Address`, `cellNo`, `EmailId`, `Feedtype`, `Massage`, `dt_tim`) VALUES
(1, 'visitor', 'mumbai', '0987654321', 'visitor@mail.com', '  Appreciation', 'this is very helpful site for me.\r\nthank you', '2015-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `postpropery`
--

CREATE TABLE IF NOT EXISTS `postpropery` (
  `postpropert_id` int(20) NOT NULL AUTO_INCREMENT,
  `Category` int(40) DEFAULT NULL,
  `PropertyType` varchar(40) DEFAULT NULL,
  `PropertyAddress` varchar(50) DEFAULT NULL,
  `PropertyDescription` varchar(80) DEFAULT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `moneytype` varchar(40) DEFAULT NULL,
  `City` varchar(40) DEFAULT NULL,
  `PinCode` varchar(10) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `price2` float DEFAULT NULL,
  `PhoneNo` varchar(15) DEFAULT NULL,
  `MobileNo` varchar(15) DEFAULT NULL,
  `emaiId` varchar(40) DEFAULT NULL,
  `propertcategory` varchar(50) DEFAULT NULL,
  `dt_tim` date NOT NULL,
  PRIMARY KEY (`postpropert_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `postpropery`
--

INSERT INTO `postpropery` (`postpropert_id`, `Category`, `PropertyType`, `PropertyAddress`, `PropertyDescription`, `Name`, `moneytype`, `City`, `PinCode`, `price`, `price2`, `PhoneNo`, `MobileNo`, `emaiId`, `propertcategory`, `dt_tim`) VALUES
(2, 0, 'Society Flat', 'at lapataganj', 'well furnished', 'owner', 'Thousand', 'Delhi/NCR', '', 50, 60, '0987654321', '', 'a@m.com', 'Sell', '2015-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `userid` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userid`, `password`) VALUES
(14, 'satyam', 'satyam');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
