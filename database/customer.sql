-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 03:19 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friends_pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `nic` varchar(13) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `prescription _id` varchar(10) DEFAULT NULL,
  `otc_id` varchar(10) DEFAULT NULL,
  `password_reset` varchar(50) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`nic`, `first_name`, `last_name`, `email`, `password`, `birthday`, `gender`, `contact_number`, `prescription _id`, `otc_id`, `password_reset`, `active`) VALUES
('936310012V', 'Nimal', 'silva', 'nimal@gmail.com', '6f2268bd1d3d3ebaabb04d6b5d099425', '2016-09-24', 'male', '0789654123', NULL, NULL, '', 0),
('956423681V', 'Amali', 'Silva', 'ama@gmail.com', '38d7355701b6f3760ee49852904319c1', '2016-09-09', 'female', '0772356235', NULL, NULL, '', 0),
('259653265v', 'Sama', 'De Silva', 'sama@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '2016-09-06', 'female', '0715623659', NULL, NULL, '', 0),
('905554632V', 'Supun', 'Tharaka', 'stharaka@gmail.com', '202cb962ac59075b964b07152d234b70', '1990-07-05', 'male', '0712094369', NULL, NULL, NULL, 1),
('895623562V', 'Ruwani', 'Dias', 'ruwani@gmail.com', '4e48062e3b7d7773b208425cfe563520', '1989-07-25', 'female', '0785858212', NULL, NULL, NULL, 1),
('895689565V', 'Malith', 'Sen', 'malith@gmail.com', 'b5f582571bccce1fdf5bcb9ac3c1282b', '2016-12-05', 'male', '0775454215', NULL, NULL, NULL, 1),
('4567890V', 'sdg', 'sdvs', 'ksjdfh@djf', 'd2b15c75c0c389b49c2efbea79cdc946', '2016-12-15', 'male', '340987654', NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`nic`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
