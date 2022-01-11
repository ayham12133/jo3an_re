-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 07, 2022 at 06:46 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `categorieId` int(12) NOT NULL AUTO_INCREMENT,
  `categorieName` varchar(255) NOT NULL,
  `categorieDesc` text NOT NULL,
  `categorieCreateDate` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`categorieId`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categorieId`, `categorieName`, `categorieDesc`, `categorieCreateDate`) VALUES
(1, 'Burger-menu', '', '2021-11-24 18:17:24'),
(2, 'Salad-menu', '', '2021-11-24 18:17:24'),
(3, 'Drinks-menu', '', '2021-11-24 18:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `massages` varchar(1000) DEFAULT NULL,
  `emails` varchar(100) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`msg_id`, `Username`, `massages`, `emails`) VALUES
(42, 'ayham', 'heeeey', 'ayham@gmail.com'),
(41, 'ahmad', 'Ù…Ø±Ø­Ø¨Ø§ Ø§Ù„Ø§ÙƒÙ„ Ù†Ø¸ÙŠÙ', 'sd@sdfg'),
(40, 'saleeem', ' ', 'ghghghgh@gmail.com'),
(39, 'saleeem', 'Ø§Ù„Ø³Ù„Ø§Ù… Ø¹Ù„ÙŠÙƒÙ…', 'ayham@gmail.com'),
(38, 'saleeem', 'Ù…Ø±Ø­Ø¨Ø§', 'ayham@gmail.com'),
(37, 'saloom11', 'hi', 'saassaa@hhhii.com'),
(36, 'saloom11', ' ', 'saassaa@hhhii.com'),
(35, 'sarah', 'heey', 'tttt@yaho.com'),
(33, 'saleeem', 'Your service is great', 'ayham@gmail.com'),
(34, 'ayham', 'hi', 'tttt@yaho.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(1000) NOT NULL,
  `price` float NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `build_No` int(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

DROP TABLE IF EXISTS `producttb`;
CREATE TABLE IF NOT EXISTS `producttb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `_desc` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`, `_desc`) VALUES
(1, 'Beef Burger', 6, 'pexels-samfotograffo-3052366.jpg', 'extrem sauce, onion, beef bacon, lettuce, tomato, emmental cheese'),
(2, 'Chicken Burger', 4, 'chickenBurger.jpg', 'musterd mayo sauce, lettuce, tomato, emmental cheese'),
(3, 'Vegan Burger', 5, 'garden-veggie-burgers-vegan-gluten-free-delicious-vegetable-green-vegetarian-easy-687x1030.jpg', 'our secret sauce, lettuce, tomato, zuccine, vegan batty');

-- --------------------------------------------------------

--
-- Table structure for table `producttb2`
--

DROP TABLE IF EXISTS `producttb2`;
CREATE TABLE IF NOT EXISTS `producttb2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `_desc` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1004 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttb2`
--

INSERT INTO `producttb2` (`id`, `product_name`, `product_price`, `product_image`, `_desc`) VALUES
(1000, 'Cesar salad', 3, 'vegan-salad.jpg', 'Lettuce, Cherry tomatos, Greek cheese, Olive oil'),
(1001, 'Chiken cesar salad', 4, 'Cesar-salad.jpg', 'Lettuce, Cherry tomatos, Chicken fajita, Greek cheese, Olive oil'),
(1002, 'Rocca salad', 3, 'rocca-salad.jpeg', 'Fresh rocca leaves, Green onion, lemon juice, Olive oil, Pomgrana hone, Sumac, Salt');

-- --------------------------------------------------------

--
-- Table structure for table `producttb3`
--

DROP TABLE IF EXISTS `producttb3`;
CREATE TABLE IF NOT EXISTS `producttb3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `_desc` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2011 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttb3`
--

INSERT INTO `producttb3` (`id`, `product_name`, `product_price`, `product_image`, `_desc`) VALUES
(2007, 'Smoothie', 2, 'smoonew.jpeg', 'Cherry, Blueberry, Strawberry, mango'),
(2008, 'Frappe', 3, 'frappenew.jpeg', 'Oreo, Caramel, nutella'),
(2009, 'Espresso', 2, 'espressonew.jpeg', 'Freshly toasted coffe beans is what makes our espresso addictive</');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `emails` varchar(50) NOT NULL,
  `userType` enum('0','1') NOT NULL DEFAULT '0' COMMENT '''0=user 1=admin''',
  `Password` varchar(20) NOT NULL,
  `cPassword` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `Username`, `emails`, `userType`, `Password`, `cPassword`) VALUES
(1, 'ayham', 'ayham@gmail.com', '1', 'ayham3', 'ayham3'),
(2, 'ahmad', 'sd@sdfg', '0', 'ahmad2', 'ahmad2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories` ADD FULLTEXT KEY `categorieName` (`categorieName`,`categorieDesc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
