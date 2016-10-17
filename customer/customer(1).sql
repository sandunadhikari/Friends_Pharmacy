-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2016 at 02:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

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
  `birthday` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
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
('1', 'chathura', 'gghgg', 'ggh@gmail', 'gghgg', '1256-05-05', 'gghgg', '1245454', NULL, NULL, '', 1),
('2', 'sandu', 'dissanayake', 'sanj@sf', '1234', '1256-05-05', 'female', '65464', NULL, NULL, '', 1),
('3', 'tharu', 'de silva', 'rha@khfsda', '567', '2016-09-15', 'male', '29546', NULL, NULL, '', 1),
('4', 'nanda', 'hewage', 'nanda@hkj', 'nanda', '2016-09-18', 'female', '3979', NULL, NULL, '', 1),
('5', 'ravi', 'disara', 'ravi@sf', 'ravi', '2016-08-29', 'female', '49587', NULL, NULL, '', 1),
('6', 'shehani', 'awanrhika', 'she2@fkg', 'she', '2016-09-23', 'female', '495863968', NULL, NULL, '', 1),
('7', 'sithara', 'sewwanthi', 'sithu@grk', 'sithu', '2016-09-09', 'female', '349273', NULL, NULL, '', 1),
('8', 'priya', 'kula', 'prig@gkj', '345', '2016-09-30', 'female', '50968036', NULL, NULL, '', 1),
('9', 'latha', 'soma', 'sfl@sdfn', '', '2016-09-17', 'male', '935765830', NULL, NULL, '', 1),
('10', 'sama', 'silva', 'sama@kfha', 'sama', '2016-09-23', 'female', '234552', NULL, NULL, '', 1),
('11', 'supun', 'mahanama', 'supu@gmail.com', 'dsf', '2016-09-13', 'male', '845252', NULL, NULL, '', 1),
('12', 'ruwan', 'nuwan', 'nuwaa@kn', '4555504tn', '2016-09-09', 'male', '3546', NULL, NULL, '', 1),
('13', 'nandana', 'yapa', 'yapa@hj', 'djfhk', '2016-09-22', 'male', '346467', NULL, NULL, '', 1),
('528555565V', 'dimuthu', 'perera', 'dimuthu@gmail.com', NULL, '2000-05-02', 'male', '0142583698', NULL, NULL, NULL, 1);

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
