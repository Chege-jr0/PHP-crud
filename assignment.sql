-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 08:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `crude`
--

CREATE TABLE `crude` (
  `taskid` int(11) NOT NULL,
  `taskname` text NOT NULL,
  `datetodo` varchar(6) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crude`
--

INSERT INTO `crude` (`taskid`, `taskname`, `datetodo`, `status`) VALUES
(1, 'Jumping', '2018-0', 'Accomplished'),
(9, 'Washing clothes', '2019-0', 'Done'),
(10, 'Meeting', '2019-0', 'School'),
(11, 'Debate', '2019-0', 'Workplace'),
(12, 'Watch football', '2019-0', 'Hall'),
(13, 'Party', '2019-0', 'Call Alice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crude`
--
ALTER TABLE `crude`
  ADD PRIMARY KEY (`taskid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crude`
--
ALTER TABLE `crude`
  MODIFY `taskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
