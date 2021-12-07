-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 11:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musiconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `musicianname` varchar(20) NOT NULL,
  `customername` varchar(20) NOT NULL,
  `customeremail` varchar(20) NOT NULL,
  `customerphone` char(11) NOT NULL,
  `event` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(20) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `advance` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `paid_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `musicianname`, `customername`, `customeremail`, `customerphone`, `event`, `date`, `place`, `totalprice`, `advance`, `due`, `status`, `paid_amount`) VALUES
(2, 'Artcell', 'Abir', 'abir@gmail.com', '01711111112', 'University Programme', '2021-09-29', 'Dhanmondi', 70000, 21000, 49000, 'confirm', NULL),
(3, 'warfaze', 'Artcell', 'artcell@gmail.com', '01711111113', 'Charity event', '2021-09-30', 'Dhanmondi', 70000, 21000, 49000, 'Pending', NULL),
(4, 'Shunno', 'Abir', 'abir@gmail.com', '01711111115', 'National Holiday', '2021-10-01', 'Dhanmondi', 70000, 21000, 49000, 'Pending', NULL),
(5, 'Artcell', 'Abir', 'abir@gmail.com', '01711111115', 'University Programme', '2021-10-08', 'Badda', 70000, 21000, 49000, 'rejected', NULL),
(11, 'Artcell', 'Mebin', 'mebinf@gmail.com', '01711111119', 'University Programme', '2021-10-07', 'Dhanmondi', 0, 0, 0, 'confirm', NULL),
(12, 'Artcell', 'Mebin', 'mebinf@gmail.com', '01711111119', 'University Programme', '2021-10-07', 'Dhanmondi', 80000, 0, 80000, 'Pending', NULL),
(17, 'warfaze', 'Mebin', 'mebinf@gmail.com', '01711111119', 'Festival/ outdoor ev', '2021-10-07', 'Dhanmondi', 85000, 15000, 70000, 'Pending', NULL),
(18, 'Shunno', 'Abir', 'abir@gmail.com', '01711111112', 'Festival/ outdoor ev', '2021-10-08', 'Badda', 80000, 10000, 60000, 'confirm', 20000),
(21, 'Artcell', 'Mebin', 'mebinf@gmail.com', '01711111119', 'Festival/ outdoor ev', '2021-10-01', 'Badda', 0, 0, 0, 'Pending', NULL),
(23, 'Artcell', 'Abir', 'abir@gmail.com', '01711111115', 'University Programme', '2021-10-08', 'Dhanmondi', 85000, 20000, 65000, 'confirm', 20000),
(24, 'warfaze', 'Abir', 'abir@gmail.com', '01711111119', 'University Programme', '2021-12-18', 'Badda', 85000, 15000, 70000, 'Pending', NULL),
(25, 'Shunno', 'Abir', 'abir@gmail.com', '01711111115', 'University Programme', '2021-12-18', 'Badda', 80000, 10000, 70000, 'confirm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_details` varchar(20) NOT NULL,
  `m_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `event_date`, `event_details`, `m_id`) VALUES
(41, '2021-09-28', 'concert', 1),
(42, '2021-09-29', 'concert', 2),
(43, '2021-09-29', 'concert', 1),
(44, '2021-09-28', 'concert', 1),
(45, '0000-00-00', '', 1),
(46, '2021-09-28', 'concert3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `follow_id` int(6) NOT NULL,
  `sender_id` int(6) DEFAULT NULL,
  `sender_name` varchar(20) DEFAULT NULL,
  `receiver_id` int(6) DEFAULT NULL,
  `receiver_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`follow_id`, `sender_id`, `sender_name`, `receiver_id`, `receiver_name`) VALUES
(244, 3, 'Shunno', 1, 'Artcell'),
(245, 1000, 'Abir', 3, 'Shunno'),
(246, 2, 'Warfaze', 1, 'Artcell'),
(253, 2, 'warfaze', 3, 'Shunno'),
(254, 1, 'Artcell', 2, 'warfaze'),
(255, 1001, 'Mebin', 1, 'Artcell');

-- --------------------------------------------------------

--
-- Table structure for table `musician`
--

CREATE TABLE `musician` (
  `m_id` int(6) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `Genre` varchar(20) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `advance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musician`
--

INSERT INTO `musician` (`m_id`, `Name`, `Email`, `password`, `Genre`, `image`, `price`, `advance`) VALUES
(1, 'Artcell', 'artcell@gmail.com', '1234', 'Rock', 'artcell.jpg', 80000, 20000),
(2, 'warfaze', 'warfaze@gmail.com', '123', 'Rock', 'warfaze.jpg', 85000, 15000),
(3, 'Shunno', 'shunno@gmail.com', '123', 'Rock', 'shunno.jpg', 80000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `postid` int(11) DEFAULT NULL,
  `m_id` int(11) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `postid`, `m_id`, `post`) VALUES
(48, 2147483647, 1, 'Hello'),
(49, 2147483647, 2, 'We are coming on 2nd October.'),
(50, 2147483647, 1, 'we are coming on 18th  DEC');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `userid` int(6) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`userid`, `username`, `email`, `password`, `image`) VALUES
(1000, 'Abir', 'abir@gmail.com', '123', NULL),
(1001, 'Mebin', 'mebinf@gmail.com', '123', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `musician`
--
ALTER TABLE `musician`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `follow_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `musician`
--
ALTER TABLE `musician`
  MODIFY `m_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `userid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
