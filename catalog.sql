-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 01:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE `catalogs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `isbn` text NOT NULL,
  `author` text NOT NULL,
  `publisher` text NOT NULL,
  `year_published` int(11) NOT NULL,
  `category` text NOT NULL,
  `archived` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogs`
--

INSERT INTO `catalogs` (`id`, `title`, `isbn`, `author`, `publisher`, `year_published`, `category`, `archived`, `created_at`, `updated_at`) VALUES
(1, 'Title', 'ISBN', 'Author', 'Publisher', 2021, 'Category', 1, '2021-10-20 09:32:00', '2021-10-20 11:10:00'),
(2, 'Titleasd', 'ISBN', 'Author', 'Publisher', 2021, 'Category', 1, '2021-10-20 09:32:00', '2021-10-20 11:08:00'),
(3, 'A', 'asd', 'b', 'asdad', 2021, 'asdasdasdasdasdkjhkjlhkhlkjh', 1, '2021-10-20 09:32:00', '2021-10-20 12:36:00'),
(4, 'asd', 'asd', 'asd', 'asd', 2021, 'asdasd', 1, '2021-10-20 09:42:00', '2021-10-20 11:08:00'),
(5, 'asdasdasdasdas', 'asdasdasd', 'asdasdasd', 'Publisherasdasdas', 2021, 'asdasdjhgjhg', 0, '2021-10-20 09:43:00', '2021-10-20 12:49:00'),
(6, 'asd', 'asds', 'Author', 'Publisher', 2021, 'asda', 1, '2021-10-20 09:47:00', '2021-10-20 11:13:00'),
(7, 'as d', 'as dasd ', 'asd asd', ' asd', 2020, 'a sda s', 0, '2021-10-20 11:16:00', '2021-10-20 11:16:00'),
(8, 'as d', 'as dasd as d', 'asd asdasd ', 'as d', 2021, 'as das d', 1, '2021-10-20 11:16:00', '2021-10-20 11:44:00'),
(9, 'as d', 'as dasd as d', 'asd asdasd ', 'as d', 2021, 'as das d', 0, '2021-10-20 11:16:00', '2021-10-20 11:16:00'),
(10, 'as d asd asd as', 'as dasd as d', 'asd asdasd ', 'as das das ', 2021, 'as das d', 1, '2021-10-20 11:16:00', '2021-10-20 12:26:00'),
(11, 'as d', 'as dasd as d', 'asd asdasd ', 'as d', 2021, 'as das d', 1, '2021-10-20 11:16:00', '2021-10-20 12:26:00'),
(12, 'as d', 'as dasd as d', 'asd asdasd ', 'as d', 2021, 'as das d', 0, '2021-10-20 11:16:00', '2021-10-20 11:16:00'),
(13, 'as d', 'as dasd as d', 'asd asdasd ', 'as d', 2021, 'as das d', 0, '2021-10-20 11:16:00', '2021-10-20 11:16:00'),
(14, 'as d', 'as dasd as d', 'asd asdasd ', 'as d', 2021, 'as das d', 0, '2021-10-20 11:16:00', '2021-10-20 11:16:00'),
(15, 'as d', 'as dasd as d', 'asd asdasd ', 'as d', 2021, 'as das d', 1, '2021-10-20 11:16:00', '2021-10-20 11:44:00'),
(16, 'as d', 'as dasd as d', 'asd asdasd ', 'as d', 2021, 'as das d', 1, '2021-10-20 11:16:00', '2021-10-20 11:39:00'),
(17, 'as das dasd asd', 'as dasd as d', 'asd asdasd ', 'as d', 2021, 'as das d', 1, '2021-10-20 11:16:00', '2021-10-20 11:39:00'),
(18, 'as', 'asdads', 'asd', 'asd', 2021, 'asdas', 0, '2021-10-20 12:09:00', '2021-10-20 12:09:00'),
(19, 'aasdasdasd', 'asdasd', 'asd', 'asdasdasasd', 2019, 'asdasd', 0, '2021-10-20 12:09:00', '2021-10-20 12:09:00'),
(20, 'asd', 'asd', 'asd asdasd ', 'asd', 2012, 'asd', 0, '2021-10-20 12:29:00', '2021-10-20 12:29:00'),
(21, 'asd', 'asdasdasd', 'sad', 'Publisher', 2021, 'asd', 1, '2021-10-20 12:36:00', '2021-10-20 12:39:00'),
(22, 'asd', 'asdasd', 'asd asdasd ', 'asd', 2021, 'asd', 1, '2021-10-20 12:36:00', '2021-10-20 12:37:00'),
(23, 'asd', 'asd', 'asd', 'asd', 2021, 'asd', 1, '2021-10-20 12:37:00', '2021-10-20 12:38:00'),
(24, 'asd', 'asd', 'sad', 'Publisher', 2021, 'asd', 1, '2021-10-20 12:39:00', '2021-10-20 12:46:00'),
(25, 'asd', 'asd', 'sad', 'Publisher', 2021, 'asdasd', 1, '2021-10-20 12:39:00', '2021-10-20 12:40:00'),
(26, 'asd', 'asd', 'asd asdasd ', 'asd', 2021, 'asda', 1, '2021-10-20 12:40:00', '2021-10-20 12:42:00'),
(27, 'asd', 'asdasd', 'asd', 'Publisadasd', 2021, 'asd', 1, '2021-10-20 12:43:00', '2021-10-20 12:46:00'),
(28, 'asd', 'asdasd', 'sd', 'asdad', 2021, 'asd', 0, '2021-10-20 12:48:00', '2021-10-20 12:49:00'),
(29, 'asd', 'asd', 'asd', 'asd', 2021, 'asd', 0, '2021-10-20 12:48:00', '2021-10-20 12:48:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
