-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2016 at 09:05 AM
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL DEFAULT 'auto',
  `post` longtext NOT NULL,
  `day` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_name`, `post`, `day`) VALUES
(1, 'Supun', 'hello there', '2016-11-29'),
(2, 'Thilina', 'hello!<br />\r\nI am Sandu<br />\r\nThanks', '2016-11-29'),
(3, 'Ruwani', 'Hi, this is a good website...', '2016-11-29'),
(4, 'Maya', 'Thanks all!', '2016-11-29'),
(6, 'auto', 'hello again', '2016-11-29'),
(7, 'auto', 'hi again', '2016-11-29'),
(8, 'auto', 'line 1<br />\r\nline 2', '2016-11-30'),
(9, 'auto', 'new comment', '2016-11-30'),
(10, 'auto', 'FIRST COMMENT', '2016-12-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
