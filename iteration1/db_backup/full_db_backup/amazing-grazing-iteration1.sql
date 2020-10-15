-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 02:09 PM
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
-- Database: `amazing-grazing-iteration1`
--

-- --------------------------------------------------------

--
-- Table structure for table `g_news_api`
--

CREATE TABLE `g_news_api` (
  `g_news_id` int(11) DEFAULT NULL,
  `g_news_count` int(11) DEFAULT NULL,
  `g_news_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `g_news_api`
--

INSERT INTO `g_news_api` (`g_news_id`, `g_news_count`, `g_news_token`) VALUES
(1, 100, '2f43dc9d754f3008f68a7f50b670c208'),
(2, 92, 'c29b556f2f1ddd7ada7f2d7b6834b2c7'),
(3, 0, 'c3fae1827597a016ef41d4fb9c4f95fe'),
(4, 100, '9e0677170130c646c24d9d907974166c'),
(5, 100, '1d5029e4a17729fbd82d52087fc2c85c'),
(6, 100, '0e5efcba3b5a2d1d78b5eb243ebb8ce2'),
(7, 42, 'e7a575a4e5900bf0de75a73abf3e7d2b');

-- --------------------------------------------------------

--
-- Table structure for table `index_offerings`
--

CREATE TABLE `index_offerings` (
  `ofr_id` int(11) DEFAULT NULL,
  `ofr_icon` varchar(255) DEFAULT NULL,
  `ofr_title` varchar(255) DEFAULT NULL,
  `ofr_descr` varchar(255) DEFAULT NULL,
  `ofr_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_offerings`
--

INSERT INTO `index_offerings` (`ofr_id`, `ofr_icon`, `ofr_title`, `ofr_descr`, `ofr_url`) VALUES
(1, 'flaticon-news', 'News', 'Staying up to date with the news regarding grazing, fires, drought, and livestock is important for all of us.', 'news.php'),
(3, 'flaticon-horse-grazing-black-silhouette', 'Grazing Techniques', 'Preserving grassland\'s nature, soil, and grass is important to improve livestock and its safety. Various techniques are provided to guide you.', 'techniques.php');

-- --------------------------------------------------------

--
-- Table structure for table `nav_bar`
--

CREATE TABLE `nav_bar` (
  `nav_id` int(11) DEFAULT NULL,
  `nav_link` varchar(255) DEFAULT NULL,
  `nav_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nav_bar`
--

INSERT INTO `nav_bar` (`nav_id`, `nav_link`, `nav_title`) VALUES
(1, 'index.php', 'Home'),
(2, 'news.php', 'News'),
(3, 'techniques.php', 'Techniques');

-- --------------------------------------------------------

--
-- Table structure for table `news_region_content`
--

CREATE TABLE `news_region_content` (
  `news_reg_id` int(11) DEFAULT NULL,
  `news_reg_label` varchar(255) DEFAULT NULL,
  `news_reg_topic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_region_content`
--

INSERT INTO `news_region_content` (`news_reg_id`, `news_reg_label`, `news_reg_topic`) VALUES
(1, 'R_au_Australia', 'Australia'),
(2, 'R_ca_Canada', 'Canada'),
(3, 'R_eu_Europe', 'Europe'),
(4, 'R_us_United States', 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `news_topic_content`
--

CREATE TABLE `news_topic_content` (
  `news_topic_id` int(11) DEFAULT NULL,
  `news_topic_label` varchar(255) DEFAULT NULL,
  `news_topic_topic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_topic_content`
--

INSERT INTO `news_topic_content` (`news_topic_id`, `news_topic_label`, `news_topic_topic`) VALUES
(1, 'T_Drought', 'Drought'),
(2, 'T_Wildfire', 'Wildfire'),
(3, 'T_Grazing', 'Grazing'),
(4, 'T_Livestock', 'Livestock');

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

-- --------------------------------------------------------

--
-- Table structure for table `techniques`
--

CREATE TABLE `techniques` (
  `techn_id` int(11) NOT NULL,
  `techn_title` varchar(25) NOT NULL,
  `techn_img` varchar(45) NOT NULL,
  `techn_ico` varchar(255) NOT NULL,
  `techn_continue` varchar(50) DEFAULT NULL,
  `techn_brochure` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techniques`
--

INSERT INTO `techniques` (`techn_id`, `techn_title`, `techn_img`, `techn_ico`, `techn_continue`, `techn_brochure`) VALUES
(1, 'CONTINUOUS GRAZING', 'continuous-grazing.gif', 'fa-check;fa-check;fa-times;fa-times', '', ''),
(2, 'ROTATIONAL GRAZING', 'rotational-grazing.gif', 'fa-check;fa-check;fa-check;fa-check', 'rotational.php', 'rotational_grazing_brochure.pdf'),
(3, 'SEASONAL GRAZING', 'seasonal_animation.gif', 'fa-check;fa-check;fa-check;fa-check', 'seasonal.php', 'seasonal_grazing_brochure.pdf'),
(4, 'PATCH-BURN GRAZING', 'patch-burn.gif', 'fa-check;fa-check;fa-times;fa-times', 'patch-burn.php', 'patch-burn_grazing_brochure.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `techniques_content`
--

CREATE TABLE `techniques_content` (
  `techn_cont_id` int(11) NOT NULL,
  `techn_cont_title2` varchar(25) NOT NULL,
  `techn_cont_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techniques_content`
--

INSERT INTO `techniques_content` (`techn_cont_id`, `techn_cont_title2`, `techn_cont_content`) VALUES
(1, 'CONTINUOUS GRAZING', 'Most simple, popular, and low effort on labour'),
(2, 'CONTINUOUS GRAZING', 'Temporary fencing is used'),
(3, 'CONTINUOUS GRAZING', 'Damages soil, stream banks, and native vegetation'),
(4, 'CONTINUOUS GRAZING', 'Low productivity and unsustainable development in the long-term'),
(5, 'ROTATIONAL GRAZING', 'Can be implemented immediately'),
(6, 'ROTATIONAL GRAZING', 'Enhances nutritious level of grassland'),
(7, 'ROTATIONAL GRAZING', 'Express higher stocking rates of paddock-by-paddock'),
(8, 'ROTATIONAL GRAZING', 'Decrease the methane emissions from livestock'),
(9, 'SEASONAL GRAZING', 'Longer regrowth time for the grassland'),
(10, 'SEASONAL GRAZING', 'Easily combined with other techniques'),
(11, 'SEASONAL GRAZING', 'Great chance to adjust the grazing regime of the year'),
(12, 'SEASONAL GRAZING', 'Limited time consumption and less farming infrastructure management'),
(13, 'PATCH-BURN GRAZING', 'Enable recovery of used patches of grassland'),
(14, 'PATCH-BURN GRAZING', 'Cost-saving technology requires less costly infrastructure or fencing'),
(15, 'PATCH-BURN GRAZING', 'Only suitable for paddock larger than 20 acres'),
(16, 'PATCH-BURN GRAZING', 'May takes longer time to burn all patches (3 years)');

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
-- Indexes for table `suggestion_tech`
--
ALTER TABLE `suggestion_tech`
  ADD PRIMARY KEY (`suggestion_id`);

--
-- Indexes for table `techniques`
--
ALTER TABLE `techniques`
  ADD PRIMARY KEY (`techn_id`);

--
-- Indexes for table `techniques_content`
--
ALTER TABLE `techniques_content`
  ADD PRIMARY KEY (`techn_cont_id`);

--
-- Indexes for table `technique_selected`
--
ALTER TABLE `technique_selected`
  ADD PRIMARY KEY (`selected_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suggestion_tech`
--
ALTER TABLE `suggestion_tech`
  MODIFY `suggestion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `techniques`
--
ALTER TABLE `techniques`
  MODIFY `techn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `techniques_content`
--
ALTER TABLE `techniques_content`
  MODIFY `techn_cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `technique_selected`
--
ALTER TABLE `technique_selected`
  MODIFY `selected_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
