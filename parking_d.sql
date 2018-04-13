-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2018 at 12:55 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking_d`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `location` varchar(50) NOT NULL,
  `totalslots` int(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `email`, `password`, `location`, `totalslots`) VALUES
('Aman Bijlwan', 'kalash1234', '123456789', 'Clement Town', 100),
('Sarthak Rawat', 'sarthak69@parking.com', 'sarthak69', 'Clock Tower', 96),
('Kalash rasogi', 'swap1237', '1234', 'Rajpur', 85),
('Swapnil', 'swapnil@parking.com', '123321', 'ISBT', 110);

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

DROP TABLE IF EXISTS `booked`;
CREATE TABLE IF NOT EXISTS `booked` (
  `username` varchar(25) NOT NULL,
  `parkinglot` varchar(30) NOT NULL,
  `intime` float NOT NULL,
  `outtime` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`username`, `parkinglot`, `intime`, `outtime`) VALUES
('Kalash Rastogi', 'Parking 1', 4, 7),
('Sarthak Rawat', 'Parking 2', 5, 6),
('Aman Bijlwan', 'Parking 3', 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `parkingclementtown`
--

DROP TABLE IF EXISTS `parkingclementtown`;
CREATE TABLE IF NOT EXISTS `parkingclementtown` (
  `Locations` varchar(15) NOT NULL,
  `Total Slots` int(11) NOT NULL,
  `Slots Occupied` int(11) NOT NULL,
  `Slot Available` int(11) NOT NULL,
  `Booked` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkingclementtown`
--

INSERT INTO `parkingclementtown` (`Locations`, `Total Slots`, `Slots Occupied`, `Slot Available`, `Booked`) VALUES
('Location1', 130, 110, 9, 11),
('Location2', 120, 110, 9, 1),
('Location3', 127, 111, 9, 7),
('Location4', 135, 60, 55, 20);

-- --------------------------------------------------------

--
-- Table structure for table `parkingclocktower`
--

DROP TABLE IF EXISTS `parkingclocktower`;
CREATE TABLE IF NOT EXISTS `parkingclocktower` (
  `Locations` varchar(20) NOT NULL,
  `Total Slots` int(11) NOT NULL,
  `Slots Occupied` int(11) NOT NULL,
  `Slots Available` int(11) NOT NULL,
  `Booked` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkingclocktower`
--

INSERT INTO `parkingclocktower` (`Locations`, `Total Slots`, `Slots Occupied`, `Slots Available`, `Booked`) VALUES
('Location1', 220, 170, 0, 50),
('Location2', 190, 180, 9, 1),
('Location3', 140, 96, 4, 40),
('Location4', 190, 137, 23, 30),
('Location5', 220, 220, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parkingisbt`
--

DROP TABLE IF EXISTS `parkingisbt`;
CREATE TABLE IF NOT EXISTS `parkingisbt` (
  `Locations` varchar(20) NOT NULL,
  `Total Slots` int(11) NOT NULL,
  `Slots Occupied` int(11) NOT NULL,
  `Slots Available` int(11) NOT NULL,
  `Booked` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkingisbt`
--

INSERT INTO `parkingisbt` (`Locations`, `Total Slots`, `Slots Occupied`, `Slots Available`, `Booked`) VALUES
('Location1', 120, 100, 12, 8),
('Location2', 130, 110, 11, 9),
('Location3', 112, 101, 5, 6),
('Location4', 117, 111, 0, 6),
('Location5', 121, 105, 16, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parkingrajpur`
--

DROP TABLE IF EXISTS `parkingrajpur`;
CREATE TABLE IF NOT EXISTS `parkingrajpur` (
  `Locations` varchar(30) NOT NULL,
  `Total Slots` int(11) NOT NULL,
  `Slots Occupied` int(11) NOT NULL,
  `Slot Available` int(11) NOT NULL,
  `Booked` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkingrajpur`
--

INSERT INTO `parkingrajpur` (`Locations`, `Total Slots`, `Slots Occupied`, `Slot Available`, `Booked`) VALUES
('Location1', 180, 160, 9, 11),
('Location2', 120, 110, 9, 1),
('Location3', 98, 90, 0, 8),
('Location4', 155, 123, 2, 30);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
