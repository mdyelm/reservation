-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2017 at 12:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `pick_date` date DEFAULT NULL,
  `pick_time` varchar(20) DEFAULT NULL,
  `reservation_phone_number` varchar(255) DEFAULT NULL,
  `send_flg` tinyint(4) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `time`, `company_name`, `name`, `phone_number`, `pick_date`, `pick_time`, `reservation_phone_number`, `send_flg`, `created`, `modified`) VALUES
(1, 'tunglt@brite.vn', '2017-09-20 09:42:04', '1', '1', '1', '2017-09-21', '17:00-17:30', '1', 1, '2017-09-20 09:42:04', '2017-09-20 09:42:04'),
(2, 'tunglt@brite.vn', '2017-09-22 05:39:43', '1', '1', '1', '2017-09-22', '13:30-14:00', '1', 0, '2017-09-22 05:39:44', '2017-09-22 05:39:44'),
(3, 'tunglt@brite.vn', '2017-09-22 06:09:33', '1', '1', '1', '2017-09-22', '13:30-14:00', '1', 0, '2017-09-22 06:09:33', '2017-09-22 06:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `users_free`
--

CREATE TABLE `users_free` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `pick_date` date DEFAULT NULL,
  `pick_time` varchar(20) DEFAULT NULL,
  `reservation_phone_number` varchar(255) DEFAULT NULL,
  `send_flg` tinyint(4) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_free`
--

INSERT INTO `users_free` (`id`, `email`, `time`, `company_name`, `name`, `phone_number`, `pick_date`, `pick_time`, `reservation_phone_number`, `send_flg`, `created`, `modified`) VALUES
(1, 'tunglt@brite.vn', '2017-09-20 09:42:04', '1', '1', '1', '2017-09-21', '17:00-17:30', '1', 1, '2017-09-20 09:42:04', '2017-09-20 09:42:04'),
(2, 'tunglt@brite.vn', '2017-09-21 11:05:55', '1', '1', '1', NULL, NULL, '1', 0, '2017-09-21 11:05:55', '2017-09-21 11:05:55'),
(3, 'tunglt@brite.vn', '2017-09-22 06:12:48', '1', '1', '1', '2017-09-22', '13:30-14:00', '1', 0, '2017-09-22 06:12:48', '2017-09-22 06:12:48'),
(4, 'tunglt@brite.vn', '2017-09-22 06:13:06', '1', '1', '1', '2017-09-22', '13:30-14:00', '1', 0, '2017-09-22 06:13:06', '2017-09-22 06:13:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_free`
--
ALTER TABLE `users_free`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_free`
--
ALTER TABLE `users_free`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
