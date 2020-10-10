-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 11:28 AM
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
-- Table structure for table `species_types`
--

CREATE TABLE `species_types` (
  `species_id` int(11) NOT NULL,
  `species_type` varchar(15) NOT NULL,
  `species_img` varchar(500) NOT NULL,
  `species_name` varchar(100) NOT NULL,
  `species_sci` varchar(100) DEFAULT NULL,
  `species_description` varchar(250) NOT NULL,
  `spec_graph_id` varchar(100) NOT NULL,
  `spec_img_src` varchar(250) NOT NULL,
  `spec_o_h_url` varchar(250) NOT NULL,
  `spec_o_name_val` varchar(250) NOT NULL,
  `spec_o_static_url` varchar(250) NOT NULL,
  `graph_source` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `species_types`
--

INSERT INTO `species_types` (`species_id`, `species_type`, `species_img`, `species_name`, `species_sci`, `species_description`, `spec_graph_id`, `spec_img_src`, `spec_o_h_url`, `spec_o_name_val`, `spec_o_static_url`, `graph_source`) VALUES
(1, 'plants', 'invasive-species/plants/acacia-nilotica.jpg;invasive-species/plants/acacia-nilotica2.jpg', 'Prickly Acacia', 'Acacia nilotica', 'Replaces perennial Astrebla spp. with annuals or bare soil and is a long-term threat to the Mitchell grass biome; converts grassland to shrubland', 'viz1599912357011', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1.png', 'https://weeds.org.au/'),
(2, 'plants', 'invasive-species/plants/cenchrus-ciliaris.jpg;invasive-species/plants/cenchrus-ciliaris1.jpg', 'Buffel Grass', 'Cenchrus ciliaris', 'Threatening keystone habitats by displacing native vegetation and altering the fire regime; likely to reduce fauna resources', 'viz1599912357011', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1.png', 'https://weeds.org.au/'),
(3, 'plants', 'invasive-species/plants/glyceria-maxima.jpg', 'Reed Sweetgrass', 'Glyceria Maxima', 'Livestock have also become bogged when attempting to reach water through dense Reed Sweet Grass infestations.', 'viz1599912357011', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1.png', 'https://weeds.org.au/'),
(4, 'plants', 'invasive-species/plants/pennisetum-polystachion.jpg', 'Mission Grass', 'Pennisetum polystachion', 'Displaces native sorghum changing the fire regime, which potentially reduces recruitment potential of woodland species of high conservation significance', 'viz1599912357011', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1.png', 'https://weeds.org.au/'),
(5, 'plants', 'invasive-species/plants/prosopis-limensis.jpg;invasive-species/plants/prosopis-limensis2.jpg', 'Mesquite', 'Prosopis spp.', 'Similar to prickly acacia but has a wider range of soil tolerances', 'viz1599912357011', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1.png', 'https://weeds.org.au/'),
(6, 'plants', 'invasive-species/plants/athel-pine.jpg', 'Athel Pine', 'Tamarix aphylla', 'Displaces native trees; salinises soil; changes hydrology and geomorphology; reduces fauna resources', 'viz1599912357011', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1.png', 'https://weeds.org.au/'),
(7, 'animals', 'invasive-species/animals/wild-rabbits.jpg', 'Rabbits', '', 'Text test test test test test', 'viz1599895069661', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1.png', 'https://weeds.org.au/'),
(8, 'animals', 'invasive-species/animals/wild-goat.jpg', 'Goats', '', 'Text test test test test test', 'viz1599895069661', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1.png', 'https://weeds.org.au/'),
(9, 'animals', 'invasive-species/animals/wild-cattle.jpg', 'Cattle', '', 'Text test test test test test', 'viz1599895069661', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1.png', 'https://weeds.org.au/'),
(10, 'animals', 'invasive-species/animals/wild-buffalo.jpg', 'Buffalos', '', 'Text test test test test test', 'viz1599895069661', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1.png', 'https://weeds.org.au/'),
(11, 'animals', 'invasive-species/animals/wild-pig.jpg', 'Pigs', '', 'Text test test test test test', 'viz1599895069661', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1.png', 'https://weeds.org.au/'),
(12, 'animals', 'invasive-species/animals/wild-donkey.jpg', 'Donkeys', '', 'Text test test test test test', 'viz1599895069661', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1.png', 'https://weeds.org.au/'),
(13, 'animals', 'invasive-species/animals/wild-horse.jpg', 'Horses', '', 'Text test test test test test', 'viz1599895069661', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1.png', 'https://weeds.org.au/'),
(14, 'animals', 'invasive-species/animals/wild-camel.jpg', 'Camels', '', 'Text test test test test test', 'viz1599895069661', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1.png', 'https://weeds.org.au/'),
(15, 'animals', 'invasive-species/animals/kangaroo.jpg', 'Kangaroos', '', 'Text test test test test test', 'viz1599895069661', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1.png', 'https://weeds.org.au/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `species_types`
--
ALTER TABLE `species_types`
  ADD PRIMARY KEY (`species_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `species_types`
--
ALTER TABLE `species_types`
  MODIFY `species_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
