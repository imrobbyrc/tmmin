-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2020 at 09:13 AM
-- Server version: 5.7.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toyota`
--

-- --------------------------------------------------------

--
-- Table structure for table `furnace_alarm_history`
--

CREATE TABLE `furnace_alarm_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `stdvalue_id` int(10) UNSIGNED NOT NULL,
  `starttime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `endtime` datetime DEFAULT NULL,
  `field_val` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `furnace_alarm_history`
--

INSERT INTO `furnace_alarm_history` (`id`, `stdvalue_id`, `starttime`, `endtime`, `field_val`) VALUES
(1, 1, '2020-05-17 11:31:03', '2020-05-17 11:31:50', '50');

-- --------------------------------------------------------

--
-- Table structure for table `furnace_field_value`
--

CREATE TABLE `furnace_field_value` (
  `id` int(10) UNSIGNED NOT NULL,
  `param_id` int(10) UNSIGNED DEFAULT NULL,
  `timestamp` datetime DEFAULT CURRENT_TIMESTAMP,
  `value` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `furnace_field_value`
--

INSERT INTO `furnace_field_value` (`id`, `param_id`, `timestamp`, `value`) VALUES
(1, 1, '2020-05-17 11:27:01', '452'),
(2, 1, '2020-05-17 11:27:44', '477'),
(3, 2, '2020-05-17 11:27:44', '500'),
(4, 2, '2020-05-17 11:27:49', '600'),
(5, 2, '2020-05-17 11:27:54', '500'),
(6, 2, '2020-05-17 11:27:59', '600'),
(7, 3, '2020-05-17 11:27:44', '500'),
(8, 3, '2020-05-17 11:27:49', '600'),
(9, 3, '2020-05-17 11:27:54', '500'),
(10, 4, '2020-05-17 11:27:59', '600'),
(11, 5, '2020-05-17 11:27:44', '500'),
(12, 5, '2020-05-17 11:27:49', '600'),
(13, 5, '2020-05-17 11:27:54', '500'),
(14, 5, '2020-05-17 11:27:59', '600'),
(15, 6, '2020-05-17 11:27:44', '500'),
(16, 6, '2020-05-17 11:27:49', '600'),
(17, 6, '2020-05-17 11:27:54', '500'),
(18, 6, '2020-05-17 11:27:59', '600'),
(19, 7, '2020-05-17 11:27:44', '500'),
(20, 7, '2020-05-17 11:27:49', '600'),
(21, 7, '2020-05-17 11:27:54', '500'),
(22, 8, '2020-05-17 11:27:44', '500'),
(23, 8, '2020-05-17 11:27:49', '600'),
(24, 9, '2020-05-17 11:27:44', '500'),
(25, 9, '2020-05-17 11:27:49', '600'),
(26, 9, '2020-05-17 11:27:54', '500'),
(27, 9, '2020-05-17 11:27:59', '600'),
(28, 10, '2020-05-17 11:27:44', '500'),
(29, 10, '2020-05-17 11:27:49', '600'),
(30, 11, '2020-05-17 11:27:54', '500'),
(31, 11, '2020-05-17 11:27:59', '600'),
(32, 11, '2020-05-17 11:27:44', '500'),
(33, 12, '2020-05-17 11:27:49', '600'),
(34, 12, '2020-05-17 11:27:54', '500'),
(35, 12, '2020-05-17 11:27:59', '600'),
(36, 12, '2020-05-17 11:27:44', '500'),
(37, 13, '2020-05-17 11:27:49', '600'),
(38, 13, '2020-05-17 11:27:54', '500'),
(39, 13, '2020-05-17 11:27:59', '600'),
(40, 14, '2020-05-17 11:27:44', '500'),
(41, 14, '2020-05-17 11:27:49', '600'),
(42, 14, '2020-05-17 11:27:54', '500'),
(43, 15, '2020-05-17 11:27:44', '500'),
(44, 15, '2020-05-17 11:27:49', '600'),
(45, 16, '2020-05-17 11:27:44', '500'),
(46, 16, '2020-05-17 11:27:49', '600'),
(47, 16, '2020-05-17 11:27:54', '500'),
(48, 16, '2020-05-17 11:27:59', '600'),
(49, 17, '2020-05-17 11:27:44', '500'),
(50, 17, '2020-05-17 11:27:49', '600'),
(51, 17, '2020-05-17 11:27:54', '500'),
(52, 18, '2020-05-17 11:27:59', '600'),
(53, 19, '2020-05-17 11:27:44', '500'),
(54, 19, '2020-05-17 11:27:49', '600'),
(55, 19, '2020-05-17 11:27:54', '500'),
(56, 19, '2020-05-17 11:27:59', '600'),
(57, 20, '2020-05-17 11:27:44', '500'),
(58, 20, '2020-05-17 11:27:49', '600'),
(59, 20, '2020-05-17 11:27:54', '500'),
(60, 20, '2020-05-17 11:27:59', '600'),
(61, 21, '2020-05-17 11:27:44', '500'),
(62, 21, '2020-05-17 11:27:49', '600'),
(63, 21, '2020-05-17 11:27:54', '500'),
(64, 22, '2020-05-17 11:27:44', '500'),
(65, 22, '2020-05-17 11:27:49', '600');

-- --------------------------------------------------------

--
-- Table structure for table `furnace_param_definition`
--

CREATE TABLE `furnace_param_definition` (
  `id` int(10) UNSIGNED NOT NULL,
  `params_uid` varchar(6) NOT NULL,
  `params_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `furnace_param_definition`
--

INSERT INTO `furnace_param_definition` (`id`, `params_uid`, `params_desc`) VALUES
(1, 'T1_S1', 'defition '),
(2, 'T2_S2', 'defition '),
(3, 'T3_S3', 'defition '),
(4, 'T4_S4', 'defition '),
(5, 'MOT2', 'defition '),
(6, 'MOT3', 'defition '),
(7, 'PT4', 'defition '),
(8, 'MOT4', 'defition '),
(9, 'PT6', 'defition '),
(10, 'MOT6', 'defition '),
(11, 'INV1', 'defition '),
(12, 'PT5', 'defition '),
(13, 'MOT5', 'defition '),
(14, 'PT7', 'defition '),
(15, 'MOT7', 'defition '),
(16, 'Tc2', 'defition '),
(17, 'Tc3', 'defition '),
(18, 'Tc4', 'defition '),
(19, 'Tc5', 'defition '),
(20, 'Tc6', 'defition '),
(21, 'MOT8', 'defition '),
(22, 'T10b', 'defition ');

-- --------------------------------------------------------

--
-- Table structure for table `furnace_std_val`
--

CREATE TABLE `furnace_std_val` (
  `id` int(10) UNSIGNED NOT NULL,
  `param_id` int(10) UNSIGNED NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lowval` varchar(10) NOT NULL,
  `highval` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `furnace_std_val`
--

INSERT INTO `furnace_std_val` (`id`, `param_id`, `timestamp`, `lowval`, `highval`) VALUES
(1, 1, '2020-05-17 11:29:18', '100', '400'),
(2, 2, '2020-05-17 11:29:18', '100', '400'),
(3, 3, '2020-05-17 11:29:18', '110', '410'),
(4, 4, '2020-05-17 11:29:18', '120', '420'),
(5, 5, '2020-05-17 11:29:18', '130', '430'),
(6, 6, '2020-05-17 11:29:18', '140', '440'),
(7, 7, '2020-05-17 11:29:18', '150', '450'),
(8, 8, '2020-05-17 11:29:18', '160', '460'),
(9, 9, '2020-05-17 11:29:18', '170', '470'),
(10, 10, '2020-05-17 11:29:18', '180', '480'),
(11, 11, '2020-05-17 11:29:18', '190', '490'),
(12, 12, '2020-05-17 11:29:18', '100', '400'),
(13, 13, '2020-05-17 11:29:18', '110', '410'),
(14, 14, '2020-05-17 11:29:18', '120', '420'),
(15, 15, '2020-05-17 11:29:18', '130', '430'),
(16, 16, '2020-05-17 11:29:18', '140', '440'),
(17, 17, '2020-05-17 11:29:18', '150', '450'),
(18, 18, '2020-05-17 11:29:18', '160', '460'),
(19, 19, '2020-05-17 11:29:18', '170', '470'),
(20, 20, '2020-05-17 11:29:18', '180', '480'),
(21, 21, '2020-05-17 11:29:18', '190', '490'),
(22, 22, '2020-05-17 11:29:18', '100', '400'),
(23, 22, '2020-05-18 11:29:18', '100', '400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `furnace_alarm_history`
--
ALTER TABLE `furnace_alarm_history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE,
  ADD KEY `std_val` (`stdvalue_id`);

--
-- Indexes for table `furnace_field_value`
--
ALTER TABLE `furnace_field_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`param_id`);

--
-- Indexes for table `furnace_param_definition`
--
ALTER TABLE `furnace_param_definition`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE,
  ADD UNIQUE KEY `param_uid` (`params_uid`) USING BTREE;

--
-- Indexes for table `furnace_std_val`
--
ALTER TABLE `furnace_std_val`
  ADD PRIMARY KEY (`id`),
  ADD KEY `param_id` (`param_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `furnace_alarm_history`
--
ALTER TABLE `furnace_alarm_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `furnace_field_value`
--
ALTER TABLE `furnace_field_value`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `furnace_param_definition`
--
ALTER TABLE `furnace_param_definition`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `furnace_std_val`
--
ALTER TABLE `furnace_std_val`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `furnace_alarm_history`
--
ALTER TABLE `furnace_alarm_history`
  ADD CONSTRAINT `std_val` FOREIGN KEY (`stdvalue_id`) REFERENCES `furnace_std_val` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `furnace_field_value`
--
ALTER TABLE `furnace_field_value`
  ADD CONSTRAINT `id` FOREIGN KEY (`param_id`) REFERENCES `furnace_param_definition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `furnace_std_val`
--
ALTER TABLE `furnace_std_val`
  ADD CONSTRAINT `param_id` FOREIGN KEY (`param_id`) REFERENCES `furnace_param_definition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
