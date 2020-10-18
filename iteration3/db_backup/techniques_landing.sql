-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 07:01 PM
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
-- Table structure for table `techniques_landing`
--

CREATE TABLE `techniques_landing` (
  `techn_id` int(11) NOT NULL,
  `techn_img` varchar(100) DEFAULT NULL,
  `techn_title` varchar(50) NOT NULL,
  `techn_ico` varchar(250) NOT NULL,
  `techn_fact` varchar(250) NOT NULL,
  `techn_target` varchar(100) DEFAULT NULL,
  `tech_downl` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techniques_landing`
--

INSERT INTO `techniques_landing` (`techn_id`, `techn_img`, `techn_title`, `techn_ico`, `techn_fact`, `techn_target`, `tech_downl`) VALUES
(1, 'images/seasonal_animation.gif', 'Seasonal', 'fa-check fa-check-techniques', 'Advised to be used', '', ''),
(2, '', 'Seasonal', 'fa-check fa-check-techniques', 'Longer regrowth time for the grassland', '', ''),
(3, '', 'Seasonal', 'fa-check fa-check-techniques', 'Easily combined with other techniques', '', ''),
(4, '', 'Seasonal', 'fa-check fa-check-techniques', 'Great chance to adjust the grazing regime of the year', '', ''),
(5, '', 'Seasonal', 'fa-check fa-check-techniques', 'Limited time consumption and less farming infrastructure management', 'seasonal-grazing', 'download/seasonal_grazing_brochure.pdf'),
(6, 'images/continuous-grazing.gif', 'Continuous', 'fa-times fa-times-techniques', 'Not advised to be used', '', ''),
(7, '', 'Continuous', 'fa-times fa-times-techniques', 'Damages soil, stream banks, and native vegetation', '', ''),
(8, '', 'Continuous', 'fa-times fa-times-techniques', 'Low productivity and unsustainable development in the long-term', '', ''),
(9, '', 'Continuous', 'fa-check fa-check-techniques', 'Most simple, popular, and low effort on labour', '', ''),
(10, '', 'Continuous', 'fa-check fa-check-techniques', 'Temporary fencing is used', '', ''),
(11, 'images/rotational-grazing.gif', 'Rotational', 'fa-check fa-check-techniques', 'Advised to be used', '', ''),
(12, '', 'Rotational', 'fa-check fa-check-techniques', 'Enhances nutritious level of grassland', '', ''),
(13, '', 'Rotational', 'fa-check fa-check-techniques', 'Can be implemented immediately', '', ''),
(14, '', 'Rotational', 'fa-check fa-check-techniques', 'Express higher stocking rates of paddock-by-paddock', '', ''),
(15, '', 'Rotational', 'fa-check fa-check-techniques', 'Decrease the methane emissions from livestock', 'rotational-grazing', 'download/rotational_grazing_brochure.pdf'),
(16, 'images/patch-burn.gif', 'Patch-burn', 'fa-check fa-check-techniques', 'Advised to be used', '', ''),
(17, '', 'Patch-burn', 'fa-check fa-check-techniques', 'Enable recovery of used patches of grassland', '', ''),
(18, '', 'Patch-burn', 'fa-check fa-check-techniques', 'Cost-saving technology requires less costly infrastructure or fencing', '', ''),
(19, '', 'Patch-burn', 'fa-times fa-times-techniques', 'Only suitable for paddock larger than 20 acres', '', ''),
(20, '', 'Patch-burn', 'fa-times fa-times-techniques', 'May takes longer time to burn all patches (3 years)', 'patch-burn-grazing', 'download/patch-burn_grazing_brochure.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `techniques_landing`
--
ALTER TABLE `techniques_landing`
  ADD PRIMARY KEY (`techn_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `techniques_landing`
--
ALTER TABLE `techniques_landing`
  MODIFY `techn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
