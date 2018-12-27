-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 04:42 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `vwacomments`
--

CREATE TABLE `vwacomments` (
  `comment_id` int(11) NOT NULL,
  `comment_by` varchar(100) NOT NULL,
  `comment_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vwacomments`
--

INSERT INTO `vwacomments` (`comment_id`, `comment_by`, `comment_content`) VALUES
(1, 'Izran Shaikh', 'Worst Website Ever'),
(25, 'Izran Shaikh', '<script>alert(\"STORED XSS\");</script>'),
(27, 'Izran Shaikh', 'Just Host this website on any Server and you own that Server, Hence the websites on that Server too...'),
(28, 'Izran Shaikh', '<marquee>dsghdsdhs</marquee>');

-- --------------------------------------------------------

--
-- Table structure for table `vwausers`
--

CREATE TABLE `vwausers` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(200) NOT NULL,
  `user_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vwausers`
--

INSERT INTO `vwausers` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_role`) VALUES
(8, 'Izran Shaikh', 'email@gmail.com', 'password', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vwacomments`
--
ALTER TABLE `vwacomments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `vwausers`
--
ALTER TABLE `vwausers`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vwacomments`
--
ALTER TABLE `vwacomments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `vwausers`
--
ALTER TABLE `vwausers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
