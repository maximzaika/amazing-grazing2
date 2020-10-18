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
-- Table structure for table `species_types`
--

CREATE TABLE `species_types` (
  `species_id` int(11) NOT NULL,
  `species_type` varchar(15) NOT NULL,
  `species_img` varchar(500) NOT NULL,
  `species_name` varchar(100) NOT NULL,
  `species_sci` varchar(100) DEFAULT NULL,
  `species_description` varchar(350) NOT NULL,
  `spec_graph_id` varchar(100) NOT NULL,
  `spec_img_src` varchar(250) NOT NULL,
  `spec_o_h_url` varchar(250) NOT NULL,
  `spec_o_name_val` varchar(250) NOT NULL,
  `spec_o_static_url` varchar(250) NOT NULL,
  `graph_source_licence` varchar(250) NOT NULL,
  `graph_source_url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `species_types`
--

INSERT INTO `species_types` (`species_id`, `species_type`, `species_img`, `species_name`, `species_sci`, `species_description`, `spec_graph_id`, `spec_img_src`, `spec_o_h_url`, `spec_o_name_val`, `spec_o_static_url`, `graph_source_licence`, `graph_source_url`) VALUES
(1, 'plants', 'invasive-species/plants/acacia-nilotica.jpg;invasive-species/plants/acacia-nilotica2.jpg', 'Prickly Acacia', 'Acacia nilotica', 'It usually infests areas with native vegetation and cleared paddocks. It is a long term-threat to grasslands by converting them to shrubland. <b>Measures:</b> chemical spray or cutting at or below ground level.', 'viz1602374076365', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pr&#47;Prickly_Acacia&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'Prickly_Acacia&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pr&#47;Prickly_Acacia&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://weeds.org.au/'),
(2, 'plants', 'invasive-species/plants/cenchrus-ciliaris.jpg;invasive-species/plants/cenchrus-ciliaris1.jpg', 'Buffel Grass', 'Cenchrus ciliaris', 'Due to its nature to spread easily, it invades pastures and changes the fire regime in the invaded areas. In result causing extremely hot fires, which impact livestock and grasslands. <b>Measures:</b> cultivate and herbicide, or spot spray.', 'viz1602375018303', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Bu&#47;BuffelGrass&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'BuffelGrass&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Bu&#47;BuffelGrass&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://weeds.org.au/'),
(3, 'plants', 'invasive-species/plants/glyceria-maxima.jpg', 'Reed Sweetgrass', 'Glyceria Maxima', 'By infesting creeks and rivers, livestock have become bogged trying to access water. Causes cyanide poisoning in livestock, which leads to its reduction. Leads to floods and reduction of farm dams. <b>Measures:</b> glyphosate in late summer and autumn.', 'viz1602375726423', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Re&#47;ReedSweetgrass&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'ReedSweetgrass&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Re&#47;ReedSweetgrass&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://weeds.org.au/'),
(4, 'plants', 'invasive-species/plants/pennisetum-polystachion.jpg', 'Mission Grass', 'Pennisetum polystachion', 'Due to its nature to spread easily, it invades pastures and changes the fire regime in the invaded areas. In result causing extremely hot fires, which impact livestock and grasslands. <b>Measures:</b> cultivate and herbicide, or spot spray.', 'viz1602383676261', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Mi&#47;MissionGrass&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'MissionGrass&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Mi&#47;MissionGrass&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://weeds.org.au/'),
(5, 'plants', 'invasive-species/plants/prosopis-limensis.jpg;invasive-species/plants/prosopis-limensis2.jpg', 'Mesquite', 'Prosopis spp.', 'One of the worst weeds due to being easily spread by the animals. Causes land degradation and loss of soil moisture. Expensive to control and leads to extinction of grassland habitat. <b>Measures:</b> spray foliar herbicide, manually remove its roots, or burn.', 'viz1602384150290', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Me&#47;Mesquite&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'Mesquite&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Me&#47;Mesquite&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://weeds.org.au/'),
(6, 'plants', 'invasive-species/plants/athel-pine.jpg', 'Athel Pine', 'Tamarix aphylla', 'One of the worst weeds due to its potential to spread. It takes dominance over the ground by displacing native vegetation. It decreases pasture production by lowering water tables. <b>Measures:</b> stem injection or physical control by bulldozing.', 'viz1602384526800', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;At&#47;AthelPine&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'AthelPine&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;At&#47;AthelPine&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://weeds.org.au/'),
(7, 'animals', 'invasive-species/animals/wild-rabbits.jpg', 'Rabbits', '', 'The most widely distributed of mammals causing severe damage to the grassland. 0.5 rabbits per hectare can prevent the regeneration of endangered plant species and compete with native livestock. <b>Measures:</b> destruction of warrens and above-ground harbours.', 'viz1602459209486', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ra&#47;Rabbit_16024591823130&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'Rabbit_16024591823130&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ra&#47;Rabbit_16024591823130&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://www.environment.gov.au/about-us/publications/annual-report-2012-2013-sewpac'),
(8, 'animals', 'invasive-species/animals/wild-goat.jpg', 'Goats', '', 'Compete with native fauna and cause grassland degradation, threatening plants, other animal species, and ecological communities. <b>Measures:</b> trapping, shooting, mustering or fencing.', 'viz1602461226668', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Go&#47;Goat&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'Goat&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Go&#47;Goat&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://www.environment.gov.au/system/files/resources/0b78ac9f-c442-4fe1-9f96-8205f505a4c8/files/feral-goat.pdf'),
(9, 'animals', 'invasive-species/animals/wild-cattle.jpg', 'Cattle', '', 'Affect grassland by over-consumption and competing with domestic cattle for grazing resources. Cause trouble in mustering, handling and population control of domestic cattle. <b>Measures:</b> shooting, yard trapping, mustering, or poisoning.', 'viz1602461338182', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ca&#47;Cattle_16024599112360&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'Cattle_16024599112360&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ca&#47;Cattle_16024599112360&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://www.environment.gov.au/biodiversity/invasive-species/feral-animals-australia'),
(10, 'animals', 'invasive-species/animals/wild-buffalo.jpg', 'Buffalos', '', 'They are an environmental disaster in the grasslands. With its trails, dung, trampling and disturbance, they cause soil erosion and destruction of grassland vegetation. <b>Measures:</b> shooting from helicopters and large-scale poisoning.', 'viz1602461450336', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Bu&#47;Buffalos&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'Buffalos&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Bu&#47;Buffalos&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://www.environment.gov.au/system/files/resources/b4a187ba-7a72-4ed2-ab06-7a8b8a1b87a0/files/buffalo.pdf'),
(11, 'animals', 'invasive-species/animals/wild-pig.jpg', 'Pigs', '', 'Considered as  environmental and grassland pests. They cause damage through wallowing, rooting for food and selective feeding. Also destroy crops and pastures, as well as habitat of native plants and animals. <b>Measures:</b> trapping, shooting from the ground and strategic poisoning.', 'viz1602461525005', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pi&#47;Pigs_16024611344900&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'Pigs_16024611344900&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pi&#47;Pigs_16024611344900&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://www.environment.gov.au/system/files/resources/a897fd1d-3d5c-408d-957e-3cf03f0b103b/files/pig.pdf'),
(12, 'animals', 'invasive-species/animals/wild-donkey.jpg', 'Donkeys', '', 'Millions of them cause erosion, reduction of grasslands, spreading weeds and compete for pasture with native animals and livestock. <b>Measures:</b> aerial culling and accredited shooters using approved procedures.', 'viz1602462157626', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Do&#47;Donkeys&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'Donkeys&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Do&#47;Donkeys&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://www.environment.gov.au/system/files/resources/b32a088c-cd31-4b24-8a7c-70e1880508b5/files/feral-horse.pdf'),
(13, 'animals', 'invasive-species/animals/wild-horse.jpg', 'Horses', '', 'They damage grassland vegetation with their hard hoofs,  introduce weeds through carrying seeds in their dung, manes and tails. Also, compete for food and water with native animals. <b>Measures:</b> fertility control is a non-lethal approach to management but still limited use.', 'viz1602462668116', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ho&#47;Horses_16024626463200&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'Horses_16024626463200&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ho&#47;Horses_16024626463200&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://www.environment.gov.au/system/files/resources/b32a088c-cd31-4b24-8a7c-70e1880508b5/files/feral-horse.pdf'),
(14, 'animals', 'invasive-species/animals/wild-camel.jpg', 'Camels', '', 'Cause damage to grassland vegetation through foraging behaviour and trampling. Also compete with native animals for food and shelter and loss of sequestered carbon in grassland vegetation. <b>Measures:</b> shooting, mustering, or poisoning.', 'viz1602463175106', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ca&#47;Camels&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'Camels&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ca&#47;Camels&#47;Sheet1&#47;1.png', 'Australian Government: Department of Agriculture, Water and the Environment 2020', 'https://www.environment.gov.au/system/files/resources/2060c7a8-088f-415d-94c8-5d0d657614e8/files/feral-camel-action-plan.pdf'),
(15, 'animals', 'invasive-species/animals/kangaroo.jpg', 'Kangaroos', '', 'Population becomes out of control with large numbers, it affects grassland use for livestocks like the way of cattle farming. They will overpopulate unless culled. <b>Measures:</b> execution or commercial harvest and cluster fencing.', 'viz1602463494228', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ka&#47;Kangaroos&#47;Sheet1&#47;1_rss.png', 'https%3A%2F%2Fpublic.tableau.com%2F', 'Kangaroos&#47;Sheet1', 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ka&#47;Kangaroos&#47;Sheet1&#47;1.png', 'National Geographic 2020', 'https://www.nationalgeographic.com/magazine/2019/02/australia-kangaroo-beloved-symbol-becomes-pest/');

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
