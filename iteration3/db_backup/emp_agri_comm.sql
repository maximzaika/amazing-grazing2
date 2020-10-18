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
-- Table structure for table `emp_agri_comm`
--

CREATE TABLE `emp_agri_comm` (
  `employee_agri_id` int(11) NOT NULL,
  `employee_agri_description` varchar(400) NOT NULL,
  `employee_agri_img` varchar(150) NOT NULL,
  `employee_agri_title` varchar(250) NOT NULL,
  `employee_agri_url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_agri_comm`
--

INSERT INTO `emp_agri_comm` (`employee_agri_id`, `employee_agri_description`, `employee_agri_img`, `employee_agri_title`, `employee_agri_url`) VALUES
(1, 'Join a local & global network of leaders in agriculture. Get exclusive market & industry updates. Grow your business and your knowledge.', 'images/globalfarmers.PNG', 'Global Farmers', 'https://www.globalfarmers.com/'),
(2, 'An agricultural community where Aussie farmers can connect and share their knowledge online. Additionally, you can get professional\'s advice.', 'images/farmerexchange.png', 'Farmer Exchange', 'https://exchange.farmtable.com.au/home'),
(3, 'An agricultural community that provides community activities, advocacy and resources that aim to protect Australian grasslands.', 'images/friendofgrasslands.png', 'Friends of Grasslands', 'https://www.fog.org.au/'),
(4, 'Helps farmers to keep track of their record information with the purpose to improve production, increase trading opportunities and connect with other farmers.', 'images/farm4trade.PNG', 'Farm 4 Trade', 'https://www.farm4trade.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_agri_comm`
--
ALTER TABLE `emp_agri_comm`
  ADD PRIMARY KEY (`employee_agri_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_agri_comm`
--
ALTER TABLE `emp_agri_comm`
  MODIFY `employee_agri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
