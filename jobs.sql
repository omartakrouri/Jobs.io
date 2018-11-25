-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2018 at 07:32 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `count` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `title`, `description`, `image`, `date`, `category`, `salary`, `company_name`, `address`, `street`, `city`, `telephone`, `email`, `count`) VALUES
(3, 3, 'IT position', '.net Programmer ', 'images/Prog-languages.png', '2018-10-31 14:17:17', 'Full Time', 2000, 'Asal', 'em sharaiet', 'street 2', 'Ramallah', '022228599', 'info@asal.com', 5),
(10, 1, 'Engineering position ', 'engineering teacher ', 'images/download.jpg', '2018-11-05 02:39:19', 'Full Time', 5000, 'PPU', 'wad alhariya', 'PPU', 'hebro', '02-2225896', 'PPU@ppu.edu', 0),
(11, 1, 'Programmer ', 'lab supervisor ', 'images/83603-636216266356158373-16x9.jpg', '2018-11-05 02:42:43', 'Part Time', 1500, 'PPU', 'wad alhariya', 'PPU', 'Hebron', '02-2222222', 'PPU@ppu.edu', 0),
(12, 1, 'Cashier ', 'selling cafeteria products to buyers ', 'images/cccccc.png', '2018-11-05 02:49:46', 'Full Time', 1000, 'PPU cafeteria ', 'wad alhariya', 'PPU', 'hebron', '02-2222222', 'PPU@ppu.edu', 0),
(13, 1, 'driver', 'jjjj', 'images/download.jpg', '2018-11-06 10:08:11', 'Full Time', 1000, 'taxi', 'Esa', 'l', 'Hebron', '0599999999', 'omar.cats.t@gmail.com', 0),
(14, 1, 'Programmer ', 'lab supervisor ', 'images/83603-636216266356158373-16x9.jpg', '2018-11-05 02:42:43', 'Part Time', 1500, 'PPU', 'wad alhariya', 'PPU', 'Hebron', '02-2222222', 'PPU@ppu.edu', 14);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
