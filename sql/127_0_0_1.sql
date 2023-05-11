-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 02:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20120284`
--
CREATE DATABASE IF NOT EXISTS `20120284` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `20120284`;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carID` int(5) NOT NULL,
  `model` varchar(100) NOT NULL,
  `colour` varchar(50) NOT NULL,
  `litre` float NOT NULL,
  `dateyear` int(4) NOT NULL,
  `doors` int(1) NOT NULL,
  `class` varchar(10) NOT NULL,
  `amg` varchar(3) NOT NULL,
  `engine` varchar(10) NOT NULL,
  `horsepower` int(4) NOT NULL,
  `price` int(10) NOT NULL,
  `imagePath` text NOT NULL,
  `blackseries` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carID`, `model`, `colour`, `litre`, `dateyear`, `doors`, `class`, `amg`, `engine`, `horsepower`, `price`, `imagePath`, `blackseries`) VALUES
(1, 'C63 AMG Black Series', 'Black', 6.3, 2013, 3, 'C', 'yes', 'V8', 502, 28000, 'images/c43black.jpg', 'yes'),
(2, 'C43 AMG', 'Black', 3, 2016, 3, 'C', 'yes', 'V6', 385, 42000, 'images/c631.jpg', 'no'),
(3, 'C200', 'Beige', 1.5, 2020, 5, 'C', 'no', '4-Cylinder', 184, 37000, 'images/c200beige.jpg', 'no'),
(4, 'A200', 'White', 2, 2018, 5, 'A', 'no', '4-Cylinder', 153, 25380, 'images/a200white.jpg', 'no'),
(5, 'A180', 'Red', 1.3, 2018, 5, 'A', 'no', '4-Cylinder', 120, 22850, 'images/a180red.jpg', 'no'),
(6, 'A35 AMG', 'Grey', 2, 2018, 5, 'A', 'yes', '4-Cylinder', 302, 35580, 'images/a35yellow.jpg', 'no'),
(7, 'A45 AMG', 'Grey', 2, 2015, 5, 'A', 'yes', '4-Cylinder', 350, 51250, 'images/a45s1.jpg', 'no'),
(8, 'A45s AMG', 'Grey', 2, 2018, 5, 'A', 'yes', '4-Cylinder', 421, 56670, 'images/a45s2.jpg', 'no'),
(9, 'GTR AMG Black Series', 'Orange', 4, 2021, 3, 'GT', 'yes', 'V8', 730, 327025, 'images/gtrblackseriesorange.jpg', 'yes'),
(31, 'C63s AMG Widebody Kit', 'Pearl White', 6.3, 2016, 5, 'C', 'yes', 'V8', 600, 45000, 'uploads/image-c63skit.jpg', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactID`, `name`, `email`, `message`) VALUES
(1, 'Anthony', 'anthony_fear', '      test  '),
(2, 'Anthony', 'anthony_fear', '      test  '),
(3, 'Anthony', 'anthony_fear', '      test  '),
(4, 'Fen1', 'ewjogn[fdobg@g;wiwrg', '        gfveliher;obtrpbot');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(7) NOT NULL,
  `addressTown` text NOT NULL,
  `addressRoad` text NOT NULL,
  `addressNumber` int(5) NOT NULL,
  `age` int(3) NOT NULL,
  `postcode` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceID` int(11) NOT NULL,
  `invoiceTotal` int(20) NOT NULL,
  `invoiceDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoiceID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
