-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2024 at 05:30 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminss`
--

CREATE TABLE `adminss` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_mobile` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminss`
--

INSERT INTO `adminss` (`id`, `name`, `admin_mobile`) VALUES
(1, 'Labib', '01223344556');

-- --------------------------------------------------------

--
-- Table structure for table `prarthis`
--

CREATE TABLE `prarthis` (
  `group_id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `group_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `election_district` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `group_photo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total_votes` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prarthis`
--

INSERT INTO `prarthis` (`group_id`, `name`, `group_name`, `election_district`, `group_photo`, `total_votes`) VALUES
(15, 'HERO ALOM', 'nouka', 'BANANI', '15.png', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nid` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `birthday` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sub_district` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `votes` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `delete_status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `nid`, `birthday`, `district`, `sub_district`, `address`, `gender`, `role`, `photo`, `status`, `votes`, `delete_status`) VALUES
(25, 'mahin', '01715153355', '3432443', '2024-03-21', 'dhaka', 'dhaka', 'hatirpool', 'Male', 'voter', '25.jpg', 'not voted', 'yes', '0'),
(26, 'Jada Mann', '54', '97', '2018-08-17', 'Adipisicing ipsam vo', 'Quam culpa libero s', 'Voluptas ratione rer', 'Female', 'voter', '26.jpg', 'not voted', 'yes', NULL),
(27, 'Nadim Hasan', '01720299987', '32323', '2024-03-19', 'dhaka', 'dhaka', 'hatirpool', 'Male', 'voter', '27.jpg', 'not voted', 'yes', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminss`
--
ALTER TABLE `adminss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prarthis`
--
ALTER TABLE `prarthis`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminss`
--
ALTER TABLE `adminss`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prarthis`
--
ALTER TABLE `prarthis`
  MODIFY `group_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
