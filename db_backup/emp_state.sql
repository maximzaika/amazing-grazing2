-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 12:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `emp_state`
--

CREATE TABLE `emp_state` (
  `emp_state_id` int(11) NOT NULL,
  `emp_state_year` int(11) NOT NULL,
  `emp_state_state` varchar(100) NOT NULL,
  `emp_state_type` varchar(30) NOT NULL,
  `emp_state_numb` float NOT NULL,
  `emp_state_perc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_state`
--

INSERT INTO `emp_state` (`emp_state_id`, `emp_state_year`, `emp_state_state`, `emp_state_type`, `emp_state_numb`, `emp_state_perc`) VALUES
(1, 2011, 'New South Wales', 'Beef Cattle Farmers', 9601.9, 30.1),
(2, 2011, 'Victoria', 'Beef Cattle Farmers', 6220.5, 19.5),
(3, 2011, 'Queensland', 'Beef Cattle Farmers', 11707.3, 36.7),
(4, 2011, 'South Australia', 'Beef Cattle Farmers', 1116.5, 3.5),
(5, 2011, 'Western Australia', 'Beef Cattle Farmers', 2041.6, 6.4),
(6, 2011, 'Tasmania', 'Beef Cattle Farmers', 861.3, 2.7),
(7, 2011, 'Northern Territory', 'Beef Cattle Farmers', 287.1, 0.9),
(8, 2011, 'Australian Capital Territory', 'Beef Cattle Farmers', 31.9, 0.1),
(9, 2016, 'New South Wales', 'Beef Cattle Farmers', 8518.3, 30.1),
(10, 2016, 'Victoria', 'Beef Cattle Farmers', 5518.5, 19.5),
(11, 2016, 'Queensland', 'Beef Cattle Farmers', 10386.1, 36.7),
(12, 2016, 'South Australia', 'Beef Cattle Farmers', 990.5, 3.5),
(13, 2016, 'Western Australia', 'Beef Cattle Farmers', 1811.2, 6.4),
(14, 2016, 'Tasmania', 'Beef Cattle Farmers', 764.1, 2.7),
(15, 2016, 'Northern Territory', 'Beef Cattle Farmers', 254.7, 0.9),
(16, 2016, 'Australian Capital Territory', 'Beef Cattle Farmers', 28.3, 0.1),
(17, 2011, 'New South Wales', 'Dairy Cattle Farmers', 1807.8, 13.8),
(18, 2011, 'Victoria', 'Dairy Cattle Farmers', 8292.3, 63.3),
(19, 2011, 'Queensland', 'Dairy Cattle Farmers', 982.5, 7.5),
(20, 2011, 'South Australia', 'Dairy Cattle Farmers', 655, 5),
(21, 2011, 'Western Australia', 'Dairy Cattle Farmers', 458.5, 3.5),
(22, 2011, 'Tasmania', 'Dairy Cattle Farmers', 903.9, 6.9),
(23, 2011, 'Northern Territory', 'Dairy Cattle Farmers', 0, 0),
(24, 2011, 'Australian Capital Territory', 'Dairy Cattle Farmers', 0, 0),
(25, 2016, 'New South Wales', 'Dairy Cattle Farmers', 1545.6, 13.8),
(26, 2016, 'Victoria', 'Dairy Cattle Farmers', 7089.6, 63.3),
(27, 2016, 'Queensland', 'Dairy Cattle Farmers', 840, 7.5),
(28, 2016, 'South Australia', 'Dairy Cattle Farmers', 560, 5),
(29, 2016, 'Western Australia', 'Dairy Cattle Farmers', 392, 3.5),
(30, 2016, 'Tasmania', 'Dairy Cattle Farmers', 772.8, 6.9),
(31, 2016, 'Northern Territory', 'Dairy Cattle Farmers', 0, 0),
(32, 2016, 'Australian Capital Territory', 'Dairy Cattle Farmers', 0, 0),
(33, 2011, 'New South Wales', 'Sheep Farmers', 3841.3, 35.9),
(34, 2011, 'Victoria', 'Sheep Farmers', 3124.4, 29.2),
(35, 2011, 'Queensland', 'Sheep Farmers', 363.8, 3.4),
(36, 2011, 'South Australia', 'Sheep Farmers', 1637.1, 15.3),
(37, 2011, 'Western Australia', 'Sheep Farmers', 1316.1, 12.3),
(38, 2011, 'Tasmania', 'Sheep Farmers', 374.5, 3.5),
(39, 2011, 'Northern Territory', 'Sheep Farmers', 0, 0),
(40, 2011, 'Australian Capital Territory', 'Sheep Farmers', 32.1, 0.3),
(41, 2016, 'New South Wales', 'Sheep Farmers', 3482.3, 35.9),
(42, 2016, 'Victoria', 'Sheep Farmers', 2832.4, 29.2),
(43, 2016, 'Queensland', 'Sheep Farmers', 329.8, 3.4),
(44, 2016, 'South Australia', 'Sheep Farmers', 1484.1, 15.3),
(45, 2016, 'Western Australia', 'Sheep Farmers', 1193.1, 12.3),
(46, 2016, 'Tasmania', 'Sheep Farmers', 339.5, 3.5),
(47, 2016, 'Northern Territory', 'Sheep Farmers', 0, 0),
(48, 2016, 'Australian Capital Territory', 'Sheep Farmers', 29.1, 0.3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_state`
--
ALTER TABLE `emp_state`
  ADD PRIMARY KEY (`emp_state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_state`
--
ALTER TABLE `emp_state`
  MODIFY `emp_state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
