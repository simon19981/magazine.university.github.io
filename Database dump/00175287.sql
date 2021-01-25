-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 08:27 AM
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
-- Database: `00175287`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `starting_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_description`, `starting_date`, `end_date`) VALUES
(13, 'discov1234', 'any one can post about their discovaries ', '2020-06-02 04:56:00', '2020-07-30 12:55:00'),
(15, 'discovary', 'make ', '2020-06-30 04:59:00', '2020-07-11 01:01:00'),
(16, 'discovaryfsdf', 'make historyhhh', '2020-06-04 01:01:00', '2020-06-14 05:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_registration`
--

CREATE TABLE `event_registration` (
  `id` int(11) NOT NULL,
  `picture` varchar(355) NOT NULL,
  `category` varchar(355) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `file_cat` varchar(255) NOT NULL,
  `is_selected` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_registration`
--

INSERT INTO `event_registration` (`id`, `picture`, `category`, `user_id`, `date_time`, `file_cat`, `is_selected`) VALUES
(22, 'upload/received_2412993102314148.png', 'Cooking, Food, & Bev Magazines', 26, '0000-00-00 00:00:00', '', 1),
(23, 'upload/received_2412993102314148.png', 'Computer & Electronics Magazines', 26, '0000-00-00 00:00:00', '', 1),
(24, 'upload/received_2412993102314148.png', 'Children Magazines', 26, '0000-00-00 00:00:00', '', 0),
(25, 'upload/received_2412993102314148.png', 'Cooking, Food, & Bev Magazines', 26, '2020-06-16 12:21:32', '', 0),
(31, 'upload/ADI_QP_Assignment_Spring_2020_FINAL_20_credits_9822.pdf', 'Entertainment & TV Magazines', 26, '2020-06-20 10:42:12', 'PDF', 0),
(32, 'upload/ADI_QP_Assignment_Spring_2020_FINAL_20_credits_9822.pdf', 'Computer & Electronics Magazines', 26, '2020-06-20 21:23:05', 'Word', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(20, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(26, 'avi', 'simon111@gamil.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(35, 'anna', 'anna@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_registration`
--
ALTER TABLE `event_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cat` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `event_registration`
--
ALTER TABLE `event_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_registration`
--
ALTER TABLE `event_registration`
  ADD CONSTRAINT `fk_cat` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
