-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 08:22 PM
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
-- Table structure for table `suggestion_tech`
--

CREATE TABLE `suggestion_tech` (
  `suggestion_id` int(11) NOT NULL,
  `suggestion_techn` varchar(40) NOT NULL,
  `suggestion_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestion_tech`
--

INSERT INTO `suggestion_tech` (`suggestion_id`, `suggestion_techn`, `suggestion_text`) VALUES
(1, 'ROTATIONAL GRAZING', 'Keeping your livestock in the first divided paddock in which the land is in the most optimal condition to start the rotation.'),
(2, 'ROTATIONAL GRAZING', 'Ideally you would want to move livestock to the next paddock when livestock consumed around half forage height.'),
(3, 'ROTATIONAL GRAZING', 'It is the time you let the first paddock to regrowth and rest! It will involve in a new grazing sequence as long as it is again suitable with the optimal land condition.'),
(4, 'ROTATIONAL GRAZING', 'Apply this technique with a different time period that suits your situation best. The minimum grazing period is at least 5-day short grazing to 15-40-day long grazing.'),
(5, 'ROTATIONAL GRAZING', 'This technique may require relatively greater labor efforts to arrange the stocking and more support from the infrastructure side like fencing staff.'),
(6, 'SEASONAL GRAZING', 'Set your grazing regime and goals. Be clear with your grazing and productivity expectation.'),
(7, 'SEASONAL GRAZING', 'Determine your concerns or problems that need to be solved regarding different seasons.'),
(8, 'SEASONAL GRAZING', 'Based on your understanding of these seasonal characteristics, plan your very own solution to overcome these challenges to maximize the grazing effectivity.'),
(9, 'SEASONAL GRAZING', 'Always keep track of your records including livestock, land condition, water consumptions, forages growth, and other infrastructure use based on 12-month consideration for next year’s plan.'),
(10, 'PATCH-BURN GRAZING', 'In general, patch-burn requires at least 3 years to accomplish for the whole life cycle. Therefore, take your time that burns 1/4 of the whole paddock each year in rotation and enjoy the benefits from the very start.'),
(11, 'PATCH-BURN GRAZING', 'Before patch-burn, keep in mind that resting a certain section of the whole paddock is a required step during the growing season. It can assist your practice in building useful energy loads in the first year.'),
(12, 'PATCH-BURN GRAZING', 'In the case of multiple paddock grazing at the same time, the system of livestock should be rotated so the livestock can get rid of the burned section.'),
(13, 'PATCH-BURN GRAZING', 'For the 2nd year, we suggest you conduct planned burn on another section of the rest unburned area that continuous from last year’s efforts.'),
(14, 'PATCH-BURN GRAZING', 'For your information, during the second second year, livestock should firstly graze in the latest burned area. That is, the burned area in the first year can have enough time to regrowth and rest.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suggestion_tech`
--
ALTER TABLE `suggestion_tech`
  ADD PRIMARY KEY (`suggestion_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suggestion_tech`
--
ALTER TABLE `suggestion_tech`
  MODIFY `suggestion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
