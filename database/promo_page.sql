-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 02:37 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `promo_page`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(11) NOT NULL,
  `hotel_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_location`) VALUES
(1, 'Puerto Princesa City, Palawan'),
(2, 'Sta. Rosa, Laguna');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `resv_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `hotel_location` int(11) NOT NULL,
  `check_in` varchar(12) NOT NULL,
  `check_out` varchar(12) NOT NULL,
  `type_room` varchar(15) NOT NULL,
  `number_people` int(11) NOT NULL,
  `number_room` int(11) NOT NULL,
  `customer_message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_id` int(11) NOT NULL,
  `room` varchar(20) NOT NULL,
  `hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_id`, `room`, `hotel`) VALUES
(1, 'Superior', 1),
(2, 'Deluxe', 1),
(3, 'Penthouse', 1),
(4, 'Standard', 2),
(5, 'Studio', 2),
(6, 'Moderate', 2),
(7, 'Superior', 2),
(8, 'Deluxe', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`resv_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `resv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
