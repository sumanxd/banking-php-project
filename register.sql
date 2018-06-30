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
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE `new_record` (
  `id` int(11) NOT NULL,
  `trn_date` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `submittedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_record`
--

INSERT INTO `new_record` (`id`, `trn_date`, `name`, `age`, `submittedby`) VALUES
(2, '2017-12-30 10:21:30', 'rsqshdbkch', 0, 'Rakesh Kumar'),
(3, '2017-12-30 10:21:36', 'wtbsdbd', 0, 'Rakesh Kumar'),
(4, '2017-12-30 10:21:56', 'thredb', 0, 'Rakesh Kumar'),
(5, '2017-12-30 10:24:26', 'rr', 34, 'Rakesh Kumar'),
(6, '2017-12-30 11:32:04', 'fjrjgjrg', 45, 'Rakesh Kumar'),
(7, '2018-03-28 14:39:05', 'rsrdgdh', 489555, 'suman');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `pname` varchar(200) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `csection` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`, `pname`, `roll`, `phone`, `class`, `csection`, `message`) VALUES
(2, 'suman', 'a@gmail', '81dc9bdb52d04dc20036dbd8313ed055', '2018-03-28 13:25:12', '', '', '', '', '', ''),
(3, 'abc', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-04-03 06:07:12', '', '', '', '', '', ''),
(6, 'abc', 'a@gmail', '123', '2018-04-03 06:28:02', '', '', '', '', '', ''),
(11, 'aa', 'mynenisitsolutions@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-04-03 13:34:33', 'bb', '12', '123456789', '32', 'abc', 'aaaaaaaaaaaaaaaaaaa'),
(12, 'hu', 'ih@g', '95f11b6956a5cd3a7de04c8f2664316e', '2018-04-04 06:06:59', 'hh', 'h', 'h', 'h', 'h', 'i'),
(13, 'kj', 'kb@gma', '7e7ec59d1f4b21021577ff562dc3d48b', '2018-04-04 06:07:30', 'k', 'jkkbkb', 'kb', 'k', 'bk', 'bk'),
(14, 'hui', 'h@gmai', '95f11b6956a5cd3a7de04c8f2664316e', '2018-04-04 06:08:04', 'h', 'h', 'hi', 'gvb', 'ih', 'ih'),
(15, 'ooo', 'ooo@gmail.com', '1234', '2018-04-09 08:54:15', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_record`
--
ALTER TABLE `new_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_record`
--
ALTER TABLE `new_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
