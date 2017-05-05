-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 04:30 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2_h_1617`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffee_tags`
--

CREATE TABLE `coffee_tags` (
  `coffee_tagID` int(11) NOT NULL,
  `coffee_tagName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coffee_tags`
--

INSERT INTO `coffee_tags` (`coffee_tagID`, `coffee_tagName`) VALUES
(1, 'BIO'),
(2, 'BREAKFAST'),
(3, 'GOURMET'),
(4, 'BREAKFAST'),
(5, 'GOURMET'),
(6, 'SWEET'),
(7, 'PANCAKE'),
(8, 'DINNER'),
(9, 'GRILLED'),
(10, 'MEAT'),
(11, 'ORGANIC'),
(12, 'BEEF'),
(13, 'DESSERT'),
(14, 'HEALTHY'),
(15, 'RECIPE'),
(16, 'SEAFOOD'),
(17, 'AROMA'),
(18, 'SOUP'),
(19, 'BLEND'),
(20, 'DABOV'),
(21, 'CAPPUCCINO'),
(22, 'DRINK'),
(23, 'ITALIAN'),
(24, 'SALAD'),
(25, 'COFFEE'),
(26, 'EQUIPMENT'),
(27, 'GRINDING'),
(28, 'ACCESSORY'),
(29, 'TEA'),
(30, 'TEAPOT'),
(31, 'HONEY'),
(32, 'VEGETARIAN'),
(33, 'CHOCOLATE'),
(34, 'GREEN'),
(35, 'HERBS'),
(36, 'INFUSION'),
(37, 'FRUIT'),
(38, 'BREAD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffee_tags`
--
ALTER TABLE `coffee_tags`
  ADD PRIMARY KEY (`coffee_tagID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
