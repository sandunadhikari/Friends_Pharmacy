-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2016 at 11:06 AM
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
  `customer_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `prescription _id` varchar(10) DEFAULT NULL,
  `otc_id` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `email`, `password`, `birthday`, `blood_group`, `gender`, `contact_number`, `prescription _id`, `otc_id`) VALUES
(1, 'gghgg12', 'gghgg', 'ggh@gg', 'gghgg', '1256-05-05', 'gg', 'gghgg', '1245454', NULL, NULL),
(2, 'sandu', 'dissanayake', 'sanj@sf', '1234', '1256-05-05', 'A+', 'female', '65464', NULL, NULL),
(3, 'tharu', 'de silva', 'rha@khf', '567', '2016-09-15', 'O+', 'male', '071552', NULL, NULL),
(4, 'nanda', 'hewage', 'nanda@hkj', 'nanda', '2016-09-18', 's+', 'female', '3979', NULL, NULL),
(5, 'ravi', 'disa', 'ravi@sf', 'ravi', '2016-08-29', 'b+', 'female', '49587', NULL, NULL),
(6, 'shehani', 'awanrhika', 'she2@fkg', 'she', '2016-09-23', 'A+', 'female', '495863968', NULL, NULL),
(7, 'sithara', 'sewwanthi', 'sithu@grk', 'sithu', '2016-09-09', 'O+', 'female', '349273', NULL, NULL),
(8, 'priya', 'kula', 'prig@gkj', '345', '2016-09-30', 'A+', 'female', '50968036', NULL, NULL),
(9, 'latha', 'soma', 'sfl@sdfn', '', '2016-09-17', 'B-', 'male', '935765830', NULL, NULL),
(10, 'sama', 'silva', 'sama@kfha', 'sama', '2016-09-23', 'O', 'female', '234552', NULL, NULL),
(11, 'supun', 'mahanama', 'supu@dmf', 'dsf', '2016-09-13', 'A', 'male', '845252', NULL, NULL),
(12, 'ruwan', 'nuwan', 'nuwaa@kn', '4555504tn', '2016-09-09', 'D', 'male', '3546', NULL, NULL),
(13, 'nandana', 'yapa', 'yapa@hj', 'djfhk', '2016-09-22', 'A+', 'male', '346467', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `medicine_id` varchar(10) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `generic_name` varchar(30) NOT NULL,
  `medicine_group` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `shelf_no` varchar(5) NOT NULL,
  `supplier_id` varchar(10) NOT NULL,
  `content` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otc`
--

CREATE TABLE `otc` (
  `otc_id` varchar(10) NOT NULL,
  `medicine_id` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `doctor` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `prices` (
  `supplier_id` varchar(10) NOT NULL,
  `medicine_id` varchar(10) NOT NULL,
  `price` decimal(15,0) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `dosage` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `member_id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `nic` varchar(10) NOT NULL,
  `marital_statues` varchar(10) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `occupation` varchar(15) NOT NULL,
  `start_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`member_id`, `first_name`, `last_name`, `gender`, `birthday`, `nic`, `marital_statues`, `blood_group`, `address`, `contact_number`, `email`, `password`, `occupation`, `start_date`) VALUES
(1, 'kamal', 'perera', 'male', '2016-09-08', '45499jb', 'married', 'O-', 'idsofwe,ojfoif,fjdefj,fjwof', '384973', 'dsfskj@mnsg', '3473', 'pharmacist', '2016-09-05'),
(2, 'sunil', 'silva', 'male', '2016-09-14', '6455', 'unmarried', 'A+', 'dfsg,sdsjg,sdgjosg', '325', 'dfg@lkrl', 'sdfsg', 'assistant', '2016-09-16'),
(3, 'mala', 'jayalath', 'female', '2016-09-12', 'sfkjdw4', 'unmarried', 'B-', 'ewwetw,wowt,iweh', '786528', 'maala@ksjf', '3435', 'cashier', '2016-09-06'),
(4, 'sani', 'leon', 'female', '2016-09-14', '345v', 'married', 'A-', 'adsad,asfaf,afas', '7845297', 'sani@gh', '678', 'assistant', '2016-09-06'),
(5, 'sithu', 'sathsara', 'female', '2016-09-02', '546541984v', 'unmarried', 'b+', 'aodj,dosvhos,fnwof', '4554703', 'sath@ksdnf', '45n', 'assistant', '2016-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `medicine_id` varchar(10) NOT NULL,
  `batch_no` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `entry_date` date NOT NULL,
  `production_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `buying_price` decimal(15,0) NOT NULL,
  `selling_price` decimal(15,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` varchar(10) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fax` varchar(10) NOT NULL
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`medicine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
