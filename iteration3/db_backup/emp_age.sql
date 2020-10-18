-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 06:59 PM
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
-- Table structure for table `emp_age`
--

CREATE TABLE `emp_age` (
  `emp_age_id` int(11) NOT NULL,
  `emp_age_year` int(11) NOT NULL,
  `emp_age_age` varchar(12) NOT NULL,
  `emp_age_type` varchar(30) NOT NULL,
  `emp_age_numb` float NOT NULL,
  `emp_age_perc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_age`
--

INSERT INTO `emp_age` (`emp_age_id`, `emp_age_year`, `emp_age_age`, `emp_age_type`, `emp_age_numb`, `emp_age_perc`) VALUES
(1, 2011, '15-19', 'Beef Cattle Farmers', 159.5, 0.5),
(2, 2011, '20-24', 'Beef Cattle Farmers', 350.9, 1.1),
(3, 2011, '25-34', 'Beef Cattle Farmers', 1786.4, 5.6),
(4, 2011, '35-44', 'Beef Cattle Farmers', 3094.3, 9.7),
(5, 2011, '45-54', 'Beef Cattle Farmers', 5454.9, 17.1),
(6, 2011, '55-59', 'Beef Cattle Farmers', 3732.3, 11.7),
(7, 2011, '60-64', 'Beef Cattle Farmers', 4561.7, 14.3),
(8, 2011, '65 and Over', 'Beef Cattle Farmers', 12728.1, 39.9),
(9, 2016, '15-19', 'Beef Cattle Farmers', 141.5, 0.5),
(10, 2016, '20-24', 'Beef Cattle Farmers', 311.3, 1.1),
(11, 2016, '25-34', 'Beef Cattle Farmers', 1584.8, 5.6),
(12, 2016, '35-44', 'Beef Cattle Farmers', 2745.1, 9.7),
(13, 2016, '45-54', 'Beef Cattle Farmers', 4839.3, 17.1),
(14, 2016, '55-59', 'Beef Cattle Farmers', 3311.1, 11.7),
(15, 2016, '60-64', 'Beef Cattle Farmers', 4046.9, 14.3),
(16, 2016, '65 and Over', 'Beef Cattle Farmers', 11291.7, 39.9),
(17, 2011, '15-19', 'Dairy Cattle Farmers', 301.3, 2.3),
(18, 2011, '20-24', 'Dairy Cattle Farmers', 576.4, 4.4),
(19, 2011, '25-34', 'Dairy Cattle Farmers', 1899.5, 14.5),
(20, 2011, '35-44', 'Dairy Cattle Farmers', 2528.3, 19.3),
(21, 2011, '45-54', 'Dairy Cattle Farmers', 3275, 25),
(22, 2011, '55-59', 'Dairy Cattle Farmers', 1545.8, 11.8),
(23, 2011, '60-64', 'Dairy Cattle Farmers', 1231.4, 9.4),
(24, 2011, '65 and Over', 'Dairy Cattle Farmers', 1755.4, 13.4),
(25, 2016, '15-19', 'Dairy Cattle Farmers', 257.6, 2.3),
(26, 2016, '20-24', 'Dairy Cattle Farmers', 492.8, 4.4),
(27, 2016, '25-34', 'Dairy Cattle Farmers', 1624, 14.5),
(28, 2016, '35-44', 'Dairy Cattle Farmers', 2161.6, 19.3),
(29, 2016, '45-54', 'Dairy Cattle Farmers', 2800, 25),
(30, 2016, '55-59', 'Dairy Cattle Farmers', 1321.6, 11.8),
(31, 2016, '60-64', 'Dairy Cattle Farmers', 1052.8, 9.4),
(32, 2016, '65 and Over', 'Dairy Cattle Farmers', 1500.8, 13.4),
(33, 2011, '15-19', 'Sheep Farmers', 53.5, 0.5),
(34, 2011, '20-24', 'Sheep Farmers', 149.8, 1.4),
(35, 2011, '25-34', 'Sheep Farmers', 695.5, 6.5),
(36, 2011, '35-44', 'Sheep Farmers', 1112.8, 10.4),
(37, 2011, '45-54', 'Sheep Farmers', 1990.2, 18.6),
(38, 2011, '55-59', 'Sheep Farmers', 1412.4, 13.2),
(39, 2011, '60-64', 'Sheep Farmers', 1594.3, 14.9),
(40, 2011, '65 and Over', 'Sheep Farmers', 3691.5, 34.5),
(41, 2016, '15-19', 'Sheep Farmers', 48.5, 0.5),
(42, 2016, '20-24', 'Sheep Farmers', 135.8, 1.4),
(43, 2016, '25-34', 'Sheep Farmers', 630.5, 6.5),
(44, 2016, '35-44', 'Sheep Farmers', 1008.8, 10.4),
(45, 2016, '45-54', 'Sheep Farmers', 1804.2, 18.6),
(46, 2016, '55-59', 'Sheep Farmers', 1280.4, 13.2),
(47, 2016, '60-64', 'Sheep Farmers', 1445.3, 14.9),
(48, 2016, '65 and Over', 'Sheep Farmers', 3346.5, 34.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_age`
--
ALTER TABLE `emp_age`
  ADD PRIMARY KEY (`emp_age_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_age`
--
ALTER TABLE `emp_age`
  MODIFY `emp_age_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
