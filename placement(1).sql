-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 26, 2013 at 12:43 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `Name` varchar(50) NOT NULL,
  `location` varchar(30) NOT NULL,
  `reg_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_alternate` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `branch` text NOT NULL,
  `team_hr` text NOT NULL,
  `phone_no1` int(11) NOT NULL,
  `phone_no2` int(11) NOT NULL,
  `package_details` text NOT NULL,
  `last_year_allotment` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `filename` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`filename`, `username`, `date_upload`) VALUES
('', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` bigint(20) NOT NULL,
  `notice` text NOT NULL,
  `for` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `username`, `date`, `time`, `notice`, `for`) VALUES
(1, 'pramudit', '2013-07-13', 2, 'sgfpranbjshfjashbkjb', 1),
(1, 'pramudit', '2013-07-13', 1, 'amanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanamanaman', 1),
(3, 'pramudit', '2013-07-13', 3, 'dsghfhdfhdfhjdf', 1),
(4, 'pramudit', '2013-07-13', 4, 'dgfdsgdsh', 1),
(5, 'pramudit', '2013-07-13', 5, 'aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman aman', 1),
(6, 'pramudit', '2013-07-13', 6, 'dydsfhdf', 1),
(7, 'pramudit', '2013-07-13', 7, 'joyuoyuit5464353', 1),
(0, '', '2013-09-03', 1378207796, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `username` varchar(25) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `univ_roll` int(10) NOT NULL,
  `dob` int(8) NOT NULL,
  `password` varchar(100) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `admission` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `firstname`, `lastname`, `email`, `univ_roll`, `dob`, `password`, `branch`, `gender`, `admission`) VALUES
('Aman', 'Aman', 'agarwal', 'amantheariesguy@gmail.com', 1109110007, 13041993, 'bd00eb0f2a3ce174d021c6c7a6163e', 'CS', 'male', '11cse024'),
('aman', 'aman', 'aman', 'amantheariesguy@gmail.com', 1109110007, 13041993, 'a4c79cfe528780c899544898b32231', 'CS', 'male', '11cse024'),
('Aman', 'aman', 'aman', 'amantheariesguy@gmail.com', 1109110007, 13041993, 'a4c79cfe528780c899544898b3223103', 'CS', 'male', '11cse024'),
('Aman', 'Aman', 'Agarwal', 'amantheariesguy@gmail.com', 1109110007, 13041993, 'ccdfe57efc107df49af2c6236137baa2', 'CS', 'male', '11cse024'),
('Aman', 'Aman', 'Agarwal', 'amantheariesguy@gmail.com', 1109110007, 13041993, 'bd00eb0f2a3ce174d021c6c7a6163eba', 'CS', 'male', '11cse024');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `admis_no` varchar(10) NOT NULL,
  `session_value` int(1) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`admis_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
