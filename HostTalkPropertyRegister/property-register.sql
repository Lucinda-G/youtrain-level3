-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 12:11 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property-register`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `allocation_id` int(11) NOT NULL,
  `allocation_answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`allocation_id`, `allocation_answer`) VALUES
(1, 'allocated'),
(2, 'deallocated');

-- --------------------------------------------------------

--
-- Table structure for table `property_register`
--

CREATE TABLE `property_register` (
  `id` int(11) NOT NULL,
  `network_name` varchar(50) NOT NULL,
  `notes` text NOT NULL,
  `operating_system` varchar(50) NOT NULL,
  `other_software` varchar(50) NOT NULL,
  `allocated_to` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `allocation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_register`
--

INSERT INTO `property_register` (`id`, `network_name`, `notes`, `operating_system`, `other_software`, `allocated_to`, `ip_address`, `allocation`) VALUES
(1, 'hercules-ms08r2', 'Dual boot with hercules', 'WS2008 R2', 'None', 'Robert.Ashworth1@uk.fujitsu.com', '192.168.108.247/8', '2'),
(2, 'AppExHT8', 'Guest on HTC-ESXI', 'AppEx', 'IDMSX', 'Al.Smith@uk.fujitsu.com', '192.168.109.151', '1'),
(3, 'Network', 'Hello these are the notes', 'Windows10', '', 'ljd@gmail.com', '192.168.109.151', '1'),
(4, 'New Network', '', '', '', 'fg@uk.co', '', '1'),
(5, '', '', '', '', '', '', '1'),
(6, '', '', '', '', '', '', '1'),
(7, '', '', '', '', '', '', '1'),
(8, '', '', '', '', '', '', '1'),
(9, '', '', '', '', '', '', '1'),
(10, '', '', '', '', '', '', '1'),
(11, '', '', '', '', '', '', '1'),
(12, '', '', '', '', '', '', '1'),
(13, '', '', '', '', '', '', '1'),
(14, '', '', '', '', '', '', '1'),
(15, '', '', '', '', '', '', '1'),
(16, '', '', '', '', '', '', '1'),
(17, '', '', '', '', '', '', '1'),
(18, '', '', '', '', '', '', '1'),
(19, '', '', '', '', '', '', '1'),
(20, '', '', '', '', '', '', '1'),
(21, '', '', '', '', '', '', '1'),
(22, '', '', '', '', '', '', '1'),
(23, '', '', '', '', '', '', '1'),
(24, '', '', '', '', '', '', '1'),
(25, '', '', '', '', '', '', '1'),
(26, '', '', '', '', '', '', '1'),
(27, 'fdhdf', '', 'fhs', '', 'sdg@dgs.ds', 's', '1'),
(28, 'fd', '', 'fg', '', 'gf@hj.ghh', 'df', '1'),
(29, 'df', '', 'fd', '', 'df@hj.jh', 'gh', '1'),
(30, 'wef', 'N/A', 'we', 'N/A', 'wf@h.g', 'gd', '1'),
(31, 'df', 'N/A', 'iohu', 'N/A', 'df@hj.jh', 'sd', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`allocation_id`);

--
-- Indexes for table `property_register`
--
ALTER TABLE `property_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allocation`
--
ALTER TABLE `allocation`
  MODIFY `allocation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_register`
--
ALTER TABLE `property_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
