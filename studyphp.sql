-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 07:05 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studyphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `connectpost`
--

CREATE TABLE `connectpost` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `connectpre`
--

CREATE TABLE `connectpre` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pre_test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deletepost`
--

CREATE TABLE `deletepost` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deletepre`
--

CREATE TABLE `deletepre` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pre_test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designpost`
--

CREATE TABLE `designpost` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designpre`
--

CREATE TABLE `designpre` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pre_test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `displaypost`
--

CREATE TABLE `displaypost` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `displaypre`
--

CREATE TABLE `displaypre` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pre_test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `editpost`
--

CREATE TABLE `editpost` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `editpre`
--

CREATE TABLE `editpre` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pre_test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insertpost`
--

CREATE TABLE `insertpost` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insertpre`
--

CREATE TABLE `insertpre` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pre_test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posttest`
--

CREATE TABLE `posttest` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `test` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `finished` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `progress` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0%'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `username`, `name`, `password`, `progress`) VALUES
(1, 'Admin', 'Admin CBL', 'admincbl214374', '100%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connectpost`
--
ALTER TABLE `connectpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connectpre`
--
ALTER TABLE `connectpre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deletepost`
--
ALTER TABLE `deletepost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deletepre`
--
ALTER TABLE `deletepre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designpost`
--
ALTER TABLE `designpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designpre`
--
ALTER TABLE `designpre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `displaypost`
--
ALTER TABLE `displaypost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `displaypre`
--
ALTER TABLE `displaypre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editpost`
--
ALTER TABLE `editpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editpre`
--
ALTER TABLE `editpre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insertpost`
--
ALTER TABLE `insertpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insertpre`
--
ALTER TABLE `insertpre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posttest`
--
ALTER TABLE `posttest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connectpost`
--
ALTER TABLE `connectpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `connectpre`
--
ALTER TABLE `connectpre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deletepost`
--
ALTER TABLE `deletepost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deletepre`
--
ALTER TABLE `deletepre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designpost`
--
ALTER TABLE `designpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designpre`
--
ALTER TABLE `designpre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `displaypost`
--
ALTER TABLE `displaypost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `displaypre`
--
ALTER TABLE `displaypre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `editpost`
--
ALTER TABLE `editpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `editpre`
--
ALTER TABLE `editpre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insertpost`
--
ALTER TABLE `insertpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insertpre`
--
ALTER TABLE `insertpre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posttest`
--
ALTER TABLE `posttest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
