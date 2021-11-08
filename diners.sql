-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2021 at 11:26 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diners`
--

-- --------------------------------------------------------

--
-- Table structure for table `corners`
--

CREATE TABLE `corners` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corners`
--

INSERT INTO `corners` (`id`, `name`) VALUES
(1, 'Foods'),
(2, 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `available` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `name`, `description`, `available`) VALUES
(1, 1, 'Sweet & Sour Fish ', NULL, 1),
(2, 1, 'Shrimp Salted Egg', NULL, 1),
(3, 1, 'Buttered Shrimp', NULL, 1),
(4, 1, 'Negra Mares w/ Tartar Sauce', NULL, 1),
(5, 2, 'Beef Brisket', NULL, 1),
(6, 2, 'Beef Caldereta', NULL, 1),
(7, 2, 'Buttered Garlic Chix', NULL, 1),
(8, 2, 'Chow Chicken', NULL, 1),
(9, 2, 'Chicken Oyster Mushroom', NULL, 1),
(10, 2, 'Honey Buttered Garlic Chicken', NULL, 1),
(11, 3, 'Sinigang na Hipon', NULL, 1),
(12, 3, 'Pork Sinigang', NULL, 1),
(13, 3, 'Beef Bulalo', NULL, 1),
(14, 3, 'Beef Nilaga', NULL, 1),
(15, 3, 'Pork Nilaga', NULL, 1),
(16, 3, 'Sinigang na Salmon Belly', NULL, 1),
(17, 3, 'Sinigang na Bangus Belly', NULL, 1),
(18, 4, 'Chopsuey', NULL, 1),
(19, 4, 'Pinakbet', NULL, 1),
(20, 4, 'Diningding', NULL, 1),
(21, 5, 'Spaghetti Bolognese', NULL, 1),
(22, 5, 'Alfredo Pasta', NULL, 1),
(23, 5, 'Pesto Pasta', NULL, 1),
(24, 5, 'Creamy Tomato Bacon', NULL, 1),
(25, 5, 'Seafood Pasta', NULL, 1),
(26, 5, 'Tuyo Flakes Pasta', NULL, 1),
(27, 6, 'Monte Cristo w/ Fries', NULL, 1),
(28, 6, 'Clubhouse w/ Fries', NULL, 1),
(29, 6, 'Bacon & Cheese Sandwich', NULL, 1),
(30, 6, 'Breakfast Sandwich', NULL, 1),
(31, 6, 'Grilled Chix Sandwich', NULL, 1),
(32, 7, 'Pica pica 1', 'Onion Rings, Cheese Bar, and Mojos', 1),
(33, 7, 'Pica pica 2', 'Fries, Nachos, and Onion Rings', 1),
(34, 7, 'Ham & Cheese Roll', NULL, 1),
(35, 7, 'Nachos w/ Beef Strips', NULL, 1),
(36, 7, 'Cheesy Fries overload', NULL, 1),
(37, 7, 'Hungarian & Fries', NULL, 1),
(38, 8, 'Pork Tonkatsu', NULL, 1),
(39, 8, 'Chicken Tonkatsu', NULL, 1),
(40, 8, 'Pork Teriyaki', NULL, 1),
(41, 8, 'Chicken Terriyaki', NULL, 1),
(42, 8, 'Beef Teriyaki', NULL, 1),
(43, 8, 'Chicken Karaage', NULL, 1),
(44, 8, 'Beef Yakiniku', NULL, 1),
(45, 8, 'Pork Katsudon', NULL, 1),
(46, 8, 'Chicken Katsudon', NULL, 1),
(47, 8, 'Beef Brisket', NULL, 1),
(48, 8, 'Beef Gyudon', NULL, 1),
(49, 8, 'Fish Filler Sweet & Sour', NULL, 1),
(50, 10, 'Plain Rice', NULL, 1),
(51, 10, 'Adobo Rice', NULL, 1),
(52, 10, 'Fried Rice', NULL, 1),
(53, 10, 'Yong Chow Rice', NULL, 1),
(54, 11, 'Taro', NULL, 1),
(55, 11, 'Hokkaido', NULL, 1),
(56, 11, 'Caramel Sugar', NULL, 1),
(57, 11, 'Cookies & Cream', NULL, 1),
(58, 11, 'Wintermelon', NULL, 1),
(59, 11, 'Chocolate', NULL, 1),
(60, 11, 'Redvelvet', NULL, 1),
(61, 11, 'Dark Choco', NULL, 1),
(62, 11, 'Cheesecake', NULL, 1),
(63, 12, 'Creamy Cheesecake', NULL, 1),
(64, 12, 'Redvelvet Cheesecake', NULL, 1),
(65, 12, 'Taro Cheesecake', NULL, 1),
(66, 12, 'Matcha Cheesecake', NULL, 1),
(67, 12, 'Cookies & Cream Cheesecake', NULL, 1),
(68, 12, 'Okinawa Cheesecake', NULL, 1),
(69, 12, 'Hokkaido Cheesecake', NULL, 1),
(70, 12, 'Caramer Sugar Cheesecake', NULL, 1),
(71, 12, 'Wintermelon Cheesecake', NULL, 1),
(72, 12, 'Creamy Mango', NULL, 1),
(73, 13, 'Dark Choco', NULL, 1),
(74, 13, 'Cookies & Cream', NULL, 1),
(75, 13, 'Taro', NULL, 1),
(76, 13, 'Matcha', NULL, 1),
(77, 13, 'Chocolate', NULL, 1),
(78, 13, 'Redvelvet', NULL, 1),
(79, 13, 'Wintermelon', NULL, 1),
(80, 13, 'Okinawa', NULL, 1),
(81, 13, 'Hokkaido', NULL, 1),
(82, 14, 'Oreo Choco Matcha', NULL, 1),
(83, 14, 'Graham Oreo Velvet', NULL, 1),
(84, 14, 'Mango Cheesecake Graham', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `corners_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `corners_id`) VALUES
(1, 'Seafoods', 1),
(2, 'Meat', 1),
(3, 'Soup', 1),
(4, 'Vegetables', 1),
(5, 'Pasta', 1),
(6, 'Sandwiches', 1),
(7, 'Appetizers', 1),
(8, 'Rice Bowls', 1),
(9, 'Barrio Platters', 1),
(10, 'Rice', 1),
(11, 'Classic', 2),
(12, 'Cheesecake', 2),
(13, 'Frappetea', 2),
(14, 'Signature Flavor', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `variant_name` varchar(500) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `available` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `variant_name`, `price`, `photo`, `available`) VALUES
(1, 1, 'Sweet & Sour Fish', 149, NULL, 1),
(2, 2, 'Shrimp Salted Egg', 149, NULL, 1),
(3, 3, 'Buttered Shrimp', 149, NULL, 1),
(4, 4, 'Negra Mares w/ Tartar Sauce', 149, NULL, 1),
(5, 5, 'Beef Brisket', 249, NULL, 1),
(6, 6, 'Beef Caldereta', 249, NULL, 1),
(7, 7, 'Buttered Garlic Chix', 249, NULL, 1),
(8, 8, 'Chow Chicken', 249, NULL, 1),
(9, 9, 'Chicken Oyster Mushroom', 249, NULL, 1),
(10, 10, 'Honey Buttered Garlic Chicken', 249, NULL, 1),
(11, 11, 'Sinigang na Hipon', 299, NULL, 1),
(12, 12, 'Pork Sinigang', 299, NULL, 1),
(13, 13, 'Beef Bulalo', 299, NULL, 1),
(14, 14, 'Beef Nilaga', 299, NULL, 1),
(15, 15, 'Pork Nilaga', 299, NULL, 1),
(16, 16, 'Sinigang na Salmon Belly', 299, NULL, 1),
(17, 17, 'Sinigang na Bangus Belly', 299, NULL, 1),
(18, 18, 'Chopsuey', 199, NULL, 1),
(19, 19, 'Pinakbet', 199, NULL, 1),
(20, 20, 'Diningding', 199, NULL, 1),
(21, 21, 'Spaghetti Bolognese', 179, NULL, 1),
(22, 22, 'Alfredo Pasta', 179, NULL, 1),
(23, 23, 'Pesto Pasta', 179, NULL, 1),
(24, 24, 'Creamy Tomato Bacon', 179, NULL, 1),
(25, 25, 'Seafood Pasta', 179, NULL, 1),
(26, 26, 'Tuyo Flakes Pasta', 179, NULL, 1),
(27, 27, 'Monte Cristo w/ Fries', 89, NULL, 1),
(28, 28, 'Clubhouse w/ Fries', 99, NULL, 1),
(29, 29, 'Bacon & Cheese Sandwich', 99, NULL, 1),
(30, 30, 'Breakfast Sandwich', 99, NULL, 1),
(31, 31, 'Grilled Chix Sandwich', 129, NULL, 1),
(32, 32, 'Pica pica 1', 149, NULL, 1),
(33, 33, 'Pica pica 2', 149, NULL, 1),
(34, 34, 'Ham & Cheese Roll', 79, NULL, 1),
(35, 35, 'Nachos w/ Beef Strips', 99, NULL, 1),
(36, 36, 'Cheesy Fries overload', 99, NULL, 1),
(37, 37, 'Hungarian & Fries', 129, NULL, 1),
(38, 38, 'Pork Tonkatsu', 149, NULL, 1),
(39, 39, 'Chicken Tonkatsu', 149, NULL, 1),
(40, 40, 'Pork Teriyaki', 149, NULL, 1),
(41, 41, 'Chicken Terriyaki', 149, NULL, 1),
(42, 42, 'Beef Teriyaki', 149, NULL, 1),
(43, 43, 'Chicken Karaage', 149, NULL, 1),
(44, 44, 'Beef Yakiniku', 149, NULL, 1),
(45, 45, 'Pork Katsudon', 149, NULL, 1),
(46, 46, 'Chicken Katsudon', 149, NULL, 1),
(47, 47, 'Beef Brisket', 149, NULL, 1),
(48, 48, 'Beef Gyudon', 149, NULL, 1),
(49, 49, 'Fish Filler Sweet & Sour', 149, NULL, 1),
(50, 50, 'Solo', 25, NULL, 1),
(51, 50, 'Platter', 99, NULL, 1),
(52, 51, 'Solo', 25, NULL, 1),
(53, 51, 'Platter', 99, NULL, 1),
(54, 52, 'Solo', 25, NULL, 1),
(55, 52, 'Platter', 99, NULL, 1),
(56, 53, 'Solo', 25, NULL, 1),
(57, 53, 'Platter', 99, NULL, 1),
(58, 54, '16oz', 65, NULL, 1),
(59, 54, '22oz', 75, NULL, 1),
(60, 55, '16oz', 65, NULL, 1),
(61, 55, '22oz', 75, NULL, 1),
(62, 56, '16oz', 65, NULL, 1),
(63, 56, '22oz', 75, NULL, 1),
(64, 57, '16oz', 65, NULL, 1),
(65, 57, '22oz', 75, NULL, 1),
(66, 58, '16oz', 65, NULL, 1),
(67, 58, '22oz', 75, NULL, 1),
(68, 59, '16oz', 65, NULL, 1),
(69, 59, '22oz', 75, NULL, 1),
(70, 60, '16oz', 65, NULL, 1),
(71, 60, '22oz', 75, NULL, 1),
(72, 61, '16oz', 65, NULL, 1),
(73, 61, '22oz', 75, NULL, 1),
(74, 62, '16oz', 65, NULL, 1),
(75, 62, '22oz', 75, NULL, 1),
(76, 63, '16oz', 80, NULL, 1),
(77, 63, '22oz', 90, NULL, 1),
(78, 64, '16oz', 80, NULL, 1),
(79, 64, '22oz', 90, NULL, 1),
(80, 65, '16oz', 80, NULL, 1),
(81, 65, '22oz', 90, NULL, 1),
(82, 66, '16oz', 80, NULL, 1),
(83, 66, '22oz', 90, NULL, 1),
(84, 67, '16oz', 80, NULL, 1),
(85, 67, '22oz', 90, NULL, 1),
(86, 68, '16oz', 80, NULL, 1),
(87, 68, '22oz', 90, NULL, 1),
(88, 69, '16oz', 80, NULL, 1),
(89, 69, '22oz', 90, NULL, 1),
(90, 70, '16oz', 80, NULL, 1),
(91, 70, '22oz', 90, NULL, 1),
(92, 71, '16oz', 80, NULL, 1),
(93, 71, '22oz', 90, NULL, 1),
(94, 72, '16oz', 80, NULL, 1),
(95, 72, '22oz', 90, NULL, 1),
(96, 73, '16oz', 85, NULL, 1),
(97, 73, '22oz', 95, NULL, 1),
(98, 74, '16oz', 85, NULL, 1),
(99, 74, '22oz', 95, NULL, 1),
(100, 75, '16oz', 85, NULL, 1),
(101, 75, '22oz', 95, NULL, 1),
(102, 76, '16oz', 85, NULL, 1),
(103, 76, '22oz', 95, NULL, 1),
(104, 77, '16oz', 85, NULL, 1),
(105, 77, '22oz', 95, NULL, 1),
(106, 78, '16oz', 85, NULL, 1),
(107, 78, '22oz', 95, NULL, 1),
(108, 79, '16oz', 85, NULL, 1),
(109, 79, '22oz', 95, NULL, 1),
(110, 80, '16oz', 85, NULL, 1),
(111, 80, '22oz', 95, NULL, 1),
(112, 81, '16oz', 85, NULL, 1),
(113, 81, '22oz', 95, NULL, 1),
(114, 82, '16oz', 95, NULL, 1),
(115, 82, '22oz', 110, NULL, 1),
(116, 83, '16oz', 100, NULL, 1),
(117, 83, '22oz', 115, NULL, 1),
(118, 84, '16oz', 95, NULL, 1),
(119, 84, '22oz', 110, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corners`
--
ALTER TABLE `corners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corners`
--
ALTER TABLE `corners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
