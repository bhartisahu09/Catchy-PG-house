-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2018 at 09:05 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(200) NOT NULL,
  `aphone` varchar(20) NOT NULL,
  `aemail` varchar(200) NOT NULL,
  `apassword` varchar(200) NOT NULL,
  `astatus` varchar(100) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`aid`, `aname`, `aphone`, `aemail`, `apassword`, `astatus`) VALUES
(1, 'Admin', '46645454', 'admin@gmail.com', '1234', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `amenities_tbl`
--

CREATE TABLE IF NOT EXISTS `amenities_tbl` (
  `amid` int(11) NOT NULL AUTO_INCREMENT,
  `amtitle` varchar(200) NOT NULL,
  `ampg` varchar(200) NOT NULL,
  `amstatus` varchar(200) NOT NULL,
  PRIMARY KEY (`amid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `amenities_tbl`
--

INSERT INTO `amenities_tbl` (`amid`, `amtitle`, `ampg`, `amstatus`) VALUES
(15, 'Tiles Fitted Room ', '', 'New'),
(14, 'Wi-FI', '', 'New'),
(9, 'Breakfast', 'available', ''),
(12, 'Swimming', '', 'New'),
(11, 'Lunch', '', 'New'),
(16, '24x7 Open Room Campus', '', 'New'),
(17, '24x7 water Facility ', '', 'New'),
(18, 'wifi Fully Campus Area', '', 'New'),
(19, 'Telivision Facility ', '', 'New'),
(20, 'water Cooler & R.O.waterFacility ', '', 'New'),
(21, ' Big Parking space available ', '', 'New'),
(22, 'single Double & Three Sharing', '', 'New'),
(23, '24x7 Security Facility ', '', 'New'),
(24, 'Rooms With Proper Ventilation', '', 'New'),
(25, ' Attach lath/bathroom', '', 'New'),
(26, 'Healthy Lunch', '', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE IF NOT EXISTS `contact_tbl` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(200) NOT NULL,
  `cemail` varchar(200) NOT NULL,
  `cphone` varchar(20) NOT NULL,
  `cmessage` varchar(200) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`cid`, `cname`, `cemail`, `cphone`, `cmessage`) VALUES
(2, 'Abhi', 'abhi@gmail.com', '234545543', ' hello'),
(5, 'Devki', 'devki@gmail.com', '2342345345', ' hello'),
(4, 'Lincy', 'lincy@gmail.com', '54654645', ' How are you'),
(6, 'Devki', 'devki@gmail.com', '2342345345', ' hello'),
(7, 'devki', 'devki@gmail.com', '23243242', ' how r u');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_tbl`
--

CREATE TABLE IF NOT EXISTS `enquiry_tbl` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pgid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `edate` date NOT NULL,
  `emessage` text NOT NULL,
  `estatus` varchar(200) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `enquiry_tbl`
--

INSERT INTO `enquiry_tbl` (`eid`, `uid`, `pgid`, `vid`, `edate`, `emessage`, `estatus`) VALUES
(1, 1, 2, 2, '2018-03-13', 'HelloHii', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `images_tbl`
--

CREATE TABLE IF NOT EXISTS `images_tbl` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mtitle` varchar(200) NOT NULL,
  `mfile` varchar(200) NOT NULL,
  `mfile2` varchar(200) NOT NULL,
  `mfile3` varchar(200) NOT NULL,
  `mpg` varchar(200) NOT NULL,
  `mstatus` varchar(200) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `images_tbl`
--

INSERT INTO `images_tbl` (`mid`, `mtitle`, `mfile`, `mfile2`, `mfile3`, `mpg`, `mstatus`) VALUES
(1, 'Room For Rent', 'pg8.jpg', 'pg9.jpg', 'pg10.JPG', '1', ''),
(2, 'Saffron PG Rooms Services', 'pg2.jpg', 'pg5.jpg', 'pg8.jpg', '2', ''),
(3, 'Gulmohar Villa PG Rent', 'pg11.jpg', 'pg1.jpg', 'pg-house1.png', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `location_tbl`
--

CREATE TABLE IF NOT EXISTS `location_tbl` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `lcity` varchar(200) NOT NULL,
  `lpostal` int(11) NOT NULL,
  `lstate` varchar(200) NOT NULL,
  `lcountry` varchar(200) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `location_tbl`
--

INSERT INTO `location_tbl` (`lid`, `lcity`, `lpostal`, `lstate`, `lcountry`) VALUES
(45, 'Bhilai', 490006, 'Chhattisgarh', 'India'),
(46, 'Raipur', 460097, 'Chhattisgarh', 'India'),
(47, 'Bilaspur', 450067, 'Chhattisgarh', 'India'),
(43, 'Durg', 490006, 'chhattisgadh', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `pg_amminity`
--

CREATE TABLE IF NOT EXISTS `pg_amminity` (
  `amn_id` int(11) NOT NULL AUTO_INCREMENT,
  `pg_id` int(11) NOT NULL,
  `atitle` varchar(200) NOT NULL,
  PRIMARY KEY (`amn_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `pg_amminity`
--

INSERT INTO `pg_amminity` (`amn_id`, `pg_id`, `atitle`) VALUES
(44, 3, ' Attach lath/bathroom'),
(43, 3, 'single Double & Three Sharing'),
(42, 3, 'water Cooler & R.O.waterFacility '),
(26, 2, ' Attach lath/bathroom'),
(25, 2, 'Rooms With Proper Ventilation'),
(19, 1, 'Tiles Fitted Room '),
(24, 2, 'single Double & Three Sharing'),
(23, 2, ' Big Parking space available '),
(22, 2, 'water Cooler & R.O.waterFacility '),
(21, 2, 'Telivision Facility '),
(20, 2, 'Tiles Fitted Room '),
(41, 3, 'Telivision Facility '),
(40, 3, 'Breakfast'),
(39, 3, 'Wi-FI');

-- --------------------------------------------------------

--
-- Table structure for table `pg_tbl`
--

CREATE TABLE IF NOT EXISTS `pg_tbl` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) NOT NULL,
  `paddress` varchar(300) NOT NULL,
  `pcity` varchar(200) NOT NULL,
  `paddon` date NOT NULL,
  `pstatus` varchar(200) NOT NULL,
  `pdescription` varchar(500) NOT NULL,
  `pcontact` varchar(20) NOT NULL,
  `pgrent` varchar(200) NOT NULL,
  `pgsize` varchar(200) NOT NULL,
  `pgtype` varchar(200) NOT NULL,
  `pgfor` varchar(200) NOT NULL,
  `pgimage` varchar(200) NOT NULL,
  `pgvendor` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pg_tbl`
--

INSERT INTO `pg_tbl` (`pid`, `pname`, `paddress`, `pcity`, `paddon`, `pstatus`, `pdescription`, `pcontact`, `pgrent`, `pgsize`, `pgtype`, `pgfor`, `pgimage`, `pgvendor`) VALUES
(1, 'Room For Rent', 'Nehru Nagar Bhilai', 'Bhilai', '2018-03-13', 'Active', 'Big Room / hall which can easily accommodate a small family of 3 or 3 roommates (bachelors). Comes furnished with double bed, bedding, table chair, shelf and cupboard', '9643643463', '1000', '2', 'Furnished', 'Only Boys', 'pg8.jpg', 1),
(2, 'Saffron PG Rooms Services', 'Nehru Nagar, Bhilai', 'Bhilai', '2018-03-13', 'Active', 'Description', '346463346634', '1200', '3', 'Furnished', 'Only Family', 'pg2.jpg', 2),
(3, 'Gulmohar Villa PG Rent', '20- A, Street NO. 10  Mohan nagar ', 'Durg', '2018-03-13', 'Active', 'New PG House for those who willing to live & feel  same as home.', '7897897890', '2000', '2', 'Semi-Furnished', 'Both', 'pg11.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(200) NOT NULL,
  `uemail` varchar(200) NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `uaddress` text NOT NULL,
  `ucity` varchar(200) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`uid`, `uname`, `uemail`, `uphone`, `uaddress`, `ucity`) VALUES
(1, 'Abhilasha', 'abhi@gmail.com', '1234567654', 'Risali maroda', 'Bhilai');

-- --------------------------------------------------------

--
-- Table structure for table `vendors_tbl`
--

CREATE TABLE IF NOT EXISTS `vendors_tbl` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `vname` varchar(200) NOT NULL,
  `vphone` varchar(20) NOT NULL,
  `vemail` varchar(200) NOT NULL,
  `vaddress` text NOT NULL,
  `vcity` varchar(200) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vendors_tbl`
--

INSERT INTO `vendors_tbl` (`vid`, `vname`, `vphone`, `vemail`, `vaddress`, `vcity`) VALUES
(1, 'Saurabh Deshmukh', '9643643463', 'email@gmail.com', 'Nehru Nagar', 'Bhilai'),
(2, 'Saurabh Deshmukh', '346643', 'satya@gmail.com', 'gsdgs', 'Bhilai'),
(3, 'Nikita', '456765432', 'niki@gmail.com', 'Mohan nagar, East', 'Durg');
