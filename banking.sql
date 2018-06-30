-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 10:33 AM
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
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_loans`
--

CREATE TABLE `apply_loans` (
  `id` int(11) NOT NULL,
  `reg_loans` varchar(200) NOT NULL,
  `reg_name` varchar(200) NOT NULL,
  `reg_email` varchar(200) NOT NULL,
  `reg_phone` varchar(200) NOT NULL,
  `reg_company` varchar(200) NOT NULL,
  `reg_city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_loans`
--

INSERT INTO `apply_loans` (`id`, `reg_loans`, `reg_name`, `reg_email`, `reg_phone`, `reg_company`, `reg_city`) VALUES
(1, 'company loans', 'ttttt', 'mynenisitsolutions@gmail.com', '9100888653', 'myneni', 'hyderabad'),
(2, 'LAP', 'dedfcw', 'sda@gmail', '1111111100', 'hyhjtjtj', 'vijayawada');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_box`
--

CREATE TABLE `complaint_box` (
  `id` int(11) NOT NULL,
  `com_name` varchar(200) NOT NULL,
  `com_email` varchar(200) NOT NULL,
  `com_phone` varchar(200) NOT NULL,
  `com_loans` varchar(200) NOT NULL,
  `com_comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_box`
--

INSERT INTO `complaint_box` (`id`, `com_name`, `com_email`, `com_phone`, `com_loans`, `com_comment`) VALUES
(1, 'daadf', 'mynenisitsolutions@gmail.com', '9100888653', 'personal loan', 'hey there');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `fed_name` varchar(200) NOT NULL,
  `fed_email` varchar(200) NOT NULL,
  `fed_phone` varchar(200) NOT NULL,
  `fed_comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fed_name`, `fed_email`, `fed_phone`, `fed_comment`) VALUES
(1, 'fderf', 'mynenisitsolutions@gmail.com', '9100888653', 'rgegrregeg'),
(2, 'vgrdfgvr', 'mynenisitsolutions@gmail.com', '9100888655', 'yhjntgjjftuykjtyjftyujft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_loans`
--
ALTER TABLE `apply_loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint_box`
--
ALTER TABLE `complaint_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_loans`
--
ALTER TABLE `apply_loans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaint_box`
--
ALTER TABLE `complaint_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
