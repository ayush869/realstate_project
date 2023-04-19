-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 05:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skyway_realty`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `bhk` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `carpet_area` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `facing` varchar(255) NOT NULL,
  `gate_security` varchar(255) NOT NULL,
  `furnishing_status` varchar(255) NOT NULL,
  `building_name` varchar(255) NOT NULL,
  `owner_description` text NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_contact_details` int(255) NOT NULL,
  `owner_mailid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `img1`, `img2`, `img3`, `location`, `price`, `rating`, `bhk`, `parking`, `property_type`, `carpet_area`, `floor`, `facing`, `gate_security`, `furnishing_status`, `building_name`, `owner_description`, `owner_name`, `owner_contact_details`, `owner_mailid`) VALUES
(1, '..\\img\\commercial\\nirlonpark\\n1.png', '..\\img\\commercial\\nirlonpark\\n2.png', '..\\img\\commercial\\nirlonpark\\n3.png', 'Goregaon East', 35, '4.1', '', 'Car parking', 'commercial', '1253 sq.ft', '3 Floor', 'East Facing', 'Yes', 'Yes, office Furnitures', 'Nirlon Knowledge park', 'Nirlon is the owner of NKP, an approx. 23 acre campus in Goregaon (East), Mumbai. NKP is an Industrial Park as per the Consolidated Foreign Direct Investment (FDI) Policy of the Government of India (GOI), and is an IT Park under the Government of Maharashtra\'s (GOM) Policy.', 'Ghanshyam Gupta', 828054851, 'ghanshyampgt55@gmail.com'),
(2, '..\\img\\commercial\\virvani\\v1.png', '..\\img\\commercial\\virvani\\v1.png', '..\\img\\commercial\\virvani\\v1.png', 'Jogeshwari east', 55, '4.5', '', 'Car Parking / Bike parking', 'commercial', '1500 sq.ft', '5 Floor', ' west facing', 'Yes ', 'Yes', 'Virvani Industrial ', 'A Industrial/Commercial Space for Rent in Goregaon East, Mumbai. The Area of the Industrial/Commercial Space is 1000 sqft. & has 1 car parking slots available. The Industrial/Commercial Space is in floor no Ground Floor. The Industrial/Commercial Space building is a 3 floor building. Price quoted for this property is Rs 70,000/-. Amenities Include - Corporation water, Broadband Connectivity, Maintenance Staff, 24*7 Power Backup, Feng Shui / Vastu, Lifts, Intercom, Fire Safety, Security, CCTV, Service Lifts Kindly contact me between Any Time', 'Rohan Gupta', 873782928, 'rohan14395@gmail.com'),
(3, '..\\img\\residential\\hiranandani\\h1.png', '..\\img\\residential\\hiranandani\\h2.png', '..\\img\\residential\\hiranandani\\h3.png', 'Powai Andheri east', 9, '4.8', '4 BHK', 'Car parking', 'residental', '1200 sq.ft', '23 Floor', 'lake side Facing ', 'Yes', 'Yes , Ikea furniturised', 'Hiranandani Garden', 'Mr. Surendra Hiranandani, Founder and Managing Director of House of Hiranandani has the unparalleled distinction of remodeling barren land into some of India\'s most vibrant life spaces. He has always envisioned a change in the real estate landscape of India and the dynamic aspirations of the people.', 'Mr. Surendra Hiranandani', 889953424, 'suresh@hirandani.com'),
(4, '..\\img\\residential\\oberoiwoods\\o1.png', '..\\img\\residential\\oberoiwoods\\o2.png', '..\\img\\residential\\oberoiwoods\\o3.png', 'Malad west', 5, '5.0', '3 BHK', 'Car parking', 'residental', '1700 sq.ft', '39 Floor', 'West facing ', 'Yes', 'Yes ', 'Oberoi woods', 'Oberoi Esquire in malad west, Mumbai Andheri-Dahisar is a ready-to-move housing society. It offers apartments in varied budget range. These units are a perfect combination of comfort and style, specifically designed to suit your requirements and conveniences. There are 3BHK and 4BHK apartments available in this project. This housing society is now ready to be called home as families have started moving in. Check out some of the features of Oberoi Esquire housing society:\r\n', 'Ayush Maurya', 882886919, 'ayushmaurya881@gmail.com'),
(5, '..\\img\\plots and lands\\lonavala\\l1.png', '..\\img\\plots and lands\\lonavala\\l2.png', '..\\img\\plots and lands\\lonavala\\l3.png', 'Lonavala Pawna Village', 33, '3.6', '', '', 'Plots ', '12 Hect ', '', 'Lake side', 'Yes', 'NA', '', 'Pawna Lake is essentially an artificial lake brought into existence due to the Pawna dam (Pavana dam).  Pawna dam is located on Pawna river in Maval taluka, around 40 km from the borders of Pimpri Chinchwad city. Its capacity is around 10 TMC. The construction of the dam began in 1963 and ended in 1972, is 1,329 m (4,360 ft) long and 42.37 m (139.0 ft) high, with a gross storage capacity of 0.24 km (0.058 cu mi). The backwaters of the Pawna Dam formed a reservoir, and the Pawna Dam backwaters subsequently came to be known as Pawna Lake.', 'Jitendra shah ', 923928378, 'jitshah887@gmail.com'),
(6, '..\\img\\plots and lands\\nashik\\n1.png', '..\\img\\plots and lands\\nashik\\n2.png', '..\\img\\plots and lands\\nashik\\n3.png', 'Nashik ', 59, '2.8', '', '', 'plots', '27000 sq.ft', '', 'East', 'NA', '', '', 'Hi,\r\nI am lemongrass !!\r\nSpecially invites you to visit one of the best na farm house projects in trambkeshwar nashik.\r\n\r\n\r\n*9 reasons* to invest in our new farm house projet @ lemongrass.\r\n\r\n\r\n1 *half an hour drive from wine capital of india \"nashik\"*\r\n\r\n\r\n\r\n3 *neighbouring anjaneri a trekking point and birth place of lord hanuman*\r\n\r\n\r\n4 *a few kilometers from the famous dugarwadi waterfalls*\r\n\r\n\r\n5 *only 2 km from trambik jawhar highway*\r\n\r\n\r\n6 *30 plus ekrs project with cafe house, pavilion seat out, meditation pavilion with 247 hr security under cctv for entire project*\r\n\r\n\r\n7 *12 mtr road approach with club house, green gym, children\'s play garden and much more*\r\n\r\n\r\n8 *exclusive plots with plantation & drip*\r\n\r\n\r\n9 *vastu shastra compliant*', 'suresh pawar', 986666332, 'suresh6671@gmail.in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
