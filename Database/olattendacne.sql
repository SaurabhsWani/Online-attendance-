-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 01:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olattendacne`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `id`, `username`, `usertype`, `image`) VALUES
('saurabh123@gmail.com', 'asdf', 38, 'saurabh wani', 'admin', 'avatar5.png');

-- --------------------------------------------------------

--
-- Table structure for table `b_person`
--

CREATE TABLE `b_person` (
  `bid` int(11) NOT NULL,
  `code` varchar(11) NOT NULL,
  `category` text NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `Plan` mediumtext NOT NULL,
  `cs` text NOT NULL,
  `Date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_person`
--

INSERT INTO `b_person` (`bid`, `code`, `category`, `Name`, `Email`, `Password`, `image`, `Plan`, `cs`, `Date`, `status`) VALUES
(0, '00', '', '', '', '', 'avatar.png', '', '', '0000-00-00', ''),
(11, 'KqSJaCA', 'Principal', 'saurabh', 'saurabh123@gmail.com', 'asdf', 'avatar.png', 'Free', 'gcoej', '2020-09-14', 'off'),
(13, 'Qptefa8', 'Principal', 'Radhikaa', 'er.saurabhwani1@gmail.com', 'asdf', 'avatar5.png', 'Free', 'gcoej', '2020-09-14', 'off'),
(14, 'RxuDrpH', 'HOD', 'Tushar Patil', 'tusharpatil12@gmail.com', 'asdf', 'user.jpg', 'Free', 'SMIT', '2020-09-22', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `connxtion`
--

CREATE TABLE `connxtion` (
  `ntid` int(11) NOT NULL,
  `tid` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `connxtion`
--

INSERT INTO `connxtion` (`ntid`, `tid`) VALUES
(8, 'a:0:{}'),
(9, 'a:0:{}'),
(10, 'a:0:{}'),
(11, 'a:1:{i:0;s:2:\"13\";}'),
(13, 'a:1:{i:0;s:2:\"11\";}'),
(14, 'a:0:{}');

-- --------------------------------------------------------

--
-- Table structure for table `distributer`
--

CREATE TABLE `distributer` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(255) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `DATE` datetime NOT NULL,
  `status` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `math11`
--

CREATE TABLE `math11` (
  `id` int(11) NOT NULL,
  `prn` int(11) DEFAULT NULL,
  `percnt` int(11) DEFAULT NULL,
  `2020/09/15--03:53:00pm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `math11`
--

INSERT INTO `math11` (`id`, `prn`, `percnt`, `2020/09/15--03:53:00pm`) VALUES
(1, 1, 100, 'present'),
(2, 2, 100, 'present'),
(3, 3, 100, 'present'),
(4, 4, 100, 'present'),
(5, 5, 100, 'present'),
(6, 6, 100, 'present'),
(7, 7, 100, 'present'),
(8, 8, 100, 'present'),
(9, 9, 100, 'present'),
(10, 10, 100, 'present'),
(11, 11, 100, 'present'),
(12, 12, 100, 'present'),
(13, 13, 100, 'present'),
(14, 14, 100, 'present'),
(15, 15, 100, 'present'),
(16, 16, 100, 'present'),
(17, 17, 100, 'present'),
(18, 18, 100, 'present'),
(19, 19, 100, 'present'),
(20, 20, 100, 'present');

-- --------------------------------------------------------

--
-- Table structure for table `math14`
--

CREATE TABLE `math14` (
  `id` int(11) NOT NULL,
  `prn` int(11) DEFAULT NULL,
  `percnt` int(11) DEFAULT NULL,
  `2020/09/22--01:47:04pm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `math14`
--

INSERT INTO `math14` (`id`, `prn`, `percnt`, `2020/09/22--01:47:04pm`) VALUES
(1, 1, 100, 'present'),
(2, 2, 100, 'present'),
(3, 3, 100, 'present'),
(4, 4, 100, 'present'),
(5, 5, 100, 'present'),
(6, 6, 100, 'present'),
(7, 7, 100, 'present'),
(8, 8, 100, 'present'),
(9, 9, 100, 'present'),
(10, 10, 100, 'present'),
(11, 11, 100, 'present'),
(12, 12, 100, 'present'),
(13, 13, 100, 'present'),
(14, 14, 100, 'present'),
(15, 15, 100, 'present'),
(16, 16, 100, 'present'),
(17, 17, 100, 'present'),
(18, 18, 100, 'present'),
(19, 19, 100, 'present'),
(20, 20, 100, 'present');

-- --------------------------------------------------------

--
-- Table structure for table `nupd`
--

CREATE TABLE `nupd` (
  `id` int(100) NOT NULL,
  `l1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recieve`
--

CREATE TABLE `recieve` (
  `bid` int(11) NOT NULL,
  `rec` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recieve`
--

INSERT INTO `recieve` (`bid`, `rec`) VALUES
(8, '0'),
(9, '0'),
(10, '0'),
(11, 'a:0:{}'),
(13, 'a:0:{}'),
(14, 'a:0:{}');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(100) NOT NULL,
  `review` varchar(1000) NOT NULL DEFAULT 'NO REVIEW',
  `rate` int(100) NOT NULL,
  `status` text NOT NULL,
  `DATE` datetime NOT NULL,
  `display` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review`, `rate`, `status`, `DATE`, `display`, `email`, `name`) VALUES
(0, 'Saurabh', 5, 'unread', '2020-09-14 15:50:16', 'yes', 'sau@gmail.com', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `sent`
--

CREATE TABLE `sent` (
  `bid` int(11) NOT NULL,
  `send` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sent`
--

INSERT INTO `sent` (`bid`, `send`) VALUES
(8, '0'),
(9, '0'),
(10, '0'),
(11, 'a:0:{}'),
(13, 'a:0:{}'),
(14, 'a:0:{}');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subjname` text NOT NULL,
  `sid` int(11) NOT NULL,
  `standard` varchar(256) NOT NULL,
  `divsion` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subjname`, `sid`, `standard`, `divsion`) VALUES
(11, 'math11', 4, '12', 'm'),
(14, 'math14', 5, '12', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_person`
--
ALTER TABLE `b_person`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `distributer`
--
ALTER TABLE `distributer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `math11`
--
ALTER TABLE `math11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `math14`
--
ALTER TABLE `math14`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nupd`
--
ALTER TABLE `nupd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `b_person`
--
ALTER TABLE `b_person`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `distributer`
--
ALTER TABLE `distributer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `math11`
--
ALTER TABLE `math11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `math14`
--
ALTER TABLE `math14`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
