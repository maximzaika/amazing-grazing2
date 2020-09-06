-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2020 at 07:08 PM
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
-- Table structure for table `technique_selected`
--

CREATE TABLE `technique_selected` (
  `selected_id` int(11) NOT NULL,
  `selected_techn` varchar(40) NOT NULL,
  `selected_title` varchar(25) NOT NULL,
  `selected_text` varchar(800) NOT NULL,
  `selected_img` varchar(50) DEFAULT NULL,
  `selected_indiv_img` varchar(300) DEFAULT NULL,
  `selected_indiv_section_title` varchar(100) DEFAULT NULL,
  `selected_indiv_title` varchar(100) DEFAULT NULL,
  `selected_indiv_text` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technique_selected`
--

INSERT INTO `technique_selected` (`selected_id`, `selected_techn`, `selected_title`, `selected_text`, `selected_img`, `selected_indiv_img`, `selected_indiv_section_title`, `selected_indiv_title`, `selected_indiv_text`) VALUES
(1, 'ROTATIONAL GRAZING', 'WHY SHOULD I USE IT?', 'Rotational grazing can express much higher stocking rates of paddock-by-paddock than regular pre-set stocking. It enhances the nutritious level of the grazing plants in the best growth stage of their lifecycle, therefore enabling multiple livestock to be able to continue their thriving. Using this technique, you can maintain your land forage as high productive pasture which extends the period of balanced growth. At the same time, compared to continuous grazing, you can decrease the methane emissions from livestock by up to 22% (per unit of cattle gain). In this case, cows will have more energy to produce milk.', 'cow_life.png', 'management_intensive_grazing.jpeg;mod_grazing.jpeg;adaptive_high_stock_density_grazing.jpeg', 'DIFFERENT ROTATIONAL GRAZING METHODS', 'Slow Rotational;Mob;Adaptive High-Stock Density', 'Slow rotational grazing is pastures of 2 or more with standard moves from every 2 weeks to every few months in order to enable land recovery and rest.;Requires significantly higher stock densities between 75-300+ AU per acre. Multiple moves per day are required to maintain ideal stock densities. Temporary fencing is often used to create small paddocks.;Apply multiple of the previous methods of grazing to enable graziers to adjust herd density to achieve the nutritional needs of livestock and satisfy the conditions of the soil.'),
(2, 'SEASONAL GRAZING', 'WHY SHOULD I USE IT?', 'Different season conditions provide different use of land for certain species. The benefits and disadvantages of seasonal grazing on the grassland can be very different based on the season you selected. Seasonal grazing offers a great chance to adjust your grazing regime of the year. It can benefit the targeted flora species in the habitat for better effectivity in the long-term.', '', 'autumn.jpeg;winter.jpeg;spring.jpeg;summer.jpeg', '', 'Autumn;Winter;Spring;Summer', 'The most suitable time to apply heavy grazing combined with a rotational or continuous technique.;It is a chance that you can adjust your whole year grazing regime.;Not the most appropriate time for effective grazing. It is better to keep relatively light grazing.;Not the best time. Light grazing is a more ideal option.'),
(3, 'PATCH-BURN GRAZING', 'WHY SHOULD I USE IT?', 'Patch-burn is a good technique that you can apply in your sustainable grazing. It helps to manage the grassland through burning certain areas of the paddock in a certain year to attract the grazing livestock. Thus, livestock will focus on grazing in the specific burned patch across the whole paddock. The rest of the portion of the grassland will be shifted for the new burning. In this way, always using the most recent burned section enable the regrowth and recovery of those already burned and used patches.', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `technique_selected`
--
ALTER TABLE `technique_selected`
  ADD PRIMARY KEY (`selected_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `technique_selected`
--
ALTER TABLE `technique_selected`
  MODIFY `selected_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
