-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2015 at 05:19 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csfreb`
--
CREATE DATABASE IF NOT EXISTS `csfreb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `csfreb`;

-- --------------------------------------------------------

--
-- Table structure for table `cs_equipment`
--

CREATE TABLE IF NOT EXISTS `cs_equipment` (
  `equip_No` int(11) DEFAULT NULL,
  `equip_serialNo` int(11) DEFAULT NULL,
  `equip_Name` varchar(24) DEFAULT NULL,
  `equip_Status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cs_room`
--

CREATE TABLE IF NOT EXISTS `cs_room` (
  `rm_Code` varchar(8) NOT NULL,
  `rm_Type` varchar(24) NOT NULL,
  `rm_Capacity` int(11) NOT NULL,
  `rm_Status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_code` varchar(100) NOT NULL,
  `use_date` date NOT NULL,
  `use_start_time` time NOT NULL,
  `use_end_time` time NOT NULL,
  `exp_people` int(11) NOT NULL,
  `room_num` varchar(45) NOT NULL,
  `room_type` enum('Programming Lab','Studio Room','Lecture Room','') NOT NULL,
  `purpose` text NOT NULL,
  `subject` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transaction_code` (`transaction_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_rec`
--

CREATE TABLE IF NOT EXISTS `transaction_rec` (
  `tran_No` int(11) DEFAULT NULL,
  `flogin_Username` varchar(32) DEFAULT NULL,
  `ulogin_Username` varchar(32) DEFAULT NULL,
  `admin_IDno` varchar(16) DEFAULT NULL,
  `tran_Date` date DEFAULT NULL,
  `tran_Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_details`
--

CREATE TABLE IF NOT EXISTS `trans_details` (
  `trans_No` int(11) DEFAULT NULL,
  `tran_Type` varchar(32) DEFAULT NULL,
  `rm_Code` varchar(16) DEFAULT NULL,
  `equip_No` int(11) DEFAULT NULL,
  `start_Date` datetime DEFAULT NULL,
  `end_Date` datetime DEFAULT NULL,
  `Subject` varchar(16) DEFAULT NULL,
  `Purpose` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `idnumber` int(10) unsigned NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` enum('STUDENT','FACULTY','ADMIN') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `course`, `year`, `idnumber`, `email`, `password`, `usertype`) VALUES
(1, 'Dan', 'Rafael', 'BS ARCHI', 1, 1234, 'dan.ra@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'STUDENT'),
(2, 'asdfmas', 'asdfm', 'BS IT', 2, 12345, 'asdf@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'STUDENT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
