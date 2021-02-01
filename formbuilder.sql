-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 09:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formbuilder`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Name` text CHARACTER SET utf8 NOT NULL,
  `Flat No.` int(11) NOT NULL,
  `Hire At` date NOT NULL,
  `Message` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Address` text CHARACTER SET utf8 NOT NULL,
  `Status` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`ID`, `Name`, `Flat No.`, `Hire At`, `Message`, `Address`, `Status`) VALUES
(1, 'Shelltech', 0, '2021-01-13', 'This is a building message', 'Moghbazar', '1');

-- --------------------------------------------------------

--
-- Table structure for table `all_forms`
--

CREATE TABLE `all_forms` (
  `form_id` int(11) NOT NULL,
  `form_name` varchar(255) NOT NULL,
  `form_unique_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_forms`
--

INSERT INTO `all_forms` (`form_id`, `form_name`, `form_unique_id`) VALUES
(5, 'Contacts', '161174597460114ab606d1f'),
(6, 'Results', '161174645060114c920a58d'),
(7, 'Accommodation', '1611752966601166066a8dc'),
(8, 'Food', '1611753284601167445f8e9'),
(9, 'Form1', '161176680060119c107579a'),
(11, 'Test3', '161176709560119d370a331'),
(12, 'Form5', '16117681656011a1658bb76');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Phone` int(11) NOT NULL,
  `Name` text CHARACTER SET utf8 NOT NULL,
  `Message` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Address` text CHARACTER SET utf8 NOT NULL,
  `Status` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`ID`, `Phone`, `Name`, `Message`, `Address`, `Status`) VALUES
(1, 1928382923, 'Deepta', 'Hi I am Deepta.', 'Moghbazar', '1');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Name` text CHARACTER SET utf8 NOT NULL,
  `Amount` int(11) NOT NULL,
  `Made at` date NOT NULL,
  `About` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Status` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`ID`, `Name`, `Amount`, `Made at`, `About`, `Status`) VALUES
(1, 'Burger', 15, '2021-01-06', 'This a chicken burger', '1');

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Name` text CHARACTER SET utf8 NOT NULL,
  `DOB` date NOT NULL,
  `Location` text CHARACTER SET utf8 NOT NULL,
  `Address` text CHARACTER SET utf8 NOT NULL,
  `Phone number` int(11) NOT NULL,
  `Status` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`ID`, `Name`, `DOB`, `Location`, `Address`, `Phone number`, `Status`) VALUES
(1, 'Test1', '2021-01-11', 'Dhaka', 'Rampura', 2147483647, '1'),
(2, 'Test2', '2021-01-08', 'Dhaka', 'Moghbazar', 1723123123, '1');

-- --------------------------------------------------------

--
-- Table structure for table `form5`
--

CREATE TABLE `form5` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Name` text CHARACTER SET utf8 NOT NULL,
  `Age` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Status` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form5`
--

INSERT INTO `form5` (`ID`, `Name`, `Age`, `Date`, `Status`) VALUES
(1, 'Deepta', 27, '2021-01-04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Degree` text CHARACTER SET utf8 NOT NULL,
  `Published Date` date NOT NULL,
  `Status` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`ID`, `Degree`, `Published Date`, `Status`) VALUES
(1, 'Bsc', '2021-01-08', '1'),
(2, 'HSC', '2020-12-10', '1'),
(3, 'MSC', '2021-01-14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `start_form`
--

CREATE TABLE `start_form` (
  `id` int(11) NOT NULL,
  `field_type` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `start_form`
--

INSERT INTO `start_form` (`id`, `field_type`, `unique_id`, `status`) VALUES
(183, '2', '161174597460114ab606d1f', 1),
(184, '1', '161174597460114ab606d1f', 1),
(185, '4', '161174597460114ab606d1f', 1),
(186, '1', '161174597460114ab606d1f', 1),
(187, '1', '161174645060114c920a58d', 1),
(188, '3', '161174645060114c920a58d', 1),
(189, '1', '1611752966601166066a8dc', 1),
(190, '2', '1611752966601166066a8dc', 1),
(191, '3', '1611752966601166066a8dc', 1),
(192, '4', '1611752966601166066a8dc', 1),
(193, '1', '1611752966601166066a8dc', 1),
(194, '1', '1611753284601167445f8e9', 1),
(195, '2', '1611753284601167445f8e9', 1),
(196, '3', '1611753284601167445f8e9', 1),
(197, '4', '1611753284601167445f8e9', 1),
(198, '1', '161176680060119c107579a', 1),
(199, '3', '161176680060119c107579a', 1),
(200, '1', '161176680060119c107579a', 1),
(201, '1', '161176680060119c107579a', 1),
(202, '2', '161176680060119c107579a', 1),
(203, '1', '161176701260119ce4e1e99', 1),
(204, '2', '161176701260119ce4e1e99', 1),
(205, '3', '161176701260119ce4e1e99', 1),
(206, '4', '161176701260119ce4e1e99', 1),
(207, '1', '161176709560119d370a331', 1),
(208, '2', '161176709560119d370a331', 1),
(209, '3', '161176709560119d370a331', 1),
(210, '4', '161176709560119d370a331', 1),
(211, '1', '16117681656011a1658bb76', 1),
(212, '2', '16117681656011a1658bb76', 1),
(213, '3', '16117681656011a1658bb76', 1),
(214, '1', '16118507546012e40250421', 1),
(215, '1', '16118507546012e40250421', 1),
(216, '3', '16118507546012e40250421', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test3`
--

CREATE TABLE `test3` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Contact Person` text CHARACTER SET utf8 NOT NULL,
  `Age` int(11) NOT NULL,
  `Registration Date` date NOT NULL,
  `Responsibility` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Status` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test3`
--

INSERT INTO `test3` (`ID`, `Contact Person`, `Age`, `Registration Date`, `Responsibility`, `Status`) VALUES
(1, 'Rakib', 18, '2021-01-20', 'Coding', '1'),
(2, 'Hasib', 23, '2021-01-16', 'Singing', '1'),
(3, 'Hasan', 34, '2021-01-12', 'Directing film', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `all_forms`
--
ALTER TABLE `all_forms`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `form5`
--
ALTER TABLE `form5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `start_form`
--
ALTER TABLE `start_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test3`
--
ALTER TABLE `test3`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_forms`
--
ALTER TABLE `all_forms`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form5`
--
ALTER TABLE `form5`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `start_form`
--
ALTER TABLE `start_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `test3`
--
ALTER TABLE `test3`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
