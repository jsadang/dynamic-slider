-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 02:02 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynapic`
--

-- --------------------------------------------------------

--
-- Table structure for table `dynapic`
--

CREATE TABLE `dynapic` (
  `id` int(11) NOT NULL,
  `photo_title` varchar(200) NOT NULL,
  `photo_image` varchar(200) NOT NULL,
  `photo_alt` varchar(200) NOT NULL,
  `photo_hash` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dynapic`
--

INSERT INTO `dynapic` (`id`, `photo_title`, `photo_image`, `photo_alt`, `photo_hash`) VALUES
(8, 'guitar-3.jpg', 'guitar-3.jpg', '', ''),
(10, 'guitar-5.jpg', 'guitar-5.jpg', '', ''),
(11, 'guitar-3.jpg', 'guitar-3.jpg', '', ''),
(12, 'guitar-4.jpg', 'guitar-4.jpg', '', ''),
(13, 'guitar-3.jpg', 'guitar-3.jpg', '', ''),
(14, 'guitar-4.jpg', 'guitar-4.jpg', '', ''),
(15, 'guitar-1.jpg', 'guitar-1.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dynapic`
--
ALTER TABLE `dynapic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dynapic`
--
ALTER TABLE `dynapic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
