-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 05:25 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `emp_cards`
--

CREATE TABLE `emp_cards` (
  `farmer_id` int(11) NOT NULL,
  `farmer_url` varchar(100) NOT NULL,
  `farmer_url2` varchar(100) NOT NULL,
  `farmer_card` varchar(200) NOT NULL,
  `farmer_text` varchar(300) NOT NULL,
  `farmer_modal_title` varchar(200) DEFAULT NULL,
  `farmer_modal_text` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_cards`
--

INSERT INTO `emp_cards` (`farmer_id`, `farmer_url`, `farmer_url2`, `farmer_card`, `farmer_text`, `farmer_modal_title`, `farmer_modal_text`) VALUES
(1, 'livestock-statistics.php', 'techniques.php', 'Farmer', 'Farmers are the ones who can make a difference in protecting Australian grasslands.', '', ''),
(2, 'livestock-statistics.php', 'techniques.php', 'Farmer', 'The employment number negatively affects livestock numbers.', '', ''),
(3, 'livestock-statistics.php', 'techniques.php', 'Farmer', 'Put out appeals via social media for fellow farmers to donate forage and straw to donate to desperate farmers, as well as pleas for haulage services.', '', ''),
(4, 'livestock-statistics.php', 'techniques.php', 'Farmer', 'Developing tourism and other industries (during patch regrowth) to ensure the longevity and success use of the land.', '', ''),
(5, 'livestock-statistics.php', 'techniques.php', 'Farmer', 'Small farmers sell up to large-scale farming operations, and fewer young people take over family farms.', '', ''),
(6, 'livestock-statistics.php', 'techniques.php', 'Education', 'Education is the key! Multiple Australian sources state that lack of education leads to the destruction of grasslands.', '', ''),
(7, 'livestock-statistics.php', 'techniques.php', 'Education', 'Poor education leads to livestock number reduction.', '', ''),
(8, 'livestock-statistics.php', 'techniques.php', 'Education', 'It is an opportunity for everyone, young and old, to discover first-hand what it means to be a farmer and educate on the work they do producing our food and enhancing the countryside.', '', ''),
(9, 'livestock-statistics.php', 'techniques.php', 'Education', 'Innovation and collaboration are at the heart of future approach to educated farming, implement practices that will enhance soil.', '', ''),
(10, 'livestock-statistics.php', 'techniques.php', 'Age', 'Young farmers are the one who can make a difference but there are not many of them!', '', ''),
(11, 'livestock-statistics.php', 'techniques.php', 'Age', 'Elderly farmers are not staying up-to-date with the current trend and situation.', '', ''),
(12, 'livestock-statistics.php', 'techniques.php', 'Age', 'Encourage young people from all agricultural industries to apply to join the Young Farmers Advisory Council.', '', ''),
(13, 'livestock-statistics.php', 'techniques.php', 'Age', 'Young farmers will need access to land and partnerships to help them learn how to be successful in a changing agricultural landscape.', '', ''),
(14, 'livestock-statistics.php', 'techniques.php', 'Age', 'The strong indicator of success for young farmers that it’s a chance for new knowledge and practices. Allows young farmers to expand more everyday.', '', ''),
(15, 'livestock-statistics.php', 'techniques.php', 'Age', 'To encourage young farmers to join the sector it is vital that they are offered a voice, and that we take note of what they have to say.', '', ''),
(16, 'livestock-statistics.php', 'techniques.php', 'Age', 'Giving young farmers at policy level a chance to offer their opinion and experiences.', '', ''),
(17, 'livestock-statistics.php', 'techniques.php', 'Age', 'In order to attract more young farmers that bring the new breeze into this industry, scholarship programs offered to kids who want to go back to the farm can help.', '', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `emp_landing`
--

CREATE TABLE `emp_landing` (
  `employee_landing_id` int(11) NOT NULL,
  `employee_landing_img` varchar(150) DEFAULT NULL,
  `employee_landing_video_url` varchar(150) DEFAULT NULL,
  `employee_landing_title` varchar(250) DEFAULT NULL,
  `employee_landing_subheading` varchar(150) DEFAULT NULL,
  `employee_landing_description` varchar(250) DEFAULT NULL,
  `employee_landing_icon` varchar(100) NOT NULL,
  `employee_landing_content` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_landing`
--

INSERT INTO `emp_landing` (`employee_landing_id`, `employee_landing_img`, `employee_landing_video_url`, `employee_landing_title`, `employee_landing_subheading`, `employee_landing_description`, `employee_landing_icon`, `employee_landing_content`) VALUES
(1, 'images/farmers-make-a-difference.png', 'https://www.youtube-nocookie.com/embed/nSp7SuuP1R0', 'FARMERS CAN MAKE A DIFFERENCE', 'Young farmers are required to preserve the future of our soil', 'Large population of elderly farmers will lead to retirement and opening new opporutnities to younger farmers', 'fa-check-small fa-check', 'Educated farmers minimise use of soil disturbance'),
(2, '', '', '', '', '', 'fa-check-small fa-check', 'Educated farmers avoid leaving the soil uncovered'),
(3, '', '', '', '', '', 'fa-check-small fa-check', 'Educated farmers preserve the biodiversity of grasslands'),
(4, '', '', '', '', '', 'fa-check-small fa-check', 'Educated farmers leave living roots to feed soil biology'),
(5, '', '', '', '', '', 'fa-check-small fa-check', 'Educated farmers release animals on to the grasslands');

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
(2, 100, 'c29b556f2f1ddd7ada7f2d7b6834b2c7'),
(3, 100, 'c3fae1827597a016ef41d4fb9c4f95fe'),
(4, 100, '9e0677170130c646c24d9d907974166c'),
(5, 100, '1d5029e4a17729fbd82d52087fc2c85c'),
(6, 100, '0e5efcba3b5a2d1d78b5eb243ebb8ce2'),
(7, 100, 'e7a575a4e5900bf0de75a73abf3e7d2b');

-- --------------------------------------------------------

--
-- Table structure for table `index_offerings`
--

CREATE TABLE `index_offerings` (
  `ofr_id` int(11) NOT NULL,
  `ofr_icon` varchar(255) NOT NULL,
  `ofr_title` varchar(255) NOT NULL,
  `ofr_descr` varchar(255) NOT NULL,
  `ofr_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_offerings`
--

INSERT INTO `index_offerings` (`ofr_id`, `ofr_icon`, `ofr_title`, `ofr_descr`, `ofr_url`) VALUES
(1, 'flaticon-news', 'Latest News', 'Stay up-tp-date with the latest news regarding grazing, wildfires, drought, and livestock. News from relevant countries are provided to protect our grasslands!', 'news.php'),
(2, 'flaticon-horse-grazing-black-silhouette', 'Grazing Techniques', 'Preserve grassland\'s nature, soil, and grass and increase your livestock numbers by the use of appropriate grazing techniques.', 'techniques.php'),
(3, 'flaticon-chicken', 'Livestock Statistics', 'Dominant livestock has been reducing since 1970 up until now. Action needs to be taken! Various graphs and solutions are provided.', 'livestock-statistics.php'),
(4, 'flaticon-teacher', 'Employment Statistics', 'The number of farmers, working with beef and dairy cattle and sheep, has been reducing. Lots of opportunities for younger farmers to showcase themselves.', 'employment-statistics.php'),
(5, 'flaticon-drought', 'Drought', 'Drought has negative impact on grasslands, which leads to wildfires, loss of wetland, and reduction of livestock. Drought locations and water levels are provided.', 'drought.php'),
(6, 'flaticon-bug', 'Invasive Species', 'Weeds and animals spread and multiplied to the point where they damage grasslands. Various species, their locations, and measures against them are provided.', 'invasive-species.php');

-- --------------------------------------------------------

--
-- Table structure for table `livestock_cards`
--

CREATE TABLE `livestock_cards` (
  `card_id` int(11) NOT NULL,
  `card_type` varchar(500) NOT NULL,
  `card_preview` varchar(500) NOT NULL,
  `card_title` varchar(500) NOT NULL,
  `card_text` varchar(1300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestock_cards`
--

INSERT INTO `livestock_cards` (`card_id`, `card_type`, `card_preview`, `card_title`, `card_text`) VALUES
(1, 'beef cattle', 'Maintain balance between protecting grasslands and keeping your beef cattle numbers high.', '', ''),
(2, 'beef cattle', 'Patch-burn grazing technique is advised to be used.', '', ''),
(3, 'beef cattle', 'Burn grassland not only for the beef cattle. Grasslands require planned burning.', 'Burn grasslands and increase livestock', '<img style=\"width: 100%;\" src=\"images/livestock_stats/beef-card-1.jpeg\" alt=\"Burn grasslands and increase livestock\"><h5 class=\"text-justify\">Conduct controlled dry season burning to stimulate fresh plant growth to restore calcium to the soil that builds up in the dry grasses. Some species of native plants need occasional fire to thrive, while blazes can also help remove invasive species.</h5><p></p><h5 class=\"text-justify\">Fire is important for grasslands’ existence. They prevent woody plants from spreading and enable the grass to re-grow, becoming thicker, more resilient and healthier. How do grasses survive these fires? They have developed extensive underground systems during the course of evolution, which allow them to burst back to life, stronger than ever before, fairly quickly after a fire.</h5>'),
(4, 'beef cattle', 'Droughts and too much humid negatively affect grasslands and beef cattle.', 'Keep grasslands fresh', '<img style=\"width: 100%;\" src=\"images/livestock_stats/beef-card-2.jpeg\" alt=\"Keep grasslands fresh\"><h5 class=\"text-justify\">All grasslands get a specific amount of yearly rainfall, depending on their exact location in the world. What you did not know is that if grasslands receive much less rain than ordinarily, it would become a desert, and if it got much more rain than usually, it would eventually turn into a forest. That is also the reason why grasslands are often located between deserts and forests – these nearby areas get less or more rain, and have thus developed into something else.</h5><p><p><h5>provide solution perhaps?</h5>'),
(5, 'beef cattle', 'Just like grasslands, beef cattle is involved in the whole biomass and generates numerous by-products.', 'Beef cattle provides hundreds by-products', '<img style=\"width: 100%;\" src=\"images/livestock_stats/beef-card-3.jpg\" alt=\"Beef cattle provides hundreds by-products\"><h5 class=\"text-justify\">Over 98% of the beef animal is used when it is processed. Besides meat and milk, beef cattle provide us with hundreds of important by-products. About 45% of the animal is used for meat and the rest is used for other by-products including leather, china, glue, film, soap, pharmaceuticals, insulin, gelatins, etc. Almost the entire beef animal can be used in some way. From a typical 454-kilogram steer, slightly over 40% of the animal is used for retail beef and the remaining 60% is processed into by-products.</h5>'),
(6, 'Dairy cattle', 'Protecting grasslands is important but lack of dairy cattle will lead to lack of milk supply.', '', ''),
(7, 'Dairy cattle', 'Rotational grazing technique is advised to be used.', '', ''),
(8, 'Dairy cattle', 'Kangaroos negatively affect grasslands development and dairy cattle.', 'Keep kangaroos away from grassland', '<img style=\"width: 100%;\" src=\"images/livestock_stats/dairy-card-1.jpeg\" alt=\"Keep kangaroos away from grasslands\"><h5 class=\"text-justify\">Kangaroo numbers need to be controlled due to threatening one of Australia’s last remaining original grasslands and endangered livestock. Australian Department of Defence is currently culling hundreds of kangaroos on the outskirts of the capital Canberra that have produced heated discussions and hit international headlines. Australia’s iconic animal has multiplied so much over recent years that Canberra has three times as many kangaroos as inhabitants. The situation is particularly critical at two enclosed military sites on the outskirts of the city, which form an ideal refuge for the eastern grey kangaroo (Macropus giganteus)</h5>'),
(9, 'Dairy cattle', 'Just like grasslands, dairy cattle need rest in their life cycle.', 'Provide enough rest for dairy cattle', '<img style=\"width: 100%;\" src=\"images/livestock_stats/dairy-card-2.jpeg\" alt=\"Provide enough rest for dairy cattle\"><h5 class=\"text-justify\">Generally, a cow can produce milk in 9-10 months each year according to pregnancy. Many ranchers run cow-calf operations. The cows are bred to calve in the spring or fall that keeps a herd of cows to produce calves. The natural life expectancy of a cow is twenty years. Some get up to 25 years old. Cows, like our grassland that need certain time to rest and regrowth for healing and better productivity. Therefore, we recommend you take sustainable techniques like rotational grazing and patch-burn to rest the land.</h5>'),
(10, 'Dairy cattle', 'Make sure the right grazing technique is used to provide enough food.', 'Keep dairy cattle fed', '<img style=\"width: 100%;\" src=\"images/livestock_stats/dairy-card-3.jpeg\" alt=\"Keep dairy cattle fed\"><h5 class=\"text-justify\">A cow, that is milking, eats about 45 kilograms of feed each day. Cows drink a whole bathtub of water in just one day. That’s why cows are considered as the competitive eater and ultimate recyclers. The feed is typically a combination of grass, grain, and a mixture of other ingredients like citrus pulp, almond hulls and cotton seeds. These are items that may otherwise be thrown away. The ingredients, that we cannot eat, can often be nutritious for them. Farmers employ professional animal nutritionists to develop scientifically formulated, balanced, and nutritious diets for their cows.</h5>'),
(11, 'Milk', 'Reduction of dairy livestock leads to extreme reduction of milk quantity.', '', ''),
(12, 'Milk', 'Rotational grazing technique is advised to be used.', '', ''),
(13, 'Milk', 'Ensure that suitable grasslands are selected, and appropriate grazing techniques are used.', 'Maintain grasslands well', '<img style=\"width: 100%;\" src=\"images/livestock_stats/milk-card-1.jpeg\" alt=\"Maintain grasslands well\"><h5 class=\"text-justify\">Although grass is without a doubt the most important feature of grasslands, it doesn’t grow all the time, at least not in temperate grasslands that are most common in Earth’s mid-latitude, such as America’s prairies and Europe’s steppes.</h5><p></p><h5 class=\"text-justify\">Life in temperate grasslands is forced to survive in two very different seasons: the growing season and the dormant season. While the growing season allows the flora of the grasslands to thrive, the climate is too cold during the dormant season.</h5>'),
(14, 'Milk', 'Two-way effects! Estimate the value of environmental impacts of dairy farming.', 'Estimate the value of environmental impacts of dairy farming', '<img style=\"width: 100%;\" src=\"images/livestock_stats/milk-card-2.jpeg\" alt=\"Estimate the value of environmental impacts of dairy farming\"><h5 class=\"text-justify\">The intensification and expansion of dairy farms have contributed to many environmental problems such as the contamination of ground and surface water, insufficient water for irrigation during droughts, excess nutrient losses from farms, larger emissions of greenhouse gases. Permanent grassland farms can generally keep up with fodder-crop farms, even in an intensive production setting. However, extensively operating farms, especially those on permanent grassland, significantly lag behind in productivity.</h5>'),
(15, 'Sheep', 'Sheep are the most dominate livestock in Australia and its reduction will negatively affect Australian economy.', '', ''),
(16, 'Sheep', 'Seasonal grazing technique is adviced to be used.', '', ''),
(17, 'Sheep', 'Rabbits can be a cause of decreasing number of sheep.', 'Beware of rabbits', '<img style=\"width: 100%;\" src=\"images/livestock_stats/sheep-card-1.jpeg\" alt=\"Beware of rabbits\"><h5 class=\"text-justify\">Rabbits compete with native animals and domestic livestock for food and shelter, increasing grazing pressure and lowering the land’s carrying capacity.</h5><p></p><h5 class=\"text-justify\">Rabbits act as a food source for introduced predators, which can lead to increased lamb losses and disease prevalence.</h5>'),
(18, 'Sheep', 'Sheep are light eaters compared to cattle, but their density is much higher.', 'High density of sheeps negatively affect grassland', '<img style=\"width: 100%;\" src=\"images/livestock_stats/sheep-card-2.jpeg\" alt=\"High density of sheeps negative affect grassland\"><h5 class=\"text-justify\">Large density causes lots of damage to the grass and the plants in the area. Though, sheep are herbivores, which means their diet does not include meat. They typically eat seeds, grass and plants. Some sheep do not need much water. The desert bighorn sheep, for example, gets most of its water from eating plants. Like all ruminants, they have multi-chambered stomachs that are adapted to ferment cellulose before digestion. To completely digest their food, sheep will regurgitate their food into their mouths, rechew and swallow. This regurgitated food is called cud.</h5>'),
(19, 'Wool', 'Rapid increase in reduction of wool will eventually lead to depletion, loss of income, and reduction of cloths.', '', ''),
(20, 'Wool', 'Seasonal grazing technique is advised to be used.', '', ''),
(21, 'Wool', 'Ensure that grasslands gets enough water to provide nutrients to sheep.', 'Keep grasslands moist', '<img style=\"width: 100%;\" src=\"images/livestock_stats/wool-card-1.jpeg\" alt=\"Keep grasslands moist\"><h5 class=\"text-justify\">Where there are plants, there also must be moisture in the soil, and grasslands with their various kinds of grasses, shrubbery and even occasional trees are no different. But the relationship of grasslands and rain is a complicated one. All types of grasslands need a certain amount of rain, but then again not too much rain, since that will cause them to transform into something else.</h5><p></p><h5 class=\"text-justify\">How much rain is too much rain? How much is too little? That depends on the type of grassland and its location, but grasslands in general get around 50 to 90 centimeters of annual rainfall. Some grasslands also exist in areas where the annual rainfall exceeds 120 centimeters annually, and some exist in areas where there is as little as 25 centimeters of annual rainfall.</h5>'),
(22, 'Wool', 'Wool is a treasure in Australia because it helps us to win Guinness World Record.', 'Aussie won the Guinness World Record', '<img style=\"width: 100%;\" src=\"images/livestock_stats/wool-card-2.jpeg\" alt=\"Aussie won the Guinness World Record\"><h5 class=\"text-justify\">Hilton Barrett who from Australian holds the Guinness World Record for the fastest time to shear a single mature sheep at an amazing 39.31 seconds. The record was set at the Wellington Show 2010 in Wellington, New South Wales on 1 May 2010. Wool fibers are very durable and flexible. Wool fiber can withstand being bent 20,000 times without breaking. In comparison, cotton breaks after 3,000 bends and silk after 2,000 bends. Also, Sheep wool has an incredible, natural UV protection built right in, which helps to keep sheep and lambs from getting sunburnt.</h5>'),
(23, 'Land', 'The less land is used - the better it is for Australian grasslands, though it negatively affects people.', '', ''),
(24, 'Land', 'Grazing techniques are advised to be used.', '', ''),
(25, 'Land', 'Animals, just like humans, are involved in overgrazing the grasslands.', 'Animals, just like humans, are cause of overgrazing', '<img style=\"width: 100%;\" src=\"images/livestock_stats/land-card-1.jpeg\" alt=\"Animals, just like humans, are cause of overgrazing\"><h5 class=\"text-justify\">Rabbit can cause overgrazing native and sown pastures, leading to loss of plant biodiversity and reduced crop yields. Because they are too much and eat too fast, they are preventing or inhibiting the regeneration of native shrubs and trees by grazing.</h5><p></p><h5 class=\"text-justify\">Moreover, they build warrens and it causes land degradation and erosion, also increasing and spreading invasive weeds. they cause huge damage to our land; numbers need to be controlled.</h5>'),
(26, 'Land', 'The right balanced is needed to preserve Australian grasslands.', 'Maintain balance in the use of the land', '<img style=\"width: 100%;\" src=\"images/livestock_stats/land-card-2.jpeg\" alt=\"Maintain balance in the use of the land\"><h5 class=\"text-justify\">Australia has unique land, water, vegetation and biodiversity resources. Australia’s 7.7 million square kilometres support a wide range of agricultural and forestry industries. Production from natural resources earns over $38 billion a year in exports from agriculture, fisheries and forestry. Competitive pressures drive the need for improved productivity, which includes increased diversification and intensification. These trends are occurring against a background of increased climate variability.</h5><p></p><h5 class=\"text-justify\">The way in which land is used has a profound effect on Australia’s social and ecological systems. There is a strong link between changes in land use and environmental, economic and social conditions. Information on land use and management is fundamental to understanding landscapes, agricultural production and the management of natural resources.</h5>'),
(27, 'Meat', 'Reduction of beef cattle negatively affects the quantity of the beef produced and will have a negative impact in a long run.', '', ''),
(28, 'Meat', 'Patch-burn grazing technique is adviced to be used.', '', ''),
(29, 'Meat', 'Grass fed or grain fed beef? The differences and impacts are significant.', 'Grass fed or grain fed beef?', '<img style=\"width: 100%;\" src=\"images/livestock_stats/meat-card-1.jpeg\" alt=\"Grass fed or grain fed beef?\"><h5 class=\"text-justify\">Grass fed beef meat comes from cattle that have only grazed on grass. They feed on a range of different types of grasses, depending on climate and region. In Australia, cattle are predominantly grass fed and account for around 2/3 of whole beef production on average. Grain fed beef comes from cattle which are fed grass for most of their lives and then transition to grain-based diets for the remainder of their lives. The number of days during which they are fed a grain-based diet varies.</h5><p></p><h5 class=\"text-justify\">Livestock are fed grain for several reasons, including to maintain a consistent meat supply, improve eating quality, meet specific needs for niche markets (e.g. for highly marbled meat), meet the energy needs of animals when pasture is limited (such as in drought conditions) and increase animal size.</h5>'),
(30, 'Meat', 'People in the industry. The major group to make the changes!', 'People make a difference', '<img style=\"width: 100%;\" src=\"images/livestock_stats/meat-card-2.jpeg\" alt=\"People make a difference\"><h5 class=\"text-justify\">There are 41,800 agricultural businesses maintained in the cattle industry and 26.4 million head of cattle in Australia as of 2017-2018. Around 172,000 people are employed in the red meat industry, including on-farm production, processing and retail. In 2018-2019, Australia produced approximately 2.35 million tones carcass weight (cwt) of beef and veal. In 2018-2019, 3.14 million grain fed cattle were marketed 38% of all adult cattle slaughtered. On the other hand, the gross value of Australian cattle and calf production (including live cattle exports) in 2018-19 is estimated at A$10.9 billion. Cattle contributed 18% of the total farm value of A$61.4 billion in 2018-2019.</h5>'),
(31, 'Yarn', 'Reduction of sheep negatively affects the production of wool, which at the end negatively affect production of yarn.', '', ''),
(32, 'Yarn', 'Seasonal grazing technique is adviced to be used.', '', ''),
(33, 'Yarn', 'Reduction of yarn will cause reduction of cloths.', 'Production of cloths is affected', '<img style=\"width: 100%;\" src=\"images/livestock_stats/yarn-card-1.jpg\" alt=\"\"><h5 class=\"text-justify\">Even though wool represents only 1.2% of the virgin fibre supply, it represents about 5% of clothing donated to charity. Wool-made yarn is also one of the most sought after recycled textiles for converting into new long-lasting products, such as garments, mattresses and upholstery. In contrast to synthetics, wool-made yarn can absorb moisture vapour which means less sweat on your body.  Wool-made yarn even absorbs the odour molecules from sweat, which are only released upon washing. Wool-made yarn inherent chemical structure makes wool naturally flame resistant. It is a highly trusted natural fibre in public areas such as hotels, aircraft, hospitals and theatres.</h5>'),
(34, 'Yarn', 'Few other reasons behind yarn decline.', 'Reasons behind yarn reduction', '<img style=\"width: 100%;\" src=\"images/livestock_stats/yarn-card-2.jpg\" alt=\"\"><h5 class=\"text-justify\">The best wool goes to make suits and clothing, not yarn. There were several factors that contributed to the yarn industry decline.  Firstly, the Australian government began reducing the tariff protection in the footwear, clothing and textile industries in the 1970s, which opened the way for cheap imports to increasingly flood the Australian market. Now we all know that this affected all sectors of manufacturing. Prior to the removal of the tariffs, many larger towns in Australia had mills - it’s important to remember not all of these mills made yarn for the hand knitter, again this was a small proportion of the mills - many made fabrics, carpets, and yarns specifically for the manufacturing sector. It was the tariff reductions coupled with the changing directions worldwide of trends, that put our yarn industry into serious damage control.  In the 1980s people began to turn their back on handicrafts viewing them as old fashioned; a bit daggy. Pattern and yarn sales slumped, and many local yarn stores closed. You could also, for the first time, buy a machine-knitted jumper for cheaper than you could knit one.</h5>'),
(35, 'Total', 'Beef and dairy cattle, and sheep livestock is reducing yearly and will eventually reach zero.', '', ''),
(36, 'Total', 'Grazing techniques are adviced to be used.', '', ''),
(37, 'Total', 'Burn grassland not only for the beef cattle. Grasslands require planned burning.', 'Burn grasslands and increase livestocks', '<img style=\"width: 100%;\" src=\"images/livestock_stats/beef-card-1.jpeg\" alt=\"Burn grasslands and increase livestocks\"><h5 class=\"text-justify\"><h5 class=\"text-justify\">Conduct controlled dry season burning to stimulate fresh plant growth to restore calcium to the soil that builds up in the dry grasses. Some species of native plants need occasional fire to thrive, while blazes can also help remove invasive species.</h5><p></p><h5 class=\"text-justify\">Fire is important for grasslands’ existence. They prevent woody plants from spreading and enable the grass to re-grow, becoming thicker, more resilient and healthier. How do grasses survive these fires? They have developed extensive underground systems during the course of evolution, which allow them to burst back to life, stronger than ever before, fairly quickly after a fire.'),
(38, 'Total', 'Droughts and too much humid negatively affect grasslands and beef cattle.', 'Keep grasslands fresh', '<img style=\"width: 100%;\" src=\"images/livestock_stats/beef-card-2.jpeg\" alt=\"Keep grasslands fresh\"><h5 class=\"text-justify\"><h5 class=\"text-justify\">All grasslands get a specific amount of yearly rainfall, depending on their exact location in the world. What you didn not know is that if grasslands receive much less rain than ordinarily, it would become a desert, and if it got much more rain than usually, it would eventually turn into a forest. That is also the reason why grasslands are often located between deserts and forests – these nearby areas get less or more rain, and have thus developed into something else.</h5>'),
(39, 'Total', 'Just like grasslands, beef cattle is involved in the whole biomass and generates numerous by-products.', 'Beef cattle provides hundreds by-products', '<img style=\"width: 100%;\" src=\"images/livestock_stats/beef-card-3.jpg\" alt=\"Beef cattle provides hundreds by-products\"><h5 class=\"text-justify\"><h5 class=\"text-justify\">Over 98% of the beef animal is used when it is processed. Besides meat and milk, beef cattle provide us with hundreds of important by-products. About 45% of the animal is used for meat and the rest is used for other by-products including leather, china, glue, film, soap, pharmaceuticals, insulin, gelatines, etc. Almost the entire beef animal can be used in some way. From a typical 454-kilogram steer, slightly over 40% of the animal is used for retail beef and the remaining 60% is processed into by-products.</h5>'),
(40, 'Total', 'Kangaroos negatively affect grasslands development and dairy cattle.', 'Keep kangaroos away from grasslands', '<img style=\"width: 100%;\" src=\"images/livestock_stats/dairy-card-1.jpeg\" alt=\"Keep kangaroos away from grasslands\"><h5 class=\"text-justify\"><h5 class=\"text-justify\">Kangaroo numbers need to be controlled due to threatening one of Australia’s last remaining original grasslands and endangered livestock. Australian Department of Defence is currently culling hundreds of kangaroos on the outskirts of the capital Canberra that have produced heated discussions and hit international headlines. Australia’s iconic animal has multiplied so much over recent years that Canberra has three times as many kangaroos as inhabitants. The situation is particularly critical at two enclosed military sites on the outskirts of the city, which form an ideal refuge for the eastern grey kangaroo (Macropus giganteus)</h5>'),
(41, 'Total', 'Just like grasslands, dairy cattle need rest in their life cycle.', 'Provide enough rest for dairy cattle', '<img style=\"width: 100%;\" src=\"images/livestock_stats/dairy-card-2.jpeg\" alt=\"Provide enough rest for dairy cattle\"><h5 class=\"text-justify\"><h5 class=\"text-justify\">Generally, a cow can produce milk in 9-10 months each year according to pregnancy. Many ranchers run cow-calf operations. The cows are bred to calve in the spring or fall that keeps a herd of cows to produce calves. The natural life expectancy of a cow is twenty years. Some get up to 25 years old. Cows, like our grassland that need certain time to rest and regrowth for healing and better productivity. Therefore, we recommend you take sustainable techniques like rotational grazing and patch-burn to rest the land.</h5>'),
(42, 'Total', 'Make sure the right grazing technique is used to provide enough food.', 'Keep dairy cattle fed', '<img style=\"width: 100%;\" src=\"images/livestock_stats/dairy-card-3.jpeg\" alt=\"Keep dairy cattle fed\"><h5 class=\"text-justify\"><h5 class=\"text-justify\">A cow, that is milking, eats about 45 kilograms of feed each day. Cows drink a whole bathtub of water in just one day. That’s why cows are considered as the competitive eater and ultimate recyclers. The feed is typically a combination of grass, grain, and a mixture of other ingredients like citrus pulp, almond hulls and cotton seeds. These are items that may otherwise be thrown away. The ingredients, that we cannot eat, can often be nutritious for them. Farmers employ professional animal nutritionists to develop scientifically formulated, balanced, and nutritious diets for their cows.</h5>'),
(43, 'Total', 'Rabbits can be a cause of decreasing number of sheep.', 'Beware of rabbits', '<img style=\"width: 100%;\" src=\"images/livestock_stats/sheep-card-1.jpeg\" alt=\"Beware of rabbits\"><h5 class=\"text-justify\"><h5 class=\"text-justify\">Rabbits compete with native animals and domestic livestock for food and shelter, increasing grazing pressure and lowering the land’s carrying capacity.</h5><p></p><h5 class=\"text-justify\">Rabbits act as a food source for introduced predators, which can lead to increased lamb losses and disease prevalence.</h5>'),
(44, 'Total', 'Sheep are light eaters compared to cattle, but their density is much higher.', 'High density of sheeps negative affect grassland', '<img style=\"width: 100%;\" src=\"images/livestock_stats/sheep-card-2.jpeg\" alt=\"High density of sheeps negative affect grassland\"><h5 class=\"text-justify\"><h5 class=\"text-justify\">Large density causes lots of damage to the grass and the plants in the area. Though, sheep are herbivores, which means their diet does not include meat. They typically eat seeds, grass and plants. Some sheep do not need much water. The desert bighorn sheep, for example, gets most of its water from eating plants. Like all ruminants, they have multi-chambered stomachs that are adapted to ferment cellulose before digestion. To completely digest their food, sheep will regurgitate their food into their mouths, rechew and swallow. This regurgitated food is called cud.</h5>');

-- --------------------------------------------------------

--
-- Table structure for table `livestock_control`
--

CREATE TABLE `livestock_control` (
  `livestock_control_id` int(11) NOT NULL,
  `livestock_control_type` varchar(100) NOT NULL,
  `livestock_control_type_ext` varchar(20) NOT NULL,
  `livestock_control_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestock_control`
--

INSERT INTO `livestock_control` (`livestock_control_id`, `livestock_control_type`, `livestock_control_type_ext`, `livestock_control_name`) VALUES
(1, 'livestock_', 'beef', 'Beef cattle'),
(2, 'livestock_', 'dairy', 'Dairy cattle'),
(3, 'livestock_', 'sheep', 'Sheep'),
(4, 'livestock_', 'total', 'Total'),
(5, 'y_', '2030', '2030'),
(6, 'y_', '2040', '2040'),
(7, 'y_', '2050', '2050'),
(8, 'y_', '2060', '2060');

-- --------------------------------------------------------

--
-- Table structure for table `livestock_dataset`
--

CREATE TABLE `livestock_dataset` (
  `stock_id` int(11) NOT NULL,
  `stock_year` int(11) NOT NULL,
  `stock_type` varchar(20) NOT NULL,
  `stock_qty` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestock_dataset`
--

INSERT INTO `livestock_dataset` (`stock_id`, `stock_year`, `stock_type`, `stock_qty`) VALUES
(1, 1973, 'Beef cattle', 26.6),
(2, 1974, 'Beef cattle', 28.5),
(3, 1975, 'Beef cattle', 29.3),
(4, 1976, 'Beef cattle', 28.3),
(5, 1977, 'Beef cattle', 26.3),
(6, 1978, 'Beef cattle', 24.2),
(7, 1979, 'Beef cattle', 23.4),
(8, 1980, 'Beef cattle', 22.4),
(9, 1981, 'Beef cattle', 21.7),
(10, 1982, 'Beef cattle', 19.7),
(11, 1983, 'Beef cattle', 19.4),
(12, 1984, 'Beef cattle', 20),
(13, 1985, 'Beef cattle', 20.7),
(14, 1986, 'Beef cattle', 19.3),
(15, 1987, 'Beef cattle', 19.3),
(16, 1988, 'Beef cattle', 19.9),
(17, 1989, 'Beef cattle', 20.7),
(18, 1990, 'Beef cattle', 21.2),
(19, 1991, 'Beef cattle', 21.4),
(20, 1992, 'Beef cattle', 21.6),
(21, 1993, 'Beef cattle', 23.1),
(22, 1994, 'Beef cattle', 23),
(23, 1995, 'Beef cattle', 23.6),
(24, 1996, 'Beef cattle', 23.7),
(25, 1997, 'Beef cattle', 23.8),
(26, 1998, 'Beef cattle', 23.4),
(27, 1999, 'Beef cattle', 24.4),
(28, 2000, 'Beef cattle', 24.5),
(29, 2001, 'Beef cattle', 24.7),
(30, 2002, 'Beef cattle', 23.6),
(31, 2003, 'Beef cattle', 24.4),
(32, 2004, 'Beef cattle', 24.7),
(33, 2005, 'Beef cattle', 25.6),
(34, 2006, 'Beef cattle', 25.4),
(35, 2007, 'Beef cattle', 24.8),
(36, 2008, 'Beef cattle', 25.3),
(37, 2009, 'Beef cattle', 24),
(38, 2010, 'Beef cattle', 25.9),
(39, 2011, 'Beef cattle', 25.7),
(40, 2012, 'Beef cattle', 26.5),
(41, 2013, 'Beef cattle', 26.3),
(42, 2014, 'Beef cattle', 24.6),
(43, 2015, 'Beef cattle', 22.3),
(44, 2016, 'Beef cattle', 23.1),
(45, 1973, 'Dairy cattle', 3.7),
(46, 1974, 'Dairy cattle', 3.6),
(47, 1975, 'Dairy cattle', 3.5),
(48, 1976, 'Dairy cattle', 3.3),
(49, 1977, 'Dairy cattle', 3.1),
(50, 1978, 'Dairy cattle', 2.9),
(51, 1979, 'Dairy cattle', 2.8),
(52, 1980, 'Dairy cattle', 2.8),
(53, 1981, 'Dairy cattle', 2.8),
(54, 1982, 'Dairy cattle', 2.8),
(55, 1983, 'Dairy cattle', 2.8),
(56, 1984, 'Dairy cattle', 2.8),
(57, 1985, 'Dairy cattle', 2.8),
(58, 1986, 'Dairy cattle', 2.6),
(59, 1987, 'Dairy cattle', 2.6),
(60, 1988, 'Dairy cattle', 2.5),
(61, 1989, 'Dairy cattle', 2.5),
(62, 1990, 'Dairy cattle', 2.4),
(63, 1991, 'Dairy cattle', 2.4),
(64, 1992, 'Dairy cattle', 2.5),
(65, 1993, 'Dairy cattle', 2.7),
(66, 1994, 'Dairy cattle', 2.7),
(67, 1995, 'Dairy cattle', 2.8),
(68, 1996, 'Dairy cattle', 3),
(69, 1997, 'Dairy cattle', 3.1),
(70, 1998, 'Dairy cattle', 3.2),
(71, 1999, 'Dairy cattle', 3.1),
(72, 2000, 'Dairy cattle', 3.2),
(73, 2001, 'Dairy cattle', 3.1),
(74, 2002, 'Dairy cattle', 3),
(75, 2003, 'Dairy cattle', 3.1),
(76, 2004, 'Dairy cattle', 3.1),
(77, 2005, 'Dairy cattle', 2.8),
(78, 2006, 'Dairy cattle', 2.7),
(79, 2007, 'Dairy cattle', 2.5),
(80, 2008, 'Dairy cattle', 2.6),
(81, 2009, 'Dairy cattle', 2.5),
(82, 2010, 'Dairy cattle', 2.6),
(83, 2011, 'Dairy cattle', 2.7),
(84, 2012, 'Dairy cattle', 2.8),
(85, 2013, 'Dairy cattle', 2.8),
(86, 2014, 'Dairy cattle', 2.8),
(87, 2015, 'Dairy cattle', 2.7),
(88, 2016, 'Dairy cattle', 2.6),
(89, 1973, 'Sheep', 145),
(90, 1974, 'Sheep', 152),
(91, 1975, 'Sheep', 148),
(92, 1976, 'Sheep', 135),
(93, 1977, 'Sheep', 131),
(94, 1978, 'Sheep', 134),
(95, 1979, 'Sheep', 136),
(96, 1980, 'Sheep', 134),
(97, 1981, 'Sheep', 138),
(98, 1982, 'Sheep', 131),
(99, 1983, 'Sheep', 135),
(100, 1984, 'Sheep', 146),
(101, 1985, 'Sheep', 150),
(102, 1986, 'Sheep', 149),
(103, 1987, 'Sheep', 152),
(104, 1988, 'Sheep', 162),
(105, 1989, 'Sheep', 170),
(106, 1990, 'Sheep', 163),
(107, 1991, 'Sheep', 148),
(108, 1992, 'Sheep', 138),
(109, 1993, 'Sheep', 133),
(110, 1994, 'Sheep', 121),
(111, 1995, 'Sheep', 121),
(112, 1996, 'Sheep', 120),
(113, 1997, 'Sheep', 117),
(114, 1998, 'Sheep', 115),
(115, 1999, 'Sheep', 119),
(116, 2000, 'Sheep', 111),
(117, 2001, 'Sheep', 106),
(118, 2002, 'Sheep', 99.3),
(119, 2003, 'Sheep', 101),
(120, 2004, 'Sheep', 101),
(121, 2005, 'Sheep', 91),
(122, 2006, 'Sheep', 85.7),
(123, 2007, 'Sheep', 76.9),
(124, 2008, 'Sheep', 72.7),
(125, 2009, 'Sheep', 68.1),
(126, 2010, 'Sheep', 73.1),
(127, 2011, 'Sheep', 74.7),
(128, 2012, 'Sheep', 75.5),
(129, 2013, 'Sheep', 72.6),
(130, 2014, 'Sheep', 70.9),
(131, 2015, 'Sheep', 67.5),
(132, 2016, 'Sheep', 70.4),
(133, 1973, 'Total', 175.3),
(134, 1974, 'Total', 184.1),
(135, 1975, 'Total', 180.8),
(136, 1976, 'Total', 166.6),
(137, 1977, 'Total', 160.4),
(138, 1978, 'Total', 161.1),
(139, 1979, 'Total', 162.2),
(140, 1980, 'Total', 159.2),
(141, 1981, 'Total', 162.5),
(142, 1982, 'Total', 153.5),
(143, 1983, 'Total', 157.2),
(144, 1984, 'Total', 168.8),
(145, 1985, 'Total', 173.5),
(146, 1986, 'Total', 170.9),
(147, 1987, 'Total', 173.9),
(148, 1988, 'Total', 184.4),
(149, 1989, 'Total', 193.2),
(150, 1990, 'Total', 186.6),
(151, 1991, 'Total', 171.8),
(152, 1992, 'Total', 162.1),
(153, 1993, 'Total', 158.8),
(154, 1994, 'Total', 146.7),
(155, 1995, 'Total', 147.4),
(156, 1996, 'Total', 146.7),
(157, 1997, 'Total', 143.9),
(158, 1998, 'Total', 141.6),
(159, 1999, 'Total', 146.5),
(160, 2000, 'Total', 138.7),
(161, 2001, 'Total', 133.8),
(162, 2002, 'Total', 125.9),
(163, 2003, 'Total', 128.5),
(164, 2004, 'Total', 128.8),
(165, 2005, 'Total', 119.4),
(166, 2006, 'Total', 113.8),
(167, 2007, 'Total', 104.2),
(168, 2008, 'Total', 100.6),
(169, 2009, 'Total', 94.6),
(170, 2010, 'Total', 101.6),
(171, 2011, 'Total', 103.1),
(172, 2012, 'Total', 104.8),
(173, 2013, 'Total', 101.7),
(174, 2014, 'Total', 98.3),
(175, 2015, 'Total', 92.5),
(176, 2016, 'Total', 96.1);

-- --------------------------------------------------------

--
-- Table structure for table `livestock_landing`
--

CREATE TABLE `livestock_landing` (
  `livestock_landing_id` int(11) NOT NULL,
  `livestock_landing_title` varchar(100) DEFAULT NULL,
  `livestock_landing_subheading` varchar(150) DEFAULT NULL,
  `livestock_landing_description` varchar(250) DEFAULT NULL,
  `livestock_landing_icon` varchar(100) NOT NULL,
  `livestock_landing_content` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestock_landing`
--

INSERT INTO `livestock_landing` (`livestock_landing_id`, `livestock_landing_title`, `livestock_landing_subheading`, `livestock_landing_description`, `livestock_landing_icon`, `livestock_landing_content`) VALUES
(1, 'LIVESTOCK REDUCTION IMPACTS GRASSLANDS', 'Livestock is required for food production and grazing to improve soil quality', 'Lack of younger and educated farmers is one of the causes that leads to livestock reduction. Refer to <i><u><a href=\"employment-statistics.php\">employment statistics page</a></u></i> to gain insight knowledge.', 'fa-exclamation-small fa-exclamation', 'Livestock is drastically reducing and will lead to its extinction!'),
(2, '', '', '', 'fa-exclamation-small fa-exclamation', 'Livestock is directly affecting beef, milk, wool, and yarn production!'),
(3, '', '', '', 'fa-exclamation-small fa-exclamation', 'Our future is not looking safe. The following numbers prove it!');

-- --------------------------------------------------------

--
-- Table structure for table `livestock_prediction_dataset`
--

CREATE TABLE `livestock_prediction_dataset` (
  `predict_id` int(11) NOT NULL,
  `predict_year` int(11) NOT NULL,
  `predict_type` varchar(20) NOT NULL,
  `predict_qty` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestock_prediction_dataset`
--

INSERT INTO `livestock_prediction_dataset` (`predict_id`, `predict_year`, `predict_type`, `predict_qty`) VALUES
(1, 2017, 'Beef cattle', 21.72),
(2, 2018, 'Beef cattle', 20.89),
(3, 2019, 'Beef cattle', 20.78),
(4, 2020, 'Beef cattle', 21.22),
(5, 2021, 'Beef cattle', 21.19),
(6, 2022, 'Beef cattle', 21.69),
(7, 2023, 'Beef cattle', 22.09),
(8, 2024, 'Beef cattle', 22.22),
(9, 2025, 'Beef cattle', 21.92),
(10, 2026, 'Beef cattle', 20.82),
(11, 2027, 'Beef cattle', 20.29),
(12, 2028, 'Beef cattle', 19.94),
(13, 2029, 'Beef cattle', 20.45),
(14, 2030, 'Beef cattle', 19.67),
(15, 2031, 'Beef cattle', 19.58),
(16, 2032, 'Beef cattle', 20.02),
(17, 2033, 'Beef cattle', 20),
(18, 2034, 'Beef cattle', 20.5),
(19, 2035, 'Beef cattle', 20.9),
(20, 2036, 'Beef cattle', 21.03),
(21, 2037, 'Beef cattle', 20.73),
(22, 2038, 'Beef cattle', 19.63),
(23, 2039, 'Beef cattle', 19.1),
(24, 2040, 'Beef cattle', 18.75),
(25, 2041, 'Beef cattle', 19.26),
(26, 2042, 'Beef cattle', 18.48),
(27, 2043, 'Beef cattle', 18.39),
(28, 2044, 'Beef cattle', 18.83),
(29, 2045, 'Beef cattle', 18.81),
(30, 2046, 'Beef cattle', 19.31),
(31, 2047, 'Beef cattle', 19.71),
(32, 2048, 'Beef cattle', 19.84),
(33, 2049, 'Beef cattle', 19.54),
(34, 2050, 'Beef cattle', 18.44),
(35, 2051, 'Beef cattle', 17.91),
(36, 2052, 'Beef cattle', 17.56),
(37, 2053, 'Beef cattle', 18.07),
(38, 2054, 'Beef cattle', 17.29),
(39, 2055, 'Beef cattle', 17.2),
(40, 2056, 'Beef cattle', 17.64),
(41, 2057, 'Beef cattle', 17.62),
(42, 2058, 'Beef cattle', 18.12),
(43, 2059, 'Beef cattle', 18.52),
(44, 2060, 'Beef cattle', 18.65),
(45, 2061, 'Beef cattle', 18.35),
(46, 2062, 'Beef cattle', 17.25),
(47, 2063, 'Beef cattle', 16.72),
(48, 2064, 'Beef cattle', 16.37),
(49, 2065, 'Beef cattle', 16.88),
(50, 2066, 'Beef cattle', 16.1),
(51, 2067, 'Beef cattle', 16.01),
(52, 2068, 'Beef cattle', 16.45),
(53, 2069, 'Beef cattle', 16.43),
(54, 2070, 'Beef cattle', 16.93),
(55, 2071, 'Beef cattle', 17.33),
(56, 2072, 'Beef cattle', 17.46),
(57, 2073, 'Beef cattle', 17.16),
(58, 2074, 'Beef cattle', 16.06),
(59, 2075, 'Beef cattle', 15.53),
(60, 2017, 'Dairy cattle', 2.61),
(61, 2018, 'Dairy cattle', 2.56),
(62, 2019, 'Dairy cattle', 2.5),
(63, 2020, 'Dairy cattle', 2.61),
(64, 2021, 'Dairy cattle', 2.59),
(65, 2022, 'Dairy cattle', 2.61),
(66, 2023, 'Dairy cattle', 2.61),
(67, 2024, 'Dairy cattle', 2.62),
(68, 2025, 'Dairy cattle', 2.57),
(69, 2026, 'Dairy cattle', 2.49),
(70, 2027, 'Dairy cattle', 2.46),
(71, 2028, 'Dairy cattle', 2.48),
(72, 2029, 'Dairy cattle', 2.41),
(73, 2030, 'Dairy cattle', 2.36),
(74, 2031, 'Dairy cattle', 2.3),
(75, 2032, 'Dairy cattle', 2.41),
(76, 2033, 'Dairy cattle', 2.39),
(77, 2034, 'Dairy cattle', 2.4),
(78, 2035, 'Dairy cattle', 2.4),
(79, 2036, 'Dairy cattle', 2.42),
(80, 2037, 'Dairy cattle', 2.37),
(81, 2038, 'Dairy cattle', 2.29),
(82, 2039, 'Dairy cattle', 2.26),
(83, 2040, 'Dairy cattle', 2.28),
(84, 2041, 'Dairy cattle', 2.2),
(85, 2042, 'Dairy cattle', 2.16),
(86, 2043, 'Dairy cattle', 2.1),
(87, 2044, 'Dairy cattle', 2.2),
(88, 2045, 'Dairy cattle', 2.19),
(89, 2046, 'Dairy cattle', 2.2),
(90, 2047, 'Dairy cattle', 2.2),
(91, 2048, 'Dairy cattle', 2.22),
(92, 2049, 'Dairy cattle', 2.16),
(93, 2050, 'Dairy cattle', 2.09),
(94, 2051, 'Dairy cattle', 2.06),
(95, 2052, 'Dairy cattle', 2.07),
(96, 2053, 'Dairy cattle', 2),
(97, 2054, 'Dairy cattle', 1.95),
(98, 2055, 'Dairy cattle', 1.9),
(99, 2056, 'Dairy cattle', 2),
(100, 2057, 'Dairy cattle', 1.98),
(101, 2058, 'Dairy cattle', 2),
(102, 2059, 'Dairy cattle', 2),
(103, 2060, 'Dairy cattle', 2.02),
(104, 2017, 'Sheep', 63.63),
(105, 2018, 'Sheep', 60.01),
(106, 2019, 'Sheep', 51.95),
(107, 2020, 'Sheep', 50.42),
(108, 2021, 'Sheep', 52.54),
(109, 2022, 'Sheep', 51.89),
(110, 2023, 'Sheep', 54.14),
(111, 2024, 'Sheep', 55.29),
(112, 2025, 'Sheep', 52.74),
(113, 2026, 'Sheep', 51.77),
(114, 2027, 'Sheep', 48.67),
(115, 2028, 'Sheep', 44.99),
(116, 2029, 'Sheep', 41.03),
(117, 2030, 'Sheep', 37.38),
(118, 2031, 'Sheep', 29.3),
(119, 2032, 'Sheep', 27.77),
(120, 2033, 'Sheep', 29.89),
(121, 2034, 'Sheep', 29.24),
(122, 2035, 'Sheep', 31.49),
(123, 2036, 'Sheep', 32.64),
(124, 2037, 'Sheep', 30.09),
(125, 2038, 'Sheep', 29.11),
(126, 2039, 'Sheep', 26.01),
(127, 2040, 'Sheep', 22.34),
(128, 2041, 'Sheep', 18.37),
(129, 2042, 'Sheep', 14.73),
(130, 2043, 'Sheep', 6.65),
(131, 2044, 'Sheep', 5.12),
(132, 2045, 'Sheep', 7.24),
(133, 2046, 'Sheep', 6.59),
(134, 2047, 'Sheep', 8.84),
(135, 2048, 'Sheep', 9.99),
(136, 2049, 'Sheep', 7.44),
(137, 2050, 'Sheep', 6.46),
(138, 2051, 'Sheep', 3.36),
(139, 2052, 'Sheep', 0),
(140, 2053, 'Sheep', 0),
(141, 2054, 'Sheep', 0),
(142, 2055, 'Sheep', 0),
(143, 2056, 'Sheep', 0),
(144, 2057, 'Sheep', 0),
(145, 2058, 'Sheep', 0),
(146, 2059, 'Sheep', 0),
(147, 2060, 'Sheep', 0),
(148, 2017, 'Total', 84.53),
(149, 2018, 'Total', 75.61),
(150, 2019, 'Total', 73.9),
(151, 2020, 'Total', 76.47),
(152, 2021, 'Total', 75.64),
(153, 2022, 'Total', 78.37),
(154, 2023, 'Total', 79.89),
(155, 2024, 'Total', 77.44),
(156, 2025, 'Total', 76.09),
(157, 2026, 'Total', 71.79),
(158, 2027, 'Total', 67.57),
(159, 2028, 'Total', 63.3),
(160, 2029, 'Total', 60.13),
(161, 2030, 'Total', 51.23),
(162, 2031, 'Total', 49.53),
(163, 2032, 'Total', 52.11),
(164, 2033, 'Total', 51.28),
(165, 2034, 'Total', 54),
(166, 2035, 'Total', 55.53),
(167, 2036, 'Total', 53.08),
(168, 2037, 'Total', 51.73),
(169, 2038, 'Total', 47.43),
(170, 2039, 'Total', 43.2),
(171, 2040, 'Total', 38.93),
(172, 2041, 'Total', 35.76),
(173, 2042, 'Total', 26.87),
(174, 2043, 'Total', 25.17),
(175, 2044, 'Total', 27.74),
(176, 2045, 'Total', 26.91),
(177, 2046, 'Total', 29.64),
(178, 2047, 'Total', 31.16),
(179, 2048, 'Total', 28.71),
(180, 2049, 'Total', 27.36),
(181, 2050, 'Total', 23.06),
(182, 2051, 'Total', 18.84),
(183, 2052, 'Total', 14.57),
(184, 2053, 'Total', 11.4),
(185, 2054, 'Total', 2.5),
(186, 2055, 'Total', 0.8),
(187, 2056, 'Total', 3.38),
(188, 2057, 'Total', 2.55),
(189, 2058, 'Total', 5.27),
(190, 2059, 'Total', 6.8),
(191, 2060, 'Total', 4.35),
(192, 2061, 'Total', 3),
(193, 2062, 'Total', 0);

-- --------------------------------------------------------

--
-- Table structure for table `livestock_spinner`
--

CREATE TABLE `livestock_spinner` (
  `livestock_spinner_id` int(11) NOT NULL,
  `livestock_spinner_icon` varchar(100) NOT NULL,
  `livestock_spinner_title` varchar(50) NOT NULL,
  `livestock_spinner_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestock_spinner`
--

INSERT INTO `livestock_spinner` (`livestock_spinner_id`, `livestock_spinner_icon`, `livestock_spinner_title`, `livestock_spinner_text`) VALUES
(1, 'flaticon-livestock', 'Livestock', 'The numbers are drastically reducing since 1970s and will extinct in 2060 if no action will be taken! The following numbers are alarming!'),
(2, 'flaticon-meat', 'Beef', 'Production of beef is greatly impacted by the beef cattle numbers. Eventually there won\'t beef remain. The following numbers are alarming!'),
(3, 'flaticon-milk', 'Milk', 'Production of milk is greatly impacted by the dairy cattle numbers. Eventually there won\'t milk remain. The following numbers are alarming!'),
(4, 'flaticon-sheep-1', 'Wool', 'Production of wool is greatly impacted by the sheep numbers. Wool is used for blankets, carpenting and yarn production. Eventually there won\'t wool remain!'),
(5, 'flaticon-region', 'Land use', 'Livestock is important to preserve the grasslands, though, the right grazing techniques need to be utilized to achieve a large volume of production.');

-- --------------------------------------------------------

--
-- Table structure for table `nav_bar`
--

CREATE TABLE `nav_bar` (
  `nav_id` int(11) NOT NULL,
  `nav_link` varchar(100) NOT NULL,
  `nav_title` varchar(100) NOT NULL,
  `nav_drop` int(11) NOT NULL,
  `nav_topic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nav_bar`
--

INSERT INTO `nav_bar` (`nav_id`, `nav_link`, `nav_title`, `nav_drop`, `nav_topic`) VALUES
(1, 'index.php', 'Home', 0, 'none'),
(2, 'news.php', 'News', 0, 'none'),
(3, 'techniques.php', 'Techniques', 0, 'none'),
(4, 'livestock-statistics.php', 'Livestock', 1, 'Statistics'),
(5, 'employment-statistics.php', 'Employment', 1, 'Statistics'),
(6, 'drought.php', 'Drought', 0, 'none'),
(7, 'invasive-species.php', 'Species', 0, 'none');

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
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `species_landing`
--

CREATE TABLE `species_landing` (
  `species_landing_id` int(11) NOT NULL,
  `species_landing_title` varchar(100) DEFAULT NULL,
  `species_landing_subheading` varchar(150) DEFAULT NULL,
  `species_landing_description` varchar(350) DEFAULT NULL,
  `species_landing_icon` varchar(100) NOT NULL,
  `species_landing_content` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `species_landing`
--

INSERT INTO `species_landing` (`species_landing_id`, `species_landing_title`, `species_landing_subheading`, `species_landing_description`, `species_landing_icon`, `species_landing_content`) VALUES
(1, 'INVASIVE SPECIES IMPACT GRASSLANDS', 'In Australia, invasive species cause tremendous damage to soil', 'It is a challenge to control invasive species, especially if farmer\'s qualification in Australia is poor. Refer to <i><u><a href=\"employment-statistics.php\">employment</a></u></i> and <i><u><a href=\"livestock-statistics.php\">livestock</a></u></i> statistic pages to gain insight knowledge.', 'fa-exclamation-small fa-exclamation', 'Invasive species compete with native plants, water, and livestock!'),
(2, '', '', '', 'fa-exclamation-small fa-exclamation', 'Invasive weeds are responsible for changing wildfire patterns!'),
(3, '', '', '', 'fa-exclamation-small fa-exclamation', 'Invasive animals degrate soil by overgrazing the grasslands!');

-- --------------------------------------------------------

--
-- Table structure for table `species_spinner`
--

CREATE TABLE `species_spinner` (
  `species_spinner_id` int(11) NOT NULL,
  `species_spinner_icon` varchar(100) NOT NULL,
  `species_spinner_title` varchar(50) NOT NULL,
  `species_spinner_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `species_spinner`
--

INSERT INTO `species_spinner` (`species_spinner_id`, `species_spinner_icon`, `species_spinner_title`, `species_spinner_text`) VALUES
(1, 'flaticon-spreading', 'Dangerous', 'They have spread throughout Australia to the point where they cause damage to grasslands, threaten existence of native plants and animal, or affect grazing.'),
(2, 'flaticon-bug', 'Species', 'Invasive animals, known as feral animals, and invasive plants known as weeds are one of the biggest concerns that Australian grasslands are facing today.'),
(3, 'flaticon-investigate', 'Root cause', 'Most of the damaging invasive animal and weed species were introduced 200 years ago for sport, as pets or as livestock and pack animals.'),
(4, 'flaticon-animal-kingdom', 'Animals', 'Various animals like rabbits, goats, cattle, buffaloes, pigs, donkeys and others, that can be found below, degrate grasslands soil by intense uncontrolled grazing.'),
(5, 'flaticon-hunting', 'Management', 'Various species, like feral animals or weeds, have their own ways to control the infestation. Few methods are shooting, poisoning, fencing, biological, etc.');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_page` varchar(100) NOT NULL,
  `feedback_date` varchar(20) NOT NULL,
  `feedback_time` varchar(20) NOT NULL,
  `feedback_rate` int(11) NOT NULL,
  `feedback_text` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_age`
--
ALTER TABLE `emp_age`
  ADD PRIMARY KEY (`emp_age_id`);

--
-- Indexes for table `emp_agri_comm`
--
ALTER TABLE `emp_agri_comm`
  ADD PRIMARY KEY (`employee_agri_id`);

--
-- Indexes for table `emp_cards`
--
ALTER TABLE `emp_cards`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `emp_education`
--
ALTER TABLE `emp_education`
  ADD PRIMARY KEY (`emp_educ_id`);

--
-- Indexes for table `emp_landing`
--
ALTER TABLE `emp_landing`
  ADD PRIMARY KEY (`employee_landing_id`);

--
-- Indexes for table `emp_state`
--
ALTER TABLE `emp_state`
  ADD PRIMARY KEY (`emp_state_id`);

--
-- Indexes for table `index_offerings`
--
ALTER TABLE `index_offerings`
  ADD PRIMARY KEY (`ofr_id`);

--
-- Indexes for table `livestock_cards`
--
ALTER TABLE `livestock_cards`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `livestock_control`
--
ALTER TABLE `livestock_control`
  ADD PRIMARY KEY (`livestock_control_id`);

--
-- Indexes for table `livestock_dataset`
--
ALTER TABLE `livestock_dataset`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `livestock_landing`
--
ALTER TABLE `livestock_landing`
  ADD PRIMARY KEY (`livestock_landing_id`);

--
-- Indexes for table `livestock_prediction_dataset`
--
ALTER TABLE `livestock_prediction_dataset`
  ADD PRIMARY KEY (`predict_id`);

--
-- Indexes for table `livestock_spinner`
--
ALTER TABLE `livestock_spinner`
  ADD PRIMARY KEY (`livestock_spinner_id`);

--
-- Indexes for table `nav_bar`
--
ALTER TABLE `nav_bar`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indexes for table `species_landing`
--
ALTER TABLE `species_landing`
  ADD PRIMARY KEY (`species_landing_id`);

--
-- Indexes for table `species_spinner`
--
ALTER TABLE `species_spinner`
  ADD PRIMARY KEY (`species_spinner_id`);

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
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_age`
--
ALTER TABLE `emp_age`
  MODIFY `emp_age_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `emp_agri_comm`
--
ALTER TABLE `emp_agri_comm`
  MODIFY `employee_agri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp_cards`
--
ALTER TABLE `emp_cards`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `emp_education`
--
ALTER TABLE `emp_education`
  MODIFY `emp_educ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `emp_landing`
--
ALTER TABLE `emp_landing`
  MODIFY `employee_landing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_state`
--
ALTER TABLE `emp_state`
  MODIFY `emp_state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `index_offerings`
--
ALTER TABLE `index_offerings`
  MODIFY `ofr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `livestock_cards`
--
ALTER TABLE `livestock_cards`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `livestock_control`
--
ALTER TABLE `livestock_control`
  MODIFY `livestock_control_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `livestock_dataset`
--
ALTER TABLE `livestock_dataset`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `livestock_landing`
--
ALTER TABLE `livestock_landing`
  MODIFY `livestock_landing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `livestock_prediction_dataset`
--
ALTER TABLE `livestock_prediction_dataset`
  MODIFY `predict_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `livestock_spinner`
--
ALTER TABLE `livestock_spinner`
  MODIFY `livestock_spinner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nav_bar`
--
ALTER TABLE `nav_bar`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `species_landing`
--
ALTER TABLE `species_landing`
  MODIFY `species_landing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `species_spinner`
--
ALTER TABLE `species_spinner`
  MODIFY `species_spinner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
