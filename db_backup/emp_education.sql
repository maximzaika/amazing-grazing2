-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 08:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazing-grazing`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_education`
--

CREATE TABLE `emp_education` (
  `emp_educ_id` int(11) NOT NULL,
  `emp_educ_year` int(11) NOT NULL,
  `emp_educ_qual` varchar(300) NOT NULL,
  `emp_educ_type` varchar(30) NOT NULL,
  `emp_educ_numb` float NOT NULL,
  `emp_educ_perc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_education`
--

INSERT INTO `emp_education` (`emp_educ_id`, `emp_educ_year`, `emp_educ_qual`, `emp_educ_type`, `emp_educ_numb`, `emp_educ_perc`) VALUES
(1, 2011, 'Post Graduate/Graduate Diploma or Graduate Certificate', 'Beef Cattle Farmers', 988.9, 3.1),
(2, 2011, 'Bachelor degree', 'Beef Cattle Farmers', 3221.9, 10.1),
(3, 2011, 'Advanced Diploma/Diploma', 'Beef Cattle Farmers', 3349.5, 10.5),
(4, 2011, 'Certificate III/IV', 'Beef Cattle Farmers', 5104, 16),
(5, 2011, 'Year 12', 'Beef Cattle Farmers', 4848.8, 15.2),
(6, 2011, 'Year 11', 'Beef Cattle Farmers', 1977.8, 6.2),
(7, 2011, 'Year 10 and below', 'Beef Cattle Farmers', 12409.1, 38.9),
(8, 2016, 'Post Graduate/Graduate Diploma or Graduate Certificate', 'Beef Cattle Farmers', 877.3, 3.1),
(9, 2016, 'Bachelor degree', 'Beef Cattle Farmers', 2858.3, 10.1),
(10, 2016, 'Advanced Diploma/Diploma', 'Beef Cattle Farmers', 2971.5, 10.5),
(11, 2016, 'Certificate III/IV', 'Beef Cattle Farmers', 4528, 16),
(12, 2016, 'Year 12', 'Beef Cattle Farmers', 4301.6, 15.2),
(13, 2016, 'Year 11', 'Beef Cattle Farmers', 1754.6, 6.2),
(14, 2016, 'Year 10 and below', 'Beef Cattle Farmers', 11008.7, 38.9),
(15, 2011, 'Post Graduate/Graduate Diploma or Graduate Certificate', 'Beef Cattle Farmers', 170.3, 1.3),
(16, 2011, 'Bachelor degree', 'Dairy Cattle Farmers', 956.3, 7.3),
(17, 2011, 'Advanced Diploma/Diploma', 'Dairy Cattle Farmers', 1401.7, 10.7),
(18, 2011, 'Certificate III/IV', 'Dairy Cattle Farmers', 3222.6, 24.6),
(19, 2011, 'Year 12', 'Dairy Cattle Farmers', 1794.7, 13.7),
(20, 2011, 'Year 11', 'Dairy Cattle Farmers', 1349.3, 10.3),
(21, 2011, 'Year 10 and below', 'Dairy Cattle Farmers', 4205.1, 32.1),
(22, 2016, 'Post Graduate/Graduate Diploma or Graduate Certificate', 'Dairy Cattle Farmers', 145.6, 1.3),
(23, 2016, 'Bachelor degree', 'Dairy Cattle Farmers', 817.6, 7.3),
(24, 2016, 'Advanced Diploma/Diploma', 'Dairy Cattle Farmers', 1198.4, 10.7),
(25, 2016, 'Certificate III/IV', 'Dairy Cattle Farmers', 2755.2, 24.6),
(26, 2016, 'Year 12', 'Dairy Cattle Farmers', 1534.4, 13.7),
(27, 2016, 'Year 11', 'Dairy Cattle Farmers', 1153.6, 10.3),
(28, 2016, 'Year 10 and below', 'Dairy Cattle Farmers', 3595.2, 32.1),
(29, 2011, 'Post Graduate/Graduate Diploma or Graduate Certificate', 'Sheep Farmers', 256.8, 2.4),
(30, 2011, 'Bachelor degree', 'Sheep Farmers', 1080.7, 10.1),
(31, 2011, 'Advanced Diploma/Diploma', 'Sheep Farmers', 1209.1, 11.3),
(32, 2011, 'Certificate III/IV', 'Sheep Farmers', 2118.6, 19.8),
(33, 2011, 'Year 12', 'Sheep Farmers', 1690.6, 15.8),
(34, 2011, 'Year 11', 'Sheep Farmers', 1027.2, 9.6),
(35, 2011, 'Year 10 and below', 'Sheep Farmers', 3317, 31),
(36, 2016, 'Post Graduate/Graduate Diploma or Graduate Certificate', 'Sheep Farmers', 232.8, 2.4),
(37, 2016, 'Bachelor degree', 'Sheep Farmers', 979.7, 10.1),
(38, 2016, 'Advanced Diploma/Diploma', 'Sheep Farmers', 1096.1, 11.3),
(39, 2016, 'Certificate III/IV', 'Sheep Farmers', 1920.6, 19.8),
(40, 2016, 'Year 12', 'Sheep Farmers', 1532.6, 15.8),
(41, 2016, 'Year 11', 'Sheep Farmers', 931.2, 9.6),
(42, 2016, 'Year 10 and below', 'Sheep Farmers', 3007, 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_education`
--
ALTER TABLE `emp_education`
  ADD PRIMARY KEY (`emp_educ_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_education`
--
ALTER TABLE `emp_education`
  MODIFY `emp_educ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
