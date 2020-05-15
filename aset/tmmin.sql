-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2020 at 07:38 AM
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
-- Database: `tmmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `alarmdesc`
--

CREATE TABLE `alarmdesc` (
  `id` int(11) NOT NULL,
  `alarmId` varchar(50) NOT NULL,
  `alarmDesc` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alarmdesc`
--

INSERT INTO `alarmdesc` (`id`, `alarmId`, `alarmDesc`, `created_at`, `updated_at`) VALUES
(1, '2d', 'Burner Fce Temp. Alarm', '2020-05-13 04:05:10', '2020-05-13 04:05:23'),
(2, '4g', 'Bubbling Furnace Pressure Alarm', '2020-05-13 04:05:10', '2020-05-13 04:05:29'),
(3, '1w', 'Screw Feeder Inverter Status', '2020-05-13 04:05:54', '2020-05-13 04:06:04'),
(4, '1z', 'S2 FCE Outlet Sand Temp. Alarm', '2020-05-13 04:05:54', '2020-05-13 04:06:09'),
(5, '1ab', 'S3 FCE Inlet Sand Temp. Alarm', '2020-05-13 04:05:54', '2020-05-13 04:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `alarmhistory`
--

CREATE TABLE `alarmhistory` (
  `id` int(11) NOT NULL,
  `alarmId` varchar(150) NOT NULL,
  `start_date` timestamp NOT NULL,
  `end_date` timestamp NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alarmhistory`
--

INSERT INTO `alarmhistory` (`id`, `alarmId`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, '1ab', '2020-05-05 04:06:18', '2020-05-07 04:06:18', '2020-05-13 04:06:49', '2020-05-13 04:06:49'),
(2, '1w', '2020-05-05 04:06:18', '2020-05-06 04:06:18', '2020-05-13 04:06:49', '2020-05-13 04:06:49'),
(3, '1z', '2020-05-05 04:06:18', '2020-05-07 04:06:18', '2020-05-13 04:06:49', '2020-05-13 04:06:49'),
(4, '2d', '2020-05-05 04:06:18', '2020-05-06 04:06:18', '2020-05-13 04:06:49', '2020-05-13 04:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `equipdef`
--

CREATE TABLE `equipdef` (
  `id` int(11) NOT NULL,
  `equipId` varchar(50) NOT NULL,
  `equipDesc` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipdef`
--

INSERT INTO `equipdef` (`id`, `equipId`, `equipDesc`, `created_at`, `updated_at`) VALUES
(1, '10a', 'Fce Combustion Temperature Sensor', '2020-05-13 03:56:20', '2020-05-13 03:56:20'),
(2, '10d', 'Fce Outlet Sand Temperature Sensor', '2020-05-13 03:56:20', '2020-05-13 03:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `equipval`
--

CREATE TABLE `equipval` (
  `id` int(11) NOT NULL,
  `equipId` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL,
  `value` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipval`
--

INSERT INTO `equipval` (`id`, `equipId`, `timestamp`, `value`, `created_at`, `updated_at`) VALUES
(1, '10a', '2020-05-13 03:00:00', 130.1, '2020-05-13 03:58:10', '2020-05-13 06:51:38'),
(2, '10d', '2020-05-13 03:00:00', 200.1, '2020-05-13 03:58:10', '2020-05-13 06:53:41'),
(3, '10a', '2020-05-13 03:00:05', 500, '2020-05-13 03:58:10', '2020-05-13 06:53:41'),
(4, '10d', '2020-05-13 03:00:05', 100, '2020-05-13 03:58:10', '2020-05-13 06:53:41'),
(5, '10a', '2020-05-13 12:00:00', 500, '2020-05-13 03:58:10', '2020-05-13 06:53:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alarmdesc`
--
ALTER TABLE `alarmdesc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alarmId` (`alarmId`);

--
-- Indexes for table `alarmhistory`
--
ALTER TABLE `alarmhistory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alarmId` (`alarmId`);

--
-- Indexes for table `equipdef`
--
ALTER TABLE `equipdef`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipId` (`equipId`);

--
-- Indexes for table `equipval`
--
ALTER TABLE `equipval`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipId` (`equipId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alarmdesc`
--
ALTER TABLE `alarmdesc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `alarmhistory`
--
ALTER TABLE `alarmhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `equipdef`
--
ALTER TABLE `equipdef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipval`
--
ALTER TABLE `equipval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alarmhistory`
--
ALTER TABLE `alarmhistory`
  ADD CONSTRAINT `AlarmRelation` FOREIGN KEY (`alarmId`) REFERENCES `alarmdesc` (`alarmId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `equipval`
--
ALTER TABLE `equipval`
  ADD CONSTRAINT `EquimentRelation` FOREIGN KEY (`equipId`) REFERENCES `equipdef` (`equipId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
