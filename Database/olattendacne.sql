-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 10:39 AM
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
(11, 'KqSJaCA', 'Principal', 'saurabh wani', 'saurabh123@gmail.com', 'asdf', '', 'Free', 'gcoej', '2020-09-14', 'off'),
(14, 'RxuDrpH', 'HOD', 'Tushar Patil', 'tusharpatil12@gmail.com', 'asdf', 'user.jpg', 'Free', 'SMIT', '2020-09-22', 'off'),
(15, 'lichEEO', 'HOD', 'Raj Sharm', 'raj123@gmail.com', 'asdf', 'teacher-Online-Attendance.png', 'Free', 'COEP', '2020-09-23', 'off'),
(20, 'CmtAXvr', 'Principal', 'rakesh', 'rakesh@gmail.com', 'asdf', 'IMG-20191209-WA0006.jpg', 'Free', 'COEP', '2020-11-12', 'off'),
(22, 'xvA7c9i', 'Principal', 'Saurabh wani', 'saurabh1234@gmail.com', 'asdf', 'avatar5.png', 'Free', 'SMIT', '2020-11-21', 'off'),
(23, 'YpBeAsv', 'Principal', 'Rohit sharma', 'saurabh14@gmail.com', 'asdf', '', 'Free', 'new2', '2020-11-21', 'off'),
(26, 'gncDI0b', 'Principal', 'Shyam Sulbhwar', 'shyam1@gmail.com', 'asdf', '', 'Free', 'VJTI', '2020-12-23', 'off'),
(27, 'cRz6RS3', 'Class Teacher', 'Rakesh Roshan', 'Rr@gmail.com', 'asdf', '', 'Free', 'GCOEJ', '2021-01-21', 'on'),
(28, 'MCrZdHA', 'Class Teacher', 'Rohit Patil', 'rp@gmail.com', 'asdf', 'ur.png', 'Free', 'GCOEJ', '2021-01-21', 'off');

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
(11, 'a:2:{i:0;s:2:\"13\";i:1;s:2:\"28\";}'),
(13, 'a:2:{i:0;s:2:\"11\";i:1;s:2:\"15\";}'),
(14, 'a:0:{}'),
(15, 'a:2:{i:0;s:2:\"20\";i:1;s:2:\"13\";}'),
(14, 'a:0:{}'),
(20, 'a:1:{i:0;s:2:\"15\";}'),
(21, 'a:0:{}'),
(22, 'a:0:{}'),
(23, 'a:0:{}'),
(26, 'a:0:{}'),
(27, 'a:0:{}'),
(28, 'a:1:{i:0;s:2:\"11\";}');

-- --------------------------------------------------------

--
-- Table structure for table `dbms28`
--

CREATE TABLE `dbms28` (
  `id` int(11) NOT NULL,
  `prn` int(11) DEFAULT NULL,
  `percnt` int(11) DEFAULT NULL,
  `2021/01/21--10:17:43am` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbms28`
--

INSERT INTO `dbms28` (`id`, `prn`, `percnt`, `2021/01/21--10:17:43am`) VALUES
(1, 1, 100, 'present'),
(2, 2, 100, 'present'),
(3, 3, 100, 'present'),
(4, 4, 100, 'present'),
(5, 5, 100, 'present'),
(6, 6, 0, 'Absent'),
(7, 7, 100, 'present'),
(8, 8, 100, 'present'),
(9, 9, 0, 'Absent'),
(10, 10, 100, 'present'),
(11, 102, 100, 'present'),
(12, 103, 100, 'present'),
(13, 104, 100, 'present'),
(14, 105, 100, 'present'),
(15, 106, 100, 'present'),
(16, 107, 100, 'present'),
(17, 108, 0, 'Absent'),
(18, 109, 100, 'present'),
(19, 110, 100, 'present');

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
-- Table structure for table `nupd`
--

CREATE TABLE `nupd` (
  `id` int(100) NOT NULL,
  `l1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nupd`
--

INSERT INTO `nupd` (`id`, `l1`) VALUES
(1, 'Hello for testing');

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
(13, 'a:1:{i:0;s:2:\"20\";}'),
(14, 'a:2:{i:0;s:2:\"20\";i:1;s:2:\"28\";}'),
(15, 'a:1:{i:0;s:2:\"11\";}'),
(14, 'a:2:{i:0;s:2:\"20\";i:1;s:2:\"28\";}'),
(17, 'a:1:{i:0;s:2:\"13\";}'),
(18, 'a:0:{}'),
(19, 'a:0:{}'),
(20, 'a:1:{i:0;s:2:\"11\";}'),
(21, 'a:0:{}'),
(22, 'a:1:{i:0;s:2:\"28\";}'),
(23, 'a:0:{}'),
(26, 'a:0:{}'),
(27, 'a:1:{i:0;s:2:\"28\";}'),
(28, 'a:0:{}');

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
(0, 'Saurabh', 5, 'unread', '2020-09-14 15:50:16', 'yes', 'sau@gmail.com', 'asdf'),
(11, 'dsfasfa', 5, 'unread', '2020-11-15 15:16:13', 'no', '', ''),
(11, 'dsfasfa', 5, 'unread', '2020-11-15 15:16:31', 'no', '', '');

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
(11, 'a:3:{i:0;s:2:\"16\";i:1;s:2:\"15\";i:2;s:2:\"20\";}'),
(13, 'a:1:{i:0;s:2:\"17\";}'),
(14, 'a:0:{}'),
(15, 'a:0:{}'),
(14, 'a:0:{}'),
(17, 'a:0:{}'),
(18, 'a:0:{}'),
(19, 'a:0:{}'),
(20, 'a:2:{i:0;s:2:\"13\";i:1;s:2:\"14\";}'),
(21, 'a:0:{}'),
(22, 'a:0:{}'),
(23, 'a:0:{}'),
(26, 'a:0:{}'),
(27, 'a:0:{}'),
(28, 'a:3:{i:0;s:2:\"22\";i:1;s:2:\"14\";i:2;s:2:\"27\";}');

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
(28, 'DBMS28', 16, 'T.Y.Comp', 'T2');

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
-- Indexes for table `dbms28`
--
ALTER TABLE `dbms28`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributer`
--
ALTER TABLE `distributer`
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
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `dbms28`
--
ALTER TABLE `dbms28`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `distributer`
--
ALTER TABLE `distributer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nupd`
--
ALTER TABLE `nupd`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
