-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 02:10 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `soilmoist` float NOT NULL,
  `temperature` float NOT NULL,
  `humidity` float NOT NULL,
  `sunlight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`time`, `soilmoist`, `temperature`, `humidity`, `sunlight`) VALUES
('2018-02-14 12:00:00', 76.05, 28, 35, 231),
('2018-02-14 12:05:00', 77.03, 30, 37, 233),
('2018-02-14 12:10:00', 77.71, 31, 36, 243),
('2018-02-14 12:15:00', 77.42, 32, 34, 234),
('2018-02-14 12:20:00', 76.83, 30, 36, 236),
('2018-02-14 12:25:00', 77.13, 30, 37, 240),
('2018-02-14 12:30:00', 77.91, 31, 36, 231);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD UNIQUE KEY `time` (`time`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
