-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2016 at 06:18 PM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `Doctor_DB`
--

CREATE TABLE IF NOT EXISTS `Doctor_DB` (
  `ID` int(100) NOT NULL,
  `Name` text NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Doctor_DB`
--

INSERT INTO `Doctor_DB` (`ID`, `Name`, `Username`, `Password`) VALUES
(1, 'Satish Chandra', 'satish856', 'apoorv'),
(2, 'Rajendra Kumar', 'raj1996', 'apoorv');

-- --------------------------------------------------------

--
-- Table structure for table `Doc_leave`
--

CREATE TABLE IF NOT EXISTS `Doc_leave` (
  `ID` int(100) NOT NULL,
  `Name` text NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile` bigint(12) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `From1` date NOT NULL,
  `To1` date NOT NULL,
  `Reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Doc_leave`
--

INSERT INTO `Doc_leave` (`ID`, `Name`, `Address`, `Mobile`, `Email`, `From1`, `To1`, `Reason`) VALUES
(1, 'Satish Chandra', 'X-1/147 Krishna Puram Kanpur', 9415077855, 'satish.chandra855@gm', '2016-03-10', '2016-03-25', 'k sckjs '),
(1, 'Satish Chandra', 'X-1/147 Krishna Puram Kanpur', 9415077855, 'satish.chandra855@gm', '2016-03-02', '2016-03-03', 'travel'),
(1, 'Satish Chandra', 'X-1/147 Krishna Puram Kanpur', 9415077855, 'satish.chandra855@gm', '2016-03-08', '2016-03-23', 'travel'),
(1, 'Satish Chandra', 'X-1/147 Krishna Puram Kanpur', 9415077855, 'satish.chandra855@gm', '2016-03-10', '2016-03-25', 'hhhg');

-- --------------------------------------------------------

--
-- Table structure for table `Doc_profile`
--

CREATE TABLE IF NOT EXISTS `Doc_profile` (
  `ID` int(100) NOT NULL,
  `Name` text NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile` bigint(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Picture` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Doc_profile`
--

INSERT INTO `Doc_profile` (`ID`, `Name`, `Username`, `Address`, `Mobile`, `Email`, `Picture`) VALUES
(1, 'Satish Chandra', 'satish856', 'X-1/147 Krishna Puram Kanpur', 9415077855, 'satish.chandra855@gmail.com', ''),
(2, 'Rajendra Kumar', 'raj1996', '4/49 Krishna Nagar Kanpur', 9993451234, 'rajendra.kumar999@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Doctor_DB`
--
ALTER TABLE `Doctor_DB`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Doc_profile`
--
ALTER TABLE `Doc_profile`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Doctor_DB`
--
ALTER TABLE `Doctor_DB`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Doc_profile`
--
ALTER TABLE `Doc_profile`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
