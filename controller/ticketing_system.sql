-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 11:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketing_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_ticket`
--

CREATE TABLE `request_ticket` (
  `id` int(100) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL,
  `finished_date` varchar(250) NOT NULL,
  `completed_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_ticket`
--

INSERT INTO `request_ticket` (`id`, `fname`, `lname`, `email`, `department`, `title`, `priority`, `comments`, `request_date`, `status`, `finished_date`, `completed_by`) VALUES
(131, 'Jon', 'Folker', 'test@sanchez.com', 'accounting', 'Printer Broke', 'medium', 'We need this done before 5pm Thank you', '2020-06-05 23:42:42', 'done', '2020-06-05 18:42:58', 'Alexis Sanchez'),
(132, 'Jon', 'Folker', 'test@sanchez.com', 'accounting', 'Pc no power', 'medium', 'pc not turning on', '2020-06-06 06:03:09', 'pending..', '', ''),
(133, 'Jon', 'Folker', 'test@sanchez.com', 'accounting', 'Word  not opening', 'high', 'I restart the pc and still not working.', '2020-06-06 06:04:01', 'pending..', '', ''),
(134, 'Jon', 'Folker', 'test@sanchez.com', 'accounting', 'no wifi', 'low', 'no wifi on personal laptop', '2020-06-06 06:04:21', 'pending..', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `department` varchar(30) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `department`, `level`) VALUES
(1, 'Alexis', 'Sanchez', 'admin@sanchez.com', 'admin', 'IT-Department', 'admin'),
(28, 'Jon', 'Folker', 'test@sanchez.com', 'test', 'accounting', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_ticket`
--
ALTER TABLE `request_ticket`
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
-- AUTO_INCREMENT for table `request_ticket`
--
ALTER TABLE `request_ticket`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
