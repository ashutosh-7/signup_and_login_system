-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 01:48 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `stdno` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `mobile`, `branch`, `stdno`, `gender`) VALUES
(1, 'ashutosh yadav', 'cage7781', '123456', 'ramashankaryadav.ad@gmail.com', 2147483647, 'branch', 1710082, 'Male'),
(2, 'ashu', '12345', '12345', 'raankaryadav.ad@gmail.com', 2147483647, 'branch', 1234, 'Male'),
(3, 'ashutosh yadav', 'ashu232', 'e10adc3949ba59abbe56e057f20f883e', 'ramashankaryadav.ad@gmail.com', 2147483647, 'branch', 17100282, 'Male'),
(4, 'abhi', 'abhi222', 'b8547370697beec008fa4c5fcaa928d7', 'ramashankaryadav.ad@gmail.com', 2147483647, 'branch', 17100820, 'Male'),
(5, 'ashutosh yadav', 'abs123', 'e10adc3949ba59abbe56e057f20f883e', 'rankaryadav.ad@gmail.com', 2147483647, 'branch', 2147483647, 'Male'),
(6, 'akshay', 'akshay', 'fc2aa0b552143f168cc3fc55dc4b00fd', 'ankaryadav.ad@gmail.com', 2147483647, 'branch', 1710064, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
